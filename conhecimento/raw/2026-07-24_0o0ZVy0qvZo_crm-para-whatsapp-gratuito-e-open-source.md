---
tipo: video-youtube
video_id: 0o0ZVy0qvZo
titulo: CRM para WhatsApp Gratuito e Open-Source (Configuração Passo a Passo)
canal: Thalena Lima - IA & Automações
url: https://youtu.be/0o0ZVy0qvZo
data_publicacao: 20260618
duracao: 27m 33s
views: 36546
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# CRM para WhatsApp Gratuito e Open-Source (Configuração Passo a Passo)

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/0o0ZVy0qvZo)
- Publicacao: 20260618
- Duracao: 27m 33s
- Views: 36546

## Descricao (original)
🔥 Link Hostinger com desconto: https://www.hostg.xyz/aff_c?offer_id=6&aff_id=221622&url_id=5961
🎟️ Cupom THALENA → 10% OFF nos planos anuais

🔗 Pegue meus templates e acesse nossa comunidade (GRATUITO): → https://academy.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video75

➡️ Treinamento Completo IA Experts: https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video75

🔗 Conheça nossos serviços e implementações → https://lp.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video75

Aprenda como criar um CRM para WhatsApp grátis usando a API oficial da Meta. Neste tutorial, você vai instalar e configurar um CRM open source completo, sem precisar programar.

O sistema possui atendimento pelo WhatsApp, bate-papo ao vivo, automações, gestão de contatos, pipeline de vendas e outros recursos para organizar clientes e oportunidades.

Você vai aprender como:

• Instalar um CRM de WhatsApp open source
• Configurar o banco de dados
• Colocar o sistema no ar usando uma VPS da Hostinger
• Conectar a API oficial do WhatsApp da Meta
• Centralizar conversas e contatos
• Criar automações de atendimento
• Organizar oportunidades em um pipeline de vendas
• Manter seu CRM funcionando 24 horas por dia

Essa solução pode ser utilizada no seu próprio negócio ou transformada em um serviço para clientes que vendem e atendem pelo WhatsApp.

─────────────────────────
⏱ CAPÍTULOS
─────────────────────────
00:00 - Introdução e pré-requisitos
01:53 - Configuração técnica local
06:31  - Banco de dados com Supabase
10:21 - Primeiro acesso e teste
14:01 - Integração com API do WhatsApp
19:49 - Deploy profissional 
25:36 - Testes finais

─────────────────────────

Todos os tópicos:
* Introdução e pré-requisitos: Apresentação da ferramenta, a importância da API oficial da Meta e os requisitos iniciais como Node.js e GitHub 
* Configuração técnica local: Passo a passo de como clonar o repositório, usar o VS Code e instalar as dependências necessárias 
* Banco de dados com Supabase: Como configurar as credenciais, criar o arquivo .env e executar os scripts SQL para preparar o banco de dados 
* Primeiro acesso e teste: Login no sistema, personalização básica e funcionalidades do dashboard 
* Integração com API do WhatsApp: Configuração das credenciais da Meta, ID do número e o uso de ferramentas de webhook para garantir a comunicação em tempo real
* Deploy profissional na Hostinger: Como colocar o sistema online 24/7 usando uma VPS, configurar as variáveis de ambiente e garantir que o domínio funcione 
* Conclusão e testes finais: Verificação do funcionamento do CRM com o webhook configurado e considerações finais 

Se você quer aprender a construir agentes de IA, automações com n8n, integrações, produtos com IA e sistemas reais para empresas, entra no IA Experts pelo link da descrição.


WA CRM: https://wacrm.tech/
Repositório do GitHub: https://github.com/ArnasDon/wacrm

Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢Compartilhe com alguém que quer aprender IA do jeito certo: https://youtu.be/0o0ZVy0qvZo
💬 Comenta aqui qual dessas decisões mais abriu sua cabeça.

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

#CRMWhatsApp #WhatsAppBusiness #Automação

