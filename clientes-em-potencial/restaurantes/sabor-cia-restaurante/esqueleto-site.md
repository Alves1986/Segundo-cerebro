# Esqueleto de Projeto — Sabor & Cia Restaurante
> Nicho: restaurantes | Cidade: Telêmaco Borba - PR
> Tipo: SITE INSTITUCIONAL DE ALTO PADRÃO (apresentação + conversão)
> Dor operacional identificada: Cardápio desatualizado em PDF/Instagram, pedido só por WhatsApp manual, sem controle de pedido em andamento.
> Gerado com base nos master prompts padrão do Anderson (alto padrão).

## Por que não é site genérico
Cada tela/funcionalidade abaixo nasce da dor real do nicho (auditada na prospecção), não de lista "Home/Sobre/Contato" copiada. O objetivo é fechar contrato mostrando sistema sob medida.

## Mapa de páginas (por nicho, não genérico)
- **Home** — posicionamento em 3s de scroll (ex: "comida oriental desde 2007, peça pelo WhatsApp").
- **Cardápio / Catálogo** — fotos + preços + botão de pedido WhatsApp por item.
- **Sobre** — história, diferenciais, fotos reais do espaço.
- **Reserva/Pedido** — fluxo de pedido via WhatsApp ou agendamento.
- **Contato** — mapa, horário, WhatsApp em 1 toque, Instagram embutido.
- **/admin** — painel do dono (editar cardápio, ver pedidos/leads).

## Stack técnica (obrigatória em todo projeto)
- **Front-end:** Next.js (App Router) + TypeScript strict (any proibido) + Tailwind com tokens do DESIGN.md.
- **Backend/Dados:** Supabase (Postgres + RLS em TODA tabela + Auth + Storage + Realtime).
- **Deploy:** Vercel (preview por PR) + GitHub (main protegida, .env.example, nunca segredo commitado).
- **Regras:** mobile-first, Core Web Vitals no verde, acessibilidade AA, rate limit em formulário público, LGPD (consentimento em captura de lead).

### Pipeline de execução (resumo das Fases 1-8 do master-prompt-sites-alto-padrao.md)
1. **Descoberta e Inteligência** — auditar Instagram (paleta, tom, público), benchmark de nicho (3 locais + 3 referências alto padrão), persona e posicionamento em 1 frase.
2. **Design System** — escolher arquétipo em `awesome-design-md`, aplicar `ui-ux-pro-max-skill` (contraste AA, CTA acima da dobra), gerar DESIGN.md + tokens.
3. **Arquitetura de Informação + Copy** — mapa de páginas por nicho, copy real (sem placeholder), SEO on-page (LocalBusiness schema, Open Graph).
4. **Metodologia** — superpowers + get-shit-done + ruflo + claude-mem.
5. **Stack** — Next.js (App Router) + TypeScript strict + Tailwind + Supabase (Postgres + RLS + Auth + Storage + Realtime). Migrations versionadas.
6. **Admin/CRM + WhatsApp** — painel /admin (CRUD de conteúdo + leads), mini-CRM referência `wacrm`, automação via `evolution-api` (1:1).
7. **QA** — playwright E2E: formulário -> admin -> edição de conteúdo.
8. **Handoff** — deploy Vercel + README cliente + README.dev.

## Repositórios de referência (meus, organização Alves1986)
Clone em `.reference/` na raiz do projeto (pasta de apoio, não entra no código final):
- `awesome-design-md` — biblioteca DESIGN.md de marcas para definir arquétipo visual
- `ui-ux-pro-max-skill` — inteligência de UX (hierarquia, acessibilidade, conversão)
- `wacrm` — modelagem de mini-CRM de leads / cadastro de cliente
- `evolution-api` — automação WhatsApp (pré-qualificação / lembrete)
- `ruflo` — orquestração de agentes em paralelo
- `superpowers` — metodologia spec → plano → TDD → revisão
- `get-shit-done` — engenharia de contexto (specs pequenas)
- `claude-mem` — memória persistente de decisões
- `playwright` — QA/testes E2E

