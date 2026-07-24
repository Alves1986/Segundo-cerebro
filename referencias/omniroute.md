---
tags: [referencia, omniroute, ai-gateway, fallback, infra]
criado: 2026-07-24
status: ativo
---

# OmniRoute (AI Gateway de fallback)

Gateway de inferência local OpenAI-compatible. Usado como **fallback de modelo** do Hermes/Segundo Cérebro para não ficar esperando a cota do provider principal (Nous) voltar.

## Repo
- GitHub: https://github.com/diegosouzapw/OmniRoute
- Instalado global: `npm i -g omniroute`

## Como está integrado (2026-07-24)
- **Servidor**: roda local em `http://localhost:20128` (dashboard em `/dashboard`, API `/v1`).
- **Config do Hermes** (`config.yaml`):
  - `custom_providers`: nome `omniroute`, base_url `http://localhost:20128/v1` (keyless).
  - `fallback_providers`: `auto/best-coding` via custom (usa o auto-fallback do OmniRoute entre 290+ providers free).
- **Comportamento**: quando o Nous (principal `tencent/hy3:free`) dá rate-limit/5xx/sem cota, o Hermes cai automaticamente pro OmniRoute. Sem perda de conversa.
- **Watchdog**: cron do Hermes `9ff7a5e4cb35` roda `scripts/start-omniroute.sh` a cada 10 min para manter o gateway de pé.

## Validação feita
- `omniroute` instalado e subindo (pid em background).
- `/v1/models` e `/v1/chat/completions` respondem sem API key (testado: modelo `auto/best-coding` → roteou p/ `big-pickle`).
- `hermes fallback list` reconhece: `1. auto/best-coding (via custom) [http://localhost:20128/v1]`.
- `bun run build` do Ministral: OK (separado).

## O que falta / atenção
- **OmniRoute precisa estar rodando** para o fallback funcionar. O watchdog cobre queda, mas se a máquina reiniciar e o Hermes não subir o cron, o fallback fica off até o primeiro tick do cron.
- Modelos bons p/ usar no `auto/`: `auto/best-coding`, `auto/best-reasoning`. Trocar manualmente: `/model custom:omniroute:auto/best-reasoning`.
- **Dashboard** (`http://localhost:20128/dashboard`) tem senha definida (reset via `omniroute reset-password`, servidor parado antes). A senha NÃO é necessária para o fallback de inferência (API `/v1` é keyless). NÃO versionar a senha no git.
- O OmniRoute usa providers free (qualidade variável). É fallback de resiliência, não substitui o principal para tarefas críticas.
- Se quiser usar uma API key própria no OmniRoute (melhor qualidade), setar no dashboard dele e adicionar `api_key` ou `key_env` no `custom_providers`.

## Comandos úteis
```bash
omniroute                                  # sobe o gateway (:20128)
curl http://localhost:20128/v1/models      # lista modelos
hermes fallback list                       # ver chain de fallback
bash ~/.hermes/scripts/start-omniroute.sh  # watchdog manual
```
