---
tags: [dify, render, ia, vertexx, deploy, docker, free-tier]
criado: 2026-07-31
status: estrutura-pronta
atualizado: 2026-07-31
---

# Vertexx Dify — Self-host leve (1 service, SQLite) no Render FREE

Estrutura para subir o Dify no Render **free tier** usando **1 web service único** (economiza as 750h/mês grátis).

## Decisao: 1 service só (API)
O Dify oficial tem API + Web separados. Para caber no free tier sem estourar horas:
- **1 web service = apenas a API** (porta 5001)
- A interface web do Dify (UI) fica opcional — nao precisa para integrar com Evolution/WhatsApp
- Quando contratar plano pago, adiciona o service web da UI

## Por que SQLite
PostgreSQL + Redis + 4 containers nao rodam no free (~512MB-1GB). Esta versao:
- SQLite como DB (arquivo local no disk mount)
- Sem Redis (fila em memoria)
- 1 container so

## Arquivos
- `Dockerfile.api` — imagem da API (langgenius/dify-api:latest, SQLite, sem Redis)
- `render.yaml` — 1 web service (free)
- `docker-compose.render.yml` — referencia caso queira rodar local
- `env.example` — variaveis

## Como subir no Render (FREE)
1. Render > New > Blueprint > conectar `Alves1986/vertexx-dify`
2. Definir env vars: `OPENAI_API_KEY` (ou OpenRouter), `DB_TYPE=sqlite`, `REDIS_HOST=` (vazio)
3. Deploy (primeira vez demora ~10-15min no free)
4. Pegar URL (ex: https://vertexx-dify.onrender.com)
5. Colar URL no https://console.cron-job.org (a cada 10-14min) para manter acordado (free dorme 15min)

## Keep-alive
Render free DORME apos 15min. cron-job.org faz HTTP request periodico.
STATUS: pendente — aguardando URL do Dify.

## Observacao
SQLite nao e para producao. Plano pago: migrar para PostgreSQL + Redis + second service (UI).
