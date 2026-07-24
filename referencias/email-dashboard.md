---
tags: [email, gmail, dashboard, resumo, automacao]
criado: 2026-07-24
status: ativo
---

# Dashboard de Email (Resumo Diário)

Resumo diário da caixa do Gmail (`cassia.andinho@gmail.com`) gerado automaticamente, com classificação importante/lixo/outros.

## Como funciona
- Script: `~/.hermes/scripts/email-dashboard/resumo-email.js` (lê IMAP via lib `imapflow`)
- Wrapper cron: `email-dashboard/run.sh` (chama node explícito — o cron não respeita shebang no Windows)
- Credencial do app password: `~/.hermes/scripts/email-dashboard/.cred` (fora do vault, não vai pro git)
- Cron: `ac398c41c073` — todo dia 08:00, `no_agent`, entrega no Telegram (origin)
- Saída também salva em `inbox/email-resumo-YYYY-MM-DD.md`

## Regra de fase segura
- **LEITURA SÓ.** Nada é apagado, marcado ou movido. O script só lê (`fetch` envelope) e classifica.
- Para apagar spam ou mover, precisa de aprovação do Anderson.

## Classificação (heurística)
- IMPORTANTE: cliente, reunião, contrato, pagamento, proposta, ministral, gestão-es, escala, projeto, segurança/conta, github/supabase/oauth/ssh, verificação.
- LIXO: promo, oferta, newsletter, cupom, shein/adidas, linkedin/instagram/tiktok, stock atacadista, loja/frete/compre.
- OUTROS: o resto.

## Pendente / melhorias
- Refinar classificação (ex: alertas de segurança do Google às vezes caem em lixo por `no-reply`).
- Se um dia quiser apagar spam automático, criar script separado com flag de aprovação.
