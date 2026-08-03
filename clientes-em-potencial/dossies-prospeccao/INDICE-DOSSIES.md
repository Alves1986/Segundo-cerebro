---
tags: [indice, prospeccao, clientes-potenciais, telamacomacz-borba, base-comercial]
criado: 2026-07-31
status: indice
---

# Dossiês de Prospecção — Telêmaco Borba PR

5 empresas separadas em dossiês individuais, cada uma com dados isolados para reuso comercial (futuros clientes da Vertexx).

## Índice
| # | Empresa | Nicho | Tipo Projeto | Arquivo |
|---|---|---|---|---|
| 01 | Prime+ Saúde Odontologia | Odonto Alto Padrão | TIPO A (Site + Mini CRM) | [[01-prime-odontologia]] |
| 02 | ABS Auto Mecânica (Bosch) | Oficina Mecânica | TIPO C (Gestão Interna) | [[02-abs-auto-mecanica]] |
| 03 | Bem Caseiro Restaurante | Gastronomia/D2C | TIPO B (Landing + Cardápio) | [[03-bem-caseiro-restaurante]] |
| 04 | Marci Estética Corporal | Estética/Saúde | Híbrido (A+Branding + C+Op) | [[04-marci-estetica]] |
| 05 | Arca Clínica Veterinária | Vet + Pet Shop | TIPO C (ERP Multi-Ambiente) | [[05-arca-veterinaria]] |

## Contexto de mercado (base pros pitches)
- Telêmaco Borba: 75.000+ hab, 98,2% urbano, efeito Puma I/II (R$ 12,9 bi)
- PIB: Indústria 49,78% | Serviços 30,48% (crescendo)
- MPEs: 93% micro/pequeno no PR (~150 mil B2B)
- Oceano azul: digitalização incipiente + dependência de marketplaces predatórios

## Stack padrão (todos os dossiês)
Next.js (App Router) + Supabase (PostgreSQL + RLS) + Evolution API + Tailwind

## Tipos de projeto
- **TIPO A:** Site Alto Padrão + Mini CRM (captação + triagem)
- **TIPO B:** Landing Page Dinâmica + Cardápio D2C (anti-marketplace)
- **TIPO C:** Sistema de Gestão Interna / ERP (operação + retenção)

## Princípios transversais (todos os clientes)
- RLS obrigatório em toda tabela (LGPD, Privacy by Design)
- Evolution API para automações transacionais (lembretes, não cold marketing)
- Sem service_role no front-end do cliente

## Relacionado
- Nichos por pasta: [[../../clientes-em-potencial/automecanica]], [[../../clientes-em-potencial/clinicas-saude]], [[../../clientes-em-potencial/restaurantes]], [[../../clientes-em-potencial/petshop-veterinaria]], [[../../clientes-em-potencial/saloes-beleza]]
- Relatório completo: `RELATORIO-COMPLETO-PROSPECCAO.md` (na pasta clientes-em-potencial)
