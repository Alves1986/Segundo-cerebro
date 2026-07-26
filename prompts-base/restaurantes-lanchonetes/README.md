# Prompt Base — Restaurantes Lanchonetes
> Parte de `prompts-base/` — base reutilizável de criação. Não digitar tudo de novo.

## O que é esse nicho
Restaurante, lanchonete, delivery, cardápio digital, pedido WhatsApp, QR Code.

## Skills necessárias (na ordem de uso)
- `landing-page-guide`
- `ui-ux-pro-max`
- `landing-page-copy`
- `instagram-carousel`
- `supabase`
- `supabase-postgres-best-practices`
- `marketing-psychology`

## Fluxo de criação (usando as skills)
1. landing-page-guide monta a página (cardápio, pedido, hero)
2. ui-ux-pro-max define identidade visual do nicho
3. landing-page-copy escreve o texto de venda
4. instagram-carousel gera conteúdo de divulgação
5. supabase cria tabelas (cardápio, pedidos)
6. marketing-psychology afina gatilhos de pedido

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
