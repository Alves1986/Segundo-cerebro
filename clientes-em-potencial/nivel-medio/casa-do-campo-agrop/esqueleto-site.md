# Esqueleto de Projeto — Casa do Campo Agrop
> Nicho: nivel-medio | Cidade: Telêmaco Borba - PR
> Tipo: SISTEMA DE GESTÃO INTERNA (operação do dia a dia)
> Dor operacional identificada: Agropecuária (tudo para o campo), 245 seguidores IG, só rede social, sem catálogo de produtos online.
> Gerado com base nos master prompts padrão do Anderson (alto padrão).

## Por que não é site genérico
Cada tela/funcionalidade abaixo nasce da dor real do nicho (auditada na prospecção), não de lista "Home/Sobre/Contato" copiada. O objetivo é fechar contrato mostrando sistema sob medida.

## Mapa de páginas / telas (mínimo necessário)
- **Login do dono** (Supabase Auth) — acesso só do operador.
- **Dashboard do dia** — agenda de hoje, próximos atendimentos, atalho "concluir".
- **Agenda/Agendamento** — criar/editar horário, cliente, serviço; bloqueio de conflito.
- **Cadastro de Cliente** — nome, contato, histórico de atendimentos por pessoa.
- **Estoque** (se aplicável) — itens usados, alerta de baixo estoque.
- **Configurações** — dados do negócio, WhatsApp de produção p/ lembretes.

## Stack técnica (obrigatória em todo projeto)
- **Front-end:** Next.js (App Router) + TypeScript strict (any proibido) + Tailwind com tokens do DESIGN.md.
- **Backend/Dados:** Supabase (Postgres + RLS em TODA tabela + Auth + Storage + Realtime).
- **Deploy:** Vercel (preview por PR) + GitHub (main protegida, .env.example, nunca segredo commitado).
- **Regras:** mobile-first, Core Web Vitals no verde, acessibilidade AA, rate limit em formulário público, LGPD (consentimento em captura de lead).

### Pipeline de execução (resumo das Fases 1-8 do master-prompt-sistema-gestao-interna.md)
1. **Descoberta Operacional** — validar a dor real ("Agropecuária (tudo para o campo), 245 seguidores IG, só rede social, sem catálogo de produtos online.") e mapear o fluxo manual atual (WhatsApp/caderno). Priorizar MVP pela dor #1, não por completude.
2. **Design System (painel interno)** — clareza operacional acima de estética; alvo de toque >=44px p/ tablet/celular no balcão; estados vazios claros ("nenhum agendamento hoje").
3. **Mapa de telas mínimo** — Agenda/Agendamento, Cadastro de Cliente (com histórico), Estoque (se aplicável), Configurações.
4. **Metodologia** — superpowers + get-shit-done + ruflo + claude-mem.
5. **Stack** — Next.js (App Router) + TypeScript strict + Tailwind + Supabase (Postgres + RLS + Auth + Realtime). Tabelas: `agendamentos`, `clientes`, `historico_atendimento`, `estoque_itens`.
6. **Automação** — lembrete de agendamento via evolution-api (1:1, nunca disparo em massa).
7. **QA** — playwright E2E: criar agendamento -> aparece na agenda -> concluir -> histórico atualizado.
8. **Handoff** — README simples para o dono + README.dev para o Anderson. Comparativo honesto de custo vs. ferramenta atual.

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

