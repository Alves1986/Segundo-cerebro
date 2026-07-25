# Prompt de Comando — Dom do Mah
> Use para gerar/rodar o projeto do site deste cliente.

## Stack
Next.js 16 (App Router) + Tailwind CSS + Supabase (se precisar de agendamento/login).

## Prompt para IA (Claude Code / Hermes Agent / v0)
```
Crie um site institucional responsivo para "Dom do Mah", restaurantes em Telêmaco Borba - PR.
Seções: Home (hero + WhatsApp), Sobre, Serviços, Galeria, Contato (mapa + formulário).
Paleta: definir com o cliente. Mobile-first. Botão flutuante de WhatsApp.
Hospedar na Vercel. SEO local básico.
```

## Comandos (se gerar localmente)
```
npx create-next-app@latest dom-do-mah --ts --tailwind --app
cd dom-do-mah
npm run dev
# depois: npm run build && vercel --prod
```

## Deploy
- Vercel (grátis) ou Netlify. Domínio: sugerir dom-do-mah.com.br (verificar disponibilidade).
