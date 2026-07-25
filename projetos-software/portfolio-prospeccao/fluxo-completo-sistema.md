# Fluxo Completo do Sistema — Portfólio + Chatbot de Prospecção

> Documento de planejamento. Define a estrutura antes de qualquer código. Trabalha em conjunto com `cerebro-chatbot-prospeccao.md` (fonte de verdade de conteúdo/regras do bot).

---

## 1. Visão geral em 3 camadas

```
┌─────────────────────────────────────────────┐
│  CAMADA 1 — SITE PÚBLICO (Next.js)           │
│  Portfólio, posicionamento, trilhas de nicho │
└───────────────────┬───────────────────────────┘
                     │ visitante clica no chat
┌───────────────────▼───────────────────────────┐
│  CAMADA 2 — CHATBOT (widget + API route)     │
│  Conduz entrevista usando cerebro.md          │
│  como contexto/system prompt                  │
└───────────────────┬───────────────────────────┘
                     │ ao final da conversa
┌───────────────────▼───────────────────────────┐
│  CAMADA 3 — BACKEND (Supabase + notificação) │
│  Salva lead, dispara alerta pro Anderson      │
└─────────────────────────────────────────────────┘
```

---

## 2. Mapa de páginas do site

| Página | Rota | Função |
|---|---|---|
| Home | `/` | Posicionamento + 3 trilhas (negócio local / criativo-música / ministério) + CTA pro chat |
| Portfólio | `/portfolio` | Grid completo com selo "Entregue" vs "Sistema conceito" |
| Detalhe do projeto | `/portfolio/[slug]` | Case study individual (problema/solução/diferencial) |
| Comece aqui (chat) | `/comece-aqui` | Página dedicada do chatbot, pra quem vem de link direto (ex: DM de prospecção) |
| Sobre | `/sobre` | Credencial: dev + Ministral + testbed real na igreja |
| Admin (privado) | `/admin` | Painel só seu — lista de leads, status, respostas da entrevista |

O widget de chat também aparece flutuante em todas as páginas públicas, não só na rota dedicada.

---

## 3. Jornada do visitante (ponta a ponta)

```
1. Visitante chega no site
   → via link direto de prospecção (script de abordagem)
   → ou orgânico/indicação

2. Visitante navega o portfólio
   → identifica um sistema parecido com o que precisa
   → ou não identifica nada específico

3. Visitante abre o chat (widget ou /comece-aqui)

4. Chatbot conduz conversa seguindo cerebro.md:
   Estado 1 → Estado 2 → Estado 3 (match) → Estado 4 (entrevista)
   → Estado 5 (contato) → Estado 6 (resumo + encerramento)

5. Sistema salva o lead no Supabase (tabela `leads`)

6. Sistema dispara notificação:
   → Telegram (@anders_1986_bot via OpenClaw)
   → contendo: nome, nicho, resumo, contato, link pra ver no /admin

7. Anderson recebe notificação no celular, abre o /admin se quiser
   ver a conversa completa, e chama o cliente no WhatsApp
```

---

## 4. Arquitetura técnica (decisões de stack)

| Componente | Tecnologia | Observação |
|---|---|---|
| Frontend | Next.js + TypeScript + Tailwind | Consistente com seu padrão atual |
| Hospedagem | Vercel | Mesmo de todos os outros projetos |
| Banco de dados | Supabase (Postgres) | Via `services/supabase/client.ts`, seu padrão |
| Motor do chatbot | API route Next.js → Anthropic API | `cerebro-chatbot-prospeccao.md` injetado como system prompt |
| Notificação | Webhook → Telegram Bot API | Reaproveita seu bot OpenClaw já configurado |
| Autenticação do admin | Supabase Auth (só sua conta) | Simples, 1 usuário só |

---

## 5. Fluxo de dados detalhado (chat → banco → notificação)

```
[Widget de chat no frontend]
        │  (mensagem do usuário)
        ▼
[API route: /api/chat]
        │  monta prompt = cerebro.md (regras+nichos) + histórico da conversa
        ▼
[Anthropic API]
        │  resposta do bot conduzindo o estado da entrevista
        ▼
[Frontend exibe resposta]
        │  ... conversa continua até Estado 5/6 ...
        ▼
[API route: /api/leads (POST)]
        │  salva registro completo (schema da seção 6 do cerebro.md)
        ▼
[Supabase — tabela `leads`]
        │  trigger ou chamada direta pós-insert
        ▼
[Webhook → Telegram Bot API]
        │  envia mensagem formatada pro @anders_1986_bot
        ▼
[Anderson recebe notificação no celular]
```

---

## 6. Estrutura de tabelas no Supabase (visão de planejamento — schema técnico completo vem depois)

- **`leads`** — um registro por conversa finalizada (nome, whatsapp, instagram, nicho, sistema_match, respostas em jsonb, resumo, status, criado_em)
- **`nichos_config`** — espelha as seções 3.x do cerebro.md em formato de dado, pra você editar nicho sem mexer em código (perguntas, sistema de referência, texto de vantagem)
- **`conversas_log`** *(opcional, fase 2)* — histórico bruto de cada mensagem trocada, útil pra revisar se o bot está seguindo as regras direito

> Observação: manter `nichos_config` como dado (não hardcoded) é o que te permite adicionar o 11º, 12º nicho só editando uma linha no banco — sem precisar mexer no prompt do bot toda vez.

---

## 7. Painel admin (`/admin`) — o que ele precisa mostrar

- Lista de leads, mais recentes primeiro
- Filtro por nicho e por status (novo / contatado / proposta enviada / fechado)
- Ao clicar num lead: respostas completas da entrevista + resumo gerado pelo bot
- Botão de atualizar status manualmente (você marca conforme avança a negociação)

---

## 8. Ordem de construção sugerida (fases)

```
Fase 1 — Fundação
  • Setup Next.js + Supabase + deploy Vercel vazio
  • Tabela `leads` e `nichos_config` criadas
  • Popular `nichos_config` com o conteúdo do cerebro.md

Fase 2 — Site público
  • Home com as 3 trilhas
  • Portfólio com grid (Entregue vs Conceito)
  • Página de detalhe de projeto

Fase 3 — Chatbot
  • API route /api/chat consumindo Anthropic API
  • Widget flutuante + página /comece-aqui
  • Lógica de estados (1 a 6) seguindo cerebro.md

Fase 4 — Persistência + notificação
  • API route /api/leads salvando no Supabase
  • Webhook de notificação Telegram

Fase 5 — Admin
  • Painel /admin com autenticação
  • Listagem, filtro e detalhe de leads

Fase 6 — Scripts de prospecção ativa
  (agora sim faz sentido mandar as mensagens dos nichos,
  porque o sistema já está pronto pra receber o lead)

Fase 7 — Motor de construção de projeto de cliente (contínuo, não é
  uma fase que "termina" — roda a cada novo lead qualificado)
  • Agente 0 audita o Instagram do lead (se informado no Estado 5)
  • Roteador escolhe o master prompt certo por nicho
  • Master prompt executa as Fases 1–8 dele (detalhado em
    equipe-agentes-orquestracao.md, seção 3)
```

---

*Este documento define fluxo e arquitetura. Conteúdo de negócio (nichos, textos aprovados, regras anti-invenção) vive em `cerebro-chatbot-prospeccao.md`. Papéis de agente, protocolo de validação e o motor de construção de projeto de cliente vivem em `equipe-agentes-orquestracao.md`. Os três arquivos trabalham juntos.*
