# 🪟 Instalação do OmniRoute no Windows

> **Resumo:** `npm i -g omniroute` + `omniroute serve` e pronto.
> Tudo via terminal (cmd, PowerShell ou Git Bash).

---

## 1. Instalar Node.js (se não tiver)

- Baixe o instalador LTS em: https://nodejs.org
- Durante a instalação, **marque a opção "Add to PATH"**
- Verifique no cmd/PowerShell:
  ```cmd
  node --version
  npm --version
  ```

---

## 2. Instalar o OmniRoute

Abra o **cmd**, **PowerShell** ou **Git Bash** e rode:

```cmd
npm install -g omniroute
```

Isso instala o binário `omniroute` globalmente.

---

## 3. Iniciar o servidor

```cmd
omniroute serve
```

O servidor sobe em `http://localhost:20128`.

- **Dashboard web:** http://localhost:20128/dashboard
- **API (OpenAI-compatível):** http://localhost:20128/v1

---

## 4. Acessar de qualquer aplicativo

Configure qualquer app/compatible com OpenAI (Cline, Continue.dev, Open Interpreter, etc.) para:

```
Base URL: http://localhost:20128/v1
API Key: deixe em branco (keyless) ou gere uma no dashboard
```

---

## 5. Troubleshooting comuns no Windows

### `omniroute` não é reconhecido

- Feche e reabra o terminal após npm install -g.
- Ou reinicie o Windows pra atualizar o PATH.
- Alternativa: use o caminho completo:
  ```cmd
  %AppData%\npm\omniroute
  ```

### Porta 20128 já em uso

```cmd
netstat -ano | findstr :20128
taskkill /PID <NUMERO_DO_PID> /F
```

### Servidor não sobe (erro de permissão)

- Execute o cmd/PowerShell **como Administrador**.
- Ou use uma porta acima de 1024 (o padrão 20128 já é alta, não deve precisar).

### Quero que inicie automático com o Windows

Crie um atalho na `Shell:startup`:

1. Tecla `Win + R`, digite `shell:startup`, Enter
2. Crie um arquivo `Iniciar-OmniRoute.vbs` com:
   ```vbs
   CreateObject("WScript.Shell").Run "cmd /c omniroute serve", 0, False
   ```
3. Na próxima inicialização do Windows, o OmniRoute sobe sozinho em background.

---

## 6. Atualizar

```cmd
npm update -g omniroute
```

---

## 7. Links úteis

- **Repo oficial:** https://github.com/diegosouzapw/OmniRoute
- **Fork do Anderson:** https://github.com/Alves1986/OmniRoute
- **NPM:** https://www.npmjs.com/package/omniroute

---

> 💡 **Dica:** no Windows, se você usa WSL (Ubuntu), pode instalar lá também com `npm i -g omniroute` e o servidor funciona igual.
