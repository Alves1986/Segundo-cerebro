---
tipo: video-youtube
video_id: XHIIJCcoEyQ
titulo: CRM com Agente de IA: A Solução que Estava Procurando | Hostinger Horizons
canal: Thalena Lima - IA & Automações
url: https://youtu.be/XHIIJCcoEyQ
data_publicacao: 20260512
duracao: 28m 59s
views: 1920
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# CRM com Agente de IA: A Solução que Estava Procurando | Hostinger Horizons

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/XHIIJCcoEyQ)
- Publicacao: 20260512
- Duracao: 28m 59s
- Views: 1920

## Descricao (original)
🔥 Hostinger Horizons com desconto: https://www.hostg.xyz/SHJQi
🎟️ Cupom THALENA → 10% OFF nos planos anuais

Nesse vídeo eu construo do zero a interface de um CRM completo para 
clínica de estética usando o Hostinger Horizons - e conecto um agente 
de IA que move os leads no Kanban em tempo real, sem intervenção humana. 
Você vai ver a API sendo gerada dentro da própria plataforma, o agente 
qualificando leads em duas perguntas, registrando observações 
automaticamente e atualizando o CRM ao vivo. No final ainda mostro 
como criar um site institucional completo com um único prompt.

➡️ Conheça meu Treinamento Completo:
https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video67

📂 Prompts, workflow n8n e estrutura do agente usados nesse vídeo 
→ disponíveis na IA Experts


# O que você vai aprender nesse vídeo:
→ Como construir um CRM profissional via chat, sem configurar servidor
→ Como gerar uma API REST dentro do próprio Horizons para conectar 
   agentes externos
→ Como conectar um agente de IA do n8n ao CRM via endpoints HTTP
→ Como o agente move leads entre colunas do Kanban em tempo real
→ Como o agente registra observações automaticamente no histórico do lead
→ Como publicar o sistema com um clique com hospedagem já inclusa
→ Como criar um site institucional completo com um único prompt
→ Como estruturar esse tipo de entrega para vender a clientes


# Entendendo os conceitos do vídeo:
- Hostinger Horizons é um builder de aplicações web com IA que permite 
  criar sistemas completos via chat, com banco de dados próprio, 
  publicação em um clique e hospedagem inclusa. Ideal para quem entrega 
  sistemas a clientes sem querer lidar com infraestrutura.

- CRM (Customer Relationship Management) é um sistema de gestão de 
  relacionamento com clientes. No contexto desse vídeo, é a interface 
  onde os leads são organizados em colunas de um Kanban - do primeiro 
  contato até o fechamento.

- Agente de IA é um sistema de inteligência artificial que recebe 
  mensagens, processa o contexto da conversa e executa ações de forma 
  autônoma - como mover um lead de coluna, registrar uma observação 
  ou buscar dados no CRM, sem intervenção humana.

- API REST é um conjunto de endpoints que permite que sistemas 
  diferentes se comuniquem via requisições HTTP. Nesse vídeo, o próprio 
  Horizons gera a API do CRM para que o agente no n8n consiga 
  ler e escrever dados em tempo real.

- Kanban é uma metodologia visual de gestão de fluxo de trabalho onde 
  cada item avança por colunas que representam etapas do processo. 
  Aqui, cada lead é um card que o agente move automaticamente conforme 
  a conversa evolui.

- n8n é uma plataforma de automação open source que permite construir 
  fluxos de trabalho conectando ferramentas, APIs e agentes de IA sem 
  precisar escrever código do zero.


# Ferramentas usadas nesse vídeo:
Hostinger Horizons • n8n • OpenAI GPT-4.1 Mini • API REST • Kanban • 
Agente de Qualificação de Leads


# Para quem é esse vídeo:
→ Profissionais de automação que já usam n8n e querem entregar 
   interfaces visuais junto com os agentes
→ Implementadores de IA que atendem clientes e precisam de soluções 
   completas e rápidas de entregar
→ Empreendedores que querem automatizar o atendimento e a gestão 
   de leads em um único sistema
→ Qualquer pessoa que quer entender como conectar um agente de IA 
   a uma interface real


─────────────────────────
⏱ Capítulos:
00:00 - Introdução e Ferramentas 
04:24 - Construção do CRM via Chat
11:58 - Configuração da API para IA
16:47 - Publicação da Aplicação 
18:25 - Conexão com Agente de IA no n8n
23:42  - Criação de Site Institucional 
27:00 - Encerramento e Próximos Passos
─────────────────────────

─────────────────────────

Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢 Compartilhe com alguém que quer aprender a construir e vender 
   sistemas com IA: https://youtu.be/XHIIJCcoEyQ
