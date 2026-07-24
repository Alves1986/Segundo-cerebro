---
tipo: video-youtube
video_id: yHgvMztfQmw
titulo: Agente IA WhatsApp Oficial | Setup Completo com Claude Code
canal: Thalena Lima - IA & Automações
url: https://youtu.be/yHgvMztfQmw
data_publicacao: 20260521
duracao: 27m 17s
views: 12347
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# Agente IA WhatsApp Oficial | Setup Completo com Claude Code

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/yHgvMztfQmw)
- Publicacao: 20260521
- Duracao: 27m 17s
- Views: 12347

## Descricao (original)
Neste vídeo eu te mostro como criar um agente de IA no WhatsApp usando Claude Code, API oficial da Meta, VPS e Supabase, tudo do zero e em linguagem natural.

➡️Conheça meu Treinamento Completo: https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video69

🔥 Hospedagem Hostinger com desconto: https://www.hostg.xyz/SHJ5B
🎟️ Cupom THALENA → 10% OFF nos planos anuais de VPS
*Cupom válido para contas novas, nos planos anuais, caso já tenha conta, crie uma nova com email diferente para garantir o desconto exclusivo!

🔗 Conheça nossos serviços → https://lp.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video69

A proposta aqui é simples: em vez de programar tudo manualmente, você descreve para o Claude Code como quer que o seu agente funcione, e ele constrói a estrutura do projeto para você. Nesse processo, o agente é configurado para responder no WhatsApp oficial da Meta, rodar 24 horas por dia em uma VPS e ainda contar com um painel web de gerenciamento para editar comportamento, modelo de IA e configurações sem depender do terminal.

No vídeo você vai ver:
- como usar Claude Code para criar um agente de IA
como integrar com a API oficial do WhatsApp da Meta
como configurar VPS, domínio, webhook e PM2
como usar Supabase como banco de dados
como subir um dashboard web para acompanhar conversas e configurações
como transformar isso em serviço para clientes

Esse tutorial é ideal para quem quer trabalhar com:

automação com IA
agentes de IA para WhatsApp
implementação para clientes
negócios com IA
Claude Code na prática
Se você quer aprender a construir uma solução mais profissional, com menos risco do que APIs não oficiais e com estrutura para escalar, esse vídeo vai te ajudar bastante.

Materiais citados no vídeo:

pack de arquivos
prompt utilizado
guia em PDF com passo a passo
material de configuração da API oficial da Meta
link da VPS com Claude Code já instalado
Se esse conteúdo te ajudar, deixa o like e se inscreve no canal para acompanhar os próximos tutoriais sobre IA aplicada a negócios, automação e agentes inteligentes.
─────────────────────────
⏱ CAPÍTULOS
─────────────────────────
* Introdução e Visão Geral - 0:00
* Preparação e Credenciais - 1:58 
* Configuração da VPS - 4:10 
* Criação com Claude Code - 7:32 
* Configuração de Domínio e Webhook - 13:55 
* Execução no Supabase e Deploy - 16:30
* Integração com API da Meta e Testes - 21:18


- Vídeo Mencionado: https://youtu.be/SigusFL_ixE

Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢Compartilhe com alguém que quer aprender IA do jeito certo: https://youtu.be/yHgvMztfQmw
💬 Comenta aqui qual dessas decisões mais abriu sua cabeça.

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

#ClaudeCode #WhatsAppAPI #AgenteIA

