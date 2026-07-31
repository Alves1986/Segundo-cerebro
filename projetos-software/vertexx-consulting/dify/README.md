---
tags: [dify, render, ia, vertexx, deploy, docker]
criado: 2026-07-31
status: estrutura-pronta
---

# Dify — Self-host leve (SQLite) no Render

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
- `env.example` — variaveis de ambiente

## Como subir no Render
1. Criar conta em https://render.com
2. New > Blueprint > conectar este repo (ou usar o render.yaml)
3. Ou New > Web Service > Docker > apontar para este docker-compose.render.yml
4. Definir variaveis de ambiente (ver env.example)
5. Deploy
6. Pegar a URL (ex: https://vertexx-dify.onrender.com)
7. Colar essa URL no https://console.cron-job.org para manter acordado

## Keep-alive
O Render free DORME apos 15min. O cron-job.org faz HTTP request periodico para manter o Dify acordado.
STATUS: pendente — aguardando URL do Dify.

## Observacao
SQLite nao e recomendado para producao. Quando contratar plano pago, migrar para PostgreSQL + Redis.