💬 Comenta aqui: qual nicho você aplicaria esse CRM primeiro?

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

## Transcricao
Hoje eu vou te mostrar como construir a
interface de um CRM completo e conectar
um agente A ele. Se você acompanha aqui
o canal, você já me viu construindo
aplicações para agentes GAR, CRM, painel
de leads, camban, dashboard. Uma coisa
que eu sempre falo aqui é que a
interface não precisa ser o trabalho
mais difícil desse processo, né? O que
eu venho testando é qual a melhor forma
que eu vou conseguir construir essa
camada da interface de forma que ela já
saia conectada a um banco de dados, né,
pronta para receber os dados do meu
agente e que eu consiga entregar isso
pro cliente sem ter dor de cabeça com
infraestrutura. É por isso que hoje eu
vou mostrar uma abordagem que eu tô
testando por aqui. Eu tenho certeza que
você vai gostar. Se você ainda não me
conhece, muito prazer. Eu me chamo
Talena e aqui no meu canal eu falo sobre
inteligência artificial aplicada a
negócios. Então, se esse tema te
interessa, já se inscreve, porque toda
semana tem conteúdo prático por aqui. E
a ferramenta de hoje é o Horizons da
Hostinger. É um builder de aplicação web
com IA, mas o que me interessa nele não
é o fato de ele ser sem código, né? até
porque isso já tá comum hoje em dia. O
que me interessa é a arquitetura de
entrega dele. Você tem um chat de
construção onde você descreve o que você
quer e aí você vai ter uma preview ao
vivo que vai atualizar em tempo real e
quando termina você consegue publicar de
maneira muito simplificada e até
conectar lá um domínio seu para ficar
bonitinho dentro do teu domínio, né?
aquela interface, aquela aplicação que
você construiu, sem que você precise
configurar um servidor, sem que precise
fazer alguma pepine de deploy. Ou seja,
super simples e prático. E para quem
trabalha entregando sistemas para
clientes, isso resolve uma parte chata
do processo, que é a infraestrutura, né?
E aí a gente consegue entregar uma
solução com muito mais rapidez pra
escala. Isso é muito bacana, porque daí
você vai focar na construção e na lógica
e a plataforma vai cuidar do resto. Tem
também algumas funcionalidades que
diferenciam ela tecnicamente. Eu vou
mostrar ao longo desse vídeo aqui. Então
bora pra tela do meu computador porque
eu quero te mostrar tudo. Então eu já tô
aqui com a minha tela aberta para te
mostrar um pouco mais dessa ferramenta
da Rostinger ao War Horizons. E a
primeira coisa que você vai fazer é
clicar no link que vai est aí na
descrição para você poder garantir o
desconto quando você criar a sua conta.
Então aqui, se você não cair no link
direto da ferramenta, você vem em
serviços, é essa opção aqui, ó, site com
by code. Você vai clicar e já vai cair
nessa tela aqui, ó. E aqui a gente
consegue ver tudo que a gente consegue
construir com essa ferramenta. E aqui
embaixo você vai descer e você vai
escolher qual é o plano que você quer
comprar. Esse aqui é melhor porque a
gente já ganha o domínio grátis. Então,
se você não tem um domínio, é muito bom
para você apontar já pro seu domínio. Já
vai vir aqui com essa opção para você
garantir. E a quantidade de créditos
também que você tem por mês é muito
maior do que esse daqui. Então você vai
escolher qual é o plano que você quer ou
melhor. E aqui dentro a gente já tem a
opção de você selecionar o cupom de
desconto. Ó, vou colocar aqui o cupom
talena. Dessa forma você já vai
garantir, ó, 10% de desconto, que é
muito bom. para o plano de 12 meses, que
é o melhor, porque daí você vai pagar só
esse valorzinho aqui por mês, tá gente?
É muito pequenininho para todos os
recursos que você vai conseguir ter com
essa ferramenta. Aí você vai continuar,
vai colocar os teus dados de pagamento e
aí você já vai receber um e-mail com
acesso ou ser direcionado direto. Depois
que você finalizar o pagamento, você vai
cair aqui na tela da Hostinger. E aqui a
gente tem a aba de size, ó. É nessa
opção aqui, ó, Horizons. E aqui a gente
pode começar a construir muitas coisas
com essa ferramenta. Então, vou botar
aqui em começar para eu te mostrar um
pouco dela antes da gente ir de fato pro
projeto, tá? Coisa bem rápida. Aqui a
gente consegue já pedir o que a gente
quer, simplesmente com um prompt a gente
já consegue começar. Aqui embaixo a
gente tem alguns modelos prontos, gente.
Tem cada lindo que em um clique você
consegue pegar para você, né, usar
aquilo dali de modelo e construir os
teus em cima. Aqui tem a abazinha de
sites, tem muita coisa de sites e também
a parte de apps. Se você quiser
construir algo, alguma aplicação, algo
com funções mais complexas, enfim, você
também consegue fazer isso aqui na aqui
no Horizons. Embaixo ele tem um
tutorialzinho, né, de como é que a gente
consegue usar a ferramenta. Então, bora
lá começar a construir aqui o nosso CRM,
tá? Eu vou construir um CRM de clínica
de estéticas e esse é um nicho do
exemplo de hoje. Mas assim, essa
estrutura ela vai servir para qualquer
segmento de negócio, tá? Qualquer nicho
que você queira replicar ou melhorar,
seja imobiliário, escritório, advocacia,
né? A parte personal, trainer, qualquer
coisa que você quiser. O que vai mudar
são só os campos, as categorias, né? as
funções que você quer que tenha, se você
tá fazendo isso para algum cliente,
enfim, você que vai definir também qual
é que é a lógica. A única coisa que vai
mudar é isso. E o prompt que eu vou usar
é basicamente esse aqui, ó. Prometzinho
bem básico. Você não precisa de
destrinchar muita coisa aqui.
Inicialmente a gente vai criar um CRM
pra clínica de estética e ele vai ter
essas seguintes sessões, ó. Vai ter um
dashboard, vai ter uma sessão de leads
barraclientes com camban. E aí no meu
cambio contato em atendimento, cliente
ativo e cliente inativo. Cada um vai ter
um cardzinho com nome, telefone e o
status. Aí se você quiser, você pode
colocar, eu vou colocar aqui para você
ver como é, né? Os profissionais daquela
clínica, eh os serviços que são
prestados naquela clínica, a parte de
agendamentos. Aqui eu falei do design,
eu vou colocar aqui um azul para ficar
mais bonito, né? Combinar mais com
clínica. E é isso. Agora eu vou
simplesmente enviar. E aí a gente vai
começar a ver a mágica acontecer. Olha
só, ele já cai aqui para essa outra
interface. Ele já começa a pensar. E
aqui, gente, enquanto ele tá carregando,
a gente tem a parte de integrações, ó,
que você consegue conectar e fazer
integrações diretas, principalmente com
stripe aqui, para você fazer a parte de
pagamento. Ó, ele já tá me respondendo
aqui. Primeiro ele absorve, né, o que a
gente mandou e aí ele já começa a
construir pra gente. Aqui a gente
consegue fazer o upload de alguma
imagem, mandar algum áudio. Aqui mesmo,
ó, ele mesmo já tá dando dicas, né? E aí
a gente consegue ver a parte de trás ele
construindo, ó. E tem a parte de dicas
que a gente pode acompanhando, né? Ó,
ele mesmo fala que as mensagens é bom
que sejam curtas, simples e que a gente
precisa ser específicos nos prompts.
Regra básica de prompt, né, gente? A
gente consegue adicionar aqui imagens
como referência para o design ou algum
recurso que a gente queira. Eu tivesse
já uma interface que eu tivesse gostado,
eu posso simplesmente anexar ela aqui
para ele se basear e aí ele já vai muito
mais direcional, né? Se você entrega um
exemplo para ele. Aqui ele já tá fazendo
toda a parte do código. E aí aqui a
gente tem essas abas, ó, pré visualizar,
como eu falei no começo, pra gente ver
aquele preview antes de publicar, né? A
gente consegue editar o conteúdo,
consegue ver o código e a parte dos
dados, porque ele mesmo já tem o banco
de dados dele aqui na realmente na
plataforma. você não vai precisar ter
que lidar com outro banco de dados,
conectar algum outro banco de dados.
Aqui a gente consegue ver como é que
fica para celular, né, no modo
responsivo e abrir uma prévia, uma aba
mesmo, a gente ver como é que tá o site.
E aí é só a gente aguardar um pouquinho
pra gente conseguir ter isso aqui em
mãos. Uma coisa que eu esqueci de
mostrar é aqui, ó, nesse menuzinho, a
gente consegue ver a quantidade de
créditos que a gente tem e outras opções
também de compartilhamento, né?
Duplicação, de comprar créditos à parte,
fazer upgrade aqui se você quiser. E aí
tem mais esse menu aqui que você
consegue
visualizar. Então, olha só, ele já tá
finalizando aqui a entrega, ó. falou
aqui que tá pronto, mas aí ele fica
finalizando, né, até essa tela aqui
sumir. E aqui a gente consegue ver quais
foram, ó. Acabou de finalizar, teve até
o barulhinho aí. E aqui a gente consegue
ver, ó, o que que foi criado. Ele fez o
dashboard,
fez o camb, gente. Ele ainda fez até a
telazinha inicial, né, pra gente tipo
começar. Agora ele fala como é que a
gente vai fazer para começar. Então
aqui, ó, a gente consegue ver a tela
inicial que ele criou, né, do que que
tem. Se eu colocar aqui e começar agora,
né, a gente vai pra tela de login. Só
que pra gente criar esse primeiro acesso
vai ser diretamente aqui nos dados. Eu
poderia criar uma tela de criar o acesso
e aí automaticamente esses dados vão vir
para cá, que são os dados do CRM que a
gente construiu. Ó, aqui ele fala que é
por aqui que a gente consegue fazer todo
o gerenciamento de dados desse site. Aí
eu boto aqui que entendi, tem a visão de
teste e a visão em tempo real que é
depois que a gente publica. Ó, vamos
botar aqui que eu entendi. E aqui,
gente, olha como essa interface é
amigável, né? Esse banco de dados deles
aqui, bem amigável, bem tranquilo de a
gente usar. Aqui eu vou criar já o meu
acesso por aqui mesmo, esse primeiro
acesso, já que eu não pedi para ele
criar uma tela de login, ele não criou,
né? Aquela tela que a gente cria o nosso
login, mas eu poderia só simplesmente
pedir para ele colocar isso aqui também.
Que a ideia aqui é eu entregar esse CRM
junto com o meu agente A. Então se eu
nem preciso necessariamente criar essa
tela de criação de conta, né? Eu posso
colocar o acesso do meu cliente
diretamente por aqui no users. Então eu
vou fazer isso agora. Vou colocar aqui
um e-mail, posso colocar até um avatar
também, uma imagem, né? Mas eu não vou
colocar, não vou colocar só isso aqui.
Automaticamente ele já gera o ID do
usuário, vendo aqui, ó, e as informações
que a gente precisa. Então, quando eu
volto aqui para pré-visualizar e eu vou
atualizar aqui, né, para ele carregar,
aí boto aqui acessar CRM, vou colocar a
senha e aí vou entrar. Ó,
automaticamente eu já consegui fazer meu
acesso aqui, login realizado. E aí ele
já trouxe o dashboard. com os mesmos
cards que eu pedi, né? Ó, tá vendo que
tem até esse efeitinho quando a gente
move aqui o mouse? Tem a parte de
clientes. Então aqui tem o cambanzinho
que eu pedi de novo contato em
atendimento, cliente ativo e inativo. E
aqui embaixo de profissionais, a gente
pode cadastrar um profissional quais são
os horários de trabalho que ele vai
atender aqui nessa clínica, né? Suposto
que a gente tá construindo. Quais são os
serviços que a clínica vai atender? Aqui
quando a gente clica, a gente coloca
também o nome, a categoria, a gente
consegue colocar a quantidade de tempo
até para isso refletir lá na hora do
agendamento e qual que é o valor para
ele trazer esses dados aqui no
dashboard. Então, ó, vou fechar aqui.
Aqui a gente tem a parte de agendamento.
Olha que bonitinho, né, que ficou essa
tela aqui de agendamentos. Como não tem
nada ainda no banco de dados, não
consegue puxar, né? Aqui tem o
calendáriozinho, ó, que legal, bem
bonitinho, né? Fica tudo centralizado
aqui, direto no banco de dados dele. Aí
aqui a gente consegue ter a
visualização. Como eu tinha pedido que
era fixo esse menu, eu teria que ajeitar
isso aqui para visualizar melhor, né? E
aí é só a gente pedir aqui. Ou a gente
pode alterar também, ó, diretamente.
Quem sabe você não quer esse nome. Vou
até tirar aqui nessa visualização. É
outra opção que a gente consegue editar
diretamente na interface. E aí eu salvo.
Quando eu faço isso, eu já mudo aqui, ó.
Ficou estranho, né? Mas, ó, agora já
ficou legal. E aí você vai alterando,
né, manualmente aqui nessa opção também,
ó. Tá cheio demais. E tudo que você vai
alterando vai vindo para cá. E aí você
consegue desfazer também se você quiser.
Aqui, ó, tem tudo essa parte de texto, a
gente consegue editar. Aqui tem toda a
parte do código que ele criou. Olha só,
tem todos os as pastinhas aqui, os
componentes, ó. A gente consegue
visualizar. Olha só que lá legal aqui
toda a parte aqui dos arquivos para essa
interface, para essa aplicação
funcionar. e o banco de dados. Tudo isso
aqui nessa interface amigável, gente.
Mais uma opção para você. Eu sempre tô
trazendo diversas ferramentas e eu tô
gostando muito aqui porque é muito
simples de você criar qualquer coisa. E
agora vem a parte que é muito
interessante, porque eu quero que a
minha IA interaja com esse sistema e
como o próprio Horizons, ele tem um
banco de dados próprio dele, a gente não
precisa de ferramenta externa para
armazenar os dados. a gente vai
centralizar tudo aqui dentro, porque ele
já fornece isso pra gente. Então, a
gente pode utilizar, eu vou pedir para
ele mesmo gerar uma API para que a minha
IA que tá lá no N8N consiga se comunicar
com ele, entende? Então, a gente vai ter
essa comunicação direta entre o agente
A, que vai ser feito lá no N8N com a
ferramenta através da API. E quem vai
construir essa API pra gente conseguir
se comunicar é o próprio agente aqui do
Horizons. Então, demais, né? Vou pedir o
prompt aqui. Vou colocar o prompt para
ele, ó. Vou voltar aqui paraa
visualização pra gente ficar nessa
telinha. E aqui, ó, vou colocar esse
prompt aqui. Pedir para ele criar uma
API request com os seguintes end points.
E aí aqui você é livre para colocar
quais são as funções, né, os end points
específicos que a SUIA vai ter aqui e
que a forma que você quer se comunicar
com esse sistema que você acabou de
criar. Então aqui eu, a minha IA, eu
quero que ela atualize o status do lead,
por isso que tá assim, ó. Quando ele
fornecer esse end point, a nossa vai
conseguir mover os clientes aqui nessas
colunas do camban. Além disso, eu vou
pedir também para ele melhorar essa
visão aqui do card, para ele colocar uma
tagzinha da gente conseguir colocar tipo
um resuminho da conversa para ir a
conseguir preencher isso. Vou pedir para
ele colocar isso aqui também. Eh, eu vou
pedir para ela paraa gente conseguir
pegar os dados de um lead, caso a gente
queira, e listar todos os leads que a
gente tem aqui dentro. Além disso, eu
vou botar também um aqui que não tá
nesse prompt, mas é pra gente conseguir
criar um novo cliente também. Aqui
embaixo vou botar mais uma coisinha.
Então, olha só, melhorei aqui um pouco
esse prompt. Agora a gente explica para
ele que nós queremos fazer essa conexão
com a gente a que vai est lá no no N8N,
né? E aqui eu explico para ele quais são
os métodos, né? post, eu quero conseguir
criar um usuário, criar na verdade um
cliente aqui dentro do CRM do Camban,
quero conseguir mover ele de status,
quero conseguir também adicionar uma
observação e daí eu vou até adicionar
mais uma coisinha para ele criar, porque
aqui a gente não tem nenhuma opção com
para botar um resuminho do daquela
conversa. Eu vou pedir para ele criar
isso pra gente conseguir adicionar
também a informação. Além disso, eu
quero conseguir fazer um get de todo
mundo ali de algum cliente e listar os
clientes com filtro, né? Vou pedir para
ele colocar e gerar um token também para
eu conseguir me comunicar de maneira
mais segura. Então é só você pedir isso
e ele vai criar aí para você. Além
disso, eu pedi para ele melhorar aqui
essa parte dos do cambiar
aqui esse pronto.
Ó, ele já entendeu o que que ele que a
gente tá pedindo para ele. Então, pedi
só esses cinco end points, a
autenticação com token específico, a
documentação completa e as melhorias no
camban. E aí ele já começa a construir
aqui pra gente. Me diz se isso não é
simples de criar, gente. Muito simples.
E a interface é super amigável para
publicar. Então você vai ver que é mais
fácil, não existe. Então olha só, ele
acabou de finalizar aqui. Então ó, a
gente consegue visualizar aqui toda a
documentação. Gente, isso é demais, né?
Agora a gente consegue se conectar com o
nosso sistema utilizando aqui todos os
dados da documentação que ele mesmo
criou. Aqui ele implementou, ó, os end
points que eu pedi. Colocou um token
fixo que foi gerado. Tentar acessar aqui
o CRM, ó. Vamos ver como é que ficou
agora essa parte. Ó, já tá diferente as
cores. Vou botar aqui então agora sim.
Olha como tá diferente. Criei aqui só
pra gente ver, ó. E olha só, já aparecem
todos os dados. Aqui vai ter o histórico
também, as observações. Muito bom, né?
né? Ó, aí a gente consegue salvar, já
salva automaticamente. Gostei demais
aqui toda a documentação e até ser URL
pra gente só copiar e colar lá dentro do
N, gente. E disse isso daqui não tá
ótimo. Ó, aqui ele já explica como é que
nós vamos fazer para utilizar lá dentro
da N, né? A gente vai colocar o nó de
http request, vai configurar com o
método post, vai colocar aqui o domínio,
ó, e aqui o seu domínio. Eu vou já te
falar sobre isso. E aqui tem o headers,
a gente vai colocar direitinho o código,
token que ele gerou e o Jason com os
nomes certinhos. Então agora o que que a
gente vai fazer? Como a gente precisa se
comunicar com o sistema, a gente vai
publicar ele. Aqui tem a opção de
publicar pra gente poder gerar uma URL
com o domínio que a própria Rostinger
vai gerar. E aí a gente vai conseguir
fazer essas requisições ou a gente
consegue configurar o nosso aqui, né?
Depois que você faz, ó. Então você vem
aqui nesse botão de publicar e
simplesmente ele vai ser publicado. Você
entende como isso é simples, né? Ó, ele
já tá fazendo a publicação e aí pode
demorar alguns segundinhos. Apareceu
esse aviso de pode demorar alguns
minutos, então vamos esperar. Enquanto
ele não tá publicando, eu já vou
construir esse fluxo. Pronto, ele já
gerou aqui com domínio temporário. Então
agora a gente consegue ver o site. Ó,
quando eu clico aqui para abrir a tela,
automaticamente ele já cai aqui. Então a
gente consegue começar. Agora eu tenho
que criar de novo o meu acesso por aqui,
né? Porque lá a gente criou pros dados
de teste e aqui, como eu te mostrei
antes, a gente precisa colocar nessa
opção aqui, ó, de dados em tempo real
pra gente criar um novo acesso. Vou
colocar aqui um registro novo, vou
colocar o mesmo que tava antes.
Prontinho, ó. Criei aqui no usuário de
tempo real. Então, vou voltar aqui pra
tela, ó. E aí eu vou entrar aqui e ó,
consegui fazer o login.
Gente, que simples, né, essa construção,
ó. A gente consegue ver aqui os
clientes, a gente consegue ter tudo isso
aqui e a URL, né? Aqui você consegue ver
que a URL a gente já tem o domínio que a
gente vai usar para fazer essas
requisições aqui dentro do N8N. E se a
gente quiser, a gente consegue
configurar o nosso próprio domínio aqui,
ó. De repente, você já tem um domínio,
você consegue configurar ele aqui de
maneira bem simplificada. Vou abrir
aqui, é o mesmo que tá lá em cima. Vou
copiar esse essa URL. E aí eu vou lá
paraa tela do meu N8N para eu construir
a automação que vai se conectar aqui
dentro. Então bora lá. Então olha só, já
estou aqui com a tela do meu N8N aberto
com a documentação que ele me mandou.
Lembra lá que a gente viu que o próprio
Horizons criou aqui a documentação pra
gente poder se comunicar com a nossa
interface, tá? Que é essa daqui. Que que
eu fiz? A partir disso aqui, eu construí
esse fluxo no N8N. Claro, utilizei a
para me ajudar, né? Se você não viu o
vídeo que eu ensinei como é que faz
isso, vou deixar ele nos cards, caso
você queira acompanhar depois. Mas aqui
é muito simples. Eu peguei a URL do meu
sistema e criei aqui os end points. Do
jeito que eu pedi, né? Ele me deu aqui a
URL, eu coloquei aqui com com a rota, o
end point específico de pegar o ID.
Coloquei aqui a minha, o meu token,
coloquei do jeito que ele falou pra
gente fazer, eu fiz, tá? Eu simplesmente
trouxe para cá pro N8N. E aí, se esse
cliente existe, a gente só pega o o ID
dele e continua conversando, porque a
gente vai mantendo a memória da IA
através desse ID desse cliente. Se ele
não existe ainda no nosso banco de
dados, por isso que eu coloquei esse if,
a gente vai criar esse cliente com o
mesmo endo já mandou para nós, que é
esse daqui de baixo, ó. Quando você for
gerar o seu, ele vai gerar a
documentação específica do seu caso.
Aqui você vai só pegar os dados que ele
colocou e vai trazer para cá, ó. Ele
explica exatamente. Se você não
conseguir entender, você pode
simplesmente conversando aqui com o seu
agente que ele vai te explicando como é
que você constrói. Então aqui ele
explicou, ó. Você vai usar a URL do seu
domínio. Então tá aqui a URL do meu
domínio. No final vai ter o barracate,
ó, igual daqui barra create. Vai colocar
os headers, que são essa parte aqui,
autorization. vai colocar a sua chave,
vai colocar aqui esse content type do
jeito que ele tá falando. Gente, eu só
copiei e colei aqui, ó. No final você
vai colocar o Jason, certinho com o nome
do usuário, vai colocar o telefone e aí
a gente vai pode plugar esse fluxo lá no
nosso WhatsApp. Então aqui é só a parte
do agente, você consegue, você consegue
simplesmente pegar e colocar ele no
WhatsApp e colocar direitinho o
telefone, porque é a ideia, né? que eu
tô te demonstrando a gente direto no
N8N, mas a ideia é que você coloque isso
aqui em alguma rede social e aí no final
vai ter o status do lead e alguma
observação que vai ser gerada depois, ó.
Tá vendo aqui? Pronto, criei esse
cliente e ele vai cair automaticamente
aqui dentro. Depois disso, a gente vai e
tem o nosso agente A, né? Aqui eu
coloquei uma um prompt que ele é
dinâmico, bem simples, tá? Vou rodar
aqui já já e você vai ver como é que ele
funciona. E aqui no final ele tem essas
tools que são tools para o meu agente
usar. Seja se ele quiser buscar algum
cliente, se ele quiser mover no status,
se ele quiser colocar uma observação ou
listar. Coloquei todos os ends que a
gente criou para ele ter acesso e aí, ó,
o próprio agente que vai se comunicar
com a nossa interface. Então, a ideia é
que a gente plugue isso aqui dentro de
alguma rede social, né? Então aqui, ó,
vou mandar um oi. Aqui mandei um oi e aí
a gente consegue ir acompanhando, ó.
Buscou, não encontrou, criou. Aí ela,
ele já me respondeu aqui, ó. Vou
atualizar aqui a página, ó. Já caiu aqui
e não tem nada, só tem o meu ID, que é o
ID da sessão, né? Eu poderia ter
colocado o telefone aqui também, mas, ó,
ele criou automaticamente a mensagem
inicial foi essa. Ele cria um resuminho
da conversa aqui dentro. Você tá vendo
como é legal? E aí eu posso falar, ó, ó,
vou falar isso aqui. Aí você vê que ele
tá buscando, ó. Você vai falando com
ele, ó. Vendo vou falar aqui. Aqui a
gente poderia também eh colocar a parte
do agendamento, né? Porque a gente não
colocou a parte do agend que eu falei,
né? Segundas 9, aí ele já ativou para
mover o cards. Então aqui a gente
consegue clicar e ver, ó. Tem toda o
histórico aqui, cliente que foi criado
automaticamente. Aí tem o nome certinho,
o que que eu queria, o horário que eu
falei e aí, ó, aparece aqui também o
histórico de alterações e o meu agente A
que acionou, tá vendo? Ele mesmo que
coloca a observação. A mesma observação
que tem aqui no card que a gente viu, é
o que tem aqui também no N8N. Então
assim, o meu agente que tá manipulando o
CRM, né? Aqui quando a gente coloca a
tela toda, a gente consegue visualizar
melhor. Eu poderia colocar para ele
atualizar o nome, né? Porque aqui ficou
l WhatsApp. Aqui o interessante é que eu
coloque para ele atualizar o nome
também. É totalmente possível. E gente,
uma infinidade de possibilidades, né?
Aqui eu tô te mostrando o a gente ele
mesmo movendo dentro das colunas do meu
CRM, do meu camb, né? Só que aqui você
também consegue configurar a parte do
agendamento. Eu tô te mostrando uma
tesque de uma das possibilidades que
você consegue fazer. E tudo isso de
maneira super simplificada. Depois que
você coloca, que você cria essa
interface, você só vai alimentando,
melhorando ela de acordo com o que você
vendeu pro seu cliente ou para você
mesmo. Tudo isso o nosso agente A, ele
mesmo, colocou e fez essas alterações
para nós, né? Colocou aqui o resuminho
bonitinho e aí a gente consegue ir
fazendo as melhorias. Mais uma das
possibilidades que você consegue
construir usando essa ferramenta aqui da
Hostinger junto com o agente A que você
for construir. E aí para completar eu
quero te mostrar como é que você
consegue criar um site com único pronto.
Então a gente vai voltar aqui, ó.
Vou criar aqui um novo site pra gente
abrir uma nova sessão. Ó, já vai
aparecer aqui. E aí eu vou colocar o
seguinte. Pronto. Olha só, do mesmo
jeito que a gente criou lá de clínica
estética, eu vou criar aqui um site
institucional e aí ele vai ter essas
sessões aqui, ó. Todas essas sessões
aqui. Vou enviar, gente, para você ver
como é simples. Olha só, aqui, claro,
você colocaria todos os dados da
clínica, o nome, se você quiser
adicionar também os depoimentos, você só
sobe as fotos aqui dos depoimentos,
coloca o endereço certinho aqui, ele vai
gerar tudo fictício, porque eu não dei
dados, eu só falei que eu queria essas
sessões, né? Então, aí ele já vai
construir isso de maneira super rápida.
Olha só, confere só. É uma página assim,
é ainda mais rápido, né? Lá a gente
construiu um CRM, um app, uma aplicação.
Aqui não, aqui é bem mais simplificado,
então é muito mais rápido. Ele já tá
fazendo aqui a construção pra gente, ó.
Olha só, ele finalizou aqui, ó. A gente
consegue ver as imagens que os arquivos
que ele criou, os arquivos que foram
atualizados, a paleta, todas as
sessções. E vamos ver aqui a página.
Olha só que legal. Como eu não coloquei
imagem de nada, ele gerou esses ícones
aqui que representam cada uma dessas
sessões, né? a parte de eu poderia
colocar a foto de uma cliente ou um
print a parte aqui do rodapé. E olha só
como tá bonitinha essa página, gente.
Super rápido. Se eu tivesse uma imagem
de fundo também, ele colocaria aqui no
fundo pra gente. Aqui tem a parte das
sessões, ó. Quando eu seleciono, já vai
direto pras sessões. Olha isso. E a
parte do agendar agora que vai para um
número de WhatsApp direto. A gente
colocou o botão aqui de agendar agora.
Aí ele já vai direto pro WhatsApp que
você configurou, que você colocar ali,
pede para ele atualizar também, né? Aqui
a gente consegue editar, como eu falei,
ó, os conteúdos. Tem coisa que só pode
ser pelo chat, ó. Aqui, ó, a gente só
consegue editar pelo chat. Tem coisa que
não. Aqui você mesmo vai alterando, ó.
Se colocar assim, ó, ele automaticamente
já atualiza, ó. Pronto, atualizou aqui.
Super fácil aqui de você editar os
textos das páginas, né? Aqui tem a parte
do código e aqui eu posso simplesmente
publicar a página. Olha só. E aí demora
alguns segundinhos, né? Porque ele tá
fazendo a publicação.
Prontinho. Ó, aqui com o meu próprio
domínio temporário que da própria
Rostingja, ó, ele já abre aqui na web.
Tá vendo, gente? Tão rápido. Deixa eu
ver se eu consigo reduzir aqui para te
mostrar no mesmo site que ele me deu
aqui, ó. Olha só. Aí você pode colocar,
né, personalizar de acordo com o seu
cliente ou do jeito que você quiser, com
as cores, mas é muito fácil, muito
rápido de você desenvolver. E aqui você
já tem um site, né, institucional ali
responsivo. Vamos ver como é que ele tá
aqui no no celular. Olha só no celular
como tá legal. tá responsivo com o único
prompt, com o único comando aqui a gente
já conseguiu. E para publicar foi
simplesmente selecionar um botão, único
clique. Então esse aqui é o ponto de
entrada. você vai conseguir entregar um
site em poucos minutos praticamente,
além de conseguir construir, por
exemplo, outra solução, como o CRM que
eu te mostrei antes, plugada um agente
A, não necessariamente com o N8N, mas
com qualquer ferramenta de construção de
agente A que você consegue plugar ali,
já que o próprio Horizons criou a API
pra gente conectar aí com qualquer
ferramenta que a gente queira, né? Então
assim, sensacional. aqui já é mais outra
solução que você pode vender, seja para
algum cliente ou para você mesmo
implementar isso aqui. Então eu quero te
ver colocando o conhecimento aqui dessa
aula em prática. Então deixa eu
recapitular o que que a gente fez aqui
hoje. Primeiro, a gente construiu a
interface do CRM do Horizon, tudo via
chat, com refinamentos pontuais. Depois
que a gente montou o a Gente A conectado
ao próprio banco de dados da ferramenta,
porque é o agente que vai decidir o
status do lead e faz essa atualização em
tempo real. Depois a gente teve a
transformação, que é o momento que você
viu tudo isso aqui funcionando. E o
prompt completo que eu usei para
construir a interface, workflow no N8N,
toda essa estrutura do agente estão
disponíveis dentro do meu treinamento e
a Experts. Então, se você quer construir
tudo isso aqui muito mais com suporte e
ainda aprender como estruturar para
vender, é lá que você vai encontrar. O
link tá aqui na descrição para você
conhecer. Agora, se você quiser testar o
Horizon, o link tá aqui na descrição e
fixado nos comentários, ó. E não esquece
de usar o código Talena no Checkout para
garantir o desconto que eu te falei.
Vale muito a pena você testar,
especialmente se você já entrega esses
sistemas para clientes e quer
simplificar a parte da infraestrutura,
como eu te falei. Se você gostou desse
conteúdo, não esquece de já deixar o teu
like, de se inscrever para acompanhar
tudo que ainda tá por vir. E eu te vejo
no próximo.
Hum, hum. Yeah.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
