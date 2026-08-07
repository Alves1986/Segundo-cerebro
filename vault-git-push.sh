#!/bin/bash
# Auto-sync do Vault Git - Segundo Cerebro
# Commita e pusha mudancas para GitHub a cada 30 minutos

set -e

cd "/c/Anderson/Segundo-cerebro"

# Verificar se há mudancas
if [[ -z $(git status --porcelain) ]]; then
    echo "Nenhuma mudanca a sincronizar"
    exit 0
fi

# Adicionar todas as mudancas
git add -A

# Commit com timestamp
TIMESTAMP=$(date '+%Y-%m-%d %H:%M:%S')
COMMIT_MSG="Auto-sync: ${TIMESTAMP}"

# Fazer commit
git commit -m "${COMMIT_MSG}" 2>/dev/null || {
    echo "Nenhum commit feito (possivelmente arquivos nao rastreados)"
}

# Push
git push origin main

echo "Sync completo: ${TIMESTAMP}"