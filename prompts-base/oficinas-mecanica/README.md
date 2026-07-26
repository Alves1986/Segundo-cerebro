# Prompt Base — Oficinas Mecanica
> Parte de `prompts-base/` — base reutilizável de criação. Não digitar tudo de novo.

## O que é esse nicho
Oficina, auto center, retífica, orçamento online, histórico de veículo.

## Skills necessárias (na ordem de uso)
- `landing-page-generator`
- `ui-ux-pro-max`
- `supabase`
- `supabase-deploy-integration`
- `marketing-ideas`

## Fluxo de criação (usando as skills)
1. landing-page-generator (orçamento + serviços)
2. ui-ux-pro-max (visual técnico limpo)
3. supabase (veículos, ordem de serviço)
4. supabase-deploy-integration (produção)
5. marketing-ideas (campanhas de retenção)

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
