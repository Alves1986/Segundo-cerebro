# Prompt de Comando — Up Fitness
> Use para gerar/rodar o projeto do site deste cliente.

## Stack
Next.js 16 (App Router) + Tailwind CSS + Supabase (se precisar de agendamento/login).

## Prompt para IA (Claude Code / Hermes Agent / v0)
```
Crie um site institucional responsivo para "Up Fitness", academias em Telêmaco Borba - PR.
Seções: Home (hero + WhatsApp), Sobre, Serviços, Galeria, Contato (mapa + formulário).
Paleta: definir com o cliente. Mobile-first. Botão flutuante de WhatsApp.
Hospedar na Vercel. SEO local básico.
```

## Comandos (se gerar localmente)
```
npx create-next-app@latest up-fitness --ts --tailwind --app
cd up-fitness
npm run dev
# depois: npm run build && vercel --prod
```

## Deploy
- Vercel (grátis) ou Netlify. Domínio: sugerir up-fitness.com.br (verificar disponibilidade).
