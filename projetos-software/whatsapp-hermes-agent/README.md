# WhatsApp Hermes Agent

## Visão Geral
Sistema de atendimento inteligente para WhatsApp usando [[Hermes Agent]] com IA multicanal - texto, áudio e imagem.

Baseado no tutorial: [YouTube - Atendimento no WhatsApp com Hermes Agent](https://youtu.be/vIgBCkyJvfM)

## Estrutura do Projeto
```
whatsapp-hermes-agent/
├── config/
│   └── hermes-profile.yaml
├── prompts/
│   ├── main.txt
│   └── clinic-prompt.txt
├── integrations/
│   ├── whatsapp/
│   │   ├── baileys-config.js
│   │   └── meta-api.js
│   └── media-handler.js
├── tests/
│   └── whatsapp-tests.md
├── docker-compose.yml
└── setup.sh
```

## Tecnologias
- [[Hermes Agent]] - Framework IA open source
- [[OmniRoute]] - Proxy local de modelos
- WhatsApp via [[Baileys]] (não-oficial) ou [[Meta API]] (oficial)
- [[OpenAI Whisper]] - Transcrição de áudio
- [[Vision API]] - Análise de imagem

## Componentes
- Perfil isolado no Hermes para atendimento
- Conexão WhatsApp (Baileys/Meta API)
- Processamento de texto, áudio e imagem
- Memória própria do agente

## Status
- [ ] Instalar dependências
- [ ] Configurar perfil Hermes
- [ ] Testar conexão WhatsApp
- [ ] Validar texto, áudio, imagem
- [ ] Produção

## Deploy
See [[docker-compose.yml]] for local execution.

## Related
- [[Vertexx IA]]
- [[Catálogo Viral]]
- [[TAG KOS]]