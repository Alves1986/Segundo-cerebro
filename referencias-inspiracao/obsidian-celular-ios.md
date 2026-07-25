tags::: obsidian, ios, celular, configuracao, cerebro

# Obsidian no iPhone (iOS) pelo git

O iOS nao le o OneDrive direto. O caminho e via git: o app **Working Copy** clona o repo privado e o **Obsidian mobile** le a pasta. Assim o vault fica igual ao do PC e o Hermes continua operando.

## Pre-requisitos
- Conta GitHub `Alves1986` com acesso ao repo privado `Segundo-cerebro`.
- App **Working Copy** (App Store, gratis para 1 repo privado; pago acima disso).
- App **Obsidian** (App Store).

## Passo a passo

### 1. Working Copy: conectar GitHub
1. Abra o **Working Copy**.
2. Va em **Settings** (engrenagem) → **Accounts** → **Add Account** → **GitHub**.
3. Toque **Authorize** e faca login com a conta `Alves1986` no navegador que abrir.
   (Usa OAuth do GitHub, entao voce NAO precisa digitar o token manualmente no celular.)
4. Apos autorizar, a conta aparece na lista.

### 2. Working Copy: clonar o vault
1. Na tela principal do Working Copy, toque o botao **+** → **Clone Repository**.
2. Escolha a conta GitHub e o repo **Segundo-cerebro** (o privado).
3. Confirme o clone. O vault aparece na lista de repos do app.

### 3. Obsidian: abrir o vault do Working Copy
1. Abra o **Obsidian** no iPhone.
2. Toque **Create new vault** (ou "Open") → **Open a vault from Working Copy** (opcao que aparece se o Working Copy estiver instalado).
3. Selecione o repo **Segundo-cerebro**. O Obsidian cria o vault e le as notas.
4. Pronto: voce ve as pastas (inbox, projetos, clientes, etc.) iguais ao do PC.

### 4. Atualizar (puxar mudancas do Hermes / do PC)
- No Obsidian, as mudancas locais ficam no Working Copy.
- Para receber do PC/Hermes: abra o **Working Copy** → repo Segundo-cerebro → botao **Pull** (seta pra baixo).
- Para enviar pro PC/Hermes: no Working Copy, botao **Push** (seta pra cima) apos editar.

## Notas importantes
- As fotos em `pessoal/fotos.md` usam `![[file:///C:/Users/...]]` que so funciona no PC Windows. No iPhone a imagem nao aparece (o texto sim). Para fotos no celular, precisariamos usar anexo relativo (ajuste futuro).
- O `.obsidian` (config/aparência) nao esta no git, entao o Obsidian iOS usa config padrao. Se quiser a mesma aparencia, podemos versionar depois.
- O Hermes nao precisa de nada no celular: ele opera no PC e empurra pro GitHub; voce so puxa (Pull) no Working Copy.
- Alternativa web (sem app): abra `https://github.dev/Alves1986/Segundo-cerebro` no navegador do iPhone para ler/editar pelo github.dev.
