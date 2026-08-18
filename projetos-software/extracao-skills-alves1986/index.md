# Extração de Skills Alves1986 → Manus.ai

**Data:** 2026-08-17
**Status:** ✅ Concluído
**Fonte:** https://github.com/Alves1986 (20 repos)
**Destino:** `C:\Anderson\Skills`

## Objetivo
Extrair `SKILL.md` de cada repo do Alves1986 para `C:\Anderson\Skills\<repo>/`, ignorando os sem arquivo, com objetivo de carregar essas habilidades no Manus.ai.

## Resultado
- **687 arquivos `SKILL.md` únicos** (5,36 MB)
- **0 paths quebrados** (validado).
- Deduplicação por SHA-256: removeu 655 duplicatas (ex: `impeccable` tinha a mesma skill em `.claude/.cursor/.gemini/.kiro/.opencode/.pi/.qoder/.rovodev/.trae/.trae-cn/.plugin`).

## Distribuição por repo

| repo | count | path raiz |
|---|---|---|
| open-design | 438 | open-design/<template>/SKILL.md |
| ruflo | 189 | ruflo/.agents/skills/ + plugins/<p>/skills/ |
| superpowers | 14 | superpowers/skills/ |
| taste-skill | 13 | taste-skill/skills/ |
| impeccable | 12 | impeccable/.<agente>/skills/impeccable/ |
| ui-ux-pro-max-skill | 7 | ui-ux-pro-max-skill/.claude/skills/ |
| playwright | 5 | playwright/.claude/skills/ |
| obsidian-skills | 5 | obsidian-skills/skills/ |
| motion | 2 | motion/.agents/skills/ |
| huashu-design | 1 | huashu-design/SKILL.md (root) |
| andrej-karpathy-skills | 1 | andrej-karpathy-skills/skills/karpathy-guidelines/ |

## Repos sem SKILL.md (ignorados, 0 arquivos)
`claude-directory` · `animate.css` · `awesome-claude-code` · `awesome-design-md` · `evolution-go` · `firecrawl` · `get-shit-done` · `misotts` · `ntfy`

## Decisões de engenharia aplicadas
1. `/tmp` no git-bash Windows **não cria working tree** — migrei pra `$USERPROFILE` (path nativo).
2. Clones grandes (`open-design` 438, `ruflo` 189) travavam o budget de 600s de um subagente — refiz como **clonagem isolada por repo com timeout controlado em Python**.
3. Deduplicação por SHA-256 — mesmo path de skill repetido em subdirs de agentes (`.claude/.cursor/.gemini...`) colapsou pra 1 cópia canônica.
4. Scripts scratch (`clone-skills-v*.sh`, `extract-remaining-skills.py`, `cleanup-*.py`) e clones temporários foram **removidos** — só restam os 687 `SKILL.md` em `C:\Anderson\Skills`.

## Ver arquivos
- `C:\Anderson\Skills` — 687 `SKILL.md` prontos pra importar no Manus.ai (cada `<repo>/<sub>/SKILL.md` = 1 habilidade).
- `C:\Users\Cassi\AppData\Local\Temp\omniroute-opencode-investigation.txt` — relatório técnico paralelo (OmniRoute + OpenCode).

## Tags
#skills #manus-ai #open-design #ruflo #extracao #github #automacao #engenharia-de-prompt
