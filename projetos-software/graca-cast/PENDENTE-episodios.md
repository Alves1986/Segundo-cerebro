---
tags: [graca-cast, pendente, resolvido]
tipo: pendencia
criado: 2026-07-25
resolvido: 2026-07-31
status: resolvido
---

# RESOLVIDO - Memórias dos episódios do Graça Cast

## O que foi feito (2026-07-31)
- Puxados os 30 episódios do canal do YouTube: https://www.youtube.com/@gracacast.7
- Criada uma nota por episódio em `projetos-software/graca-cast/` com link + duração + status revisao (resumo pendente de assistir/transcrever).
- Índice `index.md` atualizado com a lista completa de episódios.
- Método: extração direta do HTML do canal (curl com user-agent de navegador) + parse do lockupViewModel do YouTube.

## Observação
- As notas estão com `status: revisao` — falta adicionar resumo/conteúdo após assistir ou transcrever cada episódio.
