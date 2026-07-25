# Prompt de Comando — Sabor & Cia Restaurante
> Use para gerar/rodar o projeto do site deste cliente.

## Stack
Next.js 16 (App Router) + Tailwind CSS + Supabase (se precisar de agendamento/login).

## Prompt para IA (Claude Code / Hermes Agent / v0)
```
Crie um site institucional responsivo para "Sabor & Cia Restaurante", restaurantes em Telêmaco Borba - PR.
Seções: Home (hero + WhatsApp), Sobre, Serviços, Galeria, Contato (mapa + formulário).
Paleta: definir com o cliente. Mobile-first. Botão flutuante de WhatsApp.
Hospedar na Vercel. SEO local básico.
```

## Comandos (se gerar localmente)
```
npx create-next-app@latest sabor-cia-restaurante --ts --tailwind --app
cd sabor-cia-restaurante
npm run dev
# depois: npm run build && vercel --prod
```

## Deploy
- Vercel (grátis) ou Netlify. Domínio: sugerir sabor-cia-restaurante.com.br (verificar disponibilidade).
