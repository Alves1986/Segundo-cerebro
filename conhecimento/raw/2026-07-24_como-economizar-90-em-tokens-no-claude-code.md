---
tipo: video-youtube
video_id: j5lYzSlPEjg
titulo: Como economizar 90% em tokens no Claude Code
canal: Thalena Lima - IA & Automações
url: https://youtu.be/j5lYzSlPEjg
data_publicacao: 20260701
duracao: 17m 13s
views: 1865
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# Como economizar 90% em tokens no Claude Code

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/j5lYzSlPEjg)
- Publicacao: 20260701
- Duracao: 17m 13s
- Views: 1865

## Descricao (original)
Claude Code: Hacks Para Gastar Menos Tokens e Usar Skills do Jeito Certo

➡️ Conheça meu Treinamento Completo: https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video79

🔗 Conheça nossos serviços e implementações → https://lp.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video79

Claude Code pode ficar caro se você não souber gerenciar contexto, tokens, modelos, MCPs, plugins e skills. Neste vídeo, eu mostro hacks práticos para usar Claude Code de forma mais profissional, economizar tokens e aproveitar melhor recursos que muita gente ignora.

A resposta curta é: o Claude Code cobra por consumo de tokens, e o custo aumenta quando a conversa fica longa, quando o contexto cresce demais, quando você usa o modelo errado para a tarefa ou quando deixa ferramentas e MCPs ativos sem necessidade. Por isso, aprender comandos como /usage, /context, /compact, /model e /mcp muda completamente a forma como você usa Claude Code no dia a dia.

Neste vídeo, você vai aprender como usar Claude Code com mais eficiência em projetos reais, principalmente se você trabalha com IA aplicada a negócios, automação, desenvolvimento com IA, vibe coding, plugins, skills, MCP e construção de sistemas para clientes.

O que você vai ver neste vídeo:

- Como o Claude Code cobra pelo uso de tokens
- Por que conversas longas ficam mais caras com o tempo
- O que é prompt caching e como ele ajuda a reduzir custo
- Como usar /usage para acompanhar consumo de tokens
- Como usar /context para entender o que está ocupando espaço na sessão
- Como usar /compact para resumir a conversa sem perder o que importa
- Como usar /model para escolher o modelo certo para cada tarefa
- Quando usar modelos mais fortes como Opus e quando usar modelos mais econômicos como Sonnet ou Haiku
- Como reduzir custo desligando MCPs que você não está usando
- Por que manter o CLAUDE.md curto ajuda no desempenho da sessão
- Como agrupar pedidos em uma única mensagem para economizar contexto
- Quando abrir uma nova sessão em vez de continuar uma conversa antiga
- Como usar plan mode antes de executar tarefas grandes
- Como usar paths e referências diretas de arquivos para ajudar o Claude Code
- Como plugins e skills podem acelerar análise, planejamento e documentação de projetos
- Como usar skills para gerar plano de melhoria em um projeto existente
- Como gerar diagramas e apresentações automáticas de arquitetura para mostrar para clientes
- Como usar ferramentas de transcrição por voz, como Handy, para conversar mais rápido com IA

Este conteúdo é para quem usa Claude Code, Codex, Cursor, Antigravity, MCP, skills, plugins, automação com IA ou desenvolvimento de sistemas com inteligência artificial.

─────────────────────────
⏱ CAPÍTULOS
─────────────────────────
00:00 - Introdução
00:50 - Entendendo a cobrança de tokens
05:46 - Comandos nativos de economia
08:10 - Hábitos profissionais
10:32 - Plugins e Skills úteis


Comenta aqui se você quer uma parte 2 com mais skills, plugins e hacks práticos para Claude Code.

Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢Compartilhe com alguém que quer aprender IA do jeito certo: https://youtu.be/j5lYzSlPEjg
💬 Comenta aqui qual dessas decisões mais abriu sua cabeça.

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

#ClaudeCode #InteligenciaArtificial #VibeCoding

