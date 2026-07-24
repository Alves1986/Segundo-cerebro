---
tags: [projeto, omniroute, render, deploy, fallback]
criado: 2026-07-24
status: pendente-deploy
---

# Deploy do OmniRoute no Render (fork Alves1986)

Fallback de inferência 24/7 na nuvem, além do local. Plano free + seu cron de 10 min mantém acordado.

## Decisão (2026-07-24)
- **Cloud: PAUSADO / NA GAVETA.** Deploy no Render free falhou: build do Next.js 16 estourou 8GB RAM (free tier não aguenta; Starter 2GB também não; Standard 8GB custa ~$25/mês — caro p/ um fallback).
- Oracle Cloud Always Free: conta existe mas região sempre sem VM disponível (esgotado) -> inviável.
- **Fallback LOCAL mantido:** OmniRoute rodando em localhost:20128 + watchdog cron 10min (start-omniroute-both.sh). Resolve o objetivo "não ficar na mão quando a cota Nous zera" enquanto o PC tá ligado.
- **Retomar a nuvem** quando aparecer: (a) VM Oracle liberar na região, ou (b) micro VPS free (GCP/AWS/Azure 1GB) rodando só a API standalone, ou (c) algum free tier que aguente o build. Por enquanto, não vale o custo/esforço.

## Pendente (sua vez, em casa)
- Fork Alves1986/OmniRoute já tem render.yaml (branch release/v3.8.49) mas o serviço no Render está failed. Deixar como está (gaveta).
- Quando retomar: trocar plan ou migrar pra VPS; ajustar Hermes fallback chain local -> cloud.
