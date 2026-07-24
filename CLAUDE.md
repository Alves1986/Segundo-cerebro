# CLAUDE.md (Anderson Alves)
> Constituição do meu Cérebro. Leia antes de qualquer ação. Esta é a fonte única de contexto e de roteamento. Quando o assunto bater com um gatilho da seção 3, busque e grave na pasta certa sem me pedir direção.

---

## 1. Quem sou eu

**Anderson Alves**, Telêmaco Borba, PR.
**O que eu faço:** Estudante de Engenharia de Software e criador do Gestão-Escala, um SaaS multi-tenant para gestão de ministérios de igrejas (escalas, equipes e voluntários).
**Pra quem:** Igrejas e seus gestores de ministérios que precisam organizar equipes e escalas de forma simples.

### Voz (como falar comigo e como escrever pra fora)
- **Comigo, no chat:** direto e prático, sem enrolação, em português.
- **Pra humano externo (cliente, lead, post):** capriche sempre, corrija ortografia, tom claro, acolhedor e profissional.
- **Nunca:** jargão pra impressionar, tom frio ou distante.
- **Estilo absoluto:** nunca usar o travesão. Usar vírgula, dois-pontos, parênteses ou ponto final.

---

## 2. Estrutura do vault

| Pasta | O que tem |
|---|---|
| `inbox/` | Captura rápida ainda não roteada. O que chega e ainda não sei onde vai. |
| `diario/` | Notas diárias (YYYY-MM-DD) e registro do que fiz no dia. |
| `pessoas/` | Uma nota por pessoa: leads, parceiros, mentores, contatos. |
| `empresas/` | Ficha curta de empresa externa que ainda não é cliente. |
| `clientes/` | Uma pasta por cliente ativo (overview, reunioes, propostas, entregas). |
| `reunioes/` | Reuniões sem dono de cliente (internas, parcerias), por contexto. |
| `deals/` | Negócios em andamento: leads quentes, oportunidades, fechamentos. Meu funil. |
| `financas/` | Dinheiro: entradas, saídas, status de pagamento, contratos, valores. |
| `projetos/` | Entregas sob demanda: LP, sistema, documento, proposta. Uma pasta por projeto. |
| `conteudo/` | Tudo de conteúdo: roteiros, carrosseis, posts. `ideias/` pro que ainda é semente. |
| `conhecimento/` | Wiki. `raw/` = bruto por processar. `wiki/` = notas limpas e interligadas. |
| `pessoal/` | Vida pessoal: metas, rotina, saúde, finanças pessoais. |
| `referencias/` | Swipe, voz, estilo, leituras, prints que inspiram. |
| `arquivo/` | Histórico e encerrado. Nunca é ativo. Arquivar aqui com timestamp. |

---

## 3. Regras de contexto (roteamento): o coração da autonomia

> Quando o assunto bater com um gatilho, busque e grave na pasta correspondente sem pedir direção. Regra de ouro: todo output nasce dentro do objeto a que serve.

| Quando eu falar / o assunto for... | Pasta |
|---|---|
| Algo de um cliente ativo | `clientes/<cliente>/` |
| Uma pessoa (quem é fulano, novo contato, lead) | `pessoas/` |
| Empresa externa que ainda não é cliente | `empresas/` |
| "Tenho reunião amanhã com o cliente X" | `clientes/<cliente>/reunioes/` |
| "Tenho reunião amanhã" (interna, parceria) | `reunioes/<contexto>/` |
| "Fechei um lead", "apareceu oportunidade", "vou mandar proposta" | `deals/` |
| Contrato, valor, parcela, "recebi/paguei" | `financas/` |
| "Tive uma ideia de reel/carrossel/post", roteiro | `conteudo/` (semente em `conteudo/ideias/`) |
| Material de estudo, artigo, transcrição pra aprender | `conhecimento/raw/` (depois `conhecimento/wiki/`) |
| Projeto de entrega (LP, sistema, documento) | `projetos/<nome>/` |
| Referência de voz, swipe, print que inspira | `referencias/` |
| Vida pessoal, meta, rotina, finança pessoal | `pessoal/` |
| Registro do dia | `diario/YYYY-MM-DD.md` |
| Não sei rotear ainda | `inbox/` (deposita e sinaliza) |

### Regra do "reunião amanhã"
Quando eu disser "vou ter uma reunião amanhã com o João da Acme às 15h", você deve, sem perguntar:
1. Ver se **João** já existe em `pessoas/` (se não, criar).
2. Ver se **Acme** já é cliente (`clientes/acme/`) ou empresa externa (`empresas/`).
3. Criar a nota da reunião no lugar certo (cliente → `clientes/acme/reunioes/AAAA-MM-DD-joao.md`; senão → `reunioes/acme/AAAA-MM-DD-joao.md`).
4. Se houver venda em jogo, criar/atualizar o card em `deals/`.
5. Preencher data, participantes, objetivo e espaço pra pauta.

