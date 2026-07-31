---
tags: [contexto, hermes, terminal, proximos-passos]
criado: 2026-07-31
status: pronto
---

# Contexto para Hermes no terminal (dentro do sistema Vertexx)

Este arquivo existe para quando o Anderson abrir o Hermes DIRETO no terminal dentro de `C:\Anderson\Vertexconsulting\`. O Hermes já sabe o estado — isto é só um resumo de onde retomar.

## Estado do sistema (verificado 2026-07-31)
- Site no ar (HTTP 200): https://vertexxconsulting.vercel.app
- Build limpo, deploy automático Vercel no push
- Supabase: tabela `contacts` OK, RLS fechado. **AINDA NÃO existe tabela de conversas/mensagens**
- Evolution API: rodando e configurada
- Stack: React 19 + Vite + TypeScript + Supabase + Evolution API

## Próximo produto: VERTEXX CRM (IP próprio)
Frontend de atendimento/conversação do ZERO, com:
- Cara de Evo CRM (lista de conversas à esquerda, chat centro, painel de contato direita)
- LEVE e RÁPIDO (Vite, sem peso)
- Cores Vertex: preto #0a0a0a, dourado #c9a84c, branco gelo #f0f0f0, Inter bold
- Vendável no futuro (NÃO usar monólito Evo CRM)
- Consome Supabase (contacts + novas tabelas de chat) + Evolution API (WhatsApp)

## Decisões pendentes (perguntar ao Anderson se não souber)
1. Onde roda o CRM? (Vercel igual o site? ou outro)
2. Chat consome Evolution direto (webhook→Supabase→frontend) ou via Dify (IA no meio)?
3. Esquema de conversas: criar tabelas `conversations` + `messages` no Supabase

## Estrutura Dify já criada (pasta `dify/` neste projeto)
- docker-compose.render.yml (leve, SQLite)
- render.yaml (Blueprint 2 services)
- Dockerfile.api, Dockerfile.web
- env.example
- README.md com passo a passo Render
- Keep-alive: console.cron-job.org (pendente URL do Dify)

## Comandos úteis (Windows/MSYS)
- Build: `npm run build` (dentro de C:\Anderson\Vertexconsulting)
- Dev: `npm run dev`
- Site: https://vertexxconsulting.vercel.app
- Vault: C:\Anderson\Segundo-cerebro (auto-push 30min)
