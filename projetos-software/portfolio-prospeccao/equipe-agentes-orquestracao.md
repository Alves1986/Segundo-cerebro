# Equipe de Agentes — Orquestração da Construção do Sistema

> Este documento define como o sistema (portfólio + chatbot + backend) será construído por uma equipe de agentes especializados, orquestrada por Claude (Anthropic), com Anderson observando e aprovando cada etapa. Trabalha junto com `cerebro-chatbot-prospeccao.md` (conteúdo/regras) e `fluxo-completo-sistema.md` (arquitetura/fases).

---

## 1. Modelo de orquestração

**Ferramenta-base recomendada: Claude Code Agent Teams (nativo)**

É o recurso nativo do Claude Code onde um agente líder distribui tarefas para subagentes especializados, cada um com seu próprio contexto, trabalhando em paralelo quando possível e sequencialmente quando há dependência entre etapas.

**Papel do Claude (orquestrador/líder):**
- Recebe o objetivo de cada fase (definida em `fluxo-completo-sistema.md`)
- Decompõe em tarefas e aciona o agente especializado correto
- Revisa o relatório de entrega de cada agente antes de liberar a próxima etapa
- Reporta a você (Anderson) um resumo consolidado por fase — não delega decisão final, só execução

**Papel de Anderson:**
- Aprova o início de cada fase
- Revisa o resumo consolidado ao final de cada fase (não precisa revisar cada linha de código)
- Decide se avança, ajusta escopo, ou pausa

**Ferramentas complementares (upgrade opcional, não obrigatório pra começar):**
- `zircote/claude-team-orchestration` — plugin com padrões de coordenação mais avançados (paralelo, pipeline, swarm), útil se o projeto crescer além do que Agent Teams nativo dá conta
- `barkain/claude-code-workflow-orchestration` — automatiza a decomposição de tarefas e delegação, reduz esforço manual de definir cada subtarefa
- `wshobson/agents` — biblioteca de papéis de agente pré-definidos (ex: agente de segurança, agente de revisão de API), caso algum papel abaixo precise de mais profundidade

---

## 2. Papéis da equipe (mapeados às fases do fluxo)

Cada agente abaixo corresponde a uma fase de `fluxo-completo-sistema.md`. Um agente só é acionado quando a fase anterior está validada e aprovada.

---

### Agente 0 — Descoberta (Scanner de Instagram)

**Responsabilidade:** quando um lead chega pelo chatbot com Instagram informado (ou quando Anderson inicia um projeto de cliente manualmente), executar a auditoria de perfil usando `prompt-extracao-instagram-manus.md` no Manus.ai.

**Entregável:** relatório estruturado em Markdown (paleta, tom de voz, oferta, público, prova social) no formato exato definido no prompt — sem inferência disfarçada de fato, campos não observáveis marcados como `NÃO DISPONÍVEL`.

**Checklist de validação:**
- [ ] Todos os campos do checklist (Seção 2 do prompt) foram preenchidos ou marcados `NÃO DISPONÍVEL`
- [ ] Nenhum campo contém "provavelmente"/"deve ser" (violação da regra anti-invenção do próprio prompt)
- [ ] Saída está no formato Markdown exato da Seção 3, pronta para ser anexada ao master prompt de construção

**Formato de relatório:**
"Auditoria de @[handle] concluída. [N] de [total] campos preenchidos com dado real, [N] marcados como não disponível. Relatório pronto para anexar à Fase 1 do master prompt correspondente."

> Este agente é o elo entre o chatbot de prospecção (`cerebro-chatbot-prospeccao.md`) e a construção real do projeto do cliente (seção 3 abaixo).

---

### Agente 1 — Fundação (Infra)

**Responsabilidade:** setup do projeto Next.js, conexão com Supabase, deploy inicial na Vercel, criação das tabelas `leads` e `nichos_config`.

**Entregável:** repositório funcional, deploy vazio no ar, tabelas criadas e populadas com o conteúdo de `cerebro-chatbot-prospeccao.md`.

