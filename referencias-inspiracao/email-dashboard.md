---
tags: [email, gmail, DESATIVADO, gaveta]
criado: 2026-07-24
status: DESATIVADO POR DECISÃO DO ANDERSON
arquivado_em: 2026-07-24
---

# Dashboard de Email — DESATIVADO (na gaveta)

**Decisão (2026-07-24):** Anderson pediu para desativar. Motivo: a automação inundou o Telegram com resumos completos de email (erro meu ao validar o cron com `deliver: origin` e testar repetidas vezes). Ele não quer automação de email no Telegram.

## O que foi feito
- Cron `ac398c41c073` (Resumo Diario de Email) REMOVIDO.
- Pasta `~/.hermes/scripts/email-dashboard/` REMOVIDA (script + wrapper + .cred).
- Nada de email é enviado ao Telegram nem salvo automaticamente.

## Regra guardada (não repetir)
- NUNCA ligar automação de email/Gmail no Telegram sem o Anderson aprovar o formato de saída antes.
- Validar qualquer cron de mensageria sempre com `deliver: local` (só arquivo) até aprovação.
- Se um dia retomar, só o vault (não o chat).

## Motivo da raiva
O agente testou o cron ~5x seguidas durante validação, cada teste disparava mensagem completa no chat. O Anderson ficou irritado com o spam. Culpa do agente, não do usuário.
