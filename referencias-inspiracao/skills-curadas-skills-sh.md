---
tags: [skills, skills-sh, curadoria, referencias, sites-sistemas]
criado: 2026-07-25
fonte: skills.sh + skillsmp.com (varredura 2026-07-25)
---

# Skills Curadas (skills.sh / skillsmp.com)

Varredura feita em 2026-07-25 no diretório de Agent Skills (skills.sh e skillsmp.com).
Selecionadas as que servem para criar **sites/sistemas** (Next.js + Supabase) e **marketing/conteúdo** para os projetos do Anderson.

> Como instalar (padrão skills.sh): `npx skills add <owner/repo>` ou copiar a SKILL.md para `~/.hermes/skills/` ou `.reference/` do projeto.
> No Hermes, as skills vão em `~/.hermes/skills/<nome>/SKILL.md`.

## Site / Landing Page (conversão)
- **landing-page-generator** (alirezarezvani/claude-skills) — gera landing Next.js/React TSX + Tailwind, frameworks PAS/AIDA/BAB, Core Web Vitals. [skillsmp](https://skillsmp.com/creators/alirezarezvani/claude-skills/product-team-skills-landing-page-generator)
- **landing-page-guide** (bear2u/my-skills) — guia completo landing Next.js 14+ App Router + ShadCN, 11 elementos de alta conversão. [skillsmp](https://skillsmp.com/creators/bear2u/my-skills/skills-landing-page-guide)
- **landing-page-copy** (mohitagw15856/pm-claude-skills) — copy de landing seção a seção (hero, problema, solução, prova, FAQ, CTA). [skillsmp](https://skillsmp.com/creators/mohitagw15856/pm-claude-skills/plugins-pm-copy-skills-landing-page-copy)
- **ui-ux-pro-max** (nextlevelbuilder/ui-ux-pro-max-skill) — inteligência de UI/UX (84 estilos, 192 paletas, 57 font pairings). Já está no vault como repo. [skillsmp](https://skillsmp.com/creators/nextlevelbuilder/ui-ux-pro-max-skill/claude-skills-ui-ux-pro-max)
- **web-perf** (cloudflare/skills) — otimização de performance web (Core Web Vitals). [skillsmp](https://skillsmp.com/creators/cloudflare/skills/web-perf)

## Backend / Dados (Supabase)
- **supabase** (openai/plugins) — qualquer tarefa Supabase (DB, Auth, Edge, Realtime, Storage, RLS). [skillsmp](https://skillsmp.com/creators/openai/plugins/plugins-supabase-skills-supabase)
- **supabase-postgres-best-practices** (davila7/claude-code-templates) — otimização Postgres/schema. [skillsmp](https://skillsmp.com/creators/davila7/claude-code-templates/cli-tool-components-skills-database-supabase-postgres-best-practices)
- **supabase-deploy-integration** (jeremylongshore) — deploy produção, migrations, rollback. [skillsmp](https://skillsmp.com/creators/jeremylongshore/claude-code-plugins-plus-skills/plugins-saas-packs-supabase-pack-skills-supabase-deploy-integration)
- **supabase-ci-integration** (jeremylongshore) — CI/CD GitHub Actions + Supabase. [skillsmp](https://skillsmp.com/creators/jeremylongshore/claude-code-plugins-plus-skills/plugins-saas-packs-supabase-pack-skills-supabase-ci-integration)

## Marketing / Conteúdo / Social
- **instagram-carousel** (LeoYeAI/openclaw-master-skills) — gera carrossel IG em HTML 4:5 export-ready. [skillsmp](https://skillsmp.com/creators/leoyeai/openclaw-master-skills/skills-instagram-carousel-release-v1)
- **instagram-publisher** (renatoasse/opensquad) — publica carrossel IG via Graph API (o do vídeo que extraímos). [skillsmp](https://skillsmp.com/creators/renatoasse/opensquad/skills-instagram-publisher)
- **instagram-automation** (davepoon/buildwithclaude) — automação IG via Rube MCP (posts, carrosséis, insights). [skillsmp](https://skillsmp.com/creators/davepoon/buildwithclaude/plugins-all-skills-skills-instagram-automation)
- **marketing-campaign** (affaan-m/ECC) — planejamento e execução de campanha ponta a ponta. [skillsmp](https://skillsmp.com/creators/affaan-m/ecc/skills-marketing-campaign)
- **marketing-loops** (coreyhaines31/marketingskills) — workflows de marketing recorrentes (cadência automática). [skillsmp](https://skillsmp.com/creators/coreyhaines31/marketingskills/skills-marketing-loops)
- **marketing-psychology** (nexu-io/open-design) — princípios psicológicos e ciência comportamental pra copy/design. [skillsmp](https://skillsmp.com/creators/nexu-io/open-design/skills-marketing-psychology)
- **marketing-ideas** (coreyhaines31/marketingskills) — ideias e táticas de crescimento. [skillsmp](https://skillsmp.com/creators/coreyhaines31/marketingskills/skills-marketing-ideas)
- **baoyu-infographic** (jimliu/baoyu-skills) — infográficos e imagens de conteúdo. [skillsmp](https://skillsmp.com/creators/jimliu/baoyu-skills/baoyu-infographic)
- **firecrawl-lead-gen** (firecrawl/firecrawl-workflows) — geração de leads via scrap. [skillsmp](https://skillsmp.com/firecrawl/firecrawl-workflows/firecrawl-lead-gen)

## Como usar na criação
Cada nicho em `prompts-base/` aponta quais dessas skills usar na ordem certa. O Hermes carrega a skill correspondente antes de gerar o projeto, evitando reexplicar tudo.
