---
tags: [hermes, automacao, referencia, watchdog]
tipo: documentacao
status: ativo
criado: 2026-07-25
---

# Automações do Hermes (Watchdog de Pendências)

Documentação das automações recorrentes do Hermes ligadas ao Segundo Cerebro.

## 1. Watchdog de Pendências

Sistema que varre o vault todo dia e alerta sobre trabalhos pendentes não concluídos.

### Como funciona
- **Script:** `~/.hermes/scripts/checar_pendencias.py`
- **Gatilho:** cron diário às 09:00 (`0 9 * * *`), job `dbf8f3eb49c8`, entrega no Telegram.
- **Lógica:** varre o vault (exceto `.git`) buscando notas com frontmatter `status: pendente`. Se a nota tiver `lembrete: AAAA-MM-DD` e essa data já passou (ou não tiver data), ela é considerada atrasada.
- **Comportamento:** se houver pendência vencida, envia alerta no Telegram perguntando "Vai resolver ou reprogramar pra outra data?". Se nada vencido, fica em silêncio.

### Formato esperado nas notas de pendência
Para o watchdog detectar, a nota precisa ter no frontmatter:
```yaml
status: pendente
lembrete: 2026-07-27   # data AAAA-MM-DD em que vira alerta
```
Notas com `status: pendente` mas sem `lembrete:` são sempre alertadas.

### Como encerrar uma pendência
Mude `status: pendente` para `status: resolvido` (ou outro valor) na nota. O watchdog para de alertar.

### Como reprogramar
Altere o campo `lembrete: AAAA-MM-DD` para a nova data. O watchdog só alerta quando a data chegar.

## 2. Outras automações ativas

- **Vault Git Auto-Push:** cron que empurra o vault pro GitHub privado a cada 30 min (commit das mudanças locais).
- **Lembrete Graça Cast (episódios YouTube):** job único `e40570fd1a3a`, dispara 26/07 09:00 no Telegram, lembrando de puxar/registrar episódios do canal.

## Observações
- O watchdog roda em silêncio quando não há pendências vencidas (não faz spam).
- Para adicionar um novo tipo de pendência, basta criar a nota com `status: pendente` + `lembrete:` na pasta certa do vault.