## Transcricao
Hoje eu vou te mostrar alguns hacks
importantes que a maioria das pessoas
que trabalham com cloud code não usa,
mas deveria para conseguir realmente
utilizar o máximo que essa ferramenta
pode proporcionar. Eu fiz questão de
separar esse material para você que me
acompanha, porque eu testei tudo que é
de plugin, de skill, o que é relevante
aí, que apareceu no Cloud Code nas
últimas semanas. Então já fica até o
final porque isso aqui vale ouro. E se
você ainda não me conhece, muito prazer,
eu me chamo Talena e aqui no meu canal
eu falo sobre IA aplicado negócios.
Então se esse tema te interessa, já se
inscreve aqui, porque toda semana tem
conteúdo prático para você utilizar
inteligência artificial para gerar
resultado de verdade. Já tô aqui com a
tela do meu computador aberto aqui num
projeto, porque esse vídeo ele é mão na
massa. E aqui eu organizei em três
partes, tá? Primeiro eu vou te mostrar
como é que o Cloud Code realmente cobra
de você e isso com base na documentação.
E aí eu vou te mostrar os comandos que
são nativos aqui do próprio cloud, que
vão resolver esse custo exacerbado que
poucas pessoas usam. Depois disso, a
gente vai ver um pouco sobre os plugins
e skills, ferramentas que a gente usa,
que eu uso aqui, que com certeza vai
adiantar demais aí se você usa o cloud
Code também. Depois eu vou te mostrar
alguns plugins e skills que vão
facilitar a tua vida no uso aqui do
Cloud Code, além de te mostrar também
alguns hacks, né, para você usar o Cloud
Code de forma mais profissional. Então,
ó, eu abri aqui um projeto, tá? Comecei
a conversar um pouquinho aqui com o
Cláudio, porque eu quero te mostrar algo
muito interessante. Só que uma coisa que
eu preciso que você saiba, token de
resposta custa em média cinco vezes mais
do que token que você envia. Então deixa
isso ficar claro aí para você, tá? E o
motivo de uma conversa longa ficar cara,
não é só isso que eu tô te falando, é
que toda nova mensagem que você reenvia
aqui quando você tá conversando no cloud
code, a conversa inteira de novo é
enviada, entende? Então, sistema,
ferramenta, memória ali do projeto, todo
o histórico, até você tá conversando.
Então, a cada mensagem que você envia,
ele vai ter que enviar várias coisas em
todo aquele contexto antes. Então, isso
já tá lá na documentação. Por isso que
vai ficando cada vez mais caro. A cada
vez que você conversa, vai ficando mais
caro, porque ele tá enviando tudo de
novo. Então, uma coisa que eu quero te
mostrar aqui de já, e aqui esses
comandos que a gente vai usar, eles vão
valer não só aqui no chat, tá? Eu tô com
o VS Code aberto, mas você pode colocar
esses mesmos comandos aí onde você
estiver utilizando o cloud, no terminal,
aqui no chat, antigravity, qualquer
lugar que você esver usando ele vai
funcionar. É esse aqui, ó, contexto. Tá
vendo aqui, ó? Quando a gente clica
aqui, olha só, já abre todas essas
faixas aqui coloridas, tá vendo? Então,
a gente consegue ver aonde tá indo o
nosso uso, entendeu? E aqui você
consegue analisar, ó, aqui 3.4%
está sendo o system prompt, né, a
categoria. Então eu tô usando aí, ó, a
quantidade de token aqui, system tools.
Então, ó, 4%. Como acabei de começar a
conversar, já é pouquinho, então não tem
muita coisa. Então, o espaço livre que a
gente tem aqui no final é o que
interessa, ó. Tá vendo aqui, ó? Espaço
livre, 62%.
É isso aqui que você tem que ficar
acompanhando quando você tá conversando
ali para ver quanto que ainda tem. Aí
como eu acabei de conversar, conversar
aqui tem bastante ainda. Então aqui você
vai conseguir conferir quanto que ainda
vai sobrar, né? Não quanto foi gasto.
Aqui é quanto ainda sobra do contexto,
tá? E existe um recurso que eu preciso
te falar aqui, caso você não saiba, que
é o prompt casing, que é um conceito que
eu já até trouxe aqui no canal e lá
dentro do meu treinamento também. Então,
eu quero que você imagine a seguinte
situação. Imagina você tá conversando
com a pessoa no WhatsApp e toda vez que
a pessoa mandar uma coisa, você tem que
ler toda a conversa de novo, do início
até o final. É cansativo, né? Gasta,
entendeu? Então o que que acontece aqui?
O cloud, para não acontecer isso dele
ter que ler tudo de novo, ele guarda um
marcador, né? vamos se dizer assim, um
marcador que já foi lido, tipo assim, ó,
eu já li até aqui, marca esse ponto da
conversa para ler só o que bá, o que a
pessoa vai mandar a partir daquele ponto
para ele não ter que reler tudo de novo.
E isso custa só 10% do preço normal, ele
consegue ter essa economia com esse
marcador, entende? Só que esse marcador
ele vai se perder em situações bem
específicas, tá? Se você troca de modelo
no meio, então você tá aqui conversando
com o cloud e aí você vai trocar o
modelo dele. Você vem aqui, ó, barra
model e aí você vai trocar. Você tá
conversando e você vem aqui e troca o
modelo. Isso vai fazer com que ele se
perca. Outra situação, se você ficar
muito tempo parado sem conversar com ele
naquela sessão, sei lá, vamos se dizer
que você ficou uma hora sem falar mais
nada aqui, deixou aberto e ficou uma
hora sem falar nada, ele vai perder esse
esse marcador também. Outra situação é
quando você atualiza a versão do cloud,
ele também vai perder esse marcador.
Situações onde ele não quebra esse cash,
tá? onde ele não vai perder o marcador.
Por exemplo, se você vir aqui e editar o
cloud.m,
ele não vai perder o marcador dele só
por isso, tá? Ele não vai perder esse
cash. Nem se você vier aqui e mudar o
modo de permissão também. Não tem
problema nenhum você fazer isso. Ele não
vai perder esse ponto lá no
marcadorzinho que eu te falei. Outra
coisa, se você quiser, por exemplo, usar
uma skill específica aqui ou um comando,
né, que vai entrar como uma nova
mensagem, isso também não vai fazer com
que o cash se perca, tá? Só para deixar
claro, isso tá lá na documentação. Outra
situação que eu quero falar para você
sobre essa parte de economia, né? O
cloud, eu tenho certeza que você já
utilizando ele, automaticamente ele
compactou aquela conversa que você tá
ali, né? Você tá ali conversando há
muito tempo, do nada aparece lá que ele
compactou isso de forma automática
naquela janela ali. Então isso ele faz
pra sua sessão nunca travar, ele mesmo
vai compactando aquela conversa. Só que
esse resumo automático ele às vezes é
muito genérico, entende? ele não vai
saber exatamente o que que é importante
de fato pro teu projeto. Então, a
alternativa aqui para você melhorar essa
parte é você rodar esse comando aqui, ó,
barra compact. E aqui eu abri outro
projeto que eu tenho mais com texto para
te mostrar. Você vai colocar aqui
compact,
entendeu? Então, por exemplo, vou
colocar isso aqui, que é o que tem a ver
com o que eu tava fazendo, tá? E aí, ó,
eu dou isso aqui e ele mesmo vai
compactar somente o que é relevante
daquela frase que eu coloquei, né? E aí
você pode ser mais específico aqui. E aí
ele vai fazendo essa compactação aí da
conversa. E aí demora, tá gente? Ó, ele
já atualizou aqui para mim o que eu
precisava, tá vendo? Aí, outra coisa,
outro comando que muita gente não usa é
o barra, esse aqui, ó. Esse aqui ele vai
gerar um resumo da sessão sem substituir
o histórico, entende? A gente não vai
perder nada, só que ele vai ganhar um
resumo para colar em outro lugar ou você
revisar de forma rápida. Então, vou dar
aqui um recap, ó, e aí você vai ver e
vai trazer aqui um um resuminho para mim
do projeto. E existe também esse outro
aqui, ó, build, porque daí ele vai
voltar pro cash anterior que já existia
sem custo extra, entendeu? Tem até a
explicação aqui, ó. Além disso, alguns
hábitos muito importantes que você tem
que lembrar quando você for usar aqui no
dia a dia é o quê? Primeira coisa, você
tem que agrupar pedidos em uma única
mensagem. Então, se você for pedir
coisas pequenas, unifica isso em uma
única mensagem via, vai ser bem melhor
do que você ficar mandando e ele toda
vez processar aquele monte de coisa que
já foi antes, entende? Então, tenta
evitar, se for uma coisa pequena, né,
coloca tudo junto e manda de uma vez.
Outra coisa, tenta abrir uma nova
sessão, tá? Eu te mostrei lá no
terminal, mas aqui, por exemplo, se você
for mudar um pouco assunto dentro
daquela sessão, em vez de você continuar
conversando aqui nessa conversa, abre
uma nova, tá? Vem aqui, ó, e começa uma
nova, tá bom? Porque isso é bem mais
barato para você do que você ficar
enviando aquele contexto enorme que já
tinha. Outra coisa, escolha o modelo
certo para cada tarefa. Lembra lá, aqui,
ó, você pode escolher aqui barra model.
Você pode escolher qual é o modelo que
você quer usar. tem de escolher da
maneira correta. O mais avançado para
decisão de arquitetura e bug difícil,
que é aqui no caso até agora, né, é o
OPS, o modelo intermediário que eu uso
paraa maioria das coisas, o sonet, tá?
Eu uso bastante o sonet e o mais leve
aqui para poder você fazer coisas mais
simples, né? Esquece também de
configurar aqui, ó, o esforço, tá? Não
esquece de configurar o esforço, porque
isso é muito importante, isso vai mudar
muito. Não adianta toda vez você usar
aqui, por exemplo, o sonetê sempre no
talo, né? Se for uma coisa mais simples,
usa o médio aqui, o esforço médio que já
vai ser suficiente, tá? Outra coisa,
usa, tenta usar o PL mode aqui, tá?
antes de pedir uma execução de fato, se
você for começar a construir alguma
coisa, pede para eh usa esse plano aqui,
porque daí ele já vai trazer um
planejamento que vai facilitar demais
quando você for executar, pedir para ele
executar de fato, até para você corrigir
ele quando for preciso, tá? E outra
coisa, seja mais direto nas tuas
referências. Quando tem algum arquivo em
específico aqui dentro do seu projeto
que você quer referenciar ele, você pode
simplesmente vir aqui, por exemplo, aqui
no cloud, pegar aqui o caminho dele, ó.
Copia o caminho e aí aqui, ó, colei
aqui. Você pede para ele ler isso,
entende? Se você já tiver esse
apontamento do caminho, ajuda demais ele
a utilizar, em vez dele toda vez ter que
ir lá no projeto procurar, tá? Outra
coisa, desliga aqui, ó, quando você vem
em MCP, desliga os MCPs que você não tá
usando, se você não for usar, entendeu?
Isso ajuda demais também essa questão do
uso. Outra coisa, mantém sempre o
cloud.m curto. Não vai encher esse esse
arquivo de dados, de tudo, tá? Ele não é
para você colocar tudo do seu projeto
ali. São algumas dicas que eu utilizo
aqui no meu dia a dia. A gente vai
entrar agora nos plugins, nas
ferramentas, né, nas skills que valem te
ajudar demais aqui dentro do cloud Code.
Primeira skill é essa daqui, ó. E o que
que ela faz? Essa skill, ela resolve um
problema de quem já tem projeto rodando,
tá? E você quer, de repente subir a
qualidade sem ter que reescrever tudo,
refatorar ali o seu projeto, né? lógica
dela é a seguinte, ela usa o modelo
modelo mais caro e mais inteligente
disponível para entender o problema e
montar o plano. Então você vai tá aqui,
eu vou já te mostrar rapidamente aqui o
uso dela, né? Montar, ela vai entender
esse problema e montar o plano. É aqui
que o raciocínio precisa acontecer, né?
E para executar o plano, ela despacha o
modelo mais barato, porque nesse ponto
já é um trabalho mecânico. Então, por
isso que ela vai usar o modelo mais
barato para isso e vai só seguir a
instrução daquele plano que foi mantado
pelo modelo mais caro, entendeu? Então
ela nunca vai implementar nada sozinha.
O plano é o produto e quem executa é o
outro agente, né, que que vai ser
revisado por ela depois também,
entendeu? Então aqui é muito simples, ó.
Já tô aqui nesse repositório, você pode
pegar aí certinho. E aqui tem exatamente
como você vai instalar, ó. Então é só
você vir aqui o terminal, né? Você vai
vir no seu terminal do projeto que você
tá, você vai colar esse comando que ele
vai instalar diretamente no seu cloud.
Depois que você instalar ela aqui no
terminal, você vai voltar pro seu cloud
aqui na conversa ou lá direto no
terminal, né? E aí você vai colocar, ó,
a minha já tá aqui, tá vendo, ó? E aí,
automaticamente, ela vai fazer esse
plano, vai analisar tudo, vai gastar
token para trazer esse plano bem mais
desenvolvido, entende? Então aqui eu
posso até trazer depois, mas ela já tá
fazendo toda a leitura. Ó, só para você
deixar claro, tá gente? Esse aqui é de
um CRM que inclusive eu trouxe para
vocês, um CRM open source. Aí vou deixar
o linkado aqui na descrição para você
poder acessar depois, tá? E aí, ó, você
consegue dar acesso para ela e ela vai
fazendo exatamente isso que eu tô te
explicando. Vai fazer tudo aí, vai te
trazer o plano para melhorar esse
projeto. Quanto ela tá fazendo aqui, eu
quero mostrar também outra ferramenta
que é, não sei se você já viu, né?
Inclusive eu gosto muito de narrar o
prompt que eu tô falando aqui. Então,
vou até mostrar aqui para vocês, ó. Ó,
tá vendo que tá aparecendo aqui esse
simbolozinho embaixo da minha tela?
Agora eu vou soltar. Olha só,
transcreveu exatamente o que eu falei
para vocês. Então, essa ferramenta é
sensacional, tá? Justamente essa daqui,
ó, é a rend. Ela é open source e
gratuita. Então você pode instalar ela
aqui. Tem o o repositório dela certinho,
ó. Você pode simplesmente instalar no
teu computador e aí configurar
direitinho o comando para usar ela e
você vai poder falar, né? Ele vai
transcrever de forma gratuita. Tem um
modelo que você escolhe lá. você não
paga pelo modelo. É ótimo, sensacional
pra gente que precisa ficar aqui, ó,
falando com a IA, né? E aqui no meu eu
configurei para ficar no option espaço,
aparece a transcrição do texto pra
gente, né? A próxima skill que é super
legal, tá? E aqui dentro dessa categoria
que é o quê? Diagrama e material de
apresentação automática, existem várias
skills dessas, né? fazendo exatamente a
mesma coisa, que é basicamente eles vão
pegar um projeto que é complexo, vão
pegar um projeto desse aqui, né, que a
gente tem várias coisas, vários
arquivos, né, e vai criar um diagrama
visual de arquitetura. Inclusive, elas
trazem até o formato pra gente
apresentar pro nosso cliente. Então, o
que que eu vou fazer? Vou abrir aqui, ó,
meu projeto para instalar do mesmo
jeito, tá? Aqui eles têm direitinho a
parte, ó, aqui é um exemplo, né, de do
que que ele gera. Ó, ele vai pegar o
projeto e vai gerar algo parecido com
isso aqui, ó, com essa interface em
HTML. Tem o passo a passo para você
fazer a instalação também, igual a gente
te mostrei lá, tá? Mesma coisa. E aí, eu
quero testar isso aqui com você. Eu já
instalei ela aqui e vou pedir para ela
criar CRM para mim. Eu vou dar o IES
aqui, ó. Consegue acompanhar ela
trazendo diagrama, né? Aí que eu tá
finalizando aqui, ó. Vou te mostrar.
Olha o resultado aqui que ela me trouxe,
gente. Que lindo esse HTML. Olha que
intuitiva. E aí, se você gostar dessa
apresentação, você vai lá no vídeo que
eu te falei que eu mostro exatamente
como é que a gente coloca esse CRM no A
de graça, tá? Então, olha só, aqui ele
já traz todo um resumo do que que é de
fato, né? Olha só que bonita essa
página, os módulos do sistema. E aí isso
daqui tá dentro do que eu pedi, né?
Porque eu pedi para ele trazer o módulo
do sistema. Olha que intuitivo, né? Olha
que bacana demais. E ele traz aqui as
vantagens de forma simplificada. Você na
reunião com um cliente seu de alguma
coisa que você faz aí, que você entrega
de solução, imagina como ele vai ficar
feliz de ver esse HTML, né? Com
intuitivo você vai ser na hora de você
mostrar isso para ele. Então assim,
sensacional. Gostei demais, ó. E ainda
tem os efeitinhos aqui, tá vendo, ó?
Muito bom. Excepcional essa skill. Tá?
Vou deixar ela também aí para você
pegar. E aí ele traz um resuminho aqui
do que ele fez, ó, exatamente de acordo
com o que eu pedi. Ainda tem muitas
skills que eu estou usando na prática
que eu quero muito te mostrar, tá? Se
você quiser a parte dois desse vídeo, já
comenta aqui, porque eu posso trazer
mais vídeos parecidos com esse, né, de
hacks, de skills, práticas que eu tô
usando dentro da minha operação e que
faz sentido eu compartilhar por aqui.
Então comenta aí que eu trago a parte
dois, porque senão esse vídeo vai ficar
muito longo. E agora eu quero ver você
implementando tudo que eu te mostrei
aqui. Então corre aí e coloca isso daí
em prática. No conteúdo de hoje, você
viu como o Cloud Code realmente cobra de
você com base na documentação oficial,
né? E também eu te mostrei alguns
comandos nativos que já resolvem muita
coisa sem precisar de plugin nenhum.
Além disso, eu também te mostrei algumas
skills e táticas reais para você aplicar
hoje na tua estrutura. Se você quer ir
além em projetos reais que geram
resultados pro teu negócio, é isso que a
gente constrói dentro do meu
treinamento. Eu vou deixar o link aqui
na descrição para você conhecer e ver se
faz sentido você entrar nessa última
turma. E se esse vídeo te ajudou de
alguma forma, já deixa o teu like aqui e
aparecer o botão de hype para você
também já aperta nele, porque isso ajuda
demais o canal. E eu te vejo no próximo.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