**Checklist de validação (o agente deve confirmar cada item antes de reportar concluído):**
- [ ] Projeto builda sem erro (`npm run build` limpo)
- [ ] Deploy Vercel acessível publicamente
- [ ] Conexão Supabase testada (leitura e escrita funcionando)
- [ ] Tabelas `leads` e `nichos_config` criadas conforme schema documentado
- [ ] `nichos_config` populada com todos os nichos do cerebro.md (15 nichos)

**Formato de relatório ao Claude/Anderson:**
"Fase 1 concluída. Build limpo, deploy em [URL], tabelas criadas e testadas com [X] registros de nicho inseridos. Nenhum erro encontrado em [testes realizados]."

---

### Agente 2 — Frontend público (Site)

**Responsabilidade:** construir Home, Portfólio, página de detalhe de projeto e Sobre, seguindo a estrutura de 3 trilhas.

**Entregável:** páginas navegáveis, responsivas, com dados reais dos projetos (316 Movie, MG Music, Cerimonial Studio, Casa de Restauração, Teleprompter Pro Studio, Talevi Music + os 4 de negócio local).

**Checklist de validação:**
- [ ] Todas as rotas da seção 2 de `fluxo-completo-sistema.md` implementadas
- [ ] Responsivo testado em mobile e desktop
- [ ] Selo "Entregue" vs "Sistema conceito" aplicado corretamente por projeto
- [ ] Sem link quebrado (todos os links de sistema testados manualmente)
- [ ] Performance básica aceitável (sem imagem não otimizada, sem bloqueio de renderização)

**Formato de relatório:**
"Fase 2 concluída. [N] páginas implementadas, testadas em mobile/desktop, todos os links de portfólio validados manualmente. Nenhum erro de build ou link quebrado encontrado."

---

### Agente 3 — Chatbot (motor conversacional)

**Responsabilidade:** implementar a API route `/api/chat`, injetar `cerebro-chatbot-prospeccao.md` como contexto/system prompt, implementar a máquina de estados (1 a 6), widget flutuante + página `/comece-aqui`.

**Entregável:** chatbot funcional seguindo as regras anti-invenção do cerebro.md.

**Checklist de validação (crítico — é a peça mais sensível do sistema):**
- [ ] Bot nunca menciona sistema fora dos documentados (testar com pergunta armadilha, ex: perguntar sobre um nicho sem sistema pronto)
- [ ] Bot nunca fecha preço exato (testar perguntando "quanto custa exatamente?")
- [ ] Bot segue a máquina de estados sem pular etapa
- [ ] Bot identifica nicho corretamente em pelo menos 10 mensagens de teste diferentes (uma por nicho principal)
- [ ] Fallback funciona quando o bot não sabe responder algo ("vou confirmar com o Anderson")

**Formato de relatório:**
"Fase 3 concluída. Testei o bot com [N] cenários de conversa cobrindo os [N] nichos, incluindo 3 tentativas de 'quebrar' as regras (perguntar preço fechado, sistema inexistente, assunto fora de escopo). Todos os testes passaram conforme as regras do cerebro.md. Nenhuma invenção de informação detectada."

---

### Agente 4 — Persistência e notificação

**Responsabilidade:** salvar o lead no Supabase ao final da conversa, disparar notificação via webhook para o Telegram (@anders_1986_bot).

**Entregável:** fluxo completo de ponta a ponta funcionando — da última mensagem do chat até a notificação chegar no Telegram.

**Checklist de validação:**
- [ ] Lead salvo corretamente no formato do schema (seção 6 do cerebro.md)
- [ ] Notificação chega no Telegram em teste real (não simulado)
- [ ] Dados sensíveis (WhatsApp do lead) tratados corretamente, sem exposição pública
- [ ] Teste de falha: se o Telegram estiver fora do ar, o lead ainda é salvo (não se perde)

**Formato de relatório:**
"Fase 4 concluída. Testei [N] conversas completas de ponta a ponta — todas salvaram corretamente no Supabase e a notificação chegou no Telegram em menos de [X segundos]. Testei também cenário de falha do webhook: lead continua salvo mesmo assim."

---

### Agente 5 — Painel admin

**Responsabilidade:** construir `/admin` com autenticação, listagem de leads, filtro por nicho/status, visualização de detalhe.

**Entregável:** painel funcional, acessível só por Anderson.

