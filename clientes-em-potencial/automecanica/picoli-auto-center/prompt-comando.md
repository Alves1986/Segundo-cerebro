# Prompt de Comando — Picoli Auto Center
> Use para gerar/rodar o projeto do site deste cliente.

## Stack
Next.js 16 (App Router) + Tailwind CSS + Supabase (se precisar de agendamento/login).

## Prompt para IA (Claude Code / Hermes Agent / v0)
```
Crie um site institucional responsivo para "Picoli Auto Center", automecanica em Telêmaco Borba - PR.
Seções: Home (hero + WhatsApp), Sobre, Serviços, Galeria, Contato (mapa + formulário).
Paleta: definir com o cliente. Mobile-first. Botão flutuante de WhatsApp.
Hospedar na Vercel. SEO local básico.
```

## Comandos (se gerar localmente)
```
npx create-next-app@latest picoli-auto-center --ts --tailwind --app
cd picoli-auto-center
npm run dev
# depois: npm run build && vercel --prod
```

## Deploy
- Vercel (grátis) ou Netlify. Domínio: sugerir picoli-auto-center.com.br (verificar disponibilidade).
