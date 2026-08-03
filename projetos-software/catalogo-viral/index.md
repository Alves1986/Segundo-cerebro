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

## Estado atual (auto)\n> Atualizado 2026-08-03. Gerado pela skill projeto-auto-sync.\n\n- **Tipo:** local sem git\n- **Push:** 2026-07-25T00:39:20Z\n- **Repo:** https://github.com/Alves1986/catalagoviral