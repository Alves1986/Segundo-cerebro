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

## Status de sincronização (2026-07-31)
- **Repo GitHub:** https://github.com/Alves1986/Vertexconsulting (correto, com "consulting" no final)
- **Último push:** f03285e "fix: resolve dark circle mask bug on landing page hero section"
- **Site produção:** https://vertexxconsulting.vercel.app (HTTP 200, deploy automático no push)
- **Build:** passa limpo (`npm run build`, 1.45s, 0 erros)
- **Fluxos testados pelo Anderson:** envio de lead + login CRM OK
- Observação: o auto-sync anterior apontava para repo errado (Vertexx com X dobrado) gerando 404 falso. Repo correto é Vertexconsulting.