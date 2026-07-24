# Projeto — Portfólio + Chatbot de Prospecção

Sistema de captação de clientes: site público (portfólio por nicho) + chatbot de prospecção (entrevista estruturada) + backend Supabase (salva lead e notifica o Anderson no Telegram). Documentação de planejamento e os master prompts de construção vivem nesta pasta do vault (conteúdo é texto, não código).

**Stack alvo (definida em fluxo-completo-sistema.md):** Next.js + TypeScript strict + Tailwind + Supabase (Postgres/Auth/RLS) + Vercel + API route chamando Anthropic API (o `cerebro-chatbot-prospeccao.md` vira system prompt). Notificação via Telegram Bot API (reaproveita o bot OpenClaw já configurado).

**Estado:** fase de planejamento. Os 7 documentos abaixo formam a base completa antes de qualquer código.

## Documentos (fonte de verdade)

1. **[fluxo-completo-sistema.md](fluxo-completo-sistema.md)** — arquitetura em 3 camadas, mapa de páginas, jornada do visitante, fases de construção (Fase 1 a 7).
2. **[cerebro-chatbot-prospeccao.md](cerebro-chatbot-prospeccao.md)** — FONTE ÚNICA DE CONTEÚDO do bot: regras anti-invenção, taxonomia de 15 nichos, sistemas de referência, faixas de preço, máquina de estados (1 a 6) e schema de saída do lead. O bot NUNCA pode citar sistema fora deste arquivo.
3. **[equipe-agentes-orquestracao.md](equipe-agentes-orquestracao.md)** — papéis dos agentes (Agente 0 a 5), protocolo de reporte, roteador de master prompt por nicho, execução prática (Antigravity/Claude Code).
4. **[prompt-extracao-instagram-manus.md](prompt-extracao-instagram-manus.md)** — prompt de auditoria de Instagram (Usado no Manus.ai) que vira insumo da Fase 1 dos master prompts.
5. **[master-prompt-sites-alto-padrao.md](master-prompt-sites-alto-padrao.md)** — receita de construção de site institucional/sistema completo (Fases 1 a 8). Usado para nichos: negocio_local, musica_estudio, cerimonial_eventos, audiovisual, igreja_ministerio.
6. **[master-prompt-landing-page-infoproduto.md](master-prompt-landing-page-infoproduto.md)** — receita de landing page de alta conversão (infoproduto/curso). Usado quando o lead vende curso/mentoria.
7. **[master-prompt-sistema-gestao-interna.md](master-prompt-sistema-gestao-interna.md)** — receita de sistema operacional interno (agenda/estoque/prontuário). Usado para nichos: beleza_estetica, loja_carros, taxista_transporte, oficina_mecanica, petshop_veterinaria, academia_personal, consultorio_saude, restaurante_delivery, loja_roupas.

## Como se conectam

- O `cerebro-chatbot-prospeccao.md` é o filtro de conteúdo do bot (o que pode ou não dizer).
- O `fluxo-completo-sistema.md` é a arquitetura (onde cada peça mora).
- O `equipe-agentes-orquestracao.md` é o motor de construção (quem faz o quê, em que ordem).
- Os 3 master prompts + o `prompt-extracao-instagram-manus.md` são a "receita" de execução de cada novo projeto de cliente qualificado.

## Roteador (de equipe-agentes-orquestracao.md, seção 3.1)

| nicho_detectado | master prompt |
|---|---|
| negocio_local, musica_estudio, cerimonial_eventos, audiovisual, igreja_ministerio | master-prompt-sites-alto-padrao |
| curso/mentoria/infoproduto | master-prompt-landing-page-infoproduto |
| beleza_estetica, loja_carros, taxista_transporte, oficina_mecanica, petshop_veterinaria, academia_personal, consultorio_saude, restaurante_delivery, loja_roupas | master-prompt-sistema-gestao-interna |
| criador_conteudo | não aplicável (Teleprompter Pro Studio é produto próprio) |

## Como gravar aqui
Notas de escopo, decisões de arquitetura, copias e o progresso de implementação vão nesta pasta. O código (quando criado) fica no disco/clone local e é acessado por link `file:///`, nunca copiado pra dentro do vault.
