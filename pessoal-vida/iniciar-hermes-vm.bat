@echo off
REM Anderson - Inicio automatico: VM Oracle + Hermes Agent
REM Executa no login do Windows via Task Scheduler
REM Salva como: C:\Anderson\iniciar-hermes-vm.bat

REM Evita janela preta piscaando (executa em background)
setlocal
echo [%date% %time%] Iniciando conexao Hermes VM... >> "C:\Anderson\logs-hermes-vm.log"

REM Testa conectividade antes (evita login falhando)
ping -n 1 129.213.166.201 >nul 2>&1
if errorlevel 1 (
    echo [%date% %time%] VM offline (ping falhou) >> "C:\Anderson\logs-hermes-vm.log"
    exit /b 1
)

REM Conecta na VM e inicia sessao Hermes 24/7 via tmux
REM (usa tmux na VM pra manter sessao viva mesmo se SSH cair)
ssh -i "C:\Anderson\Segundo-cerebro\pessoal-vida\ssh-key-2026-07-31.key" -o StrictHostKeyChecking=no -o ServerAliveInterval=80 -o ServerAliveCountMax=3 -o ConnectTimeout=10 ubuntu@129.213.166.201 ^
"export PATH=\$HOME/.local/bin:\$PATH; tmux has-session -t hermes 2>/dev/null || tmux new-session -d -s hermes 'hermes' 2>/dev/null; echo CONECTADO_HERMES_VM" ^
>> "C:\Anderson\logs-hermes-vm.log" 2>&1

echo [%date% %time%] Conexao Hermes VM finalizada >> "C:\Anderson\logs-hermes-vm.log"
endlocal
