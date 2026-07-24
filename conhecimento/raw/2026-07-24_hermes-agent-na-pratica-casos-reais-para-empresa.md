---
tipo: video-youtube
video_id: dcSyWNUKMLY
titulo: Hermes Agent na Prática - Casos Reais para Empresa
canal: Thalena Lima - IA & Automações
url: https://youtu.be/dcSyWNUKMLY
data_publicacao: 20260616
duracao: 23m 54s
views: 4994
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# Hermes Agent na Prática - Casos Reais para Empresa

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/dcSyWNUKMLY)
- Publicacao: 20260616
- Duracao: 23m 54s
- Views: 4994

## Descricao (original)
Hermes Agent na Prática - Casos Reais para Empresa

➡️Conheça meu Treinamento Completo: https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video74

🔗 Conheça nossos serviços e implementações → https://lp.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video74

Hermes Agent na prática: neste vídeo eu mostro como usar um agente de IA open source dentro de uma operação real, conectado ao ClickUp via API para criar tarefas automaticamente a partir de mensagens de grupo.

No vídeo anterior, eu mostrei como instalar o Hermes Agent em uma VPS, configurar o modelo de IA, conectar ao Telegram e acessar o dashboard. Agora a ideia é dar o próximo passo: usar o Hermes como um agente operacional de verdade.

🔗 Vídeo anterior da série Hermes Agent: https://youtu.be/RMjSO49et2I

Você vai ver três perfis de uso para empresas e negócios:

-Operador interno: monitora mensagens, identifica demandas e cria tarefas.
-Assistente comercial: acompanha leads, calls, objeções e follow-ups.
Motor de conteúdo e pesquisa: monitora tendências, gera pautas e reaproveita conteúdos.

Na parte prática, eu mostro o agente interno da Lena AI funcionando com ClickUp. Ele lê uma mensagem de grupo, identifica se existe uma demanda real, classifica o tipo de tarefa, define prioridade e cria o card automaticamente no ClickUp.

Também explico a diferença entre integração via chave de API e MCP, e por que o MCP é o próximo nível para agentes de IA que precisam operar ferramentas externas com mais autonomia.

🔥 Hospedagem Hostinger com desconto: https://www.hostg.xyz/SHJ5B
🎟️ Cupom THALENA → 10% OFF nos planos anuais de VPS
*Cupom válido para contas novas, nos planos anuais, caso já tenha conta, crie uma nova com email diferente para garantir o desconto exclusivo!

─────────────────────────
⏱ CAPÍTULOS
─────────────────────────
* 00:00 - Introdução e Visão Geral 
* 02:27 - Uso: Operador Interno
* 06:20 - Assistente Comercial 
* 09:08 - Motor de Conteúdo e Pesquisa
* 10:45 - Implementação Prática - Operador Interno
* 21:35 - Resumo e Próximos Passos 

Se você quer aprender a construir agentes de IA, automações com n8n, integrações, produtos com IA e sistemas reais para empresas, entra no IA Experts pelo link da descrição.


Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢Compartilhe com alguém que quer aprender IA do jeito certo: https://youtu.be/dcSyWNUKMLY
💬 Comenta aqui qual dessas decisões mais abriu sua cabeça.

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

#HermesAgent #AgentesDeIA #InteligenciaArtificial

