@echo off
REM Anderson - Inicio automatico INVISIVEL: VM Oracle + Hermes Agent
REM Executa no login do Windows - SEM janela preta visivel
REM Salva como: C:\Anderson\iniciar-hermes-vm-silent.bat
REM e: C:\Anderson\iniciar-hermes-vm-silent.vbs (launcher invisivel)

REM O .vbs abaixo chama este .bat em background total
set MYDIR=%~dp0
echo [%date% %time%] Iniciando conexao Hermes VM (invisivel)... >> "%MYDIR%logs-hermes-vm.log"

REM ShellExecute hidden via powershell wrapper
powershell -WindowStyle Hidden -Command "& {
    $ErrorActionPreference='SilentlyContinue'
    $log='%MYDIR%logs-hermes-vm.log'
    Add-Content $log \"[$(Get-Date)] PowerShell hidden launcher ativado\"
    ping -n 1 129.213.166.201 > $null
    if ($LASTEXITCODE -ne 0) { Add-Content $log \"[$(Get-Date)] VM offline\"; exit 1 }
    $key='C:\Anderson\Segundo-cerebro\pessoal-vida\ssh-key-2026-07-31.key'
    $cmd = \"export PATH=$HOME/.local/bin:$HOME/.local/bin:$PATH; tmux has-session -t hermes 2>/dev/null || tmux new-session -d -s hermes 'hermes' 2>/dev/null; echo CONECTADO_HERMES_VM\"
    $psi = New-Object System.Diagnostics.ProcessStartInfo
    $psi.FileName = 'ssh'
    $psi.Arguments = \"-i `"$key`" -o StrictHostKeyChecking=no -o ServerAliveInterval=80 -o ConnectTimeout=10 ubuntu@129.213.166.201 `"$cmd`\"\"
    $psi.UseShellExecute = $false
    $psi.CreateNoWindow = $true
    $psi.RedirectStandardOutput = $true
    $psi.RedirectStandardError = $true
    $p = [System.Diagnostics.Process]::Start($psi)
    $out = $p.StandardOutput.ReadToEnd()
    $err = $p.StandardError.ReadToEnd()
    $p.WaitForExit(30000)
    Add-Content $log \"[$(Get-Date)] SSH exit: $($p.ExitCode). Output: $out\"
    if ($err) { Add-Content $log \"[$(Get-Date)] SSH error: $err\" }
}"
