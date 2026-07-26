# Esqueleto de Projeto — Vida Animal Clínica Veterinária
> Nicho: petshop-veterinaria | Cidade: Telêmaco Borba - PR
> Tipo: SISTEMA DE GESTÃO INTERNA
> Dor: Clínica veterinária e pet shop, só Instagram/Facebook/WhatsApp. Sem site próprio, agendamento manual, sem prontuário digital.
> Base: master prompts padrão do Anderson.

## Por que não é site genérico
Cada tela nasce da dor real do nicho (auditada na prospecção), não de lista Home/Sobre/Contato copiada.

## Mapa de telas (mínimo)
- Login do dono (Supabase Auth)
- Dashboard do dia (agenda, próximos atendimentos)
- Agenda/Agendamento (sem conflito de horário)
- Cadastro de Cliente/Pet/Carro com histórico
- Estoque (peças/produtos) com alerta de baixo estoque
- Configurações (WhatsApp de produção p/ lembrete)

## Stack
- Next.js (App Router) + TS strict + Tailwind (tokens DESIGN.md)
- Supabase (Postgres + RLS + Auth + Storage + Realtime)
- Vercel + GitHub (main protegida, .env.example)

### Pipeline (Fases 1-8 do master-prompt-sistema-gestao-interna.md)
1. Descoberta Operacional — validar dor ("Clínica veterinária e pet shop, só Instagram/Facebook/WhatsApp. Sem site próprio, agendamento manual, sem prontuário digital."). 2. Design System (painel, clareza > estética). 3. Mapa de telas. 4. Metodologia (superpowers+get-shit-done+ruflo+claude-mem). 5. Stack Next.js+TS+Supabase (RLS). 6. Lembrete via evolution-api (1:1). 7. QA playwright E2E. 8. Handoff README simples + README.dev.

## Repositórios de referência (meus, organização Alves1986)
Clone em `.reference/` na raiz do projeto: awesome-design-md, ui-ux-pro-max-skill, wacrm, evolution-api, ruflo, superpowers, get-shit-done, claude-mem, playwright.