**Checklist de validação:**
- [ ] Autenticação bloqueia acesso não autorizado (testar tentativa sem login)
- [ ] Listagem exibe todos os leads salvos corretamente
- [ ] Filtro por nicho e status funcional
- [ ] Atualização de status funciona e persiste no banco

**Formato de relatório:**
"Fase 5 concluída. Painel testado com [N] leads de exemplo, autenticação validada (acesso negado sem login testado manualmente), filtros e atualização de status funcionando sem erro."

---

## 3. Motor de construção de projetos de cliente (master prompts)

Quando um lead do chatbot é qualificado (Estado 6 de `fluxo-completo-sistema.md`) e Anderson decide seguir com o projeto, a construção real não parte do zero — ela usa um dos master prompts já estruturados como "receita" completa de execução.

### 3.1 Roteador — qual master prompt usar

| `nicho_detectado` (do cerebro.md) | Master prompt a usar |
|---|---|
| `negocio_local`, `musica_estudio`, `cerimonial_eventos`, `audiovisual`, `igreja_ministerio` | `master-prompt-sites-alto-padrao.md` (site institucional/sistema completo) |
| Qualquer nicho vendendo curso/mentoria/infoproduto (fora da taxonomia atual, caso apareça) | `master-prompt-landing-page-infoproduto.md` |
| `beleza_estetica`, `loja_carros`, `taxista_transporte`, `oficina_mecanica`, `petshop_veterinaria`, `academia_personal`, `consultorio_saude`, `restaurante_delivery`, `loja_roupas` | `master-prompt-sistema-gestao-interna.md` *(novo — seção 3.3)* |
| `criador_conteudo` | Não aplicável (Teleprompter Pro Studio é produto próprio, não projeto sob encomenda) |

**Por que essa separação existe:** os dois master prompts originais são otimizados para **apresentação e conversão** (site que vende, página que converte tráfego pago). Os nichos de pequenos negócios com dor de "pago assinatura cara por função que não uso" (seção 3.7 do cerebro.md) precisam de um terceiro perfil de prompt, focado em **operação interna** (agenda, estoque, prontuário, escala) — não em captar lead novo. Por isso criei o terceiro master prompt (seção 3.3 abaixo).

### 3.2 Encadeamento Agente 0 → Master Prompt

```
Lead qualificado (Estado 6 do chatbot)
        │
        ▼
Agente 0 executa auditoria de Instagram (se @handle disponível)
        │
        ▼
Roteador decide o master prompt (tabela 3.1)
        │
        ▼
Master prompt executa Fases 1–8 (já documentadas em cada arquivo),
usando o relatório do Agente 0 como insumo direto da própria Fase 1
        │
        ▼
Anderson revisa o relatório de entrega final (Seção 4/5 de cada
master prompt) antes de considerar o projeto pronto para o cliente
```

### 3.3 Repositórios de referência consolidados (organização `Alves1986`)

Tabela única reunindo os repositórios citados nos três master prompts, evitando duplicidade:

| Repositório | Usado em | Função (conforme documentado nos prompts) |
|---|---|---|
| `awesome-design-md` | Sites + Landing Page + Gestão Interna | Biblioteca de `DESIGN.md` de referência para arquétipos visuais |
| `ui-ux-pro-max-skill` | Sites + Landing Page + Gestão Interna | Camada de inteligência de UX (hierarquia, acessibilidade, conversão) |
| `impeccable` | Landing Page (infoproduto) apenas | Gerador de design system anti-genérico, modo "brand" |
| `wacrm` | Sites + Landing Page + Gestão Interna | Referência de modelagem de mini-CRM de leads / cadastro de cliente |
| `evolution-api` | Sites + Landing Page + Gestão Interna | Automação de WhatsApp (pré-qualificação / remarketing / lembrete) |
| `ruflo` | Sites + Landing Page + Gestão Interna | Orquestração de agentes em paralelo (swarm) |
| `superpowers` | Sites + Landing Page + Gestão Interna | Metodologia spec → plano → TDD → revisão |
| `get-shit-done` | Sites + Landing Page + Gestão Interna | Engenharia de contexto (specs pequenas, evita context rot) |
| `claude-mem` | Sites + Landing Page + Gestão Interna | Memória persistente de decisões entre sessões |
| `playwright` | Sites + Landing Page + Gestão Interna | QA/testes E2E e regressão visual |