## Transcricao
Olha só o que aconteceu aqui. Eu mandei
essa mensagem no grupo da minha agência
e o Hermes já criou a tarefa no clickup,
que é a ferramenta que a gente usa aqui
pra gestão de tarefa do time, sem eu ter
que abrir o click. Ele viu que era eu
mesma pedindo, classificou ali,
identificou qual era o cliente que eu
tava mencionando e já agiu. E isso
funciona se eu tivesse mandado um áudio
também, tá? tanto texto como áudio. E
esse é exatamente o tipo de coisa que
você pode construir, que você pode fazer
com Hermes Agent dentro da tua operação.
E hoje eu vou te mostrar os principais
casos de uso do Hermes agents para
empresa e negócios agrupados de um jeito
que faz sentido para você identificar
onde ele vai se encaixar aí na tua
realidade. E eu vou te mostrar como que
eu fiz esse agente interno aqui [música]
dentro do grupo do WhatsApp da Lena I.
Se você ainda não me conhece, muito
prazer, eu me chamo Talena e aqui no
canal a gente fala bastante sobre
inteligência artificial aplicada
negócios. Então se esse tema te
interessa, não esquece de já se
inscrever aqui, acompanhar tudo que
ainda tá por vir, porque toda semana tem
vídeo novo. Então já se inscreve aí. Já
estou aqui com a minha tela aberta do
dashboard do Hermes agent. Se você ainda
não viu o primeiro vídeo dessa série
sobre o Hermes, gente, eu vou deixar ele
na descrição, porque lá eu mostrei do
zero como é que a gente faz a instalação
do Hermes agent numa VPS, né, para ele
ficar rodando aqui 24 horas por dia, 7
dias por semana, não somente quando o
nosso computador tiver ligado, também
tem essa possibilidade. E aí eu te
mostrei nesse vídeo também como é que a
gente configura o modelo de ar, como é
que a gente faz a conexão do Hermesent
também no nosso Telegram, caso a gente
queira, como acessar esse dashboard
visual dele aqui, bem bonitão. Então se
você ainda não viu, vai lá, assiste o
vídeo para você ter acesso a essa parte
aqui do Hermesagen. Depois de você já
ter ele instalado aqui, você vem aqui
para essa parte que é justamente onde eu
vou te mostrar um pouco dos casos de uso
do Hermes agent, né? E aí, como eu te
falei no começo, antes da gente ir pro
build, né, para eu te mostrar realmente
na prática, eu quero abrir a sua cabeça
sobre onde o Hermes vai se encaixar
dentro da tua operação. E tem muita
gente usando ele só para bater papo aqui
no terminal ou lá no Telegram para ficar
conversando. Gente, dá para fazer muito
mais, tá? Tudo bem se você quiser fazer
só isso, mas tem muito mais. E assim, se
você ficar usando ele só assim, você tá
deixando 90% da capacidade dele na mesa.
Então eu agrupei alguns casos de uso em
três perfis, que é basicamente um mapa
de como é que você consegue aplicar ele,
tá? Então já tô aqui com o primeiro
perfil operador interno, que é
justamente como o Hermes agente pode
funcionar como um braço operacional do
teu time, que é como eu já tô começando
a usar ele aqui dentro da minha
operação, tá? ele vai ficar rodando em
segundo plano, ou seja, monitorando as
fontes de informação e tomando ações com
base no que ele recebe. Então, alguns
exemplos aqui. Ele vai poder monitorar
grupos e mensagens se você tiver usando
ele em algum canal de comunicação,
WhatsApp, Telegram, onde você tiver
colocado ele, né? Ou você pode conectar
ele na caixa de entrada do seu e-mail,
né? De repente você sua comunicação é
mais no e-mail, então você consegue
colocar ele lá também para monitorar.
Depois que ele faz essa leitura, ele
identifica o que que tá acontecendo ali,
ele vai ou criar tarefas, atuando como
um gestor de projetos, né, criando as
tarefas que precisa, organizando tudo
isso de maneira bem detalhada, ou ele
vai, por exemplo, gerar um resumo diário
pro teu time, né? Eu até coloquei aqui
algumas ideias. Ele pode também disparar
alertas quando algo sai do padrão. Se
ele percebe que algo não tá do jeito que
é para estar, ele consegue também montar
relatório semanal de operação. E aí um
exemplo que eu tô fazendo exatamente
aqui na minha operação é o quê? E aí eu
te mostrei isso, eu vou te mostrar como
é que eu construí, né? Mandei uma
mensagem para um dos nossos
colaboradores dizendo que ele precisava
fazer uns testes no sistema pra gente
poder já seguir pra próxima fase, né?
Aqui na empresa a gente organiza toda e
qualquer implementação por fases. Então
a gente tem uma comunicação bastante ali
dentro do WhatsApp com o time, né? Só
que tudo isso é registrado no Clickup.
Então para facilitar a nossa vida, criei
um agente, né? Coloquei o Hermes para
atuar dentro desse grupo em específico.
A segunda fase desse agente que eu vou
colocar é para ele ficar monitorando os
grupos dos clientes também. Então aqui
na empresa a gente tem um grupo
específico para cada cliente, cada
implementação e ali a gente vai
comunicando qual é a fase do projeto,
né? Inclusive tudo que eu mostro aqui no
canal, gente, se você não sabe, nós
temos uma agência onde nós implementamos
isso para você. Se você tiver interesse,
vou deixar também o link aí na
descrição, tá? E aí a gente tem esse
grupo com cliente, né, que a gente tem
toda a comunicação com o cliente,
falando qual a fase do projeto, enfim. E
aí a primeira fase desse a gente é
monitorar o nosso grupo, grupo da
equipe. Numa segunda fase, eu vou
colocar ele para ele monitorar os grupos
dos clientes também. E aí ele vai poder
fazer esse resumo e me trazer de volta,
perguntando o que que ele tem que
colocar ou não lá no clicar pro meu time
ir e consultar, né? Então a primeira
fase dele que já está funcionando é essa
dentro do grupo da equipe. Ele vai
interpretar, ele já entende, ele já sabe
quais são os meus clientes, porque antes
de eu implementar esse operador interno
aqui, ele organizou todo o click para
mim. Então ele já sabe quais são os meus
clientes, o que que tem lá, o que que
não tem. Ele já entende, se eu falar só
um nome tal, ele já vai entender qual é,
onde é a tesc específica, que foi o que
aconteceu aqui, ó. Ele já criou
automaticamente essa tesque para mim lá
dentro do Clickup. Então isso facilita
demais, né? Ela vai ficar monitorando e
ela vai retornar para mim, ó. Consegui
criar aqui a tesque e ela já explica
direitinho quais foram as alterações que
ela fez. Inclusive lá na própria tarefa
que ela criou, ela vai colocar, ó, foi
criada pelo Lebzin, que foi o nome que
eu dei, e todas as especificações
daquela tarefa, né, junto com o link
direitinho. Na prática, esse perfil
aqui, ele vai servir para você que quer
ganhar agilidade operacional, para você
que quer reduzir tarefas manuais, né,
evitar o esquecimento, manter o time
sempre muito bem alinhado. Se você tem
um volume de atividades, como é o nosso
caso aqui, esse perfil aqui é o ideal,
porque ele vai atuar literalmente lá
dentro do seu time, na sua equipe ali,
né, rodando como segundo plano,
monitorando todas as informações e
trazendo organização paraa tua empresa.
Então, é excelente. O segundo perfil que
a gente tem aqui é o perfil de
assistente comercial. para você que quer
melhorar o seu comercial, né, que vai
servir para vendas, prospecção,
atendimento. Então, o Hermes, ele vai
atuar como uma camada de inteligência
conectada ao processo comercial da tua
empresa, lendo os dados, interpretando o
contexto e agindo dentro das
ferramentas. Então, basicamente, você
consegue entregar para ele aqui
transcrições de call. Então, se você
ainda não monitora as tuas causas de
venda, se você trabalha com reuniões
onlines ou até reuniões presenciais, tá
perdendo muita coisa, perdendo melhorias
no teu processo comercial, porque a
gente grava todas as reuniões,
justamente pra gente ter esse assistente
também que monitora, que vai organizar o
nosso CRM, que é um painel onde você
organiza todos os teus clientes, todos
os teus leads para o comercial, né, pra
parte de venda, mas não só transcrições
de causa, você pode colocar ela para
atuar lá também no WhatsApp para atender
os teus leads, principalmente na etapa
de qualificação. Se você tem um volume
muito grande de gente mandando mensagem
para você, você consegue plugar o agente
Hermes ali, construir um dar um
treinamento para ele, né, ajustar como é
que ele deve se comunicar com aquela
pessoa que tá chegando e ele vai poder
depois, além de responder essas pessoas,
trazer um relatório, monitorar como é
que tá sendo, né? Porque assim, gente,
não tem como você melhorar algo no seu
comercial se você não tem dados para
analisar. Então o Hermes ele vai te
ajudar nessa parte comercial também, né?
Interpretando e entendendo como é que tá
sendo o teu público, extraindo objeções,
né? Fora a parte de atualização no CRM,
fazendo follow-up também. Então assim, é
mais uma forma que eu tô trazendo aqui
para você de possibilidade de utilização
de ferramentas para atuar também no teu
comercial. Inclusive, se você quiser que
eu traga um vídeo mostrando mais desse
agente comercial, utilizando o Hermes
agent, já deixa um comentário aqui, ó.
Alena, traz o vídeo para o comercial do
agente Hermes no comercial, que se tiver
muita procura, eu vou trazer sim para
vocês, tá? E gente, alguns benefícios
que você vai colher, eu colocando ele
aqui como assistente comercial, aumentar
a velocidade do comercial, respondendo
as pessoas, né? não deixando ninguém sem
resposta ali, evitar perda de followup,
porque as, não sei se você sabe, mas uma
pessoa, ela nunca, é muito difícil ela
comprar de cara de você, ela precisa tá
sendo lembrada daquela venda ali que
você quer fazer. Então, falou, é muito
importante para isso. Se a pessoa parou
de te responder, o próprio Hermes vai lá
e manda uma mensagem: "Oi, tô aqui
ainda, né? Vamos continuar aqui nossa
conversa". Além de manter sempre o seu
CRM também atualizado, tá? E isso tudo
vai fazer você ganhar consistência no
processo de vendas. Então, já existe
essa ferramenta open source aqui no
ponto de você colocar para rodar na tua
operação, por que não usar, né? Vale a
pena você testar ele pro comercial
também. E o terceiro perfil é o motor de
conteúdo e pesquisa para você, para quem
quiser produzir conteúdo, né? Aqui a
gente precisa estar sempre atualizado no
mercado constantemente, né? Então esse
agente ele vai atuar como um radar
inteligente que vai monitorar as fontes,
vai encontrar oportunidades e vai
transformar informação em conteúdo
acionável. Então o que que ele consegue
fazer aqui? Ele consegue, você vai lá,
coloca os perfis que você quer
monitorar, seja algum canal do YouTube,
seja algum tópico específico, por
exemplo, no ex, né, ou no próprio Google
tá em alta. Ele vai pegar todas essas
tendências e novidades do teu mercado
através dessas fontes que eu te falei,
que você pode configurar para ele
buscar. E com isso ele vai interpretar,
ele vai entender o que que tá em alta e
vai te trazer aí um plano de conteúdo,
seja para você gravar vídeos, como eu tô
fazendo agora, para você criar conteúdos
lá no carrossel, para você construir,
sei lá, uma lista de e-mails pros seus
clientes. Então assim, ele vai atuar
nessa etapa do conteúdo de pesquisa
também, seja para gerar pautas de ideias
ou simplesmente para realmente trazer um
conteúdo pronto para você. Então, esse
tipo de perfil aqui, se você quiser que
eu traga também um material exclusivo
construindo esse agente que vai atuar na
etapa de conteúdo, de pesquisa, já
comenta aí também, tá? Hoje a gente vai
começar com o perfil um, mas se você
quiser, eu posso trazer aí do perfil
dois ou do três, de acordo com os
comentários de vocês, eu vou trazer isso
aqui. Vai ser muito bom porque você vai
conseguir acompanhar o mercado em tempo
real, né? vai conseguir ganhar
velocidade na produção de conteúdo e
nunca vai ficar sem ideias para trazer
aí pros seus clientes. Então, eu tenho
certeza que você se identificou com
algum desses três perfis que eu trouxe
para você, né? Então, eu quis trazer,
abrir a tua mente para as possibilidades
reais de uso ali dentro do teu negócio
que o Hermes pode te auxiliar. Então
agora eu quero te mostrar exatamente
como eu tô usando ele nesse primeiro
exemplo aqui que é o operador interno.
Então, como eu te expliquei aqui na na
linea, a gente tem grupos de WhatsApp
com clientes, com time e toda vez que
alguém manda uma demanda nesses grupos,
né, a gente tinha que estar ali
monitorando e tudo. Então isso consome
muito tempo e pode acabar gerando ruído
às vezes, né? Então ela acabava se
perdendo a tarefa. Por isso que a gente
construiu esse agente aqui, que foi
muito rápido, gente, foi muito rápida a
construção dele. E eu vou te mostrar
como é que você consegue também ter isso
aí funcionando, tá? Então, vou voltar
aqui pro meu dashboard. Aqui nas sessões
a gente consegue ver todas as sessões
que ele tá ativo, ó. Aqui você tá vendo
que ele tá atuando no WhatsApp, alguns
aqui ele tá atuando também lá no
Telegram e aqui ness nesse painel, né?
Então, pra gente ter esse agente
funcionando, primeira coisa que a gente
precisa é fazer a conexão via WhatsApp.
que é muito fácil, ele mesmo tem uma
conexão nativa através da Baile do
WhatsApp. Então você não precisa colocar
nenhum API de WhatsApp aqui. Só se você
quiser, né, de repente você quer colocar
uma API específica que você já usa, você
pode, mas o próprio Hermes agent padrão,
ele já tem essa conexão nativamente nele
aí através do Bes. Então é só você
apontar o QRcode no WhatsApp que ele já
faz a conexão de maneira bem rápida para
você. Caso você queira, eu posso trazer
um vídeo, né? Porque no último vídeo eu
te mostrei como é que faz no Telegram,
mas é muito parecido o processo. Se você
quiser eu posso trazer também conectando
no WhatsApp. Então aqui eu tô te
mostrando as sessões, né? Ele tá atuando
no WhatsApp, no Telegram e aqui também
no dashboard. Como aqui na minha empresa
a gente também utiliza o Clickup, que é
justamente esse painel aqui de gerenciar
tarefas, que a gente tem várias coisas,
você consegue ter calendário, equipe,
quadros. Então, se você tem uma equipe
grande que atua no online ou até mesmo
no físico, você consegue implementar o
Clickup para te ajudar nas execuções das
tarefas. E aí aqui o Clickup eu fiz a
conexão via API. Então aqui no Clickup é
muito simples. Se você tem o primeiro
plano, você já tem acesso à sua API.
você explica pra ele, ó, eu vou já te
mostrar qual quais foram os comandos que
eu usei, mas basicamente a gente
consegue conectar ele via API, mas
também existe a possibilidade de conexão
via MCP. Para você que não conhece, MCP
é um protocolo que ensina o agente, né,
a navegar dentro de uma ferramenta
específica de forma mais completa.
Então, do jeito que a gente vai fazer
aqui com API, com o MCP, a gente também
consegue fazer com que o agente ele não
só executa ação específica, ele vai
entender toda a estrutura da ferramenta
como um todo, para ele não fazer coisa
errada, ele vai saber se comportar ali
dentro daquela ferramenta. Então o
Hermes, ele já tem um painel específico
de você conectar via MCP aqui, ó. Então
você pode vir aqui e conectar o MCP que
você quiser, na ferramenta que você
quiser, aqui mesmo no próprio dashboard
que eu te expliquei como é que você
instala. Então é muito simples, muito
rápido e é um caminho natural de você
fazer essas integrações com as
ferramentas que você já usa hoje. Então
aqui vou no meu histórico só para te
mostrar como é que eu fiz a construção
dele. Você clica aqui, ó, e aí ele já
vai abrir aqui o terminal, né? demora
alguns segundinhos aí, mas ó, ele já vai
abrir toda a conversa que eu tive. Abri
aqui um pouco da conversa que eu tive
com o Hermes. Então, para você entender
como é a criação desses agentes, depois
de você ter feito toda a instalação, né,
a gente pode começar a conversar com
ele. Então, lembra que o Hermes ele é um
agente que vai entender você só falando
com ele e ele vai te explicando. Então,
é muito simples. Primeiro eu falei que
eu queria construir, né, um gerente de
projetos. Então, falei para ele que ele
já seria assim, já expliquei para ele um
pouco do meu negócio, né? Então aqui ele
já pegou tudo isso e já entendeu o que
que ele iria fazer com um único comando
aqui, né? Igual você tá vendo aqui, tá
mostrando direitinho todo o que ele faz
no background ali, tudo aqui. Ele já
entendeu que a gente vai se comunicar
com barratesque, que foi a forma que eu
coloquei como gatilho que ele iria
entender, que é para ele criar essas
tarefas lá no Clickup. Lembrando que
aqui eu coloquei para ele responder
somente a mim e o outro sócio. Então
somente duas pessoas vão controlar ele.
Então os outros participantes do grupo
não vai acontecer nada quando eles
mandarem esse mesmo comando, tá? Só se a
gente mandar pra gente ter esse
controle, né? Nesse primeiro momento,
pelo menos. Depois eu posso colocar para
ele ele monitorar todo o grupo de todo
mundo, mensagens de todos e colocar as
tescas que foram faladas ali, né? Se eu
quiser colocar isso também, você que vai
definir qual é exatamente a forma que
ele vai usar para entender que ele tem
que criar essa tarefa. Depois disso
aqui, ele já trouxe exatamente como é,
né, que ele tem que construir para eu
confirmar se tá tudo certo. E aí eu
expliquei para ele quais serão os
números autorizados que ele pode
aceitar, né? Então eu falei para você
que são dois números, outros números ele
só ignora. Do mesmo jeito no grupo, a
gente tem que colocar qual é o
códigozinho do grupo específico que a
gente quer que ele fique monitorando
ali, né, que ele vai poder monitorar
quando eu mandar alguma mensagem. Então
você vai ter que configurar exatamente
isso, só você explicar para ele qual é
exatamente o grupo que ele vai te
orientar em como você descobrir esse
código. Depois disso, eu já fiz a
conexão via WhatsApp, então é muito
simples. O próprio chat lá quando eu
tava conversando, já fez a orientação
para mim e é tudo lá no terminal,
naquela etapa de configuração. Muito
simples, só você colocar o QR Code, ele
já faz toda a configuração da credencial
que você precisa colocar. Então é só
você simplesmente apontar o QR Code, ele
já vai identificar qual é o número que
tá conectado. Você também pode colocar
ele no mesmo número, como se você
tivesse conversando com você mesmo, caso
você só tenha um número. Nesse caso
aqui, a gente tem dois. A gente tem um
número específico dele e os números dos
participantes, né? Mas, por exemplo, se
você quiser que ele faça só com você
mesmo, você, se você tiver só um número,
por exemplo, você consegue colocar ele
no mesmo número e conversando com ele
também. É só você colocar esses comandos
para ele identificar qual é o comando de
ação dele, entende? Quando ele tem que
agir ali, independente se tiver no mesmo
número ou não, tá? Como a gente tinha
essa separação, foi tranquilo. Depois
disso, eu falei para ele que eu
precisava que ele fizesse toda a
configuração do Clickup para mim. Eu
iria só configurar a PI lá do Clickup.
Então, foi isso que ele fez. Ele já
configurou tudo para mim, todos me
orientou, né? e já fez toda a
configuração do Clickup e eu só coloquei
a minha API lá na etapazinha de onde a
gente no ponto ENV, que é onde a gente
guarda todas as variáveis necessárias do
projeto. E aí depois disso eu já falei
assim, ó, analisa aí meu programa de
gestão de tarefas do Clip, vê como é que
tá organizado. Daí ele já identificou
quem era os IDs de cada um dos
colaboradores e já fez o MET, né, para
ele poder aqui, ó, no meu Clickup já
inserir quem é o responsável pel aquela
tarefa, por exemplo. Então ele entrou
aqui, já viu todos os clientes que a
gente tem e já fez toda a configuração,
já identificou quais são os IDs, porque
o o agente ele se comunica pelo ID, não
é pelo nome. Então, todo cliente tem um
card aqui e esse cliente tem um ID
específico. Então, ele já vai entender
só de eu falar o primeiro nome, por
exemplo. É muito simples, né? Depois
disso, eu comecei os testes, né? Muito
simples. Ele já entendeu, já identificou
como é que tava organizado todo o meu
CRM, todo o meu click. Então, foi bem
mais simples. E aí, ó, ele já fez a
configuração aqui embaixo, né, de tudo e
a gente começou a testar, né? Então,
assim, a única coisa aqui que você tem
que ser bem detalhista é em quais são os
números que ele vai responder. Igual
qualquer gente, quando a gente constrói
aqui que atua no WhatsApp, se você
quiser que ele responda todo mundo, é só
você colocar isso. No chat, a gente vai
simplesmente conversando. Ah, oi, eu
quero isso e aí ele vai e faz tudo para
você, entende? Então é muito simples.
Aqui foi uma etapa que eu pedi para ele
organizar o meu clickup também porque
tava uma bagunça. Então ele já organizou
pr mim também. Então se você tiver de
repente um CRM bagunçado e que você tem
a sua chave lá, você pode pedir para ele
organizar. Aqui nesse caso eu pedi para
ele duplicar tudo, para ele não excluir
nada, meu. Só duplicar em um novo
quadro, né, para não misturar as duas
coisas. Aí ele já trouxe esse novo
quadro 100% organizado do jeito que eu
queria. Aí eu fiz também a configuração
de áudio, né? Porque eu não quero só
escrever. Aí eu expliquei para ele, ó,
toda vez que eu botar barraque áudio,
ele vai pegar o áudio que eu mandei logo
em seguida e vai criar essa tesk,
entende? Do mesmo jeito que ele fez com
o escrito. Só que como a gente comunica
muito em áudio também, eu já coloquei
essa função extra nele também. E aí,
gente, ele vai mostrando as tuas que ele
vai usando. Você não precisa ter que
configurar. Ele já fez toda essa
configuração pra gente, já usou o Python
aqui, já usou os plugins que ele precisa
usar para poder executar o que você tá
pedindo. Então, já estou aqui com o
WhatsApp aberto para te mostrar a gente
testando ele ao vivo, né? Vou colocar
aqui, coloquei esse monte de pontos só
para subir as mensagens de um monte de
coisa aqui. Então, a gente vai fazer um
teste agora mostrando isso, né? Eu vou
mandar aqui, ó, essa tesca aqui pra
gente ver o Hermes funcionando. Vou
mandar isso aqui pra gente entender.
Vamos ver aqui se ele vai me responder.
Ó, já tá digitando. Tá vendo? O a gente
tá nesse contato aqui que eu configurei.
Olha só, tesque criada no clicap. Mesmo
RL aqui que ele colocou, ó, já criou. Eu
posso até ajeitar isso aqui, eu vou
depois corrigir lá no próprio chat
dizendo para ele só colocar o nome do
vídeo para não precisar colocar aqui
esse texto enorme. Mas ele já colocou o
responsável certinho, já colocou aqui,
ó, que foi criada pelo WhatsApp com o
comando certo, explicou isso aqui.
Então, quando meu time vier, é só ele
vir, ele recebe uma notificação na hora
que ele é tagiado aqui como responsável
daquela tarefa, né? E ele já vai começar
a construir. Eu posso refinar mais,
deixar mais intuitivo, né? melhorzinho
aqui para ele atuar, mas só para te
mostrar que já está funcionando. Então
eu coloquei ele para atuar dentro do
WhatsApp, ele tá monitorando o grupo.
Toda vez que eu mandar isso aqui pelo
meu contato, ele vai criar essa tarefa,
né? E aí a gente pode fazer melhorias, é
claro, né? Mas já está funcionando.
Então é só para eu te mostrar uma
pontinha do iceberg, né? com comandos
conversando aqui no chat, a gente já
conseguiu construir. Esse é a gente que
vai atuar e vai analisar todas as
mensagens aí do nosso WhatsApp e também
realizar ações e ferramentas externas
através dessa conexão aqui via API ou
via NCP, caso você queira também. Então
eu vou deixar todos os comandos que eu
utilizei para construir esse agente aqui
no Clickup lá na minha comunidade. Mas
aqui você já entendeu que é só você ir
conversando e fazendo as alterações
necessárias dentro do chat que o próprio
Hermage vai construir isso no background
para você e você vai só colocar lá o que
ele vai pedindo, né, para conseguir
fazer essa conexão entre as ferramentas.
E eu quero ver você implementando aí o
seu assistente que vai atuar
internalmente na tua operação. Nesse
vídeo eu te mostrei os três perfis de
uso do ERMS Agent, o operador interno
que vai monitorar ali os canais que você
usa dentro da tua empresa, vai criar
tarefas, vai gerar relatórios, o que
você quiser relacionado ao uso interno
na tua empresa. O assistente comercial,
que foi o segundo perfil, ele vai ficar
conectado no processo de vendas da tua
empresa. ele vai acompanhar os leads,
vai gerar algum contexto da mensagem que
é trocada ali naquela etapa de
qualificação, né? se você trabalha com
SDR dentro da tua empresa, então ele é
responsável por ficar monitorando o
processo comercial do teu negócio. E o
motor de conteúdo, que é a área que vai
ficar monitorando as tendências, que vai
gerar as pautas, [música]
que vai construir o material, você
gravar, para você postar nas redes
sociais, [música] ele fica responsável
ali por manter o conteúdo da tua empresa
100% atualizado e online em todas as
[música] redes. E aí no final eu te
mostrei também o agente interno aqui da
Leni que lê as mensagens do grupo,
identifica qual é a demanda e já cria as
tarefas lá no Clickup automaticamente
rodando 24 horas por dia sem intervenção
manual. Se esse vídeo abriu tua mente,
né, para os usos do Hermes e se você
gostou, já deixa o teu like aqui e se
aparecer o botão de hype para você, já
aperta nele também, porque isso ajuda
muito o canal a crescer e a continuar
trazendo esse tipo de conteúdo na
prática. E ó, já se inscreve aqui para
não perder os próximos vídeos, porque
tem muita coisa ainda para eu te mostrar
do Hermes e eu vou deixar todos os
comandos, todos os prompts e todo o
passo a passo escrito em um material lá
na minha comunidade. Se você já é aluno,
corre lá porque já tá disponível para
você baixar. E se você quiser conhecer o
meu treinamento e quiser aprender a
construir tudo isso daqui, muito mais do
zero, o link vai est aqui na descrição
também. E eu te vejo no próximo vídeo.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