Contexto dos meus projetos (ja conectados no cerebro, ver `projetos/README.md`): toda nota sobre um projeto (bug, feature, decisao, reuniao, copia) vai na pasta dele em `projetos/<projeto>/`. Os arquivos de codigo ficam nas pastas reais e sao acessados por link `file:///`, nunca se copia codigo pra dentro do vault.
- Catálogo Viral: webapp afiliados Shopee/TikTok (Next.js + Supabase) -> `projetos/catalogo-viral/`
- Patrick Teixeira (site oficial): mentor de lideranca (Next.js + Supabase) -> `projetos/patrickteixeira-1/`
- Sistema TAG - Caldeira de Forca (Puma): gestao de equipamentos (React + Supabase) -> `projetos/sistema-tag-cdf-puma/`
- Vertexx Consulting: landing de captacao de leads -> `projetos/vertexx-consulting/`
- Casa Grande Drywall: site institucional + CRM/ERP (Next.js + Three.js) -> `projetos/casagrandedraywall/` (briefing em `index.md`)
- Briefings de site/sistema (Patrick, Casa Grande): ficam linkados em `projetos/<projeto>/index.md` via file:/// (origem na pasta Anderson "Planejamento de Site-Sistemas")
- Planos do Catálogo Viral (7 dias, prompts, implementação): linkados em `projetos/catalogo-viral/index.md` (origem na pasta Anderson "Nova pasta")
| Meus repos no GitHub (52 ao total, ver `referencias/repos-github.md`): quando eu citar um repo/lib/ferramenta do meu github, o cerebro busca no indice e abre o link. Repos que ja estao no disco (catalogo-viral, patrickteixeira-1, SistemaTagCdfPuma) tem nota em `projetos/` com link `file:///` pro codigo local + link pro GitHub. Sistemas meus ainda nao clonados (ministral, wacrm, bolten-crm, casagrandedraywall, Cerimonial-Studio, Suite-Criativa-Pro) tem nota em `projetos/` apontando pro GitHub. Nunca clonar repo so pra dentro do vault: o codigo fica no GitHub ou na pasta real.
| Lista de skills de apoio a site/sistema (copiar so o necessario): `referencias/skills-apoio-site-sistema.md` (origem Vertex/Skills Anderson.txt).
| Identidade visual e marca (logos de cliente/empresa, canal YouTube): `referencias/identidade-visual.md`. Fotos pessoais do Anderson (galeria): `pessoal/fotos.md`. Material de estudo do Instagram (PDFs): `referencias/material-instagram.md`.
| Pacote pro NotebookLM: `referencias/notebooklm-export/` (fonte montada pela skill notebooklm-bridge).
| Estudos de Engenharia de Software e transcrições de vídeo vao em `conhecimento/raw/` e depois `conhecimento/wiki/`.

---

## 4. Como eu trabalho

- Sou direto, prefiro exemplos práticos a teoria.
- Foco em resultado e execução.
- Modo consultivo: antes de tarefa não trivial, pergunte até ter clareza. Nunca assuma.
- Em chat eu escrevo rápido, mas em qualquer output pra fora, corrija e capriche.

---

## 5. Regras de operação

- Nunca deletar arquivos: arquivar com timestamp em `arquivo/`.
- Nunca enviar comunicação a cliente/lead sem eu revisar.
- Sempre datar arquivos gerados: YYYY-MM-DD.
- Na dúvida, depositar em `inbox/` e sinalizar pra revisão.
- Escalar pra mim: dinheiro, compromissos, relacionamento com cliente.

---

## 6. Foco da semana
> Atualizar toda segunda. Pesa todas as ações do sistema.

**Semana de:** [PREENCHER]
**Prioridade 1:**
**Prioridade 2:**
**Prioridade 3:**
**Bloqueio principal:**

---

## 7. Origem e acesso remoto (git)

O vault e versionado em repo privado no GitHub para acesso de qualquer lugar.

- Repo privado: `https://github.com/Alves1986/Segundo-cerebro.git`
- O Hermes faz auto-push a cada 30 minutos (cron `Vault Git Auto-Push`), commitando mudancas locais no OneDrive.
- Para abrir o vault em outro dispositivo (PC, celular via app git, ou web via github.dev):
  - Clone: `git clone https://github.com/Alves1986/Segundo-cerebro.git`
  - Atualize: `git pull` (o Hermes ja empurra as mudancas do PC principal)
  - Edite e envie: `git add -A && git commit -m "..." && git push`
- No celular: use um app git (MGit, Working Copy no iOS, ou termux) apontando para o clone, ou github.dev no navegador.
- OObsidian mobile le o clone normalmente (e so markdown + pastas, as fotos ficam linkadas via file:/// fora do repo).
- Nunca versionar tokens: o `.gitignore` bloqueia `*token*.txt`, `*acess token*`, `.env`, `.git-credentials`. O token de push fica em arquivo fora do vault (Temp) e e injetado so no momento do push.
