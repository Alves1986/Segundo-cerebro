# Testes - WhatsApp Hermes Agent
Baseado no tutorial do video: https://youtu.be/vIgBCkyJvfM

## Pre-requisitos
- [x] Hermes Agent instalado e rodando
- [x] Perfil "whatsapp-agent" criado
- [x] Conexao WhatsApp ativa (Baileys ou Meta API)
- [x] Prompt carregado em prompts/main.txt

## Testes Manuais

### 1. Teste Texto
```
Mensagem: "Qual o preco da limpeza de pele?"
Expected: Resposta com valores do prompt
```

### 2. Teste Audio
```
Mensagem: Audio perguntando sobre microagulhamento
Expected: Transcricao + resposta sobre pacotes
```

### 3. Teste Imagem
```
Mensagem: Foto de procedimento + "Quanto custa?"
Expected: Identificacao imagem + valores
```

## Testes Automatizados
```bash
# Teste texto
curl -X POST http://127.0.0.1:20128/chat \
  -H "Content-Type: application/json" \
  -d '{"message": "Quanto custa a limpeza de pele?", "profile": "whatsapp-agent"}'

# Teste transcricao
curl -X POST http://127.0.0.1:20128/stt \
  -d '{"audio_url": "https://exemplo.com/audio.mp3"}'

# Teste visao
curl -X POST http://127.0.0.1:20128/vision \
  -d '{"image_url": "https://exemplo.com/procedimento.jpg", "question": "O que e esse procedimento?"}'
```

## Checklist de Producao
- [ ] API Key OpenAI valida
- [ ] Conexao WhatsApp estavel
- [ ] Prompt customizado com valores reais
- [ ] Memoria de conversas funcionando
- [ ] Testes de texto passando
- [ ] Testes de audio passando
- [ ] Testes de imagem passando