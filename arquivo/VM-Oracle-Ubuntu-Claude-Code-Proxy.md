# VM Oracle Cloud (Ubuntu 22.04 micro) — Claude Code Proxy

- **Hostname:** claude-bot
- **IP público:** 129.213.166.201 (efêmero — confirma antes de usar)
- **OS:** Ubuntu 22.04 (micro VPS ~1GB — só API/agente, NÃO deploy Next.js pesado)
- **SSH user:** ubuntu
- **SSH key:** `C:\Anderson\Segundo-cerebro\pessoal-vida\ssh-key-2026-07-31.key` (+ `.pub`)
- **Claude Code:** v2.1.197 (no momento; desktop Windows tá 2.1.220)

## SSH
```bash
ssh -i "C:/Anderson/Segundo-cerebro/pessoal-vida/ssh-key-2026-07-31.key" -o StrictHostKeyChecking=no ubuntu@129.213.166.201
```

## Proxy local (OpenRouter→Anthropic shim)
Claude Code não tem native OpenRouter; usa proxy `proxy.js` rodando em `localhost:8080` na VM.

- **Arquivo:** `~/proxy.js` (Node HTTP proxy — recebe `/v1/messages` Anthropic, encaminha pro OpenRouter `/api/v1/chat/completions`)
- **Env vars (no .bashrc, linha ~118-122):**
```bash
export ANTHROPIC_BASE_URL=http://localhost:8080
export ANTHROPIC_API_KEY=dummy-local-proxy
export ANTHROPIC_MODEL=nvidia/nemotron-3-ultra-550b-a55b:free  # OU poolside/laguna-s-2.1:free
export OR_KEY=sk-or-v1-...
export OR_MODEL=nvidia/nemotron-3-ultra-550b-a55b:free
```
- **proxy.env:** `OR_KEY=sk-...` + `export OR_MODEL=...` (backup)
- **start-proxy.sh:** exporta `PROXY_BASE_URL`, `PROXY_API_KEY`, `PROXY_MODEL`, `PROXY_PORT=8080` + chama `claude-code-proxy` (npm pkg, mas tá quebrado nessa versão — workaround: usa `node ~/proxy.js` direto)

## Como iniciar o proxy (passo a passo validado)
```bash
# 1. Kill instância antiga
pkill -f "node.*proxy.js" 2>/dev/null; sleep 1

# 2. Start com env exportada (key deve vir do .bashrc ou clipboard)
source ~/.bashrc
export OR_KEY="<CHAVE_OPENROUTER_AQUI>"
export OR_MODEL="nvidia/nemotron-3-ultra-550b-a55b:free"
nohup node ~/proxy.js > ~/proxy.log 2>&1 &
echo "PID:$!"

# 3. Verify
sleep 2
cat ~/proxy.log    # "proxy 8080"
curl -s http://localhost:8080/v1/models   # deve listar modelos
```

## Testar via curl (formato Anthropic)
```bash
curl -s http://localhost:8080/v1/messages \
  -H "Content-Type: application/json" \
  -d '{"model":"nvidia/nemotron-3-ultra-550b-a55b:free","messages":[{"role":"user","content":"oi"}],"max_tokens":100}'
```

## Modelos free no OpenRouter (validados 2026-07)
- `poolside/laguna-s-2.1:free` — coding agent (118B total, 8B ativos) — mas tá com rate-limit (429) free tier
- `nvidia/nemotron-3-ultra-550b-a55b:free` — reasoning MoE (550B total) — testar disponibilidade
- `inclusionai/ling-3.0-flash:free` — 124B MoE, free
- `google/gemini-3.6-flash` — pago, mas rápido

## Troubleshooting
- **401 "User not found"** → OpenRouter key expirada/revogada → gerar nova em https://openrouter.ai/settings/keys
- **429 Rate limit** → model free tá no limite diário → trocar de model ou esperar reset
- **404 no /v1/chat/completions** → use `/v1/messages` (formato Anthropic) — o proxy.js só trata isso
- **"cli.js does not exist"** → Claude Code v2.1.x mudou a estrutura (`bin/claude.exe` + `cli-wrapper.cjs`) — ignora, usa `node ~/proxy.js` direto
- **Proxy morre** → `pgrep -af node` pra checar; o processo tá como PID no stdout do start

## Claude Code login
Sem autenticação Anthropic direta — Claude Code CLI precisa de `/login`. Via proxy: a key `dummy-local-proxy` não autentica; resolver usando a API key real do Anthropic (se disponível) configurada via `ANTHROPIC_API_KEY` REAL no `.bashrc`, com `ANTHROPIC_BASE_URL` apontando pro proxy.