## Transcricao
E se você pudesse descrever em linguagem
natural exatamente como quer que o seu
agente se comporte lá no WhatsApp e ele
simplesmente ficasse pronto, rodando 24
horas por dia com painel de
gerenciamento usando a PI oficial da
meta. É exatamente isso que eu vou te
mostrar nesse vídeo. a gente vai usar o
Cloud Code, que é a IADOP, especializada
em criar código para construir um agente
que vai atuar lá no WhatsApp do zero, só
descrevendo o que a gente quer em
linguagem natural. Esse agente vai usar
oficial da meta para receber as
mensagens no WhatsApp e vai rodar numa
VPS, que é um servidor na nuvem, para
ele ficar online o tempo todo, sem
depender do seu computador, ter que
ficar ligado. Além do agente em si, o
Cloud Code vai criar um painel web
completo. Então você vai ter um
dashboard para editar o comportamento do
teu agente, trocar o modelo de a, tudo
isso pelo navegador, sem precisar ter
que ficar entrando lá no servidor. Você
já me acompanha aqui no canal, você viu
a gente construindo a gente de já com PI
não oficial? Se você ainda não viu, vou
deixar esse vídeo aqui que eu tô falando
nos cards na descrição para você ir lá
depois. A diferença da API oficial é que
ela é homologada pela meta, então a
gente não vai precisar de QR code para
escanear. O risco de banimento é menor,
mas ainda existe, tá? só para você ficar
ligado. E essa é mais uma opção que eu
vou te mostrar de serviço de
implementação para clientes também, caso
você não queira fazer só para si. Esse
processo você vai poder implementar para
clientes também. E se você ainda não me
conhece, muito prazer. Eu me chamo
Talena e aqui no canal a gente fala
sobre inteligência artificial aplicada
negócios. E se esse tema te interessa,
já se inscreve aqui no canal, porque
toda semana tem vídeo novo. E agora bora
lá pra tela do meu computador. Como eu
te expliquei aqui nesse vídeo, a gente
vai utilizar a PI oficial da meta. Então
eu já tô aqui com a tela do gerenciador
das contas do WhatsApp da minha conta. E
eu já vou deixar antes da gente
continuar tudo que você vai precisar.
Então vamos lá. Aqui eu gosto de
organização, como você sabe. Então o que
que você vai precisar antes de já para
conseguir seguir essa aula? Do jeito que
eu vou te mostrar, você vai precisar do
Meta Access token, que é aquele token
permanente que você precisou criar na
hora que você tava construindo aqui a
sua conta do WhatsApp oficial aqui
direto com a meta, né? Então, a gente
vai precisar desse token, de
preferência, o permanente, pra gente não
ter aquela inspiração. Além disso, você
vai precisar também do phone number ID.
E aqui tem direitinho onde você vai
pegar, aqui mesmo no painel da meta. A
gente vai precisar também do app secret
e essa chave você vai pegar lá no
developers, tá? Além disso, a gente
também vai precisar do database URL, do
Superbase URL e do Superbase Secrety,
Service Key, que são as chaves e os
dados. do banco de dados que a nossa IA
vai utilizar, que aqui eu escolhi o
Supas porque você consegue criar uma
conta gratuita lá com eles e pegar todos
esses dados, toda essa parte da meta de
configuração da API oficial, de como é
que você pega cada acesso desses com
vídeoaula, você vai encontrar dentro do
meu treinamento. Lá eu mostro direitinho
como é que você consegue ter acesso a
uma PI oficial da meta de sem precisar
de parceiros, tá? Diretamente com a
meta. Então aqui eu já suponho que você
já tem acesso à sua PI oficial. Como é
que você pega os dados do Supas? Eu tô
aqui com a tela do Supase. Criei a conta
gratuita mesmo. Você vai pegar a URL
aqui, você vai só buscar, ó. Aqui você
busca database.
Aí você desce aqui, ó. Aqui tem a senha.
Vai precisar dessa senha. Se você não
lembrar, você só reseta aqui, tá bom?
Outra coisa que você vai precisar, a URL
do projeto, que tá lá no comecinho, né?
Quando a gente aqui, ó, você vai copiar
esse URL e a Series Key, que é
justamente a Series Hol key. Como é que
você pega ela? Configurações de projeto
aqui, ó. Apis. Aí aqui nessa parte você
pega a sua, ó, essa daqui, Service
Holder. Pronto. Então agora eu já tenho
todos esses dados aqui, ó. Eu já tenho
todos esses dados aqui da minha conta.
Então preciso que você faça isso, tá?
Você pegue todos esses dados porque a
gente vai precisar deles pro decorrer da
aula. Agora a gente vai entrar aqui na
parte da VPS. Lembra que eu te falei que
a SUIA ela vai rodar 24 horas por dia, 7
dias por semana? Então você vai precisar
de uma VPS, de um servidor para que isso
aconteça. Aqui eu sempre recomendo a
Hostinger, tá? Se você não tiver VPS
ainda ou se você quiser garantir um
descontão na VPS, vou deixar o meu link
aí na descrição. Você vai conseguir ter
acesso a um cupom e eu vou te mostrar
como é que você vai fazer. A gente vai
instalar a nossa VPS com um cloud code
direto nela, sem você ter que instalar.
Como é que você vai fazer isso aqui, ó?
Vou deixar o link, esse mesmo link, você
vai aqui em escolher plano. O ideal é
que você pegue esse plano aqui, tá bom?
Então, vou aqui, ó, KVM2. E aqui, na
hora que você tiver no carrinho, você
vai poder colocar para garantir o
desconto, ó. Você vai aplicar o cupom,
você vai ter 10% de desconto nos planos
a partir de 12 meses. E por que que vale
mais a pena você pegar de de um ano, né,
de 12 meses ou de 24 meses? Porque a
mensalidade fica baratinho, ó. Fica só
isso aqui por mês. Então, vale muito a
pena. Mas você tem a opção de escolher o
mês, só que um mês você não tem cupom de
desconto e depois do primeiro mês já
fica esse valor. Então é mais vantajoso
você pegar logo a de 12 meses porque a
mensalidade vai sair baratinho. Aí você
vem aqui, você vai escolher a região, a
localização do seu servidor com melhor
latência. Às vezes não aparece o Brasil,
ó, agora durante essa aula não tá
aparecendo no Brasil, às vezes aparece.
Se você tiver no Brasil, né, é melhor
que você escolha do Brasil, mas às vezes
não aparece. Então você vai pegar esse
aqui, ó, que tiver a melhor latência.
Então vou escolher esse aqui. E aqui
você vai vir em aplicação, você vai você
vai pesquisar o cloud. Olha só o cloud
aqui, ó. Tá vendo? Quando a gente
comprar a nossa VPS já vai vir com ele
instalado. É maravilhoso. Aí você vai
confirmar aqui. Continua aqui. Você vai
ser redirecionado pra aba de pagamento.
Você vai pagar e aí você vai receber o
e-mail direitinho com os acessos da sua
VPS. Eu já vou direto pra tela para te
mostrar como é que vai chegar aí para
você. Olha só, essa aqui é a tela da
página inicial, né? Para você acessar a
VPS que você comprou, você vai vir aqui
nesse canto, ó, VPS. E aí a sua vai ter
esse aqui, ó, com o cloud, que foi essa
que eu te mostrei como é que você
compra, né? Sua já vai ter assim, ó,
dessa forma aqui, com o cloud code já
instalado. A gente precisa dar VPS, OK,
pra gente continuar, tá? Então, agora
que está tudo OK, o cloud tá instalado
na sua VPS do jeito que eu te mostrei no
começo, a gente vai acessar o terminal.
E não se preocupa, não precisa ter medo,
tá, de acessar o terminal, porque eu vou
te mostrar os comandos aqui. É só você
seguir o mesmo jeito. Então, a primeira
coisa que a gente vai fazer é aqui, ó,
terminal. Ele já tem na ativamente, a
gente vai acessar o terminal da própria
Rochinger. Aí a gente já cai aqui dentro
do nosso servidor. Quando você foi
comprar a sua VPS, você teve que criar
uma senha root. E essa senha que você
vai precisar colocar aqui caso peça, tá?
Nesse caso aqui, meu, não pediu, então a
gente já pode continuar. No seu vai
pedir, tá? Você vai precisar colocar. E
agora a gente vai clonar o repositório,
é onde eu coloquei os materiais que a
gente vai precisar para subir essa
estrutura onde o cloud vai construir o
nosso agente A. Então aqui, ó, eu vou
colar esse comando aqui, que é pra gente
instalar o Git, fazer o clone do
material, né, do GitHub e acessar a
página que ele vai criar lá dentro.
Então, ó, eu vou dar o OK aqui. Ele já
tá trabalhando, ó. Já tô fazendo a
instalação desse git e clonando o que
tem lá nesse repositório pra minha VPS.
É como se eu tivesse simplesmente
copiando uma pasta e colocando dentro da
minha nuvem. É só isso que tá
acontecendo aqui. Então, agora a gente
já tá dentro da pasta do repositório que
eu já. Então, agora eu vou chamar o
cloud para cá, para essa pasta, para ele
começar a trabalhar para mim. Como é que
a gente faz isso? É simplesmente com
comando cloud, dessa forma aqui, ó. E
aí, ó, ele já vai abrir a tela do cloud.
Como é a primeira vez que eu vou me
conectar aqui a ele, ele vai pedir que
eu faça o acesso login. Então aqui eu
vou só dar enter nesse dark mode aqui.
Vou colocar aqui a minha conta, ó, com a
inscrição. Aí ele já vai abrir uma tela.
Eu vou copiar isso aqui. Vou na minha
conta para eu aprovar o acesso. Vou te
mostrar aqui, ó. Só você abrir aí no seu
navegador o mesmo link que ele gerou
para você conseguir atribuir, autorizar.
Aí você autoriza, né? Vai precisar de
uma conta pelo menos pro poder fazer
isso, aquela a primeira opção de conta
paga, tá? A conta gratuita não dá
acesso. Aí você cola o código aqui, ó.
Prontinho. Você dá enter. Pronto, eu
consegui logar. Então você precisa dar
conta do Cloud Pro para fazer isso, tá?
Aí eu dou enter para continuar, dou
enter novamente. Vou confiar nessa pasta
para ele poder ter acesso a tudo. E
agora o Cloud já está nessa minha pasta
aqui. Eu vou ficar usando o sonetê para
isso. E agora eu vou pedir para ele
simplesmente iniciar a construção do
nosso projeto. Tô aqui na minha VPS e eu
vou simplesmente colocar esse comando
aqui. Vai já aparecer, ó. Vou pedir para
ele ler os arquivos que estão do cloud
MD, que é um arquivo que eu criei, que
vai ser praticamente, vai est toda a
instrução da construção desse agente. E
aí eu vou pedir para ele, ele já tá
lendo, ó, e vai ficar me perguntando.
Então aqui eu já vou dar y aqui para ele
poder executar os comandos que forem
necessários. Então aqui ele tá falando
que não encontrou o node js então a
gente vai precisar instalar isso. Como é
que você faz para sair daqui? É só você
apertar contrtrl C. Pronto, ó, já saí
aqui do cloud. A gente tava dentro da
pastinha conversando com o cloud. Agora
eu saí dessa pasta e voltei de novo para
essa parte aqui do terminal para poder
eu fazer a instalação do que ele falou
que precisa. Tá vendo que ele pediu aqui
que precisa do Node jss para fazer isso.
Qual o comando para isso, né? Eu vou
colar aqui, ó, justamente esse comando
aqui para ele poder instalar esse Node S
dentro da nossa VPS, porque a gente
precisa disso para poder projeto
funcionar, né? Porque a gente vai
construir uma aplicação web, uma
interface visual, pra gente poder
acompanhar tudo. E aí precisa dessa
ferramenta instalada, né? Então agora
vamos ver aqui se foi, ó, esse outro
comando aqui a gente consegue ver se foi
instalado. Botar aqui para você ver, ó.
Pronto. Então aqui tem a versão
certinho. Tá vendo, ó? Foi instalado.
Agora a gente volta de novo pro cloud,
ó. Pronto, voltei pro cloud. Agora eu
volto de novo comando, já dizendo que a
gente já instalou o Node JS, que é o que
tava faltando para ele continuar o
projeto. Aí ele já vai ler novamente. Aí
ele já tá, tá vendo aqui, gente? Ele tá
acessando todos os arquivos do projeto
para poder conseguir construir a nossa
aplicação. Então aqui, ó, vou colocar
aqui agente Lena. Qual o nome do agente?
o nome que ele vai usar para
interpretação. Vou colocar Lena mesmo. O
idioma que a gente vai usar é português.
Ele vai atuar como qualificação de
leads. Vou colocar aqui. E aí você viu
que tem várias outras opções ali, né?
Qual o nome do projeto aí, ó? Vai pedir
pra gente confirmar. Tá vendo que eu só
tô respondendo aqui as configurações que
eu já tinha colocado anteriormente?
Canal do WhatsApp, ele vai me perguntar
agora. E aí, por isso que eu te falei
que você vai precisar ter aquelas
configurações antes, né? Aqui, ó, você
vai ter a opção de usar a PI oficial,
API da Evolution ou a PI da WhatsApp,
né? Além da API oficial, a gente, eu
coloquei também aqui essas outras, mas
aqui a gente vai usar a PI oficial.
Então, vou dar o OK aqui, ó. Aí ele vai
perguntar agora quais são as mesmas
informações. Eu te falei que a gente vai
precisar. Eu vou botar para definir tudo
depois no ponto ENV. Ponto env é o lugar
onde a gente vai colocar todas as
informações, credenciais, coisas que não
podem ser vazadas. Aí a gente vai
precisar configurar isso depois no ENV.
Aqui ele tá perguntando qual é LLM que
eu vou usar. Eu vou botar aqui a Opene.
E aí a gente vai precisar também da
chave da Open tá? Vou pedir aqui as
últimas 10 mensagens com um resumo
persistente que é como se ele fizesse
resumo do que foi conversado de mais
importante mais as últimas 10 para ele
ter o contexto. Quando a gente deve
transferir para o humano, vou colocar
aqui quando a gente pedir, quando alguém
pedir e aí você vai dar enter, ó, vai
perguntando tudo para você. Agora ele
vai pedir aqui o prompt e aí você tem a
opção de pedir para criar, né, aqui
mesmo, ó, digitar o próprio ou já deixar
o padrão, né? O ideal é que você coloque
o seu. E aí a gente vai ter isso
construído lá também, né? Na nossa
interface. Tudo que for de credencial,
de informações que não podem vazar, a
gente vai colocar no ponto env. Já tenho
também as informações do Sopab, que é o
banco de dados, ó. Então, a gente já tem
a URL, vou dar só OK aqui em relação ao
domínio, porque a meta, ela vai pedir
que a gente coloque um domínio para ela
poder enviar as mensagens que chegam no
WhatsApp oficial para essa URL. Então,
por isso que a gente vai precisar de uma
URL também. E aí eu vou te mostrar já já
como é que você consegue pegar, pode ser
um subdomínio mesmo aqui direto na
hostinger. Então, vou dar o OK dizendo
que eu tenho. Então, aqui eu vou
selecionar o próprio e-mail, que é o meu
e-mail da própria conta. E aí eu vou
submeter as respostas. Ó, você tá só
respondendo o que ele tá te perguntando
sobre o teu agente, entendeu? Muito
simples isso. Aí ele já tá confirmando
que foi as perguntas principais. Agora
ele vai gerar, ó, aqui, ó, você tá vendo
que tem todas as informações, ó, que a
gente acabou de responder. Ele tá
falando que vai criar isso. Eu vou botar
OK. A, permitindo que ele crie esse esse
arquivo Jason. Agora ele tá iniciando o
build. Então agora ele vai começar a
construir realmente tudo que a gente
pediu para ele construir, né, de acordo
com o projeto. Ele vai criar o servidor,
o banco de dados, o painel web, vai
criar tudo. A gente vai só permitindo
algumas coisas que ele pede aqui, né? a
parte da segurança também ele vai cuidar
disso e pode ser que demore. Agora eu já
vou permitir novamente aqui, coloquei já
a opção dele permitir para tudo nessa
parte aqui dessa sessão e aí ele vai
continuar escrevendo, ó. Aí pode ser que
demore um pouco, então já fica atento
com relação ao tempo que ele vai demorar
um pouquinho para construir, tá?
Enquanto ele tá construindo, vou
aproveitar pra gente já resolver a
questão do domínio que eu te falei que a
gente vai precisar para colocar lá na
API oficial. Então, vou voltar aqui pra
minha Hostinger. Vou entrar aqui em
alguns sites que eu tenho, vai aqui em
todos os sites. Gente, o domínio é tão
baratinho, tá? E aqui na Rochinger é
super barato e é muito simples de você
configurar. Então, vale super a pena
você também já ficar, já deixar tudo na
mesma ferramenta. E aí, só te explicando
melhor por que a gente precisa do
domínio, né? É basicamente porque o esse
vai ser o endereço, vai dar acesso tanto
ao painel, a gente vai conseguir acessar
com com esse domínio, painel web, que eu
te falei que a gente vai criar, que a
gente não, o cloud tá criando lá. E
também a questão do web hook, né? Como
eu te expliquei, a meta ela precisa de
um link, de uma URL, de um domínio seu
para poder ficar enviando as mensagens
para esse domínio. Ela não consegue
mandar pro IP direto aqui da nossa VPS.
Ela precisa de um domínio realmente para
poder enviar isso. Então vou vir aqui em
domínios, ó. A gente vai gerenciar. Vou
gerenciar o domínio. Vou nesse aqui.
Você precisa ir para essa página aqui de
DNS. Se você não tiver na Roostinger,
vai buscar isso na plataforma que você
está usando. Aqui você vai deixar o tipo
A de registro e aqui você vai colocar o
IP da sua VPS. Então, deixa eu voltar
aqui pra minha VPS porque eu não sei de
cabeça. Ó, esse IP aqui. Aí você copia
ele, volta para cá, dá o nome, né,
correto? Vou colocar aqui aula, gente. E
aí vai apontar pro IP da VPS. E aí você
vai em adicionar o registro, ó. Aí ele
vai adicionar mais um, porque eu já
tenho vários outros subdomínios aqui.
Vamos ver aqui como é que tá o cloud. Ó,
ele já tá criando a página do painel
web. Gente, vocês entendem como isso
aqui é? Genial, né? Caramba. E aí, se
você não gostar da interface, você vai
pedindo para ele mudar, né? Não tem
problema nenhum. Então, já tô aqui na
minha conta da Openi. Você vai precisar
de crédito na Open $5 já é o suficiente
aí para você começar a trabalhar. Então
assim, coloca o crédito antes e aí que
você vem aqui na parte de criar uma
secrety. Você cria aqui a secrety, ó. E
aí eu venho em criar, copio essa chave e
colo junto com as outras informações que
a gente vai precisar para configurar
depois o ponto. N, ó, olha só, ele já tá
finalizando o build aqui, ó. Tá vendo?
criou tudo que a gente precisava dentro
da pasta certinho que a gente tá aqui,
ó. E agora tem os próximos passos, que é
justamente preencher o ponto MV com as
credenciais, rodar o SQL no Supas, fazer
o deploy da VPS e registrar o domínio lá
na meta, que é o último passo que a
gente vai fazer. Então, bora lá. E a
primeira coisa que a gente vai fazer é
ver aqui qual é o SQL que a gente vai
ter que executar lá na nossa ponta do
superabas. Então, eu coloco esse comando
aqui, ó, para eu conseguir ver, ó. Aí,
aqui é o arquivo SQL que ele criou.
Então, vou copiar tudo isso aqui, ó.
Volto até aqui. Volto lá na minha conta
do Sup, ó. Tô aqui na conta do Supase.
Agora eu venho aqui em SQL Editor. E aí
eu vou executar esse SQL que ele criou
para mim, né? Que é justamente para
poder salvar todas as informações que a
IA vai poder acessar. executar aqui.
Pronto. Então, quando a gente volta
aqui, são essas as tabelas que ele
precisa ter criado. Então, se eu volto
aqui, ó, já estão aqui, tá vendo, ó? E
aí a gente vai poder voltar lá. Agora a
gente vai preencher o ENV. Ó, você tá
vendo que aqui tem o exemplo do ENV
dentro da pasta, igual o Cláudio falou
que criou. Aí para eu pegar é sempre cat
e o nome do arquivo, ó. Tá vendo? E aí
eu dou enter. Aqui já tem todo o exemplo
de como é que a gente tem que preencher.
Ó, se você não souber como, você pode
pedir simplesmente ajuda para IA, né?
Não é o ideal. O ideal é que você mesmo
coloque as informações para não dar
nenhum problema, né? Não vazar nada. Mas
aí você pode pedir ajuda para irá poder
criar. Agora eu vou preencher isso aqui.
Se a gente preencher, ó, tá vendo que
aqui ele tá falando que a gente vai
precisar gerar os valores automáticos,
ó. Tá vendo? E aí ele já deixa aqui
quais são os comandos, esses três aqui,
dessas três chaves do painel web. Então
eu vou copiar elas e só vou colar elas
aqui, ó, dessa forma, desse jeito aqui.
Pronto. Aí ele já gerou pra gente. Eu
vou copiar isso. Então agora, antes da
gente realmente criar o nosso ponto ENV,
eu quero ver aqui dentro da minha VPS se
tem o RS instalado, que a gente vai
precisar disso na instalação. Qual o
comando para isso? Esse comando aqui, ó.
Então eu preciso instalar ele dessa
forma aqui, ó. E aí, ó, a gente tá
conferindo a instalação que ele vai
precisar disso para poder usar. Então,
deu certo. Se tiver esse pong no final
significa que deu certo, tá? Isso a
própria Yak me diz, tá gente? Por isso
que eu te explico. Que você não
entender, você pode simplesmente printar
ou copiar, pedir pro Cloud te ajudar.
Agora a gente vai realmente criar o
nosso ponto env agora que a gente
instalou o RS, que era o que precisava.
Aí, ó, colei aqui. Tem que ter esse
comandinho no começo e todas as
informações que a gente viu lá, que eu
te expliquei no começo desse vídeo.
Então, preciso que você traga isso tudo
bem estruturado. E aí você dá um enter
aqui, ó. Olha só, agora deu certo, a
gente conseguiu instalar. Vou deixar
tudo, todos esses comandos que eu tô
usando no material, tá? E aí agora a
gente vai precisar subir o agente no
PM2, que é justamente PM2 é um
gerenciador de processos, tá? Ele é quem
vai garantir que o a gente fique rodando
para sempre no servidor, sem que a gente
precise estar online, né? E aí para isso
a gente vai colocar esse comando aqui,
ó, que a gente precisa instalar ele
antes, por isso que ele deu esse errinho
aqui. Então, antes a gente instala
dentro da nossa pasta. Agora que
instalou é que a gente consegue, ó,
agora sim está online. Tá vendo? deu
alguns errinhos aqui na hora que a gente
tava iniciando o PM2, que é o processo
que eu te expliquei para ele ficar 100%
online. Então, para isso, o que que eu
vou falar? Eu vou pedir pro cloud
corrigir esse problema e refazer o
build. Então, ó, vou entregar esse
comando para ele aqui, explicando para
ele que tá com esse com erro, né, no
PM2, que é justamente esse aí, ó. E aí
vou pedir para ele mesmo corrigir. Isso
pode acontecer, né? E aí só você pedir
para ele consertar para você. Simples
assim, ó. Ele já fez a correção aqui do
que precisava e agora a gente vai ver se
tá respondendo. Então vou abrir aqui
local. Então agora eu vou voltar
novamente aqui no cloud e vou perguntar
para ele qual que é a rota do painel,
né? Pra gente poder saber aqui como é
que a gente vai conseguir acessar. Aqui
ele deu a rota, abriu certinho. Tela, ó,
a mesma tela que a gente ele indicou
para nós. Então agora vou atualizar aqui
a página tá funcionando. Eu preciso
colocar a senha que eu criei e acessar.
Então vou entrar aqui, ó. Que legal.
Aparece aqui as conversas, né? O painel
já tá OK. É para aparecer aqui, né?
Então vamos ver, ó. Aqui a gente
consegue mudar as informações. Nossa, tá
bem bacana. Aqui a gente consegue
configurar todas as informações do
agente em si, né? Agora a gente vai
configurar lá na meta. Isso pra gente
poder configurar na meta, eu perguntei
eh quais são as informações que a gente
vai configurar, né? Porque aqui o painel
tá lindo, tá funcionando, né? Ótimo.
Aqui só vai aparecer os dados quando a
gente começar a movimentar lá no
WhatsApp da meta. Então aqui para ele eu
perguntei, ó, direitinho quais
informações. Respondeu só perguntando se
a gente fez aquele passo anterior que
nós fizemos, né? Então isso aqui já tá
OK. Agora a gente vai lá na meta
configurar o que falta. Justamente a
URL. Vou copiar aqui, ó. E o token de
verificação. Aqui na página da meta, tá?
No developers do Facebook. Você vai em
meus apps e aqui vai aparecer o app. que
você tem aí, né? Então, ó, você vai vir
em configuração aqui, no casos de uso,
configurações da API, aqui embaixo tem a
opção da gente configurar o web hooks,
ó. Tá vendo aqui, ó, essa opção. Então,
a gente vem aqui, precisa est tudo OK
nele, tá? Não esquece disso. Agora a
gente vai configurar o web hook aqui, ó,
RL que ele falou para eu colocar de
verificação é esse aqui. Aí, ó, vou
verificar e salvar. Ó, configurei aqui,
só que eu acabei esquecendo de colocar o
messages. A gente precisa ativar isso
justamente para disparar quando alguém
mandar mensagem. Então, vamos procurar o
Messengers aqui, ó, assinado. Então, já
estou aqui, finalizei a configuração lá
na meta. Agora a gente precisa testar,
né? Tô aqui com o painel aberto e também
o WhatsApp. Vou mandar uma mensagem aqui
e aí a gente vê o que que vai acontecer,
né? se ele se a IA vai responder ou não.
E aí, gente, sempre que não der, ó, já
recebemos aqui o log de atividade. Olha
só que legal. Se não funcionar de
primeira, é simplesmente você printar ou
copiar ou explicar pro cloud que ele vai
te explicar como é que você vai fazer
para corrigir, né? Mas, ó, aqui a gente
já recebeu a mensagem, né? E lembrando
de novo, esse prompt ele tá bem
genérico, porque a gente precisa
configurar melhor e tudo, mas aqui a
nossa conexão, né, a PI oficial da meta,
ó, você tá vendo aqui, tá funcionando.
Colocamos todos os parâmetros
necessários aqui no dashboard. Então, a
gente consegue ter toda a visualização
do total de contatos, conversas,
mensagens hoje, né, o log de atividade
pra gente ver se realmente o fundo tá
funcionando ou se não tá funcionando.
Aqui a gente consegue acompanhar as
conversas. Eu tô clicando e não tá
aparecendo. A gente pode corrigir isso
também com o Cláudio, pedir para ele ver
o que que tá acontecendo, porque que não
tá abrindo as mensagens, né? Mas a gente
já recebeu a resposta. E aqui nas
configurações é onde você vai configurar
toda a identidade do teu agente, né?
colocar direitinho o prompt, correto,
colocar qual é o modelo que você vai
utilizar, a temperatura, se ele é
criativo ou não. Então aqui tá
funcionando dentro do nosso servidor
próprio, né? Então vou continuar
conversando aqui com ela. Deixa eu só
entender melhor o que que ela faz, né?
Porque eu nem lembro o que que ela faz.
Vou mandar isso aqui e aqui no
dashboard, ó, a gente consegue ir
acompanhando. Lembrando que aqui, ó, tá?
aparece todo logo de atividades aqui.
Aqui, gente, ele pega do nosso super
base. Então, lembra que o nosso banco de
dados é o super base. Então, quando a
gente volta aqui, ainda não tá
aparecendo as conversas, mas porque eu
não corrigi também, né? Mas tá
funcionando, a Mia tá respondendo, só
falta corrigir essa questão das
conversas e aí você pode só voltar lá na
VPS e explicar para ele. Funcionou?
Então aqui a gente explica e aqui você
vai conversando, né? Ele tá vendo,
entendendo, ó? Aí ele vai acessa lá o
que falta, faz as correções necessárias,
entende? Mas aqui o log tá funcionando
direitinho, tá mostrando quantas
mensagens eu recebi hoje. Eu posso vir
aqui também no agente e desativar o
agente quando eu quiser. Então colocar
mais funcionalidades. Mas o importante
que o meu agente ele já tá me
respondendo no WhatsApp, na meta
diretamente aqui. Então olha só, pedi
aqui pro Cloud consertar. Aí ó, já
aparece aqui todas as conversas. Olha só
que legal. Agora você vai poder
acompanhar, né? A gente tá escolheu
utilizar a Pay oficial, a gente não tem
interface dessas conversas dos usuários.
E aí com nossa solução, com essa solução
que a gente construiu, a gente vai ter
acesso a tudo que tá sendo conversado
aqui entre o agente. Então, ó, tá aqui
todas as conversas que eu tive com a IA.
Se você quiser, você ainda pode colocar,
por exemplo, o chat aqui para você
mandar mensagem e aí tem que estar
dentro da janela de 24 horas para
enviar, né? Não é só enviar porque a PI
oficial a gente só pode conversar com
lead dentro da janela de 24 horas. E
aqui, olha que legal. Então, tá
funcionando agora todo o nosso painel,
né? Nosso front aqui tá bem bonito, ó. O
dashboard também. Então, agora eu quero
ver você construindo isso aqui também
dentro do teu WhatsApp oficial. Então
vamos ver aqui tudo que a gente
construiu hoje. Nós pegamos um pack de
arquivos, conectamos direto na VPS e o
Cloud Code construiu a gente completo
para nós só com as informações que a
gente descreveu em linguagem natural.
Esse agente, ele usa a PI oficial da MET
e fica rodando 24 horas por dia no seu
servidor próprio. E além do agente, nós
também temos um painel web onde dá para
gerenciar tudo pelo navegador sem
precisar [música] ficar entrando ali no
servidor. O pack de arquivos e o prompt
que eu utilizei aqui, além do guia de
implementação em PDF, com todo o passo a
passo escrito e o material completo
sobre como configurar o app lá na meta
para você ter acesso à Pay oficial. vai
estar disponível lá na minha área de
membros meus alunos. E se você ainda não
é aluno, aproveita, porque essa é
literalmente a última turma promocional.
Então você ainda vai garantir todas as
atualizações que estão por vir no preço
promocional. O link vai tá aqui na
descrição, eu te vejo lá do outro lado,
hein. E não esquece que se você quiser
pegar a VPS com o cloud Code já
configurado para facilitar a tua vida, o
link da Hostinger vai est aqui na
descrição. Usa o meu cupom, tá lena,
para garantir o desconto que eu te
mostrei aqui durante o vídeo. Se esse
vídeo te ajudou, deixa o teu like aqui,
porque isso ajuda demais o canal e eu
posso continuar trazendo conteúdo como
esse. E eu te vejo no próximo.
[música]
Hum, hum. Yeah.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
