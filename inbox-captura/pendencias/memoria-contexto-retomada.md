---
tags: [memoria, contexto, retomada, projeto]
criado: 2026-07-28
status: ativo
---

# 🧠 Memória de Contexto — Retomada

_Usar quando voltar a trabalhar. Contém tudo que estávamos fazendo, o que foi concluído e o que está pendente._

---

## 🚀 Projeto Vertex Consulting

### Site + CRM
- **Repositório/Projeto:** `~/Vertex` (React + Vite + TypeScript + Supabase)
- **Stack:** React 19, Vite, TypeScript, Supabase, Evolution API
- **URL:** (se tiver deploy, preencher)
- **Status:** ✅ Landing Page pronta | ✅ CRM completo | ⏳ Evolution API pendente

### Supabase
- **Projeto:** `nzxxrnmaschelfggtzfv.supabase.co`
- **Tabela `contacts`:** Criada com RLS desabilitado
- **Service Role Key:** eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im56eHhybm1hc2NoZWxmZ2d0emZ2Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc4NDg0NTQ0NywiZXhwIjoyMTAwNDIxNDQ3fQ.oOuLUIQUFUXlulGSIoIxHm7h6gkOBHSbEWiVEi3ykMo

### Evolution API (WhatsApp)
- **Servidor:** `https://ministral.onrender.com`
- **API Key:** `ministral2024`
- **Instância para o Vertex:** `vertex-crm` (criada, QR Code gerado, pendente de escanear)
- **Instância pessoal:** `ministral-global-v2` (desconectada, número 554291534011)

### Identidade Visual Vertex
```css
--bg: #0a0a0a
--gold: #c9a84c
--gold-light: #e2c97e
--gold-dark: #a8872e
--text-bright: #f0f0f0
--text-body: #d8d8d8
Fonte: Inter (títulos), Outfit (destaques)
Gradiente: linear-gradient(135deg, #a8872e, #c9a84c, #e2c97e)
```
- Template de carrossel: `SegundoCerebro/conteudo/template-carrossel-vertex.html`
- Highlight covers: `SegundoCerebro/conteudo/highlight-covers-vertex.html`

---

## 📱 Instagram @anderson_alvesoficial

### Bio Atual
```
👑 @cassiarsalves 👦 @caiozpxd Sirvo na ⛪ @obpccasaderestauracao
🚀 Crio sites profissionais
CRM | WhatsApp | Landing Pages
📍 Telêmaco Borba - PR
👇 Faça seu orçamento
```

### Postagens
- **Post 1:** "Sua cabeça não escala" ✅ Postado
- **Post 2:** "Não é sorte, é código" (cases) — Prompt pronto em `conteudo/prompt-post-cases.md`

### Monitoramento
- **Sessão logada:** `~/opensquad/instagram_auth.json`
- **Cron:** Varredura automática 2x/dia (8h e 20h) — seguidores, curtidas, comentários
- **Dados salvos em:** `conteudo/metricas-instagram.md`

---

## 🎤 Voicebox (Clonagem de Voz)

- **Repositório:** `~/voicebox` (fork Alves1986/voicebox)
- **Status:** Dependências Python instaladas (pip3 install -r requirements.txt)
- **Web UI:** `http://localhost:5173` (precisa rodar `bun run dev:web`)
- **Backend:** `python3 -m uvicorn backend.main:app --reload --port 17493`
- **Amostra de voz:** `conteudo/voz-anderson-clonagem.mp3`
- **Foto pro vídeo:** `conteudo/foto-anderson-video.jpg`
- **Pendente:** Clonar voz via agente browser do Antigravity e gerar áudio do roteiro

---

## 📦 Projetos Clientes (Cases)

| Projeto | URL | Status |
|---|---|---|
| **Ministral App** | ministral.vercel.app | ✅ No ar |
| **Patrick Teixeira** | patrickteixeira.vercel.app | ✅ No ar |
| **Vertexx Consulting** | vertexxconsulting.vercel.app | ✅ No ar |
| **Talevi Escola de Música** | talevimusic.vercel.app | ✅ No ar |
| **Casa Grande Drywall** | (briefing em projetos-software/) | ⏳ Pendente |
| **Sistema TAG CDF Puma** | (local, React + Supabase) | ⏳ Em andamento |

---

## 📋 Prospecção (23 Leads)

- **Lista completa:** `clientes-em-potencial/RELATORIO-COMPLETO-PROSPECCAO.md`
- **Abordagens prontas:** `clientes-em-potencial/FOCO-ALVOS-ABORDAGEM.md`
- **Status:** 23 empresas sem-site mapeadas, aguardando abordagem

---

## 📊 Lista de Serviços

Arquivo: `conteudo/lista-servicos-simples.md`

| Serviço | Valor |
|---|---|
| Landing Page | R$ 447 |
| Site Simples (1 página) | R$ 597 |
| Site Completo (várias abas) | R$ 997 |
| Site Completo + CRM | R$ 1.500 |
| Site Restaurante (cardápio + WhatsApp) | R$ 1.200 |
| Site Comércio Geral | R$ 997 |
| Loja Virtual | R$ 1.500 |
| Cardápio WhatsApp automático | R$ 797 |
| Sistema de Agendamento | R$ 1.200 implantação |
| CRM mensalidade | R$ 97/mês |
| Sistema completo com IA | R$ 1.997 + R$ 147/mês |
| Aplicativo Mobile | R$ 2.997 |

---

## 🔧 Pendências Técnicas (Mac)

- **Colima/Docker:** Instalado mas não funcionou no macOS 12.7.6
- **Homebrew:** Permissões corrigidas, mas instalação do Docker falhou
- **FazAi Agents V4:** Para instalar em VPS (não local), usar site fazer.ai

## 📌 Repositórios pra Revisar (depois)
- https://github.com/affaan-m/ECC
- https://github.com/Alves1986/Open-Generative-AI

---

## 🎯 Próximos Passos (Windows)

1. Colar prompt do Post 2 no Antigravity (prompt-post-cases.md)
2. Escanear QR Code da Evolution (instância vertex-crm)
3. Fazer deploy do Vertex CRM
4. Iniciar abordagem dos 23 leads
5. Configurar FazAi Agents V4 em VPS
