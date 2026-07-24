---
tags: [projeto, omniroute, render, deploy, fallback]
criado: 2026-07-24
status: pendente-deploy
---

# Deploy do OmniRoute no Render (fork Alves1986)

Fallback de inferência 24/7 na nuvem, além do local. Plano free + seu cron de 10 min mantém acordado.

## Arquivos nesta pasta
- `render.yaml` — Blueprint do Render (Web Service, free, build/start corretos)
- `.env.example` — exemplo de env vars (API key + senha dashboard)

## Passo a passo (você faz no dashboard do Render)
1. Faça o **fork** de `diegosouzapw/OmniRoute` para `Alves1986/OmniRoute` (GitHub).
2. No Render: **New +** → **Blueprint** → conecte o repo `Alves1986/OmniRoute`.
3. O Render lê o `render.yaml` e cria o serviço `omniroute`.
4. Nas **Environment Variables** do serviço, defina (sync:false já está no yaml, mas confirme):
   - `OMNIROUTE_API_KEY` = `FRUsGepiD47OB2DusGEWVbtLslLScEJ0cAkDV8deNzs` (key forte gerada)
   - `INITIAL_PASSWORD` = a senha do dashboard (Deusamou2026@)
5. Deploy. Aguarde o build (free tier pode levar ~10-20 min no primeiro build do Next.js 16).
6. Anote a URL: `https://omniroute.onrender.com` (ou o nome que o Render der).

## Ajustes no Hermes (Anderson me passa a URL)
Quando a URL do Render estiver no ar, eu:
- Adiciono um 2º `custom_providers` apontando pra URL do Render (com `api_key`).
- Adiciono o Render como 2º da `fallback_providers` chain: `[local, render]`.
- Atualizo o cron watchdog pra bater nas duas URLs.

## Segurança
- NUNCA deixe `OMNIROUTE_API_KEY` vazia na nuvem (vira gateway aberto).
- A API key gerada NÃO está no git (sync:false + .env.example mascarado).
- O dashboard tem senha (INITIAL_PASSWORD).
