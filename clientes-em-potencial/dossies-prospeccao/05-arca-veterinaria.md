---
tags: [prospeccao, cliente-potencial, veterinaria, petshop, multi-tenant, rls, telamacomacz-borba]
criado: 2026-07-31
status: prospeccao
tipo_projeto: TIPO C (ERP Modular Multi-Ambiente)
nicho: Clínica Veterinária + Centro de Estética Pet / Pet Shop
---

# 05 — Arca Clínica Veterinária e Centro de Estética Pet

## Dados da empresa
- **Nome:** Arca Clínica Veterinária e Centro de Estética Pet
- **Nicho:** Veterinária, Medicina de Exóticos, Diagnóstico por Imagem, Acupuntura + Pet Shop
- **Local:** Rua Nilo Peçanha, 102 - Alto das Oliveiras, Telêmaco Borba - PR
- **Corpo clínico:** Dr. Rodrigo (acupuntura/imagem), Dra. Juliana (exóticos/silvestres/cardiologia)

## Diagnóstico de gargalos
- Modelo híbrido: clínica (dados confidenciais) + varejo/estética (alta rotatividade)
- Software mistura banho/tosa com prontuários críticos e histórico cirúrgico
- Risco de perda de esquemas vacinais

## Proposta de solução (TIPO C - ERP Modular)
- Front-end silos: /admin/clinica (médicos) e /admin/petshop (recepção/banhistas)
- Agenda esteira de banho vs. clínica (anamnese, imagem, prescrição)
- DB Supabase: tutores, pacientes_pets (espécie/raça/nasc), prontuarios_medicos, agendamentos_estetica
- RLS crítico: role 'atendente_estetica' → só insert/select em agendamentos; BLOQUEADO de prontuarios_medicos e faturamento_cirurgias. Só 'veterinario_chefe' tem acesso global
- Evolution API: CRON diário varre vacinas que vencem em 15 dias → "O protocolo do(a) [Pet] vence dia X. Agende o reforço na Clínica Arca"

## Pitch (cold) — dor dos sócios (veterinários)
"Sistemas caóticos misturam cirurgia com venda de ração. A gente isola prontuário na nuvem e aumenta receita com automação de vacina."

## Contexto de mercado
- Modelo mais complexo do levantamento (clínico + varejo)
- Segurança de prontuário = diferencial competitivo

## Stack recomendada
Next.js + Supabase (PostgreSQL, RLS Multi-Tenant) + Evolution API + Tailwind
