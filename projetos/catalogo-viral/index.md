# Catálogo Viral

Webapp para afiliados de e-commerce (Shopee / TikTok): catálogo de produtos de alta comissão, geração de links rastreáveis, copy com IA e disparo em grupos de WhatsApp.

**Stack:** Next.js 14 (App Router) + TypeScript strict + Tailwind + Framer Motion + Supabase (Postgres, Auth, RLS multi-tenant) + OpenAI (gpt-4o-mini) + Evolution API (WhatsApp) + Vercel.

**No disco:** [pasta catalogo-viral](file:///C:/Users/Cassi/OneDrive/Documentos/Anderson/catalogo-viral/)
**No GitHub:** https://github.com/Alves1986/catalagoviral (remote confere com o clone local)
**Plano de 7 dias:** [Catalogo_Viral_Plano_7_Dias.md](file:///C:/Users/Cassi/OneDrive/Documentos/Anderson/Nova%20pasta/Catalogo_Viral_Plano_7_Dias.md)
**Plano de implementação (947 linhas):** [Plano_Implementacao.md](file:///C:/Users/Cassi/OneDrive/Documentos/Anderson/Nova%20pasta/Plano_Implementacao.md)
**Prompts de execução:** [Catalogo_Viral_Prompts_Execucao.md](file:///C:/Users/Cassi/OneDrive/Documentos/Anderson/Nova%20pasta/Catalogo_Viral_Prompts_Execucao.md)

**Resumo do plano (MVP 7 dias):**
- Mantém: catálogo de produtos + link de afiliado, gerador de copy via IA, disparo em fila para grupos WhatsApp (Evolution API), dashboard simples, auth multi-tenant básico.
- Adia (v2): sincronização automática Shopee/TikTok (adapter trocado depois), agente autônomo ECC, memória persistente claude-mem, app mobile, gamificação.
- Pré-requisitos fora do código: cadastro Shopee Affiliate, TikTok Shop Partner, projeto Supabase, conta OpenAI, conta Vercel.

**Como gravar aqui:** notas de escopo, decisões de arquitetura, bugs e copias vão nesta pasta.

## Estado atual (auto)
> Atualizado automaticamente em 2026-07-23. Secao gerada pela skill projeto-auto-sync. Nao editar a mao.

- **Tipo:** projeto local (git)
- **Branch:** main
- **Modificacoes nao commitadas:** 6
- **Arquivos alterados (amostra):**
  - app/whatsapp/page.tsx
  - components/CopyModal.tsx
  - lib/config.ts
  - app/api/evolution/
  - lib/evolution.ts
  - start_local.sh
- **Ultimo commit:** 89c9b42 2026-07-23 20:25:45 -0300 Catalogo: filtros (plataforma/categoria/busca), ranking 'quentes', 1-clique gerar link + disparo multi-grupo, cadastro pede dados basicos e perfil pre-preenche
- **Ultimo push (GitHub):** 2026-07-23T23:25:54Z
- **Repo:** https://github.com/Alves1986/catalagoviral