## Transcricao
Se você tem uma agência, atende clientes
ou só quer parar de gastar centena de
reais por mês com uma ferramenta de CRM
de WhatsApp, vou te mostrar como ter o
seu próprio de graça, rodando com a API
oficial da meta, né, que você sabe que o
risco de banimento é menor, sem precisar
programar. Um sistema pronto, gratuito e
open source que você só precisa instalar
e configurar. E olha só, isso aqui é
ouro para quem também trabalha com
agência. Você pode pegar toda essa aula
de hoje e criar uma solução para vender
pros teus clientes que também trabalham
com WhatsApp. Se você ainda não me
conhece, muito prazer, eu me chamo
Talena e aqui no canal eu falo sobre IA
aplicada negócios. Então, se esse tema
te interessa, já se inscreve aqui,
porque toda semana tem conteúdo prático
de como que você pode utilizar
inteligência artificial para gerar
resultado de verdade. E hoje o vídeo é
bem prático. Eu vou te mostrar o passo
[música] a passo de como instalar,
configurar e colocar no ar esse CRM de
[música] WhatsApp completo com bate-papo
ao vivo, automações, pipeline de vendas
e muito mais. Tá incrível. Bora lá pra
tela do meu computador, porque eu quero
te mostrar tudo. Já estou aqui com a
tela do meu computador aberto para te
mostrar essa ferramenta, que é a
ferramenta que a gente vai configurar e
instalar aqui na nossa estrutura. Então,
como eu te falei no começo do vídeo, é
um CRM de WhatsApp que é open source,
tá? Então, ou seja, a gente consegue
baixar na nossa estrutura e fazer as
alterações que a gente quiser, tá?
principalmente usar como base, que é o
que a gente vai fazer aqui. E aí eu vou
deixar essa página também na descrição
para você poder acessar e entender
melhor quais são todas as
funcionalidades. Tem automações também,
a gente vai ter o bate-papo ao vivo, a
gente vai conseguir fazer disparo de
template, né, como a gente tá usando a p
oficial aqui, a gente vai conseguir
fazer isso também. Então assim, são
funcionalidades incríveis de graça, né?
A gente só vai fazer a configuração e
instalar nossa estrutura. Então, antes
da gente começar de fato, a gente vai
precisar de alguns pré-requisitos,
algumas ferramentas que a gente vai
precisar instalar. E aí, lembrando que
eu vou deixar tudo, todo o passo a passo
que a gente vai fazer aqui durante esse
vídeo, todas as ferramentas, tudo bem
detalhado no material em PDF para você
baixar gratuitamente na minha comunidade
gratuita. Só você clicar aí na descrição
que você vai poder acessar também, tá? A
gente vai precisar do Node js instalado.
Nós vamos instalar, fazer a configuração
dentro de uma IDE que é o VS Code. O VS
Code, para quem não sabe, é uma IDE que
você consegue rodar diversas IA, tá?
Então, se você não tem ele instalado,
você vai fazer a instalação. É a
ferramenta que a gente vai usar para
colocar todas as nossas credenciais,
organizar todo o projeto, tá? Além
disso, a gente vai ter que ter uma conta
no GitHub, porque esse essa ferramenta
ela é um repositório. Então, quando a
gente clica aqui, ó, a gente vai ser
levado diretamente pro repositório da
pessoa que criou e ele disponibiliza
para você baixar, né? Então foi essa
pessoa aqui, tá? E o repositório dele, a
gente vai conseguir baixar. Então, a
gente precisa de uma conta no GitHub
para isso. E claro, uma conta na meta,
na PI oficial, né? Se você é meu aluno,
você já sabe, você já tem a sua PI
oficial, porque lá a gente tem um módulo
completo e específico da PI oficial,
onde eu vou te ensinar a instalar, onde
eu vou te mostrar como é que você vai
utilizar, tudo bem completo. Então aqui
você já tem que ter a PI oficial
instalado, tá? Já tem que ter aí o seu
número, a sua conta lá no Business
Manager do Facebook. Então a primeira
coisa que a gente vai fazer, nós já
estamos aqui com o repositório. Então,
ó, abrir aqui o repositório na minha
conta. Você tem que estar logado na sua
conta do GitHub. Se você não tem conta,
é muito fácil, é só você criar sua
conta, porque daí a gente vai fazer um
fork, que é basicamente uma cópia
própria desse projeto, né, na nossa
conta do GitHub. Por que que isso
importa? Porque aqui nesse projeto a
gente não tem permissão para alterar o
código original dele, mas a gente pode
criar uma versão nossa, né? A gente vai
duplicar, vai copiar esse projeto na
nossa estrutura e aí a gente vai
conseguir fazer nossas alterações, a
gente vai conseguir customizar, colocar
nossa marca, entendeu? Então, por isso
que a gente vai fazer esse fork aqui, ó.
Nesse botão aqui, a gente vai apertar
nele, ó. E aí aqui a gente vai conseguir
escrever, né? Vou até colocar aqui CRM,
WhatsApp. É opcional você colocar essa
descrição. Aí a gente cria o fork aqui,
ó. Pronto. Agora eu criei a cópia dentro
da minha estrutura, né? Então agora eu
vou deixar público aqui, mas depois eu
vou deixar privado. Agora que a gente já
tem esse projeto na nossa estrutura,
você vê que ele já criou com o meu link,
ó. A gente vai lá pro VS Code. Abri aqui
a tela do meu VS Code. Se você não tá
acostumado a utilizar o VS Code, assista
aí os vídeos do canal, porque eu já
mostrei exatamente no curso também tem
aula sobre VS Code, mas aqui pra gente
trabalhar nele, para manter a
organização, a gente vai criar uma pasta
no nosso computador, porque aí a gente
vai manter esse projeto 100% organizado
dentro de uma pasta específica. Então
vou aqui no meu computador e eu vou
criar uma pasta aqui dentro. Prontinho,
ó. Criei uma pasta aqui dentro, o mesmo
nome do projeto. Aí agora a gente
consegue vir aqui no botão e abrir essa
pasta, ó. Abrir uma pasta que vai ser a
pasta que a gente acabou de criar, que é
essa aqui. Então vou abrir ela aqui, ó.
Pronto. Agora eu já estou dentro dessa
pasta no meu computador. Tá vendo aqui a
pastinha, ó? Então agora a gente vai
abrir o nosso terminal pra gente poder
começar a trabalhar. Como é que faz
isso? No botão lá de cima, você vai em
novo terminal. Eu estou dentro dessa
pasta que eu criei e aí eu coloco esse
comando aqui e aqui vai ser o teu
usuário que tu fez o clone. Então vou
pegar, botar meu usuário e aí eu vou dar
um enter. Então agora ele tá trazendo
todos os arquivos de lá para cá. Então
agora se a gente abrir aqui, ó, olha só,
na hora que a gente fez lá o clone, já
veio para cá, tá? já veio todos os
arquivos que estava lá no repositório
para cá, pra minha pasta que eu criei.
Então, agora que a gente fez a
instalação, a gente vai instalar isso,
que é basicamente com esse comando aqui,
ó, npm instal. E esse comando ele vai
ler todas essas bibliotecas, né, que o
projeto tem para ele precisar funcionar,
tanto para interface, banco de dados,
todas as chaves criptografadas, ele vai
baixar tudo automaticamente na nossa
pasta pra gente conseguir abrir ele
localmente, sem ser dentro do nosso
site, mas no nosso computador. Então, eu
vou dar enter aqui, ó, e aí você vai ver
que ele já vai começar a fazer a
instalação aqui, ó, do que precisa. A
gente tem que esperar um pouquinho. Como
eu já tenho o Node JS instalado também,
ele já vai fazer toda a instalação. Se
você não tiver, você vai precisar disso,
tá? Ó, já instalou aqui todas as
bibliotecas que a gente precisa. E aí,
para eu ver se deu certo, eu já já posso
colocar npm randev. Pronto, ó, já tá
aqui. Local host. Vamos ver se tá mesmo.
Vamos abrir aqui o projeto. Só que ele
não vai abrir, ele vai dar erro porque a
gente não configurou nada. Tá vendo? A
gente precisa configurar nos nossos
credenciais. Coisas que a gente não pode
abrir ainda aqui. Então, o que que a
gente vai fazer agora? Nós vamos ajustar
as credenciais do nosso banco de dados,
porque imagina, a gente precisa de um
banco de dados para salvar todos os
clientes, para salvar os dados de acesso
de login. Então, por isso que a gente
precisa ajustar o banco de dados antes.
E aí, lembra que eu te falei que você
vai precisar de uma conta no Supas? Pois
é, vou deixar o link na descrição aí
também, caso você ainda não tenha conta
no Supase. É gratuito o plano que a
gente vai usar aqui, não precisa você
pagar. Então é só você clicar no link
que vai tá aí e aí você vai criar sua
conta dentro do superabase pra gente
poder ver. Então para sair aqui dessa
parte vou apertar control C. Pronto.
Então eu saí aqui do que eu tava. Aí a
gente vai colocar um comando que ele vai
duplicar o arquivo ponto env, que é esse
arquivo que tá aqui na lateral, ó. Tá
vendo que tem um arquivo ponenv aqui, ó?
Ele tem um exemplo de como é que tem que
ser o nosso ponto env. E aqui você tá
vendo que a gente vai precisar colocar a
nossa URL do Supabs do banco de dados, a
nossa chave e algumas outras informações
que vai ser necessário, por exemplo, pra
gente rodar API oficial. Então, qual o
comando para ele duplicar isso? É
exatamente esse aqui, ó. Ele vai criar o
meu oficial, tá vendo? Na hora que eu
executei, ele já criou aqui, que ele vai
pegar as mesmas informações que tá aqui
no exemplo e vai colocar no real que a
gente vai usar. Então agora eu espero
que você já tenha criado a sua conta no
Superabs. Caso você não tenha criado
ainda, é só você criar no link que tá aí
na descrição. E aí você vai criar um
novo projeto, tá? Quando você criar,
você vai ir aqui em novo projeto, vai
criar. Eu já criei um aqui só para
agilizar. Então aqui tá vendo que no
próprio ponto env a gente precisa do da
URL do Base. Qual que é essa URL? É essa
aqui, ó. Copia essa URL do projeto. Vou
colar ela aqui, ó. Lembrando que esse
arquivo ponto vi local, ele só vai ficar
local só aqui. Quando a gente for subir
ele na nossa estrutura para ele ficar
rodando 24 horas por dia, 7 dias por
semana, esses arquivos eles vão ser
configurados lá na plataforma, tá? Só
para você entender aí. Mas calma que eu
vou te mostrar tudo. Agora a gente
precisa da chave específica dessa key
aqui. Você vai vir aqui em configurações
de projeto, ó, API aqui. Nessa opção
aqui, ó. Aqui tem a public enum, que é a
que a gente quer, e tem essa outra. A
gente vai copiar essa aqui. Não exponha
essas chaves, tá? Eu tô mostrando aqui
para você, mas depois eu vou excluir
esse projeto e ele vai sumir. Só para eu
te mostrar a configuração. Então a gente
volta aqui, vamos colar a nossa chave
aqui, ó. Pronto. Agora precisa da rol
key, que é essa outra aqui. Você precisa
revelar ela. Copia, volta pro projeto,
cola ela aqui, ó, e pronto. Agora você
dá, você salva no, se você é contrl S,
né? Se você tiver no Mac é Comand S.
para salvar essas informações que você
colocou aqui. Agora a gente vai ter que
rodar um um script SQL que já vem aqui
no nosso projeto para ele criar as
tabelas, porque aqui no nosso banco de
dados, a gente volta aqui, ó, não tem
nenhuma tabela aqui, tá vendo? A gente
precisa colocar as tabelas que o CRM que
a gente tá instalando precisa para
funcionar. Então, ele já deixa os
comandos certinhos de você rodar aqui,
ó. Você vem aqui nessa opção, ó, super
base. Tá vendo? Aí já vai ter todas as
tabelas, todos esses SQLs que você vai
precisar. executar. E eu vou te mostrar
aqui pr você ver, porque sem isso o
sistema ele não vai abrir. Como eu te
falei, ele precisa dessas tabelas para
ele funcionar e guardar as informações,
né? Vamos fazer cada uma. Eu abro aqui,
ó. Já tem toda ela aqui. Eu vou diminuir
isso aqui pra gente. Você só copia cont
A, copia isso aqui, ó. Copiei tudo. E aí
você segue na ordem, tá? Até a 23. Volta
aqui, você vai vir nessa opção SQL
Editor, tá vendo? Você cola aqui e aí
você vai em run. Você aceita aqui, ó.
Pronto, executou a primeira. Agora você
tem que fazer isso com todas. Se você vi
aqui, ó, ele já executou uma porrada de
tabelas. Aí agora a gente vai pra
próxima. Então, prontinho, já executei
tudo. Quando a gente volta aqui nas
tabelas, ó, tem várias tabelas aqui que
foram criadas, políticas, tudo que
precisa pro CRM funcionar. Aí já tá tudo
pronto, é só você executar igual eu te
mostrei. Agora a gente vai voltar aqui
para o VS Code e a gente vai colocar
aquele comando anterior pra gente abrir
ele localmente que é o npm run dev.
Dessa forma. Agora a gente consegue
abrir ele aqui, ó. Quando eu abro, olha
só, já abriu a tela de login. Então você
tá vendo que ele já está rodando a minha
estrutura, ó, local host aqui. Então eu
tô acessando ele dentro da minha
estrutura. Eu posso criar uma conta
aqui, ó. Só que antes de criar uma
conta, a gente vai voltar aqui no
Superbase. Então você vai vir aqui em
authentication pra gente desativar a
confirmação de e-mail, tá? Pra gente ver
a funcionamento dele aqui ao vivo. Você
vai vir aqui em nessa opção aqui de
provedores e vai desativar confirmação
de e-mail, vai salvar essa mudança pra
gente poder criar a nossa primeira conta
no CRM. Pronto, salvou. Eu volto aqui na
página de login que a gente colocou.
Vamos criar uma conta, ó. Vou colocar
aqui as informações. Prontinho, coloquei
aqui as informações. Eu vou criar a
conta, ó. E aí quando eu volto aqui,
olha só, já abriu aqui o CRM, ó,
testboard. Só recarreguei a página aqui
e ele já foi. Não precisou confirmar o
e-mail porque eu desativei isso lá no
Superbat Bases. Então aqui a gente já
está com o nosso CRM funcionando. E
gente, uma coisa aqui você tá vendo que
ele tá em porto em inglês, né? Só que
você vai conseguir colocar
ele para português, caso você queira.
Como lembra que eu te falei que você tem
livre, ó, tem até o dark mode e o light,
as cores que você quer, ó, do TRM. Você
pode mudar isso aqui também. Pode mudar
aqui as informações do seu perfil. Muito
bacana mesmo, ó. Muito bom. Aqui a moeda
você consegue colocar, né? E aqui, ó,
Brasília, se você tiver no Brasil e
outras informações aqui, tá? Ah, mas eu
quero deixar em português. Você pode
mudar o código. Lembra que você tá com
acesso a tudo aqui, ó. É só você
colocar, por exemplo, aqui o cloud e
perguntar para ele: "Ó, Cláudio, eu
quero que você mude o idioma, deixa tudo
em português para mim". E aí você
consegue mudar, você consegue, você tem
essa possibilidade. Lembra que você
copiou o repositório e aí você pode
fazer as mudanças que você quiser. Só
você pedir paraa uma Iá fazer isso para
você. Nem precisa você fazer, né? né?
Mesmo que você saiba, mas é muito
simples. Então, de repente você, se você
quiser deixar em português, você também
tem essa possibilidade, né? Só que tá
funcionando, gente. Olha só que legal
aqui, né? A gente consegue ter as
informações aqui. Quando a gente for
configurar, vai est funcionando o nosso
bate-papo ao vivo, nossos contatos
também, pipelines, ó, que legal. A gente
vai poder mudar isso aqui também depois.
Olha que legal, ó. A gente pode mudar
aqui, ó, qualificado, enfim, pode mudar
os nomes que tá aqui. Quando a gente for
fazer o disparo, né? Ó, só a gente
escolher o template. A gente tá falando
de API oficial aqui, tá? E ainda tem as
automações. Olha que legal aqui, ó. Você
consegue criar as automações. Quando eu
rece Qual, qual é o gatilho que você
quer que acione essa automação? Quando
eu receber uma nova mensagem, eu vou
querer que ele envie uma mensagem
específica, né? E aí é uma automação
aqui que você consegue criar dentro da p
oficial, né? Olha só, consegue enviar um
web hook. Tem muita coisinha aqui, muita
coisa que já tá pronta para você, né?
Aqui tem até uma funcionalidade nova que
é essa de flows. Então você vai
conseguir colocar, quem sabe uma, nem
sei qual é essa funcionalidade, ainda
não explorei muito bem ela, mas ó, já
são meio que são templates, meio que
templates pré-prontos para você, ó. Tem
muita coisa boa aqui, muita coisa mesmo.
Mas agora vamos continuar a nossa
configuração, tá? Agora que a gente já
viu ele tá funcionando, eu quero testar
na prática, né? Vamos terminar a nossa
configuração. Então, quando eu volto
aqui, ó, vou voltar e aqui a gente
consegue ir acompanhando, ó. Tudo que a
gente tá acessando lá já vem para cá.
Deixa eu fechar o cloud que eu não quero
falar com ele agora. Então, pra gente
sair aqui, é só colocar contrtrl C e aí
já volta de novo pro terminal aqui pra
gente colocar o próximo comando. O
próximo comando, eu vou voltar aqui para
o meu arquivo ponto env, que é esse
aqui. A gente precisa ainda configurar
essas outras coisas, ó. Tá vendo?
precisa configurar essa chave agora, que
é uma chave que é usada para
criptografar o token de acesso do
WhatsApp antes de guardar no banco.
Então, é uma camada extra de segurança.
Então, mesmo que alguém tivesse com
acesso do seu banco de dados, ele não
conseguiria ler esse token aí, porque a
gente vai colocar essa chave aqui para
criptografar. Então, como é que é o
comando? Vou deixar o comando certinho
também, ó, para você. Aí ela já vai ser
gerada essa chave. E essa chave aqui a
gente vai copiar ela. A gente vai
colocar aqui, ó. Prontinho. E essa chave
ela não pode ser trocada, tá? Então fica
aí de alerta. Agora a gente vai conectar
a parte da API da meta. Tá vendo, ó? Já
tem as informações aqui que a gente
precisa colocar da própria meta. Então,
olha só, já estou aqui com o meu
developers do Facebook aberto, onde eu
tenho todos os meus apps. De novo, se
você ainda não tem a sua API oficial, eu
ensino, tem um módulo específico de API
oficial lá dentro do IA Experts, tá? Que
eu tô supondo que você já tem. Então,
vou pegar aqui esse app aqui. Aí você
vem em configurações do app aqui
embaixo, ó, no básico. Então aqui é a
chave secreta do aplicativo. Eu vou
mostrar aqui, mas essa chave você não
pode mostrar, tá bom? E essa chave que a
gente pegou lá, a gente vai colocar ela
aqui, ó. Vou colar aqui. Pronto, colei.
Então, voltei aqui, né, que eu tinha
saído do terminal, então, já voltei. Vou
aqui em configurações. Você vai vir aqui
em WhatsApp, ó, nessa opção. E aqui tá
falando, ó, que a gente não está
configurado, porque a gente precisa
terminar a configuração. E aqui ele tá,
dá até o passo a passo de como é que
você consegue também criar caso você
queira, tá? Então, agora a gente vai
precisar do ID, do number. Então, aqui
na meta, no mesmo developers, você vai
vir aqui em casos de uso, ó, nessa
lateralzinha aqui, ó, casos de uso,
configuração de API. E aqui vai aparecer
o seu número, né, da sua PI oficial. Aí
você vai pegar esse aqui de baixo, ID,
tá? Identificação de número. Você vai
copiar ele, voltar aqui pro CRM, vai
colar aqui, ó, WhatsApp Business ID,
account ID, que é esse outro aqui.
Então, copia, volta de novo aqui,
coloca. Eu vou salvar todo ele aqui
porque ele tá apagando. Então, já vou
salvar aqui pra gente só colar. Já vou
colocar aqui o fone number ID. Aqui
também o número ad o seu token
permanente que você conseguiu ele na
hora que você estava configurando e é só
pra gente verificar. Vou colocar aqui,
tá? Lena depois e aí eu vou aqui e vou
salvar essa configuração. Prontinho. Ó,
na hora que eu salvei aqui, ele já
apareceu essas informações para mimis
válidas. Então essa parte já tá OK.
Agora a gente precisa configurar o web
hook. Porque como é que funciona aqui? A
meta na hora que a gente receber uma
mensagem lá da API ou a gente enviar,
ela vai enviar essa mensagem para um
webhook específico e lá eles não aceitam
local host igual a gente tá aqui, ó. Não
aceita. Você tem que ter uma URL válida
para colocar lá na meta para ela receber
esse evento de web hook. Vai voltar
aqui. Vou abrir aqui um novo terminal. A
gente vai colar o esse comando aqui e
essa porta aqui porque é a porta que a
gente tá utilizando lá. Você volta aqui,
ó, é a 3.000. Então, por isso que você
vai colocar. E aí de novo, você precisa
estar com essas ferramentas instaladas,
tá? Se você quiser, só pedir ajuda pro
cloud que ele também te ajuda. Eu vou
dar um enter aqui, ó, pra gente ver.
Exatamente. Ó, eu nem tô com ele
instalado. Ele deu esse errinho aqui
porque a gente vai precisar criar uma
conta e colocar o nosso token. Então,
vamos criar uma conta aqui na
ferramenta. Ó, ele já deu passo a passo
pra gente. Vou criar com vocês
rapidinho. Gratuito, tá? Você não vai
precisar pagar por essa ferramenta, não.
Vou colocar aqui a primeira opção, que
isso aqui é só pesquisa mesmo. Vem aqui
nessa opção, ó. Vou copiar ele e aí sim
você vai colocar o comando que ele deu
lá. Prontinho, ó. Agora sim. Agora a
gente adicionou o nosso token e aí de
novo a gente vai rodar o comando pra
gente pegar URL necessária para colocar
lá no Facebook. Ó, já apareceu aqui. Tá
vendo? Agora a gente tem a URL. Você vai
copiar essa URL aqui. Volta lá pro
Facebook. A gente vai agora pra opção
aqui de configuração pra gente colocar
nosso web hook para toda vez que ele
enviar a mensagem, a gente receber essa
mensagem lá no nosso CRM e a gente vê
ele funcionando perfeitamente. Vendo
aqui você vai colocar aqui né, que ele
fala aqui, ó. Tem que colocar essa parte
aqui também. Pia, volta lá. Pronto. E o
token que você colocou, então pode ser
esse aqui, ó. Prontinho, ó. Já
recarregou aqui. Prontinho, ó. Quando eu
coloquei aqui para testar a API, já
apareceu como conectado. Então agora
sim, ó, quando a gente recarrega aqui,
uma coisa muito importante que você
precisa fazer depois de configurar o web
hook é ativar o evento de mensagens,
senão não vai chegar nada para você.
Então, ó, vou deixar aqui ativo. E agora
sim a gente pode fazer o teste. Então,
vou abrir aqui, ó, a caixa de mensagem.
Vou mandar um oi aqui para ver se vai
chegar. Olha só, acabou de chegar aqui.
Você viu que foi instantâneo? Irmão, se
eu abro aqui, ó, já aparece a mensagem
que eu mandei, aparece as informações
aqui. Eu posso colocar atribuição, posso
recarregar aqui. Ele já me mostra também
a janela de 24 horas, ó, que resta,
gente, uma coisa é só você traduzir
também, caso você queira, tá? Aqui eu
botei a tradução automática rapidinho
pra gente ver, ó. Só você ativar também
se você quiser usar. E aí vou mandar
outra mensagem aqui para ver se a gente
vai receber, né? Vou mandar aqui para
você ver, ó. Vamos ver se a gente vai
receber. Ó, já recebi no meu WhatsApp.
Então a mensagem recebe e a gente
consegue também se comunicar, né? Porque
a PI oficial, se você tá usando a cloud
aqui sem ser co existência, a gente não
tem uma interface para poder ficar
conversando um bate-papo ao vivo ali
nativo na meta, né? Se você não tiver
uma ferramenta atrelada a isso, essa é
uma ótima solução, porque aqui você
consegue ter a pay oficial e ainda
configurar as automações aqui, ó,
configurar uma automação de lembrete, de
transmissão. Então, assim, sensacional.
Só que agora a gente vai entrar num
tópico muito importante, porque aqui a
gente tá rodando local host, né? Tá na
nossa máquina, não está rodando 24
horas. Se a gente pegar esse URL aqui e
colocar em qualquer outro computador,
não vai funcionar. Por isso que a gente
vai entrar num tópico muito importante.
Olha só, aparece todas as informações
aqui do jeito que a gente quer, ó. Que
legal, né? Agora que você testou isso, o
local host que tá funcionando, a gente
vai fazer o deploy dessa estrutura.
Então vou ab pessoal, vou deixar o link
aí na descrição para você pegar uma
hospedagem com valor baixíssimo. Então
vou deixar esse link na descrição da
Roostinger e aqui embaixo você vai ver
exatamente os valores. Gente, olha isso
aqui por mês, é muito barato e calma que
ainda tem mais, tá? Não é só esse valor
aqui, é menos ainda. Ó, você vai
escolher aqui a opção de escolher o
plano. E aqui você precisa ter ativo
essa aplicação aqui de Node JS, que é o
formato da nossa que a gente acabou de
configurar. Então você vai vir aqui, ó,
vai abrir a opção de você colocar as
informações do carrinho, né? Aqui você
tem a opção do plano de 48, que é o
melhor preço. E não só essa
funcionalidade, mas também você consegue
construir outros sites aqui dentro,
também outras estruturas. E aí depois
que você escolher aqui qual período é
melhor para você, ó, fica R$ 20 mensai,
gente. Você entende isso? E aí você
coloca aqui o cupom do canal, cupom
talena, você ainda vai ganhar 10% de
desconto na mensalidade, então fica mais
barato mensalmente. Vou deixar o link na
descrição para você poder aproveitar. E
aí aqui você ainda vai ganhar um domínio
para o seu CRM ficar bonitão lá no teu
domínio próprio, né? Super profissional,
seja para você colocar isso para algum
cliente ou para você rodar para si.
Então, depois que você vai em continuar
aqui, você vai cair na tela de colocar
as informações de pagamento. Se o cupom
lá na tela de pagamento não tiver
funcionando para você, você precisa
criar uma nova conta, porque esse cupom
e essa promoção vai estar disponível
apenas para novas compras, tá? Então
aproveita aí porque tá muito bom o
preço. Depois que você adquirir, que
você comprar aqui o plano, vai cair numa
tela dessa daqui, tá? Depois que você
comprar e finalizar a sua compra, você
vai vir aqui, ó, em sites, todos os
sites. Aí você vai cair nessa telinha.
Você vem aqui nessa opção adicionar site
e aqui você vai escolher essa aqui, ó,
web app, nodejs, porque aí a gente vai
colocar ele de uma forma muito mais
simples. Aqui a gente vai ter um domínio
grátis, então colocar aqui assim, ó.
Aqui a gente tem duas opções para você
importar do seu repositório ou você
fazer aqui o upload dos arquivos. Como
aqui nessas configurações a gente não
mudou nada na estrutura do CRM, ou seja,
a gente não mudou cor, a gente não mudou
idioma, né? Eu tô usando aqui o trato
automático. Você fez exatamente como eu,
que você não quer mudar nada de um
projeto, né, usando aí cloud, te dei
essa possibilidade, mas de repente você
fez junto comigo, você não mudou nada,
só mudou o ponto env. Ponto envi local
só vai funcionar na nossa máquina. A
gente não vai enviar de volta lá não.
Ele vai ser ignorado quando a gente
subir ele. Se você seguir o mesmo passo
que eu, é só você subir agora na rocha
aqui. Agora, se você mudou cor, alguma
coisa, os nomes aqui, se você fez alguma
alteração, você vai precisar atualizar o
Git com essa parte, tá? Eu vou deixar os
comandos certinhos de você atualizar no
seu repositório, porque a gente vai
pegar esse repositório nosso do GitHub
que a gente mudou aqui alguma coisa, e
vai colocar na Rochinger para ela subir
ele e ficar no ar no nosso domínio, na
nossa estrutura, entendeu? Só para te
explicar. Conceitos eu vou deixar também
no passo a passo para você entender. E
aí, ó, de conectar aqui o meu Bitub,
coloquei a minha senha e aí ele tá
carregando, ó. já entrou aqui. E aí eu
posso pesquisar aqui o CRM, ó, o mesmo
CRM que a gente colocou, que a gente
clonou. Então agora é só a gente avançar
aqui. A gente vai configurar as
variáveis de ambiente aqui, tá? Para
funcionar. Porque lembra que eu te
expliquei lá no começo que quando a
gente para ele funcionar, a gente
precisa colocar aqui as nossas
variáveis, que são as variáveis que a
gente configurou aqui, ó, no ponto
enval. Então, vou subir aqui, ó. A gente
vai copiar esse nome aqui do jeito que
tá aqui. Vai colocando aqui, ó,
adicionar. Você vai colocar sua aqui, lá
colou aqui. Esse processo que a gente tá
fazendo serve para qualquer aplicação
Node ou outra que você tenha. De repente
você construiu alguma coisa com alguma
IA, você quer subir na sua estrutura, é
dessa forma. Você vai usar esse mesmo
plano da Rochinger, acesso a mais de um,
então você pode ter múltiplas aplicações
aqui dentro. Então, olha só, já coloquei
aqui todas as variáveis necessárias, né?
Inclusive o a URL pública que a gente
acabou de configurar, né, anteriormente.
Então aqui você vem em finalizar. Então
já tá tudo configurado do jeito que a
gente precisa e a gente vem aqui em
implantar. E aí ele vai demorar alguns
segundinhos, né, para fazer essa
implantação do repositório que a gente
colocou aqui. E aí a gente tem que
aguardar, tá bom? Mas aí, ó, você espera
um pouquinho. E qual que é a vantagem de
você colocar isso aqui dessa forma, né?
É exatamente porque é a Hostinger que
vai cuidar do de manter o servidor
online 24 horas por dia, 7 dias por
semana. Ela que vai gerenciar o
certificado de segurança
automaticamente, né? E aí a gente ainda
vai ter o nosso domínio público aqui do
jeito que a gente configurou lá. Ó, se
aparecer esse aviso para você, você
seleciona esse botão aqui e aí pronto, o
nosso CRM já funcionou. Então é só você
clicar lá, ó. Ó, apareceu o aviso agora,
implantação concluída, nosso domínio que
a gente configurou. Então aqui é só eu
entrar, ó, nos mesmos dados que a gente
configurou. Então olha só, a mesma conta
lá. Então aqui aparece as informações
que a gente tava testando naquela hora.
Se a gente colocar aqui o tradutor, ele
já fica em português, né? Se a gente não
quiser mudar isso no próprio código do
CRM, o S livre. Aqui você pode colocar
um modelo disponível, né? Claro que tem
que configurar lá na meta também, tá
bom? E uma coisa muito importante que
você tem que fazer depois que você
colocar o seu domínio é aqui na parte da
URL. Então aqui a gente fez a
configuração, a gente vai precisar mudar
também o web hook porque lá ainda tá
naquela ferramenta loca roxo que a gente
tava usando. Então não esquece de copiar
aqui a nova URL e na meta novamente.
Confere só. Tô aqui na meta, ó. E aqui
tá o antigo. Tá vendo? A gente vai
precisar colocar o novo do domínio novo
que a gente configurou lá na Hostinger.
E aí você vem aqui, coloca o mesmo token
anterior que já estava, que a gente
configurou e vai verificar e salvar. Não
esquece de ativar também o messages aqui
para continuar aparecendo certinho. Aí,
pronto, você já vai conseguir utilizar o
seu CRM com a configuração correta, né?
Webookzinho configurado, todas as
mensagens vão chegar ali e você vai
poder ter esse bate-papo ao vivo também
num projeto que já tá pronto, que você
só vai precisar fazer essas
configurações aqui, sem precisar
acordar, sem precisar ter que lidar com
ferramentas no code, né? A gente volta
aqui, ó. Ó, já chegou aqui a mensagem,
ó, direitinho, no mesmo horário, com
todas as informações, tá? Então agora eu
quero ver você implementando aí toda
essa estrutura na tua operação.
Recapitulando o vídeo de hoje, a gente
clonou um CRM de WhatsApp open source
gratuito. Configuramos o banco de dados,
conectamos a API oficial da meta,
colocamos tudo isso no ar para ele rodar
24 horas por dia utilizando a Rochinger.
E para você que ficou até o final, eu
deixei o passo a passo completo com
todos os links, comandos e um PDF
gratuito. O link vai est aqui na
descrição desse vídeo. Olha só, não
esquece de colocar o meu cupom de
desconto para colaborar com o canal e
também aproveitar o desconto exclusivo
do link que eu vou deixar aqui na
descrição para você da Rostinger. Então
vai lá, já baixa o PDF, acompanha a
configuração como eu mostrei aqui no
vídeo que eu quero ver você
implementando esse CRM na tua estrutura.
E se esse conteúdo te ajudou, deixa o
teu like aqui, se inscreve no canal,
porque toda semana eu trago um jeito
novo de você aplicar IAI e automação no
teu negócio. Eu te vejo no próximo
vídeo.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
