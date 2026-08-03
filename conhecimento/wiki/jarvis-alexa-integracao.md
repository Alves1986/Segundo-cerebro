---
tags: [jarvis, alexa, skill, integracao, voz]
tipo: guia-tecnico
criado: 2026-08-02
status: em-andamento
---

# Jarvis + Alexa — Guia de Integração

Conectar a Alexa ao Jarvis (Ollama local no Mac mini) via Skill Alexa.

## Arquitetura

```
Você fala → Alexa → Skill (Lambda AWS) → túnel HTTPS → Ollama (Mac mini) → Jarvis responde → Alexa fala
```

## Componentes

| Componente | Status |
|---|---|
| Ollama no Mac (qwen3.5:4b) | ✅ rodando com OLLAMA_ORIGINS="*" OLLAMA_HOST="0.0.0.0:11434" |
| Túnel localhost.run | ✅ https://e06ec1488f7702.lhr.life (MUDÁVEL — ver nota) |
| API OpenAI compatível | ✅ /v1/models responde 200 |
| Template Skill | ✅ clonado em /tmp/alexa-skill (paulotruta/alexa-skill-llm-intent) |
| config.json | ✅ apontando pro túnel + qwen3.5:4b + invocation "jarvis" |

## Config da Skill (config.json)

```json
{
    "llm_url": "https://e06ec1488f7702.lhr.life/v1/chat/completions",
    "llm_model": "qwen3.5:4b",
    "llm_key": "ollama-local",
    "invocation_name": "jarvis",
    "llm_system_prompt": "Você é o Jarvis, assistente pessoal do Anderson..."
}
```

## Passos pra criar a Skill

1. Criar conta em https://developer.amazon.com/alexa
2. Acessar Alexa Developer Console → Skills → Create Skill
3. Nome: "Jarvis", locale: pt-BR (ou en-US), modelo: Custom, método: Provision your own
4. Usar o template clonado (Makefile ou upload manual)
5. Configurar o Lambda (AWS) com o código do template
6. Configurar o endpoint HTTPS pro Lambda
7. Invocation: "jarvis"
8. Testar no console: "abre jarvis", "pergunta como está o tempo"

## Nota IMPORTANTE — URL do túnel muda

O localhost.run grátis gera URL aleatória a cada reinício. Para fixar:
- Criar conta grátis em localhost.run → domínio persistente
- OU usar Cloudflare Tunnel com domínio próprio
- OU hospedar o lambda chamando diretamente (sem túnel) se o Ollama estiver na VM com IP fixo

## Limitações

- Alexa não é a assistente — é o canal de voz (a Skill leva sua fala ao Jarvis e devolve a resposta)
- Respostas do Mac mini demoram (~3.6 t/s no CPU Sandy Bridge)
- Para respostas rápidas: rodar Ollama na VM da Oracle