> Observação: todos esses repositórios já estão documentados com comando de clone em `.reference/` dentro de cada master prompt — não precisam ser redocumentados aqui, só referenciados.

---

## 4. Protocolo de reporte (regra geral para todos os agentes)

Nenhum agente reporta "concluído" sem:
1. Ter executado a checklist de validação da sua fase
2. Ter testado o cenário de falha/erro (não só o caminho feliz)
3. Descrever exatamente o que foi testado (não só "está funcionando")

Se um agente encontrar um problema que não consegue resolver dentro do escopo, ele reporta o bloqueio explicitamente — nunca marca como concluído com pendência oculta.

**Claude (orquestrador) só avança pra próxima fase depois de:**
- Ler o relatório de validação do agente atual
- Confirmar que a checklist foi cumprida
- Reportar o resumo consolidado a você em linguagem simples, sem jargão técnico desnecessário

---

## 5. Ordem de execução (resumo)

```
Agente 0 (Descoberta — só quando houver lead/Instagram real, não na
          construção do próprio sistema de portfólio)
    ↓
Agente 1 (Fundação) 
    → aprovação Anderson 
    → Agente 2 (Frontend) + Agente 3 (Chatbot) [podem rodar em paralelo]
    → aprovação Anderson
    → Agente 4 (Persistência/notificação)
    → aprovação Anderson
    → Agente 5 (Admin)
    → aprovação Anderson
    → sistema de portfólio/chatbot pronto
    → a partir daqui, cada NOVO lead qualificado entra no motor de
      construção de cliente (seção 3), usando Agente 0 + master
      prompt correspondente
```

---

## 6. Execução prática no Antigravity (sem perder controle nem token)

**Ferramenta de ponte recomendada:** `VKirill/antigravity-for-claude-code` — MCP server que transforma o Antigravity (Gemini) em "worker" do Claude Code. Claude Code assume o papel de gerente de projeto (planeja, despacha, verifica, nunca escreve código de produção diretamente); o Antigravity executa a edição pesada de código e devolve um envelope de resultado estruturado para o Claude revisar. É a implementação mais próxima do modelo de agentes já definido neste documento.

**Configuração de economia de token:**
- Criar `.antigravityignore` na raiz de cada projeto, excluindo `node_modules/`, `build/`, `dist/`, `.reference/` (os repositórios clonados como referência não precisam ser indexados linha a linha)
- Usar **Modo Rápido** como padrão sempre que a tarefa já tiver spec definida (é o caso da maioria das fases aqui, já que os master prompts documentam o pipeline completo) — reservar **Modo Planejamento** só para decisão arquitetural nova
- Manter o arquivo de regras (`gemini.md`) enxuto — ele é injetado em todo prompt

**Skills complementares (opcional, se o volume de projetos crescer):**
- `its-meseba/antigravity-configuration-and-claude-skills-integration` — compartilha a mesma estrutura de skills entre Claude Code e Antigravity, com carregamento em 3 níveis para não inflar contexto
- `KINGSTAR-OMEGA/claude-token-optimizer` — skill "antigravity-protocol" para planejamento estruturado e edições em blocos
- `sickn33/antigravity-awesome-skills` — biblioteca de skills incluindo uma específica de context pruning/token budgeting para sessões longas

**Como não perder controle:** usar a **Manager View** do Antigravity para revisar diff, plano e artefato de cada agente antes de aceitar — nunca merge automático. Isso é a versão prática do "Protocolo de reporte" (seção 4): o agente entrega, você (ou o Claude como orquestrador) confere a checklist, só então libera a próxima fase.

---

*Este documento é o "cérebro operacional" da equipe — define papéis, critérios de validação e protocolo de reporte. Não substitui `cerebro-chatbot-prospeccao.md` (conteúdo/regras do bot) nem `fluxo-completo-sistema.md` (arquitetura). Os três documentos-base juntos (mais os três master prompts de construção) formam a base completa antes do início da construção.*
