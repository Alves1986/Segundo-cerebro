---
tipo: video-youtube
video_id: IImHwv3H8Dw
titulo: Achei uma API brasileira para enriquecer qualquer CNPJ (dados dos sócios)
canal: Victor Baggio | IA para Vendas
url: https://youtube.com/watch?v=IImHwv3H8Dw
data_publicacao: 20260715
duracao: 15m 53s
views: 17668
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# Achei uma API brasileira para enriquecer qualquer CNPJ (dados dos sócios)

## Metadados
- Canal: Victor Baggio | IA para Vendas
- URL: [assistir](https://youtube.com/watch?v=IImHwv3H8Dw)
- Publicacao: 20260715
- Duracao: 15m 53s
- Views: 17668

## Descricao (original)
👉 Crie sua conta no KipFlow: https://platform.kipflow.io/signup?c=victorbaggio
👉 Baixe o Workflow: https://playbooklab.notion.site/kipflow

👉 Acesse o material na comunidade: https://comunidade.playbooklab.com.br/
👉 Conheça minha agência: https://playbooklab.com.br

Enriquecer dados de empresas B2B no Brasil sempre foi caro e furado com ferramentas gringas. Nesse vídeo eu te mostro uma API 100% brasileira que acha e-mail e telefone de qualquer empresa, lista os decisores com cargo e LinkedIn, estima faturamento e ainda puxa processos e dívida ativa, tudo rodando dentro do n8n pra você automatizar sua prospecção.

Você vai ver casos de uso reais: enriquecimento na entrada do CRM, qualificação de lead por faturamento, geração de listas por filtros e análise de risco comercial.

Me segue no Instagram pros bastidores da agência: https://www.instagram.com/victor.baggio.ai/

Capítulos:
00:00  A dor de enriquecer dados B2B no Brasil
01:00  Por que as ferramentas gringas não servem aqui
02:00  A API nacional que resolve isso (e o modelo pague-por-uso)
03:30  Tour pela documentação: quais dados dá pra puxar
05:00  Demo 1: enriquecer empresa e achar os decisores
07:15  Demo 2: enriquecer o lead na entrada do CRM
09:45  Demo 3: gerar listas de leads por filtros
11:45  Fluxo de risco comercial por dívida ativa
13:15  MCP e agente de IA pra enriquecer via prompt
14:30  Recapitulando, R$200 grátis e próximos passos

👉 Conheça a Comunidade Playbook Lab: https://comunidade.playbooklab.com.br/

👉 Inscreva-se no canal para mais conteúdos sobre automações com IA, n8n e estratégias de prospecção B2B.

🔗 LINKS & RECURSOS:

👉 Conecte-se comigo no LinkedIn: https://www.linkedin.com/in/victorzbaggio/

👉 VPS Hostinger: https://www.hostinger.com/br?REFERRALCODE=VICTORPLAYBOOK
👉 Pipedrive: https://aff.trypipedrive.com/soe7cj2wlziy
👉 Prosp: https://prosp.ai/?via=victor
👉 Tella.tv: https://refer.tella.com/victor-baggio
👉 Apify: https://apify.com?fpr=qe1z8w
👉 Unipile: https://www.unipile.com/
👉 AnyMailFinder: https://anymailfinder.com/?via=victor-baggio
👉 TL;DV: https://tldv.cello.so/2S70c8hxWIi (30% OFF)
👉 WisprFlow: https://ref.wisprflow.ai/victor-baggio
👉 Linked Helper: https://www.linkedhelper.com/?lhpc=VICTORBAGGIO (10% OFF)

## Transcricao
Fazer um enriquecimento de dados de
empresas B2B aqui no Brasil foi sempre
uma baita de uma dor de cabeça. As
ferramentas lá de fora, americanas, por
exemplo, a Clay, a Polo, que são bem
famosas, além de serem ferramentas muito
caras por você ter que pagar em dólar,
elas não estão bem adaptadas pros bancos
de dados nacionais aqui do Brasil, por
exemplo, a Receita Federal, os dados de
CNPJ. E por isso, muitas vezes, usar
essas ferramentas lá de fora acabam
comprometendo o pacote de dados, né, as
informações que você consegue
enriquecer. Por isso, nesse vídeo aqui,
eu quero te mostrar uma API totalmente
nacional, brasileira, 100% brasileira,
que sim tem acesso a um monte de dados
locais aqui do Brasil e que vai te
ajudar a enriquecer dados de empresas,
principalmente para prospecção aí dentro
da sua área comercial. Com essa PI você
vai conseguir fazer coisas como
encontrar o e-mail e telefone de
qualquer negócio aqui no Brasil, listar
quem são os principais decisores e
cargos dentro dessa empresa, encontrar
também o LinkedIn e o e-mail dessas
pessoas, né, o e-mail corporativo delas
para você poder prospectar diretamente
os decisores dessas empresas e vai
conseguir várias outras informações bem
legais, por exemplo, o porte da empresa,
a quantidade de funcionários, de
colaboradores que ela tem, o faturamento
anual estimado de cada uma delas, número
de processos judiciais que essa empresa
tem e até mesmo qual é o valor das
dívidas que ela tem ativas com a União.
A gente vai daqui a pouco não só
explicar qual é essa PI, como ela
funciona, quais dados você consegue eh
obter, mas eu vou mostrar também alguns
casos de uso dentro do N8N. É uma das
formas de acessar essa API e pegar os
dados através do N8N, mas você pode usar
é no cloud, Code, no Codex, dentro da
sua própria aplicação, do teu software
para enriquecer dados por lá. Tem várias
formas de utilizar aqui. Eu vou usar o
N8N com alguns casos de uso e eu vou
também compartilhar esse workflow, esses
fluxos do N8N para você poder testar por
aí. Esse vídeo aqui não é patrocinado
por essa PI, por essa empresa, mas eles
disponibilizaram um link. Se você fizer
seu cadastro através dele, eles te
concedem R$ 200 de crédito para você
gastar durante a tua fase de testes, tá?
Doentão mesmo para você torrar aí em
requisições dentro dessa API. Se você
tava buscando uma solução para consulta
de dados, enriquecimento de informações
de empresas aqui no Brasil, esse é o
vídeo certo para você. Então fica comigo
até o final. Se você ainda não me
conhece, seja muito bem-vindo ao canal.
Meu nome é Víor, eu sou fundador da
Playbook Lab, uma agência de IA e
automação para vendas. Aqui nesse canal
eu compartilho um pouquinho do meu
conhecimento sobre automação IA,
principalmente para você vender mais e
melhor. Se você ainda não é inscrito no
canal, clica no inscrever-se aí embaixo
para não perder os próximos conteúdos.
Aproveito para falar que eu acabei de
criar uma conta no Instagram, comecei a
postar algumas coisas por lá, mas sobre
a rotina aqui do dia a dia, sobre a
empresa, nosso crescimento. Então, se
você tem interesse em acompanhar os
bastidores de uma agência de IA e como a
gente constrói a nossa operação por
aqui, vai ser um prazer te receber por
lá. Sem mais enrolação, bora pro vídeo.
Galera, o nome da API que eu quero
apresentar é Keepflow, tá? Eu tô com o
site deles aberto aqui. Depois a gente
vai pular para documentação para falar
um pouquinho sobre os ends e como você
consegue obter os dados, tá? Então eles
falam aqui, ó, que eles são uma
plataforma de dados que encaixa no seu
stack. Você pode plugar no seu CRM, N8N
e até o MCP já pronto, né, próprio deles
para conectar na sua LLM. Uma coisa bem
legal é que você não precisa cadastrar o
cartão de crédito para começar o seu
teste grátis. Inclusive, pelo link da
descrição aí você tem mais requisições
para usar, mais créditos, né? Mas não
precisa colocar o cartão de crédito. E
se durante o seu teste você confirmar
que essa é a PI certa para você, que
você vai utilizar num volume maior, eles
cobram por uso. Então você não precisa
assinar uma mensalidade e ficar naquela
de tipo, pô, será que eu vou usar tudo,
não vou usar? Você consegue pagar apenas
o que você tá usando, o que eu acho
muito bom. Eh, a maioria das APIs não
tem esse formato, né? Você tem que
contratar um plano e nem sempre você
sabe se vai usar tudo aquilo que você tá
pagando, né? Aqui eles trazem alguns
diferenciais bem legais, né? Então, esse
é um primeiro caso de uso, né? De quando
o lead entra no CRM já vir com os dados
enriquecidos, por exemplo, o faturamento
estimado, o número de funcionários, o
setor, a lista dos decisores. Um outro
diferencial é os datasets por vertical,
né? Então eles conseguem informações um
pouco mais clusterizadas, mais
específicas, né? para empresas do setor
fiscal, para empresas do agro, de
e-commerce. Esse aqui eu já precisei
usar. A gente tem um cliente que
prospecta eh e-commerces, né? Então a
gente conseguiu encontrar dados super
legais de empresas eh e-commerce aqui no
Brasil. Frotas para empresas que
precisam eh de dados, por exemplo, de
quantos carros tem na frota de uma
empresa, eles conseguem trazer isso.
Saúde, licitação, processos judiciais,
são coisas que são impossíveis de você
encontrar numa ferramenta gringa, numa
ferramenta lá de fora, porque essas
informações são exclusivas de bancos de
dados e informações nacionais aqui do
Brasil, né? A qualificação por porte
para mim é um outro diferencial,
principalmente a estimativa de
faturamento da empresa, tá? Essa
informação também é uma que não tem
outras APIs lá de fora. E aqui eles dão
alguns exemplos, né, de como que você
consegue fazer as requisições e que tipo
de dados você vai receber de volta, né?
Então tem provavelmente uma requisição
que eles chamam de básico, que traz as
informações mais básicas sobre a
empresa, uma completa que já vai trazer
os dados, por exemplo, de porte,
quantidade de filiais, o regime
tributário, se existem outros quinais
atrelados, ramos de atividade atrelados
a essa empresa, presença digital, que é
super bacana, puxa todas as redes
sociais atreladas a essa empresa, esse
esse CNPJ e a lista dos sócios também.
Eles têm integração facilitada com o
N8N, inclusive tem um node de
comunidade, você instala, fica bem mais
fácil de fazer as requisições. Você não
precisa ficar chamando aquele chamando
aquele node de HTTP request, né? Já vou
mostrar isso. E eles também já t um MCP
proprietário. Basta você instalar
através do seu da sua LLM de preferência
e daí você vai poder simplesmente
promptar o GPT ou o Cloud e enriquecer
dados, né? pedir informações para ele,
ele vai usar o MCP da Kipflow para
chamar essas informações e te trazer
dados muito mais profundos e detalhados
aí sobre os leads que você tá querendo
prospectar. Bora dar uma conferida
rápida na documentação do Keepflow antes
da gente pular pros casos de uso lá do
N8N. Basicamente, a gente tem a divisão
aqui de chamadas para obter dados sobre
a empresa através do CNPJ ou o domínio.
Dá para fazer isso em lote também e
usando alguns filtros, caso você queira
gerar listas de leads. Por aqui você tem
uma sessão de redes sociais que te
permite extrair dados das empresas do de
dentro do LinkedIn. Então, fazer o
scraping dessas informações dentro do
LinkedIn. Você tem uma sessão aqui de
redes sociais que te permite eh passar,
por exemplo, o URL de um LinkedIn de uma
empresa e obter todos os dados dela, não
só os dados que estão dentro do
LinkedIn, todo o dataset de dados que
existe dentro do Keipfow, né? E dá para
fazer essa mesma requisição para perfis
de pessoas, tá? Então você passa o URL
do perfil de alguém e tem como resposta
todos os dados de dentro daquele
LinkedIn daquela pessoa para você
trabalhar. Na parte de contatos tem duas
coisas bem legais, é a busca de telefone
da empresa por CNPJ ou domínio. Então
aqui você vai obter como resultado os
dados do negócio, né? Então são os
números de telefone daquela empresa. E o
Kipfow já tem uma inteligência para
desviar os dados das contabilidades,
porque se você já teve essa experiência
de eh tentar gerar dados com base na
Receita Federal, né, em muitos casos o
e-mail e o telefone que estão atrelados
na Receita Federal são da contabilidade
que criou aquele CNPJ e não do negócio
em si, né? Então o Kipflow já desvia
disso e te traz com um pouquinho mais de
assertividade os dados da empresa mesmo,
tá? E tem outras duas chamadas bem
legais aqui, que é a de gerar e-mail de
pessoas de uma empresa. Então você
consegue gerar, por exemplo, todos os
e-mails de todos os decisores de uma
empresa e receber isso num pacotão de
informações, né? Você também pode gerar
o e-mail de uma pessoa individualmente a
partir do LinkedIn dessa pessoa. Essas
aqui são duas possibilidades bem
interessantes para você conseguir dados
das pessoas e e poder prospectar, não o
negócio, né? Poder prospectar
diretamente as pessoas, os decisores aí
dessas empresas. E depois a gente tem um
monte de coisa aqui na na documentação
relacionado a coisas e chamadas bem mais
específicas, né? Então a gente tem aqui
parte trabalhista, a gente tem a parte
de veículos, a parte jurídica, que
normalmente pra gente que tá
prospectando, a não ser que você
prospecte um perfil de cliente muito
específico, que isso aqui possa te
ajudar, essa parte aqui não vai ser tão
interessante. Porém, para alguns
negócios que estão construindo
aplicações, estão desenvolvendo
softwares, pode ser que seja seja bem
legal. Só para não dizer que eu nunca
usei isso aqui. A gente trabalhou uma
época com um cliente que vendia um
software para telemetria de veículos, de
caminhões, né? Então, para eles era
muito importante prospectar empresas
sabendo se aquela empresa tinha frota,
tinha caminhões na frota, por exemplo,
né? Então, a Kipflow foi uma solução
ótima, porque é uma das poucas APIs,
talvez a única, que tem essa informação
de você poder pegar uma lista de
empresas que possuem caminhões de tantos
eixos na frota dela, né? bem específico,
eu sei, mas foi um caso que nos ajudou
muito. Agora eu queria te mostrar alguns
casos de uso dessa API. Nesse primeiro
aqui, a gente tem a extração a partir do
URL do perfil de uma empresa. Eu usei a
Magazine Luía nesse exemplo. A gente tem
a extração do perfil da empresa, a
geração de telefones do negócio e também
os e-mails do negócio, geralmente os que
estão atrelados ao quadro societário,
tá? Então vamos rodar o fluxo por
completo. Aqui a gente vai ver que nesse
primeiro, nessa primeira requisição ele
retorna os dados da empresa, né? Então,
por exemplo, a descrição, eh, número de
seguidores, localização, qual que é o
número de colaboradores, né? Nesse
segundo a gente já começa a ver um
pouquinho de de e-mails, tá vendo, ó?
Então, Adalto, e-mail Adaltoara
@magazineluía,
e-mail válido, Ademir, Ademir, isso,
Ademir também da Magazine Luía. Então, a
gente já começa a ter dados das pessoas,
né? E por último, telefones. Aqui vai
ter um monte porque a Magazine Luía tem
diversas filiais, né? Então tem um monte
de telefone aqui. São telefones do
negócio, tá? e não das das pessoas. No
segundo caso de uso, a gente tem o de
descobrir os decisores a partir do
LinkedIn da empresa. Nesse caso, você
pode definir também quais são os quem
são os decisores que você tá buscando,
né? Tem gente que quer prospectar às
vezes os fundadores de uma empresa e tem
gente que quer prospectar um diretor
comercial, um diretor financeiro, um
diretor de RH. Nesse caso, a gente vai
conseguir sim, através da do Keepflow
fazer essa busca específica por um cargo
ou um tipo de cargo específico que a
gente queira. Então, nesse caso, usando
também a Magazine Luía como exemplo, a
gente puxou dados, por exemplo, aqui da
diretora comercial e marketing de lojas
físicas, que é essa pessoa chamada
Aline. A gente descobriu também o e-mail
dela, inclusive com status de válido,
né, e com qualidade bom, e que bateu um
critério de score, né, de tomador de
decisão de 100, ou seja, é um é um
decisor sim dentro lá da companhia. Além
disso, a gente tem todas as informações
sobre essa pessoa, né? Então, todas as
experiências dela, os últimos trabalhos
que ela teve, as posições dentro da
magazine Luía, a gente pode enriquecer
um monte de informação sobre essa
pessoa. Além da Line, achou dados também
sobre a Ana, que é diretora de
reputação, tem dados de André, que é
diretor de logística, tem o Bernardo,
que é diretor de marketing, então fez um
apanhado geral aí de várias diretorias,
né, cargos altos aí dentro da Magalu.
Esse próximo caso de uso aqui é um
pouquinho mais complexo, mas eu quis
simular o que seria um fluxo de
enriquecimento de dados de inbound.
Então, o que ele faz basicamente é
monitorar um CRM, no nosso caso
PipeDrive. Toda vez que um lead novo
entra lá, seja por uma campanha de
tráfego que a gente fez, uma conversão
num formulário do site, esse fluxo entra
em ação. Ao invés do nosso lead chegar
no CRM só com os dados que o lead
preencheu no formulário, o Kipflow nos
ajuda a enriquecer os dados e trazer
para dentro do CRM de forma muito mais
enriquecida, com um monte de informação
que a pessoa nem precisou preencher lá
no formulário. Inclusive, a gente já
qualifica, bota um score de qualificação
usando o faturamento estimado da empresa
para saber se é uma empresa grande que
tem potencial pra gente atender ou é uma
empresa pequenininha que não vale a pena
a gente atender. Então o que tá rolando
aqui? Basicamente a gente identifica
essa pessoa, esse novo cadastro dentro
do PipeDrive, coleta o domínio da
empresa através do e-mail que a pessoa
preencheu, então
victor@playbooklab.com.br,
né? Então pega o domínio da empresa e
usa o Kipflow para fazer o
enriquecimento da empresa através do
domínio da empresa, tá? A gente já
aproveita para enriquecer o e-mail de
outros decisores dessa companhia para
montar como se fosse um board ali,
outras pessoas que podem participar do
processo de compra. E por último a gente
devolve as informações para dentro do
pipeedrive. Esses dois casos de uso
aqui, eu trouxe a geração de listas.
Você pode sim usar o Keipflow para gerar
e listas de leads para você. A gente tá
falando de uma API que vive em cima, né,
de uma base de dados extremamente grande
de empresas do Brasil, você pode mandar
requisições para end points específicos
que geram listas de oportunidades. Então
eu simulei aqui mais ou menos, né, um
formuláioariozinho que traria algumas
perguntinhas, por exemplo, de que estado
e município você quer essa lista, né? O
segmento, porte dessas empresas, a faixa
de faturamento, funcionários, se é
matriz, se é somente empresa ativa,
quantidade de empresas poderiam ter mais
filtros, obviamente, né? Mas você
respondendo isso aqui vai conseguir
gerar uma lista de empresas através do
Kipflow, tá? Tem dois formatos
diferentes. Eu deixei os dois aqui. Se
você quiser testar, vale mencionar que
quando você gera lista, você tá gastando
seus créditos de forma um pouco mais
acelerada, tá? Quanto maior a lista que
você tá gerando, mais créditos você vai
gastar. Então fica atento aí para você
não gerar uma lista muito grande e
acabar com seus créditos fazendo esses
testes. Trouxe um exemplo também de um
fluxo que metrifica risco comercial a
partir das dívidas que essa empresa tem.
Então, basicamente o que a API faz? Ela
nos traz dados eh sobre dívida, dívida
ativa, eh calcula o risco através de
alguns parâmetros, né? Se a empresa tem
situação cadastral ativa, o faturamento
estimado, a faixa de funcionários, o
site, o LinkedIn, a quantidade de sócios
lá no CNPJ, né? O tempo de atividade
dessa empresa, uma análise de compliance
aqui e se não me engano tem aqui a o
risco, né? A nota de risco. Isso aqui
bem menos útil pra galera do comercial,
né? quando a gente vai prospectar, mas
pode ser que seja útil para alguém aí
que tá construindo alguma solução e
precisa dessa análise de risco ou
informações sobre as dívidas. E por
último, não vou demonstrar 100% aqui,
mas só para que vocês saibam, o Kipfow
tem um MCP, tá? eles mesmos hospedam por
lá. É só pedir no suporte que eles te
mandam é o guia de instalação. Mas se
você quiser utilizar o MCP deles
conectado diretamente na sua LLM,
conectar no cloud, conectar no GPT para
você poder enriquecer dados de clientes,
pedir informações, pedir para encontrar
e-mail direto na LLM, é possível. E se
você quiser conectar no N8N, por
exemplo, que eu fiz aqui, um IA
conectado ao MCP, também é possível.
poderia daí conectar esse agente aqui
num WhatsApp, numa aplicação, seja lá o
que for. E eu converso com um agente que
tem acesso a tudo isso que a gente viu,
né? Então, invés da gente ter que ficar
construindo fluxos para chamar essas,
né, fazer as requisições lá paraa PI,
encontrar o que a gente precisa, a gente
simplesmente deixa com que um agente ou
a própria IA, né, a própria LLM bata lá
na PI e faça as as requisições por nós.
Lembrando que esse fluxo aqui vai estar
disponível aí na descrição do vídeo para
você baixar, colocar aí para dentro do
seu N8N e poder copiar as informações.
Lembra também de instalar os nós da
comunidade, porque senão você vai baixar
esse fluxo aqui e esses nós aqui vão
estar apagados, né, sem nada. você
precisa dos nós da comunidade para eles
funcionarem direitinho. E dessa forma
você já tem alguns casos de uso aí, pelo
menos os mais básicos, né, para você
copiar, dar uma modificada aí paraas
suas necessidades e já tem um bom ponto
de partida. Bom, a minha intenção com
esse vídeo aqui era te apresentar uma
nova possibilidade de uma ferramenta
nova no mercado que eu tenho certeza que
você não conhecia ainda, que resolve um
problema que, pelo menos paraa minha
agência, pros projetos que a gente
implementa nos clientes, é um problema
bem grande. Fica à vontade para criar
sua conta no Kipflow usando aqui o link
da descrição. Dessa forma, você garante
os R$ 200 de bônus para você testar a
ferramenta. E aproveito também para te
convidar pra comunidade da Playbook Lab,
uma comunidade gratuita onde a gente
fala muito sobre IA para vendas. Lá
dentro você encontra mais de 35
materiais, recursos, tutoriais sobre
esse tema, além de chat para networking
com os outros membros e comigo e também
encontros ao vivo todas as
quintas-feiras às 8 horas da noite. Se
você ainda não é membro da comunidade,
não deixa de fazer parte, o link tá aqui
na descrição também. Espero que esse
vídeo tenha te ajudado. Qualquer dúvida,
deixa aqui nos comentários. vão
responder todo mundo e eu te vejo num
próximo vídeo.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
