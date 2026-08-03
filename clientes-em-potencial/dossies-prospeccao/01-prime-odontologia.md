---
tags: [prospeccao, cliente-potencial, odontologia, alto-padrao, telamacomacz-borba]
criado: 2026-07-31
status: prospeccao
tipo_projeto: TIPO A (Site Alto Padrão + Mini CRM)
nicho: Clínica Odontológica de Alto Padrão
---

# 01 — Prime+ Saúde Odontologia Avançada

## Dados da empresa
- **Nome:** Prime+ Saúde Odontologia Avançada
- **Nicho:** Clínica Odontológica de Alto Padrão — 8 especialidades (Implantodontia, Ortodontia, Estética)
- **Local:** Telêmaco Borba - PR (foco: alto poder aquisitivo, Campos Gerais)
- **Instagram/Site:** @clinicaprimetb.com.br / primeodontotb.com.br / CRO-PR 20.623
- **Telefone:** 42 98434-0134

## Diagnóstico de gargalos
- Estrutura "odontologia do futuro" no espaço físico, mas agendamento 100% manual por telefone
- Tráfego pago do Instagram é desperdiçado por falta de funil automatizado
- Experiência digital não condiz com a arquitetura física

## Proposta de solução (TIPO A)
- Site de alto padrão + Mini CRM
- Design System: azul carbono, prata, branco off-white, detalhes metálicos
- Landing pages: Implantodontia (Carga Imediata), Ortodontia, Harmonização Facial
- DB Supabase: leads_triagem, especialidades_interesse, agendamentos_iniciais
- RLS: insert público (com rate limit), select só admin autenticado
- Evolution API: disparo de questionário de pré-qualificação no WhatsApp ao preencher formulário de implantes

## Pitch (cold) — dor do dono
"O tráfego do Instagram tá sendo desperdiçado pela falta de funil automatizado e triagem com IA. A gente elimina horários vagos na agenda convertendo paciente no celular."

## Contexto de mercado (Telêmaco Borba)
- 75.000+ habitantes, 98,2% urbanizado
- PIB: Indústria 49,78%, Serviços 30,48% (crescendo)
- Efeito Puma I/II (R$ 12,9 bi) elevou poder aquisitivo
- Odonto de alto ticket médio em vias nobres (Av. Horácio Klabin, Av. Paraná)

## Stack recomendada
Next.js (App Router) + Supabase (PostgreSQL) + Evolution API + Tailwind
