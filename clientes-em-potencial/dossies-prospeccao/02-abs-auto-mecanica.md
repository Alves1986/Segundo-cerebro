---
tags: [prospeccao, cliente-potencial, automecanica, oficina, telamacomacz-borba]
criado: 2026-07-31
status: prospeccao
tipo_projeto: TIPO C (Sistema de Gestão Interna)
nicho: Oficina Mecânica e Assistência Técnica Automotiva
---

# 02 — ABS Auto Mecânica (Bosch Car Service)

## Dados da empresa
- **Nome:** ABS Auto Mecânica — Bosch Car Service
- **Nicho:** Oficina Mecânica e Assistência Técnica Automotiva
- **Local:** Rua Alberto Elerth Filho, 695 - Centro, Telêmaco Borba - PR
- **Selo:** Bosch Car Service (referência de qualidade)

## Diagnóstico de gargalos
- Operações densas: aprovação de orçamentos, requisição de autopeças, serviços complexos
- Sem CRM robusto → perda de recorrência
- Cliente faz manutenção corretiva mas não é lembrado proativamente (troca óleo, filtros, correias após 12 meses/10.000 km)
- Quebra de ciclo de vida do cliente (LTV)

## Proposta de solução (TIPO C)
- Dashboard mobile/tablet first (alvos de toque 44px+)
- Telas: Visão do Pátio, Ordens de Serviço Digitais (upload fotos peças), Cadastro de Frota/Histórico
- DB Supabase: clientes, veiculos (placa, modelo, ano, chassi), ordens_servico (pendente/aprovado/finalizado), servicos_executados
- RLS mandatório em clientes e faturamento
- Evolution API: CRON identifica serviço expirado (óleo há 180 dias) → msg automática: "Olá [Nome], o [Veículo] placa [Placa] completou 6 meses. Vamos agendar revisão preventiva?"

## Pitch (cold) — dor do gerente
"Um selo Bosch atrai o cliente; mas é o acompanhamento do histórico do carro que faz ele voltar todo ano. Demonstro o painel de orçamentos pelo WhatsApp."

## Contexto de mercado
- Boom logístico da indústria madeireira + frota urbana traciona oficinas
- Serviços complexos: funilaria avançada, injeção eletrônica

## Stack recomendada
Next.js + Supabase (PostgreSQL) + Evolution API + Tailwind
