# Solução de problema Hermes Gateway offline
**Data:** 2026-08-02  
**Problema:** Serviço hermes-gateway.service ficou inativo via systemd  
**Comando usado:** `sudo systemctl restart hermes-gateway.service`  

✅ Serviço reiniciado manualmente com sucesso  
📌 Solução final: script automatizado `/tmp/start-hermes.sh`  

## Comandos de verificação:
```bash
systemctl is-active hermes-gateway.service
curl http://localhost:8080/health
journalctl -u hermes-gateway.service --no-pager -n 10
```

## Prevenção:
- Monitorar periodicamente via health check
- Configurar alerta se serviço cair por mais de 30s
