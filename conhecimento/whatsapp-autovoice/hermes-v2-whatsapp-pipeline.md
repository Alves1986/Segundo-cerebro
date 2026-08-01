# Hermes WhatsApp V2 - Pipeline de Atendimento Automático

## 📋 Visão Geral
Plugin Hermes que automatiza atendimento via WhatsApp com:
- Classificação automática de contatos (cliente/amigo/família)
- Status personalizado
- Memória persistente
- Pipeline de 7 decisões

## Pipeline de 7 Decisões
1. Identificação do contato
2. Busca no histórico de conversas  
3. Verificação de status do usuário
4. Análise do tom da mensagem
5. Classificação automática via Gemini
6. Busca no banco de dados (produtos/links/preços)
7. Resposta contextual respeitando status

## Configurações Obrigatórias
```
SERVER_K = senha de 256 bits
GOOGLE_API_K = chave Gemini
WHATSAPP_ENABLE = true
WHATSAPP_OWNER_NUMBER = 55 + DDD + número
GITHUB_TOKEN = token com escopo 'repo'
```

## Deploy
- Docker Compose (GitHub repo oficial)
- Melhor no Portainer (contêiner separado pro WhatsApp)
- Easy Panel: comando `hermes whatsapp` gera QR Code

## Integração com Projetos
Verificar potencial em:
- Vertexx Consulting (landing + automação)
- Patrick Teixeira (cliente de mentoria)
- Sistema TAG (gestão de equipamentos)
- OpenSquad (CLI de automação)

Fonte: https://youtu.be/DLCSnYFrEfw
Data: 2026-08-01
Status: Documentado
