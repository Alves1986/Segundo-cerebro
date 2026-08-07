#!/usr/bin/env python3
"""
Auto-sync para projetos do Segundo Cerebro
Detecta mudancas em projetos-software/ e sincroniza com GitHub
"""

import os
import subprocess
import json
from datetime import datetime

BASE_PATH = "/c/Anderson/Segundo-cerebro"

def get_git_status(path):
    """Verifica status git de um repo"""
    try:
        result = subprocess.run(
            ["git", "status", "--porcelain"],
            cwd=path,
            capture_output=True,
            text=True,
            timeout=30
        )
        return result.stdout.strip().split('\n') if result.stdout.strip() else []
    except Exception as e:
        print(f"Erro ao verificar git status: {e}")
        return []

def git_push(path, file_changes):
    """Commita e pusha mudancas"""
    try:
        # Adicionar mudancas
        subprocess.run(["git", "add", "-A"], cwd=path, check=True, timeout=30)
        
        # Verificar se ha filas para commitar
        result = subprocess.run(
            ["git", "diff", "--cached", "--name-only"],
            cwd=path,
            capture_output=True,
            text=True,
            timeout=30
        )
        
        if not result.stdout.strip():
            print("Nenhum arquivo novo para commitar")
            return False
        
        # Commit
        timestamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        commit_msg = f"Auto-sync projeto: {timestamp}\n\nMudancas:\n" + "\n".join(f"- {f}" for f in result.stdout.strip().split('\n'))
        
        subprocess.run(["git", "commit", "-m", commit_msg], cwd=path, check=True, timeout=30)
        
        # Push
        subprocess.run(["git", "push", "origin", "main"], cwd=path, check=True, timeout=60)
        
        print(f"✓ Sync completo: {timestamp}")
        return True
        
    except subprocess.CalledProcessError as e:
        print(f"Git error: {e}")
        return False
    except Exception as e:
        print(f"Erro na sync: {e}")
        return False

def main():
    print("=== Auto-sync Segundo Cerebro ===\n")
    
    # Verificar vault principal
    vault_path = BASE_PATH
    changes = get_git_status(vault_path)
    
    if changes:
        print(f"Arquivos alterados no vault: {len(changes)}")
        for c in changes[:5]:  # mostrar ate 5
            print(f"  {c}")
        if len(changes) > 5:
            print(f"  ... e mais {len(changes)-5}")
        
        success = git_push(vault_path, changes)
        if success:
            print("✓ Vault sincronizado com GitHub")
        else:
            print("⚠ Vault sem alteracoes para commitar")
    else:
        print("Nenhuma mudanca no vault")
    
    print("\n=== Sync concluida ===")

if __name__ == "__main__":
    main()