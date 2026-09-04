# Site/Sistema com CRM Completo do Zero

## Contexto

Referência viva com a **melhor abordagem** para construir um site ou sistema completo com todas as funcionalidades possíveis de um CRM, do zero, seguindo os padrões do Anderson (Next.js, Supabase, Vercel, Tailwind).

---

## 1. Stack Tecnológica (padronizada)

| Camada | Tecnologia |
|---|---|
| Frontend | **Next.js 14 (App Router) + TypeScript** |
| Styling | **Tailwind CSS + shadcn/ui** |
| Backend-as-a-Service | **Supabase** (PostgreSQL + Auth + RLS + Realtime) |
| Deploy | **Vercel** (CI/CD automático via GitHub) |
| Auth / Multi-tenancy | Supabase Auth + Row-Level Security (RLS) por tenant |
| WhatsApp / SMS | Evolution API (já rodando em VM Oracle) ou provedor local |
| IA / Chatbot | Dify ou Vertexx IA (Render free tier) conectado via webhook |
| Pagamentos | Stripe / Mercado Pago / Pix |
| Email | Resend / Mailgun / SMTP do provedor |
| Mensageria avançada | n8n ou Evolution Bot Runtime (fluxos visuais) |

> Exceções precisam de aprovação prévia do Anderson. Nunca propor WordPress, PHP, ou soluções low-code sem autorização.

---

## 2. Arquitetura de Alto Nível

```
┌─────────────────────────────────────────────────────┐
│                    Visitante / Cliente               │
├─────────────────────────────────────────────────────┤
│  Site Institucional  →  App Público (Next.js)        │
│  Portfólio            →  Landing Pages dinâmicas     │
│  Blog                 →  CMS integrado (Tiptap)      │
│  Loja Virtual         →  Carrinho + Checkout         │
└──────────────────────┬──────────────────────────────┘
                       │
                       ▼
┌─────────────────────────────────────────────────────┐
│                    Painel de Controle (Admin)        │
├─────────────────────────────────────────────────────┤
│  CRM Completo      →  Dashboard, Leads, Conversas   │
│  E-commerce        →  Produtos, Pedidos, Estoque     │
│  Marketing         →  Campanhas, Automações, Funil  │
│  Relatórios        →  BI/Analytics integrado          │
│  Inteligência      →  IA para análise e atendimento │
└──────────────────────┬──────────────────────────────┘
                       │
                       ▼
┌─────────────────────────────────────────────────────┐
│                    Backend & Database                │
├─────────────────────────────────────────────────────┤
│  Supabase          →  PostgreSQL + Auth + RLS        │
│  Evolution API     →  WhatsApp (entrada/saída)       │
│  Dify / Vertexx IA →  Agentes de IA conversacional  │
│  Stripe / MP       →  Pagamentos                     │
│  Resend            →  E-mails transacionais          │
│  Cron (Hermes)     →  Tarefas agendadas              │
└─────────────────────────────────────────────────────┘
```

---

## 3. CRM Completo — Módulos Essenciais (MVP)

### 3.1 Gestão de Contatos (Leads & Contatos)
- **Cadastro completo**: nome, empresa, cargo, telefone (com máscara), e-mail, endereço, redes sociais, tags, origem do lead.
- **Score de lead**: pontuação automática (engajamento, origem, comportamento no site).
- **Segmentação**: filtros avançados (tags, score, origem, data de criação).
- **Importação em massa**: CSV / Excel com validação.
- **Duplicatas inteligentes**: detecção por CPF, e-mail, telefone.
- **Histórico completo**: timeline de interações (e-mails, WhatsApp, ligações, visitas).
- **Integração via formulário público**: landing pages capturam leads direto no CRM.

### 3.2 Gestão de Conversas (Chat / WhatsApp / E-mail)
- **Canal único**: todas as conversas (site chat, WhatsApp, e-mail) em uma única timeline por contato.
- **Integração Evolution API**: recebimento e envio de mensagens via WhatsApp diretamente no CRM.
- **Chatbot de IA**: agentes Dify/Vertexx para atendimento 24/7 com escalation para humano.
- **Templates de resposta**: respostas rápidas salvas para reuso.
- **Distribuição de conversas**: round-robin entre atendentes.
- **Mensagens agendadas**: agendar envio de WhatsApp/e-mail para follow-up.
- **Etiquetas de conversa**: organizar por status (novo, em andamento, resolvido, fidelizado).

