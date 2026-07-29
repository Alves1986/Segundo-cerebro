# OmniRoute — Gateway de IA Universal

> **271+ provedores · 90+ free tiers · Endpoint único OpenAI-compatível**
> `http://localhost:20128/v1`

OmniRoute é um gateway de IA open-source que unifica centenas de provedores (OpenAI, Anthropic, Gemini, e 160+) atrás de **um único endpoint**. Valor central: roteamento inteligente com fallback em 4 camadas (Subscription → API Key → Cheap → Free), compressão de prompt (RTK + Caveman, 15–95% de economia de tokens) e resiliência (circuit breakers, rate limits).

---

## Instalação rápida (qualquer OS)

```bash
npm i -g omniroute
omniroute serve
```

Dashboard: `http://localhost:20128/dashboard`
API: `http://localhost:20128/v1`

---

## Índice das 45 Skills

### 🖥️ API Skills (24) — endpoint REST :20128/v1

| # | Skill | O que faz |
|---|-------|-----------|
| 1 | `omni-auth` | Autenticação Bearer/sessão. Obter token, configurar REQUIRE_API_KEY |
| 2 | `omni-providers` | Gerenciar 271+ provedores (OAuth, API keys, testes de conexão) |
| 3 | `omni-models` | Catálogo de modelos/aliases. Resolver nome, listar variantes |
| 4 | `omni-combos-routing` | Combos de fallback com 14 estratégias (priority, weighted, Auto-combo) |
| 5 | `omni-api-keys` | Criar/rotacionar/revogar chaves da API OmniRoute, scopes, limites |
| 6 | `omni-usage-logs` | Logs e analytics de uso por provider/modelo |
| 7 | `omni-budget` | Limites de gastos, quotas de tokens, rate limits |
| 8 | `omni-settings` | Config globais: system prompts, IP filters, combo defaults |
| 9 | `omni-proxies` | Proxy HTTP/HTTPS/SOCKS por provedor ou global |
| 10 | `omni-cache` | Cache de respostas LLM (TTL, cache semântico, estatísticas) |
| 11 | `omni-compression` | Compressão RTK + Caveman (reduz 60–90% dos tokens) |
| 12 | `omni-context-rtk` | Filtros RTK, context engineering, relay |
| 13 | `omni-resilience` | Circuit breakers, p50/p95/p99, health de provedores |
| 14 | `omni-cli-tools` | Ferramentas CLI expostas via API (plugins de automação) |
| 15 | `omni-tunnels` | Túneis ngrok/Cloudflare para expor o gateway |
| 16 | `omni-sync-cloud` | Sincronizar config para cloud |
| 17 | `omni-db-backups` | Backup/restore SQLite (snapshots incrementais) |
| 18 | `omni-webhooks` | Webhooks: request.completed, provider.error, budget.exceeded |
| 19 | `omni-mcp` | MCP server com 37 ferramentas (SSE/stdio/HTTP) |
| 20 | `omni-agents-a2a` | Protocolo A2A JSON-RPC 2.0 (6 skills internas) |
| 21 | `omni-version-manager` | Gerenciar serviços embutidos (9Router, CLIProxyAPI) |
| 22 | `omni-inference` | Endpoints OpenAI: chat, embeddings, images, audio, rerank |
| 23 | `omni-github-skills` | Buscar/instalar skills do GitHub para agentes |
| 24 | `omni-mcp` | (duplicado proposital no índice original) — MCP server |

### ⌨️ CLI Skills (21) — binário `omniroute`

| # | Skill | Comando | O que faz |
|---|-------|---------|-----------|
| 25 | `cli-serve` | `omniroute serve` | Start/stop/restart servidor + system tray |
| 26 | `cli-health` | `omniroute health` | Health check, componentes, watch |
| 27 | `cli-providers` | `omniroute providers` | Gerenciar provedores via CLI |
| 28 | `cli-keys` | `omniroute keys` | Criar/rotacionar chaves |
| 29 | `cli-models` | `omniroute models` | Consultar catálogo de modelos |
| 30 | `cli-chat` | `omniroute chat` | Chat interativo/REPL/streaming |
| 31 | `cli-routing` | `omniroute routing` | Gerenciar combos de routing |
| 32 | `cli-resilience` | `omniroute resilience` | Circuit breakers/quotas |
| 33 | `cli-compression` | `omniroute compression` | Testar compressão |
| 34 | `cli-contexts` | `omniroute contexts` | Contexts & sessions |
| 35 | `cli-cost-usage` | `omniroute cost` | Custo/uso/export |
| 36 | `cli-mcp` | `omniroute mcp` | Status MCP |
| 37 | `cli-a2a` | `omniroute a2a` | Servidor A2A |
| 38 | `cli-tunnel` | `omniroute tunnel` | Túneis |
| 39 | `cli-backup-sync` | `omniroute backup` | Backup/restore/sync |
| 40 | `cli-policy-audit` | `omniroute policy` | Audit logs/policies |
| 41 | `cli-batches` | `omniroute batches` | Batch inference |
| 42 | `cli-eval` | `omniroute eval` | Suítes de avaliação |
| 43 | `cli-plugins-skills` | `omniroute plugins` | Plugins, skills, memória |
| 44 | `cli-setup` | `omniroute setup` | Setup/config/autostart |
| 45 | `cli-skill-collector` | `omniroute skill-collector` | Detectar CLIs e instalar skills |

---

## Como testar se está funcionando

```bash
curl http://localhost:20128/v1/models
curl -s -m 40 http://localhost:20128/v1/chat/completions \
  -H "Content-Type: application/json" \
  -d '{"model":"auto/best-coding","messages":[{"role":"user","content":"OK"}],"max_tokens":20}'
```

---

**Repo oficial:** https://github.com/diegosouzapw/OmniRoute
**Fork pessoal (Anderson):** https://github.com/Alves1986/OmniRoute
