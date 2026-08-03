---
tags: [prospeccao, cliente-potencial, restaurante, gastronomia, d2c, telamacomacz-borba]
criado: 2026-07-31
status: prospeccao
tipo_projeto: TIPO B (Landing Page Dinâmica + Cardápio D2C)
nicho: Gastronomia / Restaurante de Refeições Diárias
---

# 03 — Bem Caseiro Restaurante

## Dados da empresa
- **Nome:** Bem Caseiro Restaurante
- **Nicho:** Gastronomia, Marmitex, Alimentação Saudável
- **Local:** Rua Tiradentes, 266 - Centro, Telêmaco Borba - PR
- **Marketplace atual:** Aiqfome (Mini, Média, Grande, Fit, Feijoada sábado)

## Diagnóstico de gargalos
- Dependência predatória de apps de entrega (12% a 20% do faturamento em taxas)
- Não constrói banco de dados próprio de clientes
- Não dispara promoção no horário de pico (10h30-14h)

## Proposta de solução (TIPO B)
- One-Pager otimizado mobile (tráfego Instagram)
- Cardápio dinâmico do banco (por dia da semana / tamanho: Strogonoff Especial Sábado, Marmita Fit)
- Cliente não precisa login pra ver cardápio
- DB Supabase: categorias_cardapio, itens_cardapio, pedidos, clientes_delivery
- RLS: cliente vê só seus pedidos em andamento
- Checkout web → consolida pedido + endereço + pagamento → injeta no WhatsApp ou painel Cozinha
- Evolution API: toda 5ª às 10h15 → "Já pediu seu almoço? Clique e peça sem taxas de app!"

## Pitch (cold) — matemática direta
"100 marmitas/dia × taxa de app = X reais/mês indo pro Aiqfome. A gente faz a 'Bem Caseiro Digital' e você recebe 100% via PIX, sem taxa."

## Contexto de mercado
- Apps de entrega corroem margem de contribuição
- D2C devolve controle do canal e base de clientes pro dono

## Stack recomendada
Next.js + Supabase (PostgreSQL) + Evolution API + Tailwind
