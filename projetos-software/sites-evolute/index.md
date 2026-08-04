# Evolute — Site institucional

## Repositório
- Remoto: `https://github.com/Alves1986/Evolute.git`
- Branch principal: `main`

## Stack
- Next.js 14 App Router + TypeScript + Tailwind CSS
- Hospedagem: Vercel
- SEO: sitemap + robots configurados

## Status atual
- Estrutura `app/` padronizada e limpa
- Remote ajustado para HTTPS sem token
- Páginas: `/`, `/profissionais`, `/servicos`, `/clinica`, `/contato`
- SEO básico adicionado
- Build local bloqueado por corrupção do `node_modules/next` no ambiente atual; você pode resolver com reinstalação limpa + `npm cache clean --force`

## Pendente
- Validar build em máquina local
- Subir para Vercel e validar rotas
- Substituir assets/placeholder por fotos reais quando disponíveis

## Observações
- Segundo Cérebro estava desatualizado em relação ao código real do repositório
- Estrutura duplicada `src/` foi removida
- Ícones mapeados via `lib/data.ts` para evitar quebra por nomes
