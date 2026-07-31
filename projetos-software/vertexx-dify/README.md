---
tags: [dify, render, ia, vertexx, deploy, docker]
criado: 2026-07-31
status: estrutura-pronta
---

# Vertexx Dify — Self-host leve (SQLite) no Render

Estrutura para subir o Dify no Render free tier usando SQLite (sem PostgreSQL/Redis) para economizar RAM.

## Por que SQLite
O docker-compose oficial do Dify usa PostgreSQL + Redis + 4 containers. No Render free (~512MB-1GB) isso nao roda. Esta versao leve usa:
- API + worker em 1 container
- SQLite como DB (arquivo local)
- Sem Redis (fila em memoria)
- Web separado

## Arquivos desta pasta
- `docker-compose.render.yml` — compose leve para o Render usar
- `render.yaml` — blueprint de 2 services (api/worker unificado + web)
- `Dockerfile.api` — imagem da API (langgenius/dify-api:latest, SQLite)
- `Dockerfile.web` — imagem do web (langgenius/dify-web:latest)
- `env.example` — variaveis de ambiente

## Como subir no Render
1. Criar repo GitHub `Alves1986/vertexx-dify` e subir estes arquivos
2. Render > New > Blueprint > conectar o repo
3. Definir env vars (ver env.example): OPENAI_API_KEY, DB_TYPE=sqlite, REDIS_HOST=(vazio)
4. Deploy
5. Pegar URL do web (ex: https://vertexx-dify-web.onrender.com)
6. Colar URL no https://console.cron-job.org (a cada 10-14min) para manter acordado

## Keep-alive
O Render free DORME apos 15min. O cron-job.org faz HTTP request periodico para manter o Dify acordado.
STATUS: pendente — aguardando URL do Dify.

## Observacao
SQLite nao e recomendado para producao. Quando contratar plano pago, migrar para PostgreSQL + Redis.