### 3.3 Gestão de Oportunidades (Vendas)
- **Funil de vendas visual**: colunas personalizáveis (ex: Lead Qualificado → Apresentação → Proposta → Negociação → Fechado).
- **Pipeline múltiplo**: separar por tipo de venda (B2B, B2C, assinatura).
- **Valor previsto e won**: probabilidade por fase, forecast automático.
- **Tarefas e lembretes**: criação de tarefas ligadas a oportunidades, com notificações.
- **Documentos de proposta**: geração automática de proposta PDF (com templates).
- **Integração de contrato**: envio de contrato para assinatura digital (DocuSign, HelloSign).

### 3.4 Gestão de Tarefas & Atividades
- **Tarefas atribuídas**: criação, atribuição, prioridade, prazo.
- **Calendário integrado**: Google Calendar / Outlook.
- **Lembretes automáticos**: e-mail, WhatsApp, notificação no app.
- **Atividades recorrentes**: tarefas que se repetem (follow-up semanal).
- **Checklist de processos**: templates de tarefas para onboarding, fechamento, etc.

### 3.5 Marketing Automation
- **Landing pages builder**: drag-and-drop ou componentes shadcn pré-configurados.
- **Formulários inteligentes**: progressive profiling, validação em tempo real.
- **E-mail marketing**: campanhas segmentadas, automações (sequências, jornadas).
- **WhatsApp marketing**: campanhas em massa via Evolution API com limites de anti-spam.
- **Pop-ups e notificações**: web push, banners dinâmicos.
- **UTM tracking**: rastreamento de campanhas, ROI por canal.

### 3.6 E-commerce Integrado (se aplicável)
- **Catálogo de produtos**: com variantes, SKUs, imagens, SEO.
- **Carrinho de compras**: com cupons, frete, múltiplos meios de pagamento.
- **Checkout seguro**: Pix, cartão, boleto via Stripe / Mercado Pago.
- **Pedidos e status**: tracking em tempo real, notificações.
- **Gestão de estoque**: entrada/saída, mínimo estoque, fornecedores.

### 3.7 Relatórios & BI
- **Dashboards personalizáveis**:Widgets de KPI (conversão, receita, ticket médio).
- **Relatórios padrão**: vendas por período, origem de leads, performance de atendentes.
- **Exportação**: PDF, Excel, CSV.
- **Integração com ferramentas**: Google Sheets, Power BI, Metabase.

### 3.8 Administração & Controle de Acesso
- **Multi-tenant**: cada empresa/organização vê apenas seus dados (RLS por tenant).
- **Perfis de usuário**: Admin, Gerente, Atendente, Marketing, Visão Gerencial.
- **Permissões granulares**: acesso por módulo, ação (CRUD).
- **Auditoria**: log de todas as ações (quem fez o quê e quando).
- **Backup automatizado**: via cron ou função do Supabase.
- **Domínio customizado**: white-label com domínio próprio.

---

## 4. Funcionalidades Avançadas (pós-MVP)

### 4.1 Inteligência Artificial
- **Análise de sentimento**: IA classifica o tom das conversas.
- **Lead scoring preditivo**: modelo treinado para prever conversão.
- **Respostas automáticas inteligentes**: sugestões de resposta baseadas no contexto.
- **Sumarização de conversas**: IA gera resumo da conversa para histórico rápido.
- **Chatbot multimodal**: texto, áudio, imagem (via Vertexx IA ou Dify).

### 4.2 Integrações & Webhooks
- **API REST/GraphQL**: expor endpoints para integração externa.
- **Webhooks**: disparar eventos (novo lead, status de pedido) para sistemas externos.
- **Zapier / Make.com**: conectores via n8n auto-hospedado ou serviços cloud.

