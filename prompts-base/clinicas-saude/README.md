# Prompt Base — Clinicas Saude
> Parte de `prompts-base/` — base reutilizável de criação. Não digitar tudo de novo.

## O que é esse nicho
Clínica odonto, psicólogo, consultório, agendamento, lembrete WhatsApp, prontuário.

## Skills necessárias (na ordem de uso)
- `landing-page-guide`
- `ui-ux-pro-max`
- `supabase`
- `supabase-postgres-best-practices`
- `instagram-automation`
- `marketing-psychology`

## Fluxo de criação (usando as skills)
1. landing-page-guide (agendamento + autoridade)
2. ui-ux-pro-max (confiança, acessibilidade AA)
3. supabase (agendamentos, prontuário, RLS obrigatório)
4. instagram-automation (lembrete de consulta)
5. marketing-psychology (reduz objeção de preço)

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
