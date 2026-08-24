# Vertexx Consulting (Landing Page)

Landing page de captação de leads para a Vertexx Consulting (posicionamento, liderança, conteúdo estratégico e IA aplicada ao negócio). Foco em formulário de diagnóstico que manda lead pro banco.

**Identidade:** preto, dourado/bronze, cinza escuro. Tom profissional, autoritário, focado em resultados.

## Arquivos do projeto
- Código fonte (Mac): `file:///Users/andersonalves/Vertex/`
- Código fonte (Windows): `file:///C:/Anderson/Vertexconsulting/`
- Briefing original: `file:///C:/Anderson/Vertexconsulting/DOCUMENTATION.md`
- Imagem de logo/marca: `file:///C:/Anderson/Vertex.jpeg`
- Carrossel de apresentação: `file:///C:/Anderson/carrossel_vertexx/carrossel.html`
- Notas antigas: `file:///C:/Users/Cassi/OneDrive/Documentos/Anderson/Vertex`

**Como gravar aqui:** notas de reunião com o cliente, copy, decisões de seção vão nesta pasta.

## Stack e deploy
- React + TypeScript + Vite, Supabase (leads), Evolution API (WhatsApp)
- Repo GitHub: https://github.com/Alves1986/Vertexconsulting (branch main)
- Produção: https://vertexxconsulting.vercel.app (deploy AUTOMATICO no push, via integração GitHub -> Vercel)
- Login CRM: `/crm/login` (Supabase Auth)

## Estado atual (2026-07-31)
- Fotos reais do espaço/produtos: SOMENTE como background com parallax (hero, servicos, sobre, processo, contato). Nunca galeria.
- Logo hero: fundo transparente, sem borda, sem rotacao no scroll.
- Formulario: modal com blur na pagina (nao rola ate a secao). 8 campos OBRIGATORIOS: nome, email, whatsapp (com mascara automatica (DD) XXXXX-XXXX), empresa, ja possui site?, @ do instagram (com icone), servico, mensagem. Botao trava ate tudo preenchido. Aviso de sucesso: "Nossa equipe entrara em contato o mais breve possivel."
- Secao contato: centralizada, cards espacados (localizacao, horario, instagram @vertexxconsulting com icone clicavel).
- CRM: contatos com Instagram e WhatsApp clicaveis com logos (tabela + detalhe).

## Seguranca (auditoria 2026-07-31)
- RLS Supabase FECHADO na tabela contacts: anon so pode INSERT com status='Novo' (WITH CHECK), SELECT/UPDATE/DELETE so para authenticated (logado no CRM).
- Funcao RPC `mark_whatsapp_sent(uuid)` security definer para marcar envio sem abrir UPDATE anon.
- createContact gera UUID no cliente e insere SEM `.select()` (RLS bloqueia leitura anon pos-insert).
- Chave Evolution API via env var `VITE_EVOLUTION_API_KEY` (nunca hardcode no codigo).
- Security headers no vercel.json (CSP, X-Frame-Options, X-Content-Type-Options, Referrer-Policy, Permissions-Policy).
- Testes de invasao: anon nao le/alterar/apaga leads; INSERT com status forjado e rejeitado (401).

## Arquitetura de IA (decisão 2026-07-31)

**Objetivo:** adicionar IA de atendimento ao sistema Vertexx, usando a Evolution API já configurada.

**Decisão:**
- **Dify** como camada de IA (agentes/LLM) — self-host futuro
- **Evo CRM**: usar SÓ o módulo de conversação (não o monólito completo de 6 serviços)
- **Identidade visual:** cara de Evo CRM + cores da Vertex (preto #0a0a0a, dourado #c9a84c, branco gelo #f0f0f0, Inter bold)
- **WhatsApp:** Evolution API já rodando (bridge nativa Dify ↔ Evolution)

**Por que não na VM Oracle:** VM micro (~1GB RAM) não aguenta Dify (precisa 2GB+). Decisão: subir Dify no **Render free tier** por enquanto.

**Render free tier (limitacoes conhecidas):**
- 750 horas/mês grátis
- Free web service DORME após 15min de inatividade (primeira requisição demora ~30-60s pra acordar)
- RAM ~512MB-1GB (Dify leve com SQLite, sem PostgreSQL/Redis)
- Serve pra DEV/TESTE, não produção

**Plano de consolidação futura (quando contratar plano pago):**
- Subir Dify + Evo CRM module num VPS único (ex: Render paid, ou VPS 4GB+)
- Juntar tudo numa conta só (Render ou Oracle upgraded)
- Conectar Dify + Evo module + Evolution + Supabase num só ambiente

**Stack final pretendida:**
```
Lead (WhatsApp) → Evolution API (ja roda) → Dify (IA, Render free) → Evo CRM module (conversacao, re-skin Vertex) → Supabase (leads)
```

**Próximos passos:**
1. Criar conta Render + subir Dify (docker-compose leve, SQLite)
2. Conectar Dify na Evolution API (config nativa DifyCreds na instância)
3. Baixar Evo CRM, isolar frontend de conversação, re-skinnar cores Vertex
4. Documentar credenciais e URLs pra consolidação futura

**Keep-alive do Dify (cron externo):**
- Serviço: https://console.cron-job.org (agendador externo, não no Hermes)
- Funcao: fazer HTTP request periodico no URL do Dify pra evitar sleep de 15min do Render free
- STATUS: pendente — URL do Dify ainda nao existe (Dify nao subiu no Render ainda)
- ACAO: quando o Dify subir e gerar a URL (ex: vertexx-dify.onrender.com), colar essa URL no cron-job.org pra manter acordado

## Estado atual (auto)\n> Atualizado 2026-08-24. Gerado pela skill projeto-auto-sync.\n\n- **Tipo:** so GitHub\n- **Push:** erro (HTTP Error 404: Not Found)\n- **Repo:** https://github.com/Alves1986/Vertexx