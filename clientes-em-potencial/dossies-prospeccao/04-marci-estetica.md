---
tags: [prospeccao, cliente-potencial, estetica, saude, ltv, telamacomacz-borba]
criado: 2026-07-31
status: prospeccao
tipo_projeto: Híbrido (TIPO A Branding + TIPO C Operacional)
nicho: Clínica de Estética Corporal, Facial e Bem-Estar
---

# 04 — Marci Estética Corporal

## Dados da empresa
- **Nome:** Marci Estética Corporal
- **Nicho:** Estética Corporal, Facial e Bem-Estar Avançado
- **Local:** Avenida Marechal Deodoro da Fonseca, 335, Telêmaco Borba - PR

## Diagnóstico de gargalos
- Serviços de alto valor com sessões repetidas (Drenagem Linfática, Rejuvenescimento Facial, Intradermoterapia)
- (1) Falta confirmação automatizada → no-shows na maca
- (2) Sem controle de saldo de sessões de pacotes adquiridos

## Proposta de solução (Híbrido)
- Design System: saúde, relaxamento, bordas arredondadas, paleta suave
- Copy: benefícios concretos (redução líquidos, circulação, pele sem acnes)
- DB Supabase: pacientes, pacotes_vendidos (qtd sessões), sessoes_realizadas (timestamp)
- RLS: só role 'recepcionista'/'gestor' acessa faturamento e subtrai sessões
- Evolution API: 24h antes → "Sua sessão na Marci está confirmada p/ amanhã 15h. Confirma?" → webhook atualiza status

## Pitch (cold) — dor da dona
"Horários ociosos por faltas e ticket médio baixo por falta de pacotes com saldo eletrônico. A gente organiza e sobe seu lucro."

## Contexto de mercado
- LTV (Lifetime Value) é o sucesso de longo prazo em estética
- Recorrência de sessões = vida da clínica

## Stack recomendada
Next.js + Supabase (PostgreSQL) + Evolution API + Tailwind