### 4.3 Notificações Inteligentes
- **Central de notificações**: dentro do app, com prioridade e categoria.
- **Lembretes por canal**: e-mail, WhatsApp, SMS, push.
- **Agenda de follow-ups**: sugestões baseadas em comportamento.

### 4.4 Mobile App (Progressive Web App)
- **Instalável**: PWA com manifest e service workers.
- **Offline-first**: funcionalidades críticas funcionam offline, sincroniza depois.
- **Notificações push**: web push para Chrome/Safari.

---

## 5. Segurança (não-negociável)

1. **RLS obrigatória em TODAS as tabelas do Supabase** — nada de anon lendo dados de outros tenants.
2. **Auth obrigatória** para qualquer escrita — exceto lead capture público (com `WITH CHECK status='Novo'`).
3. **Security headers** no `vercel.json` (CSP, X-Frame-Options, X-Content-Type-Options, Referrer-Policy).
4. **Rate limiting** em APIs públicas (via edge functions ou API route).
5. **Secrets** via env vars — nunca hardcode no código.
6. **Auditoria de penetração** mínima: teste de permissões, SQL injection, XSS.
7. **Criptografia** de dados sensíveis (PII) no banco.

---

## 6. Estratégia de Build (fase-a-fase)

| Fase | Módulo | Entregáveis | Stack foco |
|---|---|---|---|
| **1** | Foundations | Next.js + Supabase + Auth + RLS básico + layout admin | shadcn/ui, Supabase |
| **2** | CRM Core | Leads, Contatos, Conversas, Funil de Vendas | Supabase Realtime, Evolution API |
| **3** | Marketing | Landing pages, formulários, e-mail marketing | Resend, Tiptap |
| **4** | E-commerce | Catálogo, checkout, pagamentos | Stripe/Mercado Pago |
| **5** | BI & Relatórios | Dashboards, exportações | Recharts, API routes |
| **6** | IA & Avançado | Chatbot, score preditivo, automações | Dify/Vertexx IA |
| **7** | Mobile & PWA | Instalável, offline, push | PWA, service workers |

---

## 7. Diretrizes de Desenvolvimento (do CLAUDE.md)

- **Sempre gravar notas** no vault (`projetos-software/<nome>/`) — decisões, bugs, features.
- **Código fora do vault**: repositório GitHub recebe SÓ código limpo. Docs ficam local.
- **Auto-deploy na Vercel** via push no GitHub.
- **Stack padrão**: Next.js + Supabase + Vercel + Tailwind + shadcn/ui.
- **Comunicação com o Anderson**: português, direto, prático.

---

## 8. Referências de Projetos Similares

| Projeto | Tipo | Link |
|---|---|---|
| **Vertexx CRM** | CRM + WhatsApp + IA | `projetos-software/vertexx-consulting/` |
| **WaCRM** | CRM focado em WhatsApp | GitHub: Alves1986/wacrm |
| **Bolten CRM** | CRM geral | GitHub: Alves1986/bolten-crm |
| **Evo CRM** | CRM open-source (monorepo) | `/c/Anderson/evo-crm-community/` |
| **Sistema TAG** | Gestão industrial (exemplo de modular) | `projetos-software/sistema-tag-cdf-puma/` |
| **Esquadrão de Cristo MC** | Gestão de motoclube (61 telas extraídas) | `projetos-software/esquadrao-cristo-mc/` |
| **Salão de Beleza** | Base reutilizável (Next.js + Supabase) | `projetos-software/salao-sistema-base/` |
| **Catálogo Viral** | Plataforma IA para vídeos | `projetos-software/catalogo-viral/` |

---

## 9. Próximos Passos Recomendados

1. Definir escopo inicial (qual Módulo Priorizar).
2. Criar repositório no GitHub.
3. Setup do projeto: Next.js 14 + Supabase + Tailwind + shadcn/ui.
4. Implementar Auth + RLS básico (tenant_id em todas as tabelas).
5. Build do Módulo 2 (CRM Core) primeiro — é o coração do sistema.
6. Rodar build + deploy de teste na Vercel.
7. Validar com usuário real antes de avançar.

---

## Status
- **Documento-base**: criado para referência de todos os projetos CRM/site futuros do Anderson.
- **Última atualização**: 2026-08-11