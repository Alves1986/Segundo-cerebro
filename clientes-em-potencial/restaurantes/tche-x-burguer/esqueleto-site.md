# Esqueleto de Projeto — Tchê X Burguer E Cia
> Nicho: restaurantes | Cidade: Telêmaco Borba - PR
> Tipo: SITE INSTITUCIONAL DE ALTO PADRÃO
> Dor: Hamburgueria com boa avaliação no TripAdvisor, mas sem site próprio. Pedido só por app/direct.
> Base: master prompts padrão do Anderson.

## Por que não é site genérico
Cada tela nasce da dor real do nicho (auditada na prospecção), não de lista Home/Sobre/Contato copiada.

## Mapa de páginas (por nicho)
- Home (posicionamento em 3s)
- Cardápio/Catálogo (fotos+preços+WhatsApp por item)
- Sobre (história, fotos reais)
- Reserva/Pedido (WhatsApp ou agendamento)
- Contato (mapa, horário, WhatsApp 1 toque)
- /admin (editar conteúdo, ver leads)

## Stack
- Next.js (App Router) + TS strict + Tailwind (tokens DESIGN.md)
- Supabase (Postgres + RLS + Auth + Storage + Realtime)
- Vercel + GitHub (main protegida, .env.example)

### Pipeline (Fases 1-8 do master-prompt-sites-alto-padrao.md)
1. Descoberta (auditar IG, benchmark nicho, persona). 2. Design System (awesome-design-md + ui-ux-pro-max-skill). 3. IA + Copy real. 4. Metodologia (superpowers+get-shit-done+ruflo+claude-mem). 5. Stack Next.js+TS+Supabase (RLS). 6. Admin/CRM + WhatsApp (wacrm+evolution-api). 7. QA playwright E2E. 8. Handoff Vercel + READMEs.

## Repositórios de referência (meus, organização Alves1986)
Clone em `.reference/` na raiz do projeto: awesome-design-md, ui-ux-pro-max-skill, wacrm, evolution-api, ruflo, superpowers, get-shit-done, claude-mem, playwright.

