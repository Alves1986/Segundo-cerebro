# Prompt Base — Saloes Beleza Estetica
> Parte de `prompts-base/` — base reutilizável de criação. Não digitar tudo de novo.

## O que é esse nicho
Salão de beleza, barbearia, estética, agendamento online, histórico de cliente.

## Skills necessárias (na ordem de uso)
- `landing-page-generator`
- `ui-ux-pro-max`
- `supabase`
- `supabase-deploy-integration`
- `instagram-carousel`
- `marketing-loops`

## Fluxo de criação (usando as skills)
1. landing-page-generator cria site com agendamento
2. ui-ux-pro-max foca em conversão de agendamento
3. supabase modela clientes + agendamentos (RLS)
4. supabase-deploy-integration sobe em produção
5. instagram-carousel divulga
6. marketing-loops mantém posts recorrentes

## Repositórios de referência do Anderson (Alves1986)
- `awesome-design-md` — arquétipo visual
- `ui-ux-pro-max-skill` — já listada acima como ui-ux-pro-max
- `wacrm` — modelo de CRM de lead
- `evolution-api` — lembrete WhatsApp
- `ruflo`, `superpowers`, `get-shit-done`, `claude-mem` — orquestração
- `playwright` — QA

## Stack
Next.js (App Router) + TypeScript strict + Tailwind + Supabase (Postgres + RLS + Auth). Deploy Vercel.

## Como usar
Quando for criar o projeto de um cliente deste nicho (ver `clientes-em-potencial/`), copie este doc
como ponto de partida. O Hermes carrega as skills listadas e segue o fluxo. Ajuste o nicho específico
(empresa real) na Fase 1 do master prompt correspondente.
