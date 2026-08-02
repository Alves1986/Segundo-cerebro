---
name: cerebro-whatsapp
description: Integração entre Segundo Cérebro (Obsidian/Vault) e WhatsApp via Hermes Agent. Use when precisar de documentação, rotas e automação de mensagens WhatsApp com contexto do vault.
license: MIT
---

# 🧠 Cérebro-WhatsApp Integration

Skill para integrar o **Segundo Cérebro** (vault Obsidian/Notion) com o **WhatsApp Business** via Hermes Agent.

## 🚀 Visão Geral

Esta skill conecta:
- **Entrada**: Mensagens WhatsApp → Hermes WhatsApp V2  
- **Processamento**: Pipeline de 7 decisões + contexto do Segundo Cérebro
- **Saída**: Respostas contextualizadas + atualizações no vault

## 📋 Configuração Inicial

### 1. Variáveis de Ambiente (.env)
```
# WhatsApp Integration
WHATSAPP_ENABLED=true
WHATSAPP_NUMBER=5542991260444  # Número oficial
WHATSAPP_PROVIDER=evolution-api  # Ou twilio/whatsapp-cloud

# Hermes WhatsApp V2
GITHUB_TOKEN=seu_token_aqui       # Para memória persistente
GOOGLE_API_KEY=seu_google_key     # Para classificação de leads
```

### 2. Estrutura de Pastas
```
conhecimento/whatsapp-integration/
├── flows/                    # Fluxos de mensagens automatizadas
│   ├── boas-vindas.md
│   ├── follow-up-leads.md
│   └── qualificacao-clientes.md
├── templates/                # Templates de resposta
│   ├── consultas.md
│   ├── agendamentos.md
│   └── propostas.md
├── leads/                    # CRM leve integrado
│   ├── novos_leads.md
│   └── historico_contatos.md
└── relatorios/               # Analytics de engajamento
    └── metricas_semanais.md
```

## 🔄 Pipeline de Mensagens (7 etapas)

### 1. Identificação do Contato
- Extrai nome, número e histórico de conversas
- Consulta vault via `pessoas/<numero>.md`
- Classifica: Cliente | Lead | Parceiro | Amigo

### 2. Busca no Histórico
- Carrega contexto da conversa anterior
- Sincroniza com notas do vault
- Identifica referências cruzadas

### 3. Verificação de Disponibilidade
- Consulta calendário (`pessoal/agenda.md`)
- Respeita status automático (ocupado/ausente)
- Prioriza contatos por tag

### 4. Análise de Tom
- Usa Gemini para detectar urgência/emergência
- Ajusta tom da resposta (formal/informal)
- Flag para follow-up imediato

### 5. Classificação Inteligente
```
Tags automáticas:
- 🎯 LEAD_QUENTE: "quero saber preço", "orcamento", "proposta"
- 📅 AGENDAMENTO: "horario", "reuniao", "visita"
- 💡 INFORMACAO: "como funciona", "detalhes", "duvidas"
- ❤️ PESSOAL: "oi", "tudo bem", "como foi seu dia"
- 💰 VENDA: "comprar", "contratar", "pacote"
```

### 6. Busca no Banco de Dados
- Produtos/serviços (`knowledgebase/produtos.md`)
- Preços e pacotes (`financas/precificacao.md`)
- FAQ (`knowledgebase/faq.md`)
- Testimonials (`clientes/testemunhos.md`)

### 7. Resposta Contextual
Gera resposta personalizada considerando:
- Histórico da conversa
- Preferências do contato
- Dados atualizados do negócio

## 📝 Fluxos Automatizados

### Fluxo 1: Boas-vindas + Qualificação Inicial
Trigger: Nova interação (nunca conversou antes)

```
🤖 "Olá! Tudo bem? Sou o assistente da Evolute.
Para te atender melhor, pode me contar rapidamente:
1. Você está buscando ajuda com saúde mental ou odontológica?
2. Prefere consultas online ou presenciais?

Depois disso, te conecto com a gente! 🚀"
```

### Fluxo 2: Follow-up Leads Frios
Trigger: Nenhuma resposta em 48h

```
🤖 "Anderson: acabei de receber sua mensagem. 
Ainda precisa de ajuda? Respondo rapidinha! ✨"
```

### Fluxo 3: Confirmação de Agendamento
Trigger: Lead qualificado (tag: LEAD_QUENTE)

```
🤖 "Perfeito! Vou marcar sua avaliação gratuita.
Qual horário prefere?
➡️ Hoje: 14h30 ou 16h
➡️ Amanhã: 09h30 ou 11h
Digite o número que reservo pra você!"
```

## 🛠️ Integração com Segundo Cérebro

### Pessoas (CRM Leve)
```markdown
# pessoas/+5542991260444.md
Nome: [extraído da primeira mensagem]
Último contato: {{timestamp}}
Preferência: [presencial|online]
Status: Lead Frio → Lead Quente → Cliente
Interesses: [saúde mental|odontológica]
Histórico:
- [2026-08-01] Primeiro contato - "Quero saber sobre terapia"
- [2026-08-02] Follow-up enviado - link agendamento
```

### Conteúdo de Resposta
```markdown
# conhecimento/whatsapp/templates/consultas.md
Pergunta: "Quanto custa uma terapia?"
Resposta: "Nossa terapia inicial é R$ 120 (30min).
Pacotes mensais com desconto de até 20%.
Agende avaliação gratuita → [link]"
```

## 📊 Métricas Automáticas

| Métrica | Fonte | Frequência |
|---|---|---|
| Taxa de resposta | Hermes logs | Diária |
| Leads qualificados | Tag LEAD_QUENTE | Diária |
| Conversões | Tag CLIENTE | Diária |
| Tempo médio resposta | Hermes logs | Diária |

Todas as métricas são salvas em:
```
conhecimento/whatsapp-integration/relatorios/
```

## 🔧 Troubleshooting

### Problema: Mensagem não chega
1. Verificar status do Evolution API (`!status`)
2. Confirmar número na lista de números ativos
3. Checar conexão internet do servidor

### Problema: Resposta genérica
1. Atualizar templates em `conhecimento/whatsapp/templates/`
2. Revisar prompt do pipeline de decisões
3. Adicionar exemplos recentes no contexto

## 📞 Comandos Úteis

| Comando | Ação |
|---|---|
| `!status` | Verifica conexão WhatsApp |
| `!novo-template` | Cria template de resposta |
| `!historico [telefone]` | Mostra histórico de conversas |
| `!classificar [telefone] [tag]` | Força classificação de lead |
| `!relatorio` | Gera relatório de engajamento |

---
*Skill parte do ecossistema Hermes + Segundo Cérebro*
*Modo de uso: carregue esta skill antes de qualquer operação de WhatsApp*
