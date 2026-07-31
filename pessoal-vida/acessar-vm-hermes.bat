@echo off
REM Anderson - Acesso rápido à VM Oracle Cloud (Hermes Agent)
REM Salva em: C:\Anderson\acessar-vm-hermes.bat
REM Data: 2026-07-31

cls
echo =============================================
echo  ACESSANDO VM: claude-bot (129.213.166.201)
echo  Hermes Agent v0.19.1 + Nous Portal OAuth
echo  Model: poolside/laguna-s-2.1:free
echo =============================================
echo.

ssh -i "C:\Anderson\Segundo-cerebro\pessoal-vida\ssh-key-2026-07-31.key" -o StrictHostKeyChecking=no -o ServerAliveInterval=60 ubuntu@129.213.166.201 "export PATH=\$HOME/.local/bin:\$PATH && echo 'VM conectada!' && hermes --version && echo. && echo Comandos uteis:'
echo   hermes                - CLI interativa'
echo   hermes chat -q \"msg\"  - query rapida'
echo   hermes config         - ver configuracao'
hermes
