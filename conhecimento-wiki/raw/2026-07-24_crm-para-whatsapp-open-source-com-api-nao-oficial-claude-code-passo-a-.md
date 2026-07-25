---
tipo: video-youtube
video_id: DiLh9xk670w
titulo: CRM para WhatsApp Open Source com API Não Oficial (Claude Code Passo a Passo)
canal: Thalena Lima - IA & Automações
url: https://youtu.be/DiLh9xk670w
data_publicacao: 20260708
duracao: 39m 24s
views: 20381
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# CRM para WhatsApp Open Source com API Não Oficial (Claude Code Passo a Passo)

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/DiLh9xk670w)
- Publicacao: 20260708
- Duracao: 39m 24s
- Views: 20381

## Descricao (original)
🔥 Link Hostinger com desconto: https://www.hostg.xyz/aff_c?offer_id=6&aff_id=221622&url_id=5961
🎟️ Cupom THALENA → 10% OFF nos planos anuais

➡️ Treinamento Completo IA Experts→ https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video81

🔗 Conheça nossos serviços e implementações → https://lp.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video81

Vídeo Anterior → https://youtu.be/0o0ZVy0qvZo

Neste tutorial, você vai aprender como evoluir um CRM para WhatsApp open source usando Claude Code, API oficial da Meta e API não oficial com conexão via QR Code.

Este vídeo é a continuação do tutorial anterior sobre CRM para WhatsApp gratuito e open source. Agora, a ideia é pegar o mesmo projeto e adicionar uma nova funcionalidade: permitir que o CRM funcione tanto com a API oficial do WhatsApp Business quanto com uma API não oficial, conectada ao WhatsApp Business normal por QR Code.

Você vai ver o processo real de desenvolvimento com IA: como usar Claude Code para analisar o código, planejar a alteração, criar uma implementação em etapas, revisar o que foi feito, testar localmente e depois fazer o deploy profissional na Hostinger.

O que é um CRM para WhatsApp?
Um CRM para WhatsApp é um sistema que centraliza conversas, contatos, atendimento, automações e oportunidades de venda em um só lugar. Ele ajuda empresas, agências e prestadores de serviço a organizar clientes, responder mensagens, acompanhar negociações e criar processos de atendimento pelo WhatsApp.

O que é a API oficial do WhatsApp Business?
A API oficial do WhatsApp Business, também chamada de WhatsApp Business Platform ou Cloud API da Meta, permite integrar o WhatsApp a sistemas externos, CRMs, automações, chatbots e plataformas de atendimento. Ela é indicada para empresas que precisam escalar atendimento, usar webhooks, templates, múltiplos atendentes e integrações profissionais.

O que é uma API não oficial para WhatsApp?
Uma API não oficial para WhatsApp normalmente permite conectar uma conta de WhatsApp via QR Code, de forma parecida com o WhatsApp Web. Ela pode ser útil para testes, protótipos, projetos internos e automações específicas, mas é importante avaliar riscos, limites e regras da plataforma antes de usar em produção.

O que é Claude Code?
Claude Code é uma ferramenta de IA para programação que consegue ler o projeto, entender a estrutura do código, propor um plano de implementação, editar arquivos, revisar mudanças e ajudar a testar funcionalidades. Neste vídeo, eu mostro como usar essa IA como uma espécie de desenvolvedor assistente dentro de um projeto real.

Neste vídeo você vai aprender como:

* Fazer um fork do CRM open source para WhatsApp
* Rodar o projeto localmente no VS Code
* Configurar variáveis de ambiente
* Conectar o banco de dados Supabase
* Usar Claude Code para planejar mudanças no sistema
* Adicionar suporte a uma API não oficial de WhatsApp
* Criar conexão via QR Code
* Manter a API oficial da Meta funcionando no mesmo CRM
* Testar o envio e recebimento de mensagens
* Fazer merge das alterações no GitHub
* Subir o CRM atualizado na Hostinger
* Deixar o sistema online com URL pública
* Transformar um projeto open source em uma solução mais completa para negócios e clientes

Este conteúdo é especialmente útil para quem quer criar soluções com IA, automação, CRM, WhatsApp Business, atendimento automatizado, vendas conversacionais, agentes de IA, n8n, Supabase, GitHub, Node.js e deploy de aplicações web.

─────────────────────────
⏱ CAPÍTULOS
─────────────────────────
00:00 - Introdução
02:06 - Preparação e Instalação
09:53 - Uso do Claude Code para Desenvolvimento 
25:52 - Testes Locais
27:57 - Merge e Deploy
35:29 - Configuração Final e Testes em Produção 

Se você tem agência, presta serviço para empresas ou quer criar produtos digitais com IA, esse tipo de projeto pode virar uma oferta real para clientes que vendem, atendem ou fazem suporte pelo WhatsApp.

WA CRM: https://wacrm.tech/
Repositório do GitHub: https://github.com/ArnasDon/wacrm

Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal para não perder os próximos vídeos
📢Compartilhe com alguém que quer aprender IA do jeito certo: https://youtu.be/DiLh9xk670w
💬 Comenta aqui qual dessas decisões mais abriu sua cabeça.

CONTATOS
📩 Parcerias ➜ contato@thalena.com.br

#CRMWhatsApp #WhatsAppBusiness #Automação

## Transcricao
Existe um CRM de WhatsApp completo com
bate-papo ao vivo, automações, pipeline
de vendas, que é gratuito, open source e
que também funciona conectado a WhatsApp
Business normal. Isso mesmo. Se você já
viu aqui no canal como montar essa mesma
ferramenta com a API oficial, hoje eu
vou te mostrar como evoluir esse projeto
para também aceitar essa conexão via API
não oficial e também te mostrar como é
que você pode fazer qualquer mudança que
você quiser, visto que esse CRM é open
source. Então a gente vai usar o Vibe
Code aqui para fazer essas modificações.
E quem vai escrever esse código não sou
eu, tá? é o Cloud Code. Eu vou te
mostrar o processo real de como que você
tem que pedir para ele fazer essas
alterações, né, o jeito correto. Isso
aqui também é ouro para quem tem
agência, porque é mais uma
funcionalidade pronta para você oferecer
pros teus clientes dentro dessa mesma
solução aqui. E se você ainda não me
conhece, muito prazer, eu me chamo
Talena e aqui no canal eu falo sobre IA
aplicada negócios. Então, se esse tema
te interessa, já se inscreve aqui,
porque toda semana tem conteúdo prático
de como usar inteligência artificial
para gerar resultado de verdade. E olha
só, esse vídeo aqui é o passo dois de um
vídeo que eu já publiquei aqui no canal,
onde eu te mostrei o passo a passo
completo de como clonar, configurar e
colocar no A de graça esse CRM de
WhatsApp que é open source. E aí ele
funciona por padrão com a API oficial.
Então, se você ainda não viu esse passo
a passo, eu vou deixar o link do vídeo
na descrição, porque hoje a gente já vai
pegar exatamente desse mesmo projeto e
vamos evoluir ele. Mas se você já tem o
seu rodando ou só quer entender como é
que o processo funciona, pode ficar
tranquilo que também dá para você
acompanhar. E ó, o vídeo hoje é ainda
mais interessante porque eu vou
construir isso aqui junto com Cloud Code
e você vai poder fazer a mesma coisa.
Então eu vou te mostrar o processo de
verdade, como pedir certo, como revisar
o plano antes de qualquer código ser
escrito, como confirmar o que ficou
funcionando antes de considerar pronto.
Tá demais, gente, muito completo. Então,
bora aqui pra tela do meu computador.
Então, vamos lá. Eu já estou aqui com a
tela do repositório desse CRM open
source. É super importante que você
assista o vídeo anterior desse CRM. que
eu vou deixar ele na descrição. Ele é
pré-requisito para você chegar até aqui,
porque nesse vídeo eu já vou partir do
ponto de que você já tem ele aí no seu
VS Code do jeitinho que eu mostrei.
Mostrei o passo a passo bem detalhado
até a gente chegar no ponto de mudança
realmente do CRM. Mas aqui eu vou fazer
de maneira mais rápida pra gente já
chegar no ponto que eu preciso que você
chegue, tá? Se você precisar, se você
caiu de para-quedas nesse vídeo, assiste
o vídeo um para poder instalar o
repositório e aí sim a gente vai fazer
as alterações utilizando o Cloud Code,
tá? Então aqui a primeira coisa que a
gente vai fazer, a gente vai selecionar
essa opção aqui, ó, que é uma cópia. Nós
vamos fazer uma cópia no nosso
repositório. De novo, você já precisa
ter uma conta no GitHub, já precisa ter
o Node js e algumas outras
ferramentazinhas já instaladas aí no teu
computador para funcionar. assiste o
vídeo que você vai entender, tá? O vídeo
um da série. Aqui eu já criei o meu
fork, tá? Então a gente copia direitinho
essa informação aqui, ó. Vai precisar
dela para instalar essas dependências lá
no nosso VS Code. Já tô aqui com o meu
VS Code aberto. Aí você tem que criar
uma pasta dentro do seu computador e
abrir ela aqui, ó. Você vai criar uma
pasta com o nome do projeto que você
quer. Um exemplo, acabei de criar aqui
essa pastinha, não tem nada dentro. E aí
aqui a gente consegue escolher essa
pasta, ó. Aqui a minha já está
selecionada e eu vou abrir. Pronto.
Agora a gente vai começar a trabalhar
dentro dessa pasta. Primeira coisa que a
gente vai fazer é abrir o terminal.
Então lá em cima a gente tem uma opção.
Você vai abrir o terminal e é pra gente
começar com os comandos de instalação.
Então o primeiro comando que eu vou
colocar aqui é esse aqui, que é
justamente para trazer que tem lá dentro
desse repositório para cá, pra minha
pasta que eu acabei de criar. E aí eu
dou enter, ó. Eí, a gente consegue ver
que está todos aqui já, todos os
arquivos, tudo que a gente precisa já
está aqui. De novo, você precisa estar
com o Node jss instalado no seu
computador, tá? Não esquece. Agora pra
gente instalar essas dependências,
instalar tudo que tá aqui, pra gente
conseguir já começar a mexer no projeto,
começar a visualizar as alterações, a
gente vai colocar esse comando aqui de
npm install. Deu esse errinho aqui
porque eu preciso entrar dentro da
pasta. Você tá vendo que ele está na
pasta acima, né? a gente precisa entrar
na pasta. Então é só você clicar aqui em
cima da pasta que foi criado o seu
projeto, né? Nessa pastinha aqui você
vai, ó, abrir essa opção. Agora sim, a
gente já vai estar dentro da pasta que a
gente precisa para rodar o comando de
Olha só, já tá instalando aqui as
dependências, ó. Então, se atente a
isso, tá? Você precisa estar dentro da
pasta específica. Aqui eu tinha criado
uma pasta maior. Quando eu fiz o fork,
ele criou outra pasta, né, para deixar
tudo muito bem organizado. Então agora
sim, ó, deu certo aqui. E aí, antes da
gente abrir, de fato, a gente precisa
colocar os nossos credenciais, igual eu
mostrei lá no vídeo, porque senão não
vai abrir, vai dar um erro aqui se eu
colocar o comando de fazer ele rodar
local host. Então agora, antes da gente
colocar as informações do nosso banco de
dados, a gente vai colocar esse comando
aqui que ele vai pegar esse arquivo e
vai transformar. Ó, criou-se esse
arquivinho aqui que é o ponto invi
local. Por padrão já vem esse
códigozinho aqui para você colocar as
informações do seu banco de dados, do
seu superbase, as informações aqui da
meta, né? Se você for trabalhar com API
oficial, que não é o nosso caso aqui, a
gente vai trabalhar com API não oficial
e eu vou te mostrar como é que você vai
fazer isso. Então aqui eu vou colocar as
informações do meu super B só pra gente
ver o CRM local roxo aqui, pra gente ver
aquela interface bonitona dele. Então
vou colocar as informações aqui do meu
super base. E aí você vai criar sua
conta no Super Base, caso você ainda não
tenha, vai copiar essa URL aqui, ó, a
URL do projeto. vai voltar aqui, vai
colar aqui e a sua enoki. E aí você vai
ter que voltar lá no sua base, vem aqui
em configurações do projeto, API Kiss,
nessa opção aqui, ó. E é essa daqui que
a gente precisa, essa chave. Então,
copia ela, volta pro projeto e cola ela
aqui. Pronto. Agora que você fez isso,
você vai colocar também a holy, que a
gente precisa disso. Então, volta lá de
novo. É essa daqui de baixo, ó. Você vai
revelar. E aí você não pode mostrar isso
para ninguém, tá? Essas suas senhas aqui
não mostra para ninguém. Tô mostrando
aqui, mas depois na hora que eu terminar
esse vídeo já vou excluir esse projeto.
Vou copiar aqui. Colei aqui a chave.
Agora eu vou salvar o meu projeto. Então
você coloca contrtrl S ou command S. Aí
eu salvei essas alterações que eu
coloquei aqui. Depois que você colocar
as informações aqui da sua conta do
Supase, você vai vir aqui, ó, nessa
opçãozinha do Supas que vão vão ter
todos os SQLs que você vai precisar
executar dentro da sua conta do Supase,
tá? E aí, como é que você vai fazer
isso? Você vai clicar, tá vendo que tem
uma ordem aqui, ó? 1 2 3 4 até a 23. Se
tiver mais no momento que você tiver
fazendo, significa que o próprio criador
do CRM, que é open source, atualizou
também. Então você vai executar todas
que tiver no momento que você tiver
fazendo esse passo a passo aí.
[roncando] E aí você vai copiar isso
aqui, ó, control A e vai voltar na sua
conta do Supase. Você vai vir aqui, ó,
em SQL Editor, vai colar isso aqui e vai
executar dessa forma. Eu não vou
executar aqui porque eu já fiz isso,
então, senão ele vai duplicar a tabela.
Quando você fizer com todos aqueles
comandos, você vai ver que vai criar
várias tabelas aqui na sua conta, ó.
Vai, vão ter várias aqui dentro. Vão ter
várias aqui, ó, em números, tá vendo? E
aí sim você vai voltar pro seu projeto.
Depois que você executar tudo isso aqui,
todos esses SQLs aqui, você vai voltar
no ponto ENV, vai precisar gerar essa
chave de criptografia. Como é que você
faz isso? Vou deixar todos os comandos,
também tem lá no outro vídeo, tá? Você
vai só colar esse comando aqui, ó, que
vai ser gerado um códigozinho, tá vendo?
Você vai copiar esse código, copia ele e
vai colar ele aqui, ó. Pronto. E aí você
vai dar comand S ou contrl S para salvar
tudo que você colocou aqui. Então agora,
pra gente conseguir visualizar ele aqui
no local host, a gente vai colocar o
comando npm. E aí, ó, a gente vai
clicar, tá vendo que ele já Vamos ver se
ele vai abrir aqui ou se vai precisar de
mais alguma configuração. Vou abrir
aqui. Olha só, já abriu aqui, ó. Local
host, tá vendo? A mesma porta que
apareceu lá. E aqui tá até com a
chavezinha que eu tinha criado outra
conta para acessar. E aí você vai ter a
opção de criar sua conta por aqui ou
direto lá no Super Base, que é como eu
vou te mostrar, ó. Você vai vir aqui na
sua conta do Super Base, nessa opção
aqui, ó, authentication. aqui nessa
opção providers e você desativa isso
aqui, ó. Desativa essa opção de
confirmar e-mail. Você vai salvar e aí
você vai voltar novamente lá pro seu.
Vou voltar aqui, vou criar uma conta. E
aí, ó, vou criar a conta. Pronto. Aqui
ele tá falando para checar o e-mail, mas
eu não, a gente desativou isso, né?
Então, a gente pode voltar aqui, ó. Ó, e
ele já entrou na mesma conta que eu
acabei de criar, né? porque a gente
desativou aquela opção. Então aqui a
gente já tem o CRM no A, né, que foi o
ponto que eu te mostrei lá no vídeo. Lá
no vídeo também eu mostro como é que
você configura a PI oficial. Então fui
mais rápido aqui só pra gente chegar
nesse ponto, mas aí se você quiser o
passo a passo, vai lá no outro vídeo.
Então agora sim vai começar a parte boa
aqui que a gente vai começar a trabalhar
com o cloud pra gente poder modificar
esse CRM que atualmente tá só como API
oficial para não oficial também. Então,
a primeira coisa que você vai fazer, e
aí você é livre, totalmente livre para
trabalhar com cloud aqui no chat. E aí
você tem que instalar uma extensãozinha
rapidamente. Aqui nessa opção você busca
cloud fors code. Ó, já vai aparecer essa
extensão aqui. Você vai fazer o login na
sua conta do cloud e aí precisa do plano
pago do cloud, tá? pelo menos o mais
básico, porque senão você não vai
conseguir ter acesso a ele aqui. Então,
precisa ter o plano do cloud pra gente
poder modificar. E aí você é livre
também para testar utilizando o Codex,
né? Eu vou trazer aqui com o cloud, mas
você pode usar o Codex também, tá?
Inclusive eu tenho até ele aqui, ó, o
chatzinho dele. E aí eu fico revesando,
né? A gente vai trabalhar com o cloud
mesmo. E aqui, se você quiser, você
também pode usar no terminal, trabalhar
com ele direto no terminal. Vou fechar
esse monte de coisa aqui, né? Depois que
você já tiver com a sua extensãozinha
instalada, então a gente tá aqui, ó.
Antes de você pedir alguma coisa para
ele, pro comando, volta novamente pra
pasta. Daí você entra aqui no cloud, tá?
No chat, ou direto no terminal. Se você
quiser no terminal, é só você vir aqui
em novo terminal e aí vai abrir essa
telinha aqui, ó. Tá vendo que a gente já
está dentro da pasta do nosso CRM? E
aqui você pode só chamar o cloud, ó, já
vai começar a atuar aqui dentro. Você
bota em confirmar. Pronto, aqui
automaticamente a gente já está dentro.
Vou preferir trabalhar aqui direto no
terminal, mas você pode trabalhar também
com o chat, com a extensão do cloud, tá?
E aqui, ó, a gente já tá aqui dentro.
Então, a primeira coisa que nós vamos
fazer, instalar o plugin chamado
Superpowers, porque esse plugin ele vai
ensinar o Cloud Code a nunca sair
codando do nada, né? Ele primeiro vai
perguntar pra gente, depois ele vai
planejar e só depois ele vai implementar
e testar. E aí, paraa gente instalar
qualquer plugin, você vai botar
barraplugin.
E aí tem até um vídeo, gente, já meu
aqui com vários comandos super úteis
para você trabalhar com o cloud. E aí, o
primeiro que a gente vai colocar aqui,
ó, é esse aqui, que é o plugin oficial
e esse outro aqui, que é o plugin Super
Powers que eu te falei, né? Então agora
a gente vai dar enter. Então o primeiro
que a gente vai colocar para rodar aqui
é esse. Aí você dá enter. Prontinho. E
aí depois esse aqui, ó. Prontinho. Agora
a gente pode apertar aqui em instalar. E
aí ele já tá fazendo a instalação.
Pronto, instalou pra gente. Pra gente
ver se instalou corretamente, a gente
coloca barra plugin. E aqui já vai
aparecer, ó, super powers aqui, ó. Tá
vendo? Então ele já está aqui de volta
aqui com o ESC. E aqui pra gente poder
ter acesso à API não oficial, eu escolhi
trabalhar com uma API que é a WhatsApp.
Então a gente vai entregar a
documentação da WhatsApp aqui pro cloud
e ele vai fazer toda a configuração pra
gente dentro do nosso CRM. Então você
vai ter que ir lá dentro da
documentação. Então já vou abrir aqui a
documentação. Ó, você tá vendo aqui essa
documentação aí? é que a gente tem todas
as especificações, todos os end points
específicos de cada ação. A gente vai
precisar da de criar a instância, que é
essa daqui, ó. A gente vai precisar dela
de verificar em instância também a gente
vai entregar aqui pro cloud poder
acessar o deviar texto e mídia. Então,
baixei aqui, ó. E aí a gente consegue
subir aqui pro próprio cloud.
Então você vem aqui no arrastei aqui o
arquivo que eu baixei. Então antes de eu
pedir qualquer coisa, eu já trouxe essa
documentação pro Cloud poder acessar e
ver como que ele vai usar, porque a
ideia aqui desse vídeo é eu trazer uma
API que eu já uso, que é o WhatsApp, e
ela ficar dentro desse CRM para eu
poder, por exemplo, colocar o meu
WhatsApp Business ali, entende? Então é
assim que a gente vai fazer. E aí você
pode adaptar para qualquer API que você
usa, tá? qualquer API de WhatsApp que
você tá utilizando, você entrega aqui
para ele poder acessar, entender, e aí
você vai fazer exatamente o passo a
passo que a gente tá fazendo aqui. E aí,
junto com isso aqui, eu vou colocar esse
prom aqui, ó. Eu coloquei aqui a
documentação e aí você tá vendo que a
automaticamente ele já acionou a skill
que eu tinha adicionado antes, ó. Tá
vendo? Então, o que que ele fez aqui?
Ele tô pedindo para ele adicionar um
suporte, porque o nosso CRM ele já
trabalha com API oficial, já tá tudo
configurado, né? Só que eu quero
adicionar uma API não oficial com ao meu
sistema. Então eu quero adicionar esse
suporte, é mais uma funcionalidade. E aí
eu pedi para ele me trazer aqui qual
seria o jeito certo de estruturar isso
para ele pegar a mesma lógica que já
existe aqui com a meta que já tá
configurado no CRM e trazer para mim
como a gente pode fazer isso com a API
não oficial utilizando a o WhatsApp, que
é a API que eu já uso aqui, entende?
Então agora ele já tá usando, usou a
skill ali, agora ele já tá, ó,
entendendo como é que está configurado o
API não oficial. Olha só, gente, agora
que ele já analisou tudo aqui, né, ele
começou a me fazer perguntas, tá vendo
que ele não tá simplesmente executando,
ele tá me perguntando. E aí isso vai
acontecer com você também. Você vai
colocar a resposta de acordo com o que
você quer. Aquele tá me perguntando se
eu vou querer ter, por exemplo, a conta
da meta ativa e a dar WhatsApp. Então
sim, eu quero múltiplos simultâneos. Eu
vou dar a segunda opção. Agora ele tá me
perguntando se eu vou utilizar o meu
servidor próprio paraa API da WhatsApp
ou se eu vou usar o próprio deles lá.
Como eu tenho conta paga lá e aí a forma
que a gente tem de conexão, eu vou
colocar isso aqui, ó. Cada usuário final
a tem ou cria a sua própria instância.
Vou escolher essa opção. E aí eu posso
submeter as respostas. Então isso aqui
você tá vendo que ele tá me perguntando
o que a gente precisa, né? E que é o
trabalho de um arquiteto de software,
né? Ele primeiro entende para depois
executar. E aqui ele tá perguntando de
novo, né? Se eu quero colocar ilimitado,
eu vou colocar aqui sim n canais de
qualquer provedor, que aí eu vou poder
adicionar múltiplos ali dentro, que a
ideia é a gente colocar vários canais,
né, infinitos ali, se a gente quiser.
Olha só, ele acabou de me trazer outra
pergunta aqui, perguntando e na verdade
é me informando, né, que dessa forma
ilimitada vai dar mais trabalho para
ele, né, vai ter outra lógica. E aí pra
gente, eu quero ver te mostrar isso
aqui. Então eu vou colocar a segunda
opção, explicar para ele que a gente vai
ter um canal de cada coisa. Então a
gente vai ter um canal da meta e um
canal da não oficial para início, né? E
aí depois a gente pode modificar. Então
isso também é outra possibilidade, né?
Se você não quiser fazer algo mais
complexo de cara, você pode iniciando
por fases. Você escolhe algo mais
simples, testa, vê funcionando, daí você
vai e modifica. também é outra
possibilidade que é o que a gente vai
fazer agora. Então aqui ele tá
trabalhando de novo, ó. Pronto. Aqui ele
tá explicando que na meta a gente
precisa colocar os templates e tudo. Na
WhatsApp não, né? Então na WhatsApp a
gente vai ter aqui o inbox. E aí essa
opção aqui recomendada com relação à
parte de automações, porque já existe
isso dentro do CRM, você mesmo conseguir
construir automações. A gente vai
colocar pra gente poder ter isso também
na meta. Vamos submeter as respostas.
Você entende a construção aqui? Ele tá
me perguntando, tá analisando, tá
entende. É assim que se constrói, gente.
E olha só, aqui ele já trouxe uma
resposta. trouxe como é a forma que ele
identificou pra gente construir. E aqui
eu quero até ver que eu acabei não
vendo, ó. Ele usou o sonetê 5, né, para
fazer isso. Então eu vou colocar o ópus
aqui. Vou colocar aqui pra gente ir para
esse novo modelo. Olha só, coloquei aqui
o outro modelo. E aí de novo, como a
gente trocou de modelo, ele vai ter que
reler de tudo que a gente conversou até
agora, né? E aí pode ser que gaste um
pouquinho mais da sua sessão aí, né?
Então vamos ver como é que ele vai
reagir. Era pra gente ter usado e aí eu
recomendo que você use o ness nessa fase
de planejamento, tá? Ou então você faz
que nem eu aqui, né? Faz aqui com soni e
depois pergunta com opus. Mas o ideal
mesmo é você fazer com ous, porque daí
ele já vai te trazer um plano mais bem
definido, pelo menos um escopo melhor.
Então vamos ver aqui, né, ele
funcionando aqui. Vamos ver como é que
ele vai trazer essa resposta. E olha só,
já tá trazendo aqui a resposta para mim.
Então vamos esperar ele terminar pra
gente ler a conclusão. Então aqui ele já
analisou e aí no final só pediu para eu
confirmar aqui que é realmente dois
canais fixos nesse início, né? Porque aí
vão ter outras questões se a gente for
trabalhar com n canais aqui com API não
oficial. Pronto, ó, já dei aqui as
permissões. Essa vai ser a primeira
fase, né? Depois a gente pode pedir para
ele atualizar e deixar essa
possibilidade da gente colocar múltiplos
canais, né? E aí você vai precisar ter
uma conta que libere esses múltiplos
múltiplas instâncias para você também na
WhatsApp, caso você esteja usando, ou a
Evolution, que é gratuita, né, que você
não tem esse limite. Então aqui ele já
está trabalhando, vai criar aqui. Vamos
esperar ele terminar. Olha, olha só, ele
terminou de escrever aqui, ó. A gente
pode clicar e aí já vai abrir o arquivo
que ele criou, ó. Então aqui tem todo o
resumo do que a gente vai precisar
executar, ó. Tá vendo? Aqui tem todas as
informações. A gente vai precisar
executar algumas alguns SQLs aqui, pelo
que eu tô vendo, né? Aí, ó, você vê
tals, confirma aí, dá uma analisada e
você volta para cá. Ele falou com
relação à minha assinatura, então já vou
falar para ele que eu tenho assinatura.
Então, ó, coloquei esse comando aqui,
vou enviar e aí a gente vai acompanhando
o que que ele vai fazer. Ó, ele já
acionou outra skill aqui. Então, o legal
é isso. Depois que você instala aquele
combo, aquele plugin, ele mesmo vai
acionar as skills que ele precisa,
entende? Então isso é sensacional. Você
não precisa ficar lembrando ele de usar
a skill. Ele já me trouxe aqui a
resposta. Então aqui a gente consegue
command aí, ó, e clicar. E aí já abre
aqui pra gente o plano que ele
desenvolveu. Então tem todo um passo a
passo. Olha o tamanho disso aqui, gente.
Gigantesco plano, né? E aí ele usou a
skill correta também de criar esse
plano. Tá vendo? Então vamos ver o que
ele falou aqui, ó. Então aqui agora que
ele já criou o plano, né? Já li aqui, já
entendi. Ele falou que a gente vai ter
que executar mais um SQL, né? E aí eu
vou pedir ajuda para ele também. Só que
antes disso, como a gente já criou o
plano com, vou usar aqui o sonetê para
implementar. Então, a primeira coisa que
eu vou fazer aqui é mudar o modelo. Vou
selecionar aqui o sonetê,
ó. Pronto, já selecionei o sonetê,
mudei.
Porque aí agora o importante é o plano
ter sido criado com o execução, o modelo
vai simplesmente seguir o que tá no
plano, entende? Por isso que faz sentido
a gente mudar para um modelo mais barato
nesse caso. Aí eu vou pedir para ele me
ajudar aqui nessa tesque. Então, ó, você
vai dando as permissões. E aí, gente,
aqui, ó, ele tá disparando os agentes.
Cada agente tá fazendo uma coisa, ó. E
aí ele vai trazendo. Depois que ele
executa, vem outro para revisar. E aí
tem tudo isso aqui, ó. Aí ele já trouxe
para mim qual é o passo a passo. Agora
que ele terminou essa primeira tesque, a
gente vai ter que executar. Então, ó,
ele tá dando o passo a passo de como é
que a gente tem que fazer. Tenho que
abrir aqui. Aí você clica aqui para
abrir. Ó, já abriu, que é justamente
essa. Então a gente vai copiar tudo
isso. Vamos voltar na nossa conta do
Supasor.
Vem aqui em SQL Editor, volta aqui, cola
e aí você executa ela. Pronto, executei.
Vamos voltar aqui pro projeto, ó. Vamos
ler aqui o que que ele falou. Pronto, ó.
Já rodamos. Ele tá falando pra gente
rodar também essa daqui pra gente ver se
vai retornar as quatro linhas. Então
vamos voltar aqui, ó. Vamos copiar esse
errinho que deu aqui. E aí você vai
conversando, ó. [limpando a garganta]
Copiar isso aqui tudo. Ele tá explicando
como é que eu tenho que fazer. Fiz
errado. Então vamos abrir uma nova
carry. Pronto. 1 2 3 4. Ok. Agora cole
essa numa nova. Pronto, vamos abrir
essa. Pronto, agora deu, deu certo.
Agora a gente só fala assim e aí você
vai seguindo, né? Esse processo demora
um pouco e você tem que ir dando as
permissões e verificando. Ele tá
construindo junto com você, né?
Principalmente nesse caso aqui que a
gente tem que executar os SQL, já que a
gente não deu acesso do nosso superbase
para ele. Se a gente tivesse dado o
acesso, ele mesmo executaria essas
queries lá pra gente, né? também é outra
possibilidade, mas aqui como eu tô
fazendo junto com ele, a gente tem que
ir executando quando ele pede. Olha só,
terminou aqui a segunda tarefa, já
executou tudo, já tá indo pra terceira
tarefa. Bora lá. Ainda tem algumas aqui.
Então, olha só, ele tá terminando aqui a
última tesque, né, que ele tá fazendo a
revisão de todo o código. Foram 13
tesques. E olha só como foi aqui a ordem
disso daqui, né? Desde o começo, quando
a gente tava lá mostrando, ele
simplesmente começava a executar com um
agente a tarefa específica, depois vinha
outro agente para revisar e foi seguindo
isso até o final, ó. Tá vendo aqui?
Começa uma agente implementando uma
tesque. Aí ele vai até o final, depois
vem o que vai revisar. Aí ele finaliza
aí ele vai até o final dessa forma, ó.
Até o final. Até o final. Foi assim. Até
o final. Até o final. E aí, ó, já foi
mais de uma hora aqui. Então, eu vou
esperar ele finalizar. Quando ele
finalizar, eu vou trazer aqui o
resultado pra gente ver e conferir como
é que foi esse final. Então, vamos
esperar ele terminar tudo aqui. A gente
vai conseguir acompanhar todas as
tesques. Olha só. tive que dar uma saída
e aí eu tive que fechar o VS Code, né?
Tive que fechar tudo aqui. E isso até
bom que aconteceu aqui, porque daí você
já sabe que se a sua sessão acabar ou se
você tiver que fechar aqui a tela depois
você pode vir aqui, que foi o meu caso,
né? A minha sessão tinha acabado. Aí
depois eu fechei tudo, voltei aqui no
próprio chat do Cláudio, já vão ter
todas as sessões anteriores que eu tava
conversando, ó. Aí eu já voltei aqui pro
próprio chat ou no terminal também, tá?
você também consegue entrar nessa sessão
via terminal. Aí eu vou continuar aqui
mesmo para você ver. Mas aqui tem todo o
mesmo histórico lá que eu tinha te
mostrado, tá? Aqui, ó. Então, ele foi
até o finalzinho, mas ele não conseguiu
terminar tudo. Então, pedi aqui para ele
conferir a última tesque. Vou até
referenciar aqui, ó. E aí eu vou dar
enter e ele já vai começar em cima do
que ele estava fazendo, né? Vamos ver
como é que ele vai voltar aqui pro chat,
ó. Aproveitar para tomar meu cafezinho
aqui, ó, de soy vibe coder, [risadas]
combinando aqui com o tema do vídeo, né?
Então, olha só, ele já está trazendo
aqui o status de tudo que ele fez, as 12
tesques do plano, todo o passo a passo,
ó, tem aqui o passo a passo que ele
usou. Então, agora que todas as tarefas
desse plano foram completas, né, estão
completas, a gente pode finalizar essa
parte. Então agora a gente vai entrar
aqui no terminal pra gente poder rodar
toda essa atualização, né? Então vou vir
aqui, ó, afastar aqui a telinha e aí eu
vou colocar
esse comando aqui pra gente ver ele
funcionando. Então vou abrir aqui o
local host. Olha só, já abriu aqui.
Então vamos vir aqui em configuração,
vir aqui em WhatsApp e ó, já apareceu
aqui a opção da gente conectar aquele
sumir, ó. Aqui a gente vai pegar a URL
da nossa instância e o token. Então
vamos fazer esse teste, né? Vou lá na
minha instância da Se você não tiver
instância ainda, você cria uma instância
que ela vai ser gerada esses dados aqui,
tanto da URL quanto o token. E aí vai
ser gerado esse QR code. Ó, vou colocar
aqui para gerar um novo QR code. Pronto,
ó, você viu que já mudou aí aqui no meu
celular também já mudou. Aí você salva
essa sessão
e agora ele já, ó, nesse teste que a
gente tá fazendo, tá vendo aqui, ó? tudo
200, ou seja, está funcionando.
Então aqui, ó, eu fiz a conexão,
funcionou certinho, só que eu mandei uma
mensagem pro número que eu conectei aqui
e não apareceu aqui no inbox, né, na
bazinha de mensagens. Então eu tô
pedindo aqui para ele verificar isso,
né? Ele tá investigando o código para
ver como é que a gente pode ajustar. E
aí se tiver algum bug na tua conexão
aqui no teu projeto, tu vai perguntando
para ele até ele resolver. Então aqui
ele tá me fazendo as perguntas para
identificar. Ele pediu para eu olhar o
banco de dados. Aqui eu olhei, não tem
nem em contatos, não chegou nada. E
também não tem aqui em mensagens, né? Na
tabela de mensagens também não tem.
Então a gente volta aqui e fala que não
tem, né? Acredito que por isso que não
apareceu, né? Deve ser alguma coisinha
ali na conexão com o banco de dados,
porque lembra que isso sempre vai
refletir, aquela interface, ela vai
refletir o que tá no banco de dados. E
aí essa conexão ela precisa est bem
estruturada, né? Aqui eu falei que a
gente fez o teste local host e aí ele já
tá investigando. Ó, aqui ele me
explicou, não apareceu a mensagem porque
a gente tá rodando o local host, mas
agora quando a gente for colocar isso no
A, que é o nosso próximo passo, né? A
gente colocar no A todas essas
alterações que nós fizemos, a gente vai
ter uma URL certinho onde ele vai
conseguir fazer o apontamento
corretamente. Então é isso que a gente
vai fazer agora. a gente vai subir toda
essa estrutura que ele construiu, porque
nós testamos aqui local host e
funcionou, só precisa ajustar essa
questão do banco de dados, né? E aí a
gente vai subir para fazer o teste.
Antes da gente subir na hostinge, a
gente vai precisar atualizar esse
repositório, né? Então, a gente fez
várias alterações no projeto e aí a
gente quer subir essas atualizações
dentro do repositório, porque o passo
que a gente vai seguir para o deploy
depois, a gente vai precisar que o
repositório que nós mudamos esteja
atualizado. Então, para isso, eu vou dar
esse comando aqui para ele, ó, explicar
que os testes passaram, que ele pode
seguir com a outra skill para fazer esse
merge lá no nosso repositório. Então,
vou dar o OK aqui. Prontinho. Agora ele
já me trouxe aqui essa questão, né?
Então, lembra que lá no início eu
expliquei que o cloud, né, ele criou uma
brand, é como se fosse uma cópia
paralela ao projeto pra gente poder
mexer sem arriscar quebrar no que já
estava funcionando antes, né? E aí a
gente construiu essa funcionalidade
inteira aqui dentro dessa cópia que nós
criamos. Agora que a gente já testou, já
validou, chegou a hora de juntar essa
cópia de volta ao projeto original,
entendeu? o projeto principal lá. E isso
é o que a gente chama de merge. Por isso
que ele tá perguntando aqui, ó. É
literalmente pegar tudo que a gente fez
aqui na brand separada e vai unificar na
Mil, que é esse projeto principal ali
que a gente estava trabalhando antes, a
versão oficial desse projeto, entende?
Que é a que a gente vai efetivamente
colocar no A. E aqui ele me deu quatro
opções, né? Eu vou escolher essa
primeira aqui, porque eu estou
trabalhando sozinha nesse projeto, não
tem ninguém para eu compartilhar isso
também.
Então vai ser muito mais rápido para ele
essa primeira opção. Então eu já vou
dizer para ele fazer aqui colocar e tudo
isso que a gente fez no projeto
principal, que é essa opção aqui. E aí a
gente dá o yes aqui, ó, pra gente poder
fazer o deploy corretamente, né? Depois
que ele já fizer isso para nós. E aí, ó,
gente, vocês estão vendo que tá
acontecendo várias coisinhas aqui do
lado, porque ele tá rodando e tá fazendo
o que precisa fazer no projeto.
Prontinho, ó. Então, aqui ele já
conseguiu fazer. Então aqui eu tenho a
opção de fazer o push, né, de colocar
isso no ar lá no terminal ou por aqui.
Como a gente já tá fazendo por aqui, eu
já vou pedir para ele fazer, tá? Mas aí
se você quiser, você pode dar o
comandozinho de fazer esse push lá no
terminal. Então pedi para ele fazer aqui
para mim. Para você conferir se deu
certo, você vai entrar no mesmo link do
seu repositório aí e vai ver que já tem
aqui essa opção, ó. Então, ó, eu fiz
tudo isso aqui, tá vendo? subir todas as
alterações que a gente construiu lá
dentro do cloud. Olha só, aqui no menos
a gente consegue ver tudo que foi
alterado aqui, ó. Todas as coisas que eu
subi, que eu fiz o push, né? Agora que a
gente fez isso, então pra gente subir
esse CRM, né? pra gente colocar toda
essa estrutura na internet pra gente
conseguir exibir uma URL pública, nós
vamos fazer esse deploy dessa estrutura
utilizando aqui a hospedagem de
aplicação web da Hostinger, que é a
plataforma que eu recomendo para vocês,
gente. Super intuitiva, super fácil de
você construir projetos. E eu vou te
mostrar o passo a passo. Você vai clicar
no link que tá aqui na descrição desse
vídeo, primeiro link aí da descrição, e
aí você vai cair numa tela parecida com
essa aqui, tá? Se você não cair numa
tela parecida, você vai clicar no link e
vai vir aqui nessa opção, ó, serviços
aplicativos Node js essa opção aqui,
porque já é um plano específico para
esse tipo de projeto, né? Você vai
descer aqui e aqui tem toda a explicação
que a gente vai ver aqui durante o
restante do vídeo, né? Mas aqui você
pode escolher uma dessas opções aqui de
plano, né? Nessa opção, olha como é
barato, gente. Vale super a pena. você
vai ter o seu domínio lá profissional,
você vai poder construir até 50 sites e
cinco aplicação Node JS, que são essas
que a gente fez aqui. Então assim, você
vai ver que é muito simples, ainda tem
e-mail profissional que você pode
colocar, então vale super a pena. Você
vai escolher qual é o plano que você
quer, seja esse aqui mais em conta ou
esse outro que tem muito mais opções,
né? muito um limite muito maior de tudo.
Você vai aqui em escolher plano. Aí você
vai cair nessa tela alena, você vai vir
aqui e vai aplicar. Quando você aplica,
você ainda garante 10% na sua assinatura
completa. Ela vai ficar mais barata
ainda nos planos anuais, tá? Que são
esses planos aqui, de 12 meses até 48
meses. Então, gente, ficam as
informações de pagamento e pronto. Você
vai cair numa tela parecida com essa.
Vou te mostrar agora, né? Você vai cair
nessa tela inicial aqui e você vem em
sites e aqui vai ter a opção de você
colocar um novo site. Tá vendo aqui, ó?
Adicionar um site. Você clica aqui e
aqui já vai aparecer essa opção aqui, ó,
web. Tá vendo? Então você volta,
seleciona, escolhe aqui o domínio que
você quer, domínio gráfico. Ou a gente
pode usar um domínio também temporário
aqui, ó. Mas a gente vai escolher esse
aqui que já tem. Aqui você vai escolher
a localização mais próxima de onde você
está. E aqui a gente vai fazer a
importação do nosso git, né? Porque
agora que tá tudo atualizado lá no nosso
repositório, a gente pode subir a
atualização para cá. Então aqui eu venho
em continuar, já tá conectada na minha
conta, ó. Você atualiza aqui o que
precisa e aí você vai buscar o
repositório. Você seleciona ele em
implantar aqui, ó. Prontinho. Agora que
ele já pegou aqui todas as informações
do nosso repositório, a gente vai ter
que configurar as variáveis de ambiente,
porque lembra que eu te expliquei que o
ponto ENV local aqui, ele é ignorado
quando a gente sobe. E aí a gente
precisa colocar essas variáveis de
ambiente aqui dentro para ter toda a
segurança que a gente precisa para subir
essa aplicação. Então aqui a gente vai
colocar as informações que estão no
nosso ponto INV. No nosso projeto a
gente tem todas as informações aqui do
ponto INV local. A gente tá dentro do
ponto ENV. Olha só, a gente tá dentro do
ENV. A gente vai pegar essas variáveis
aqui, ó, as variáveis do super base.
Então, você vai ter que pegar tudo isso
aqui, vai vir aqui em adicionar e vai
colocar, ó, o nome, ó, e o valor. Aí
você vai pegar tudo isso, o nome e o
valor de tudo. Volta, coloca. Vou
colocar todas aqui, tá? Olha só, já
terminei de colocar as variáveis aqui.
Eu não coloquei a da meta porque a gente
não tá usando, tá? Mas se você for usar
a pay oficial da meta aqui dentro, você
vai ter que fazer que nem o vídeo
anterior, tá? Colocar tudo direitinho,
todas essas que estão aqui, tá bom? Como
a gente não vai usar, eu não coloquei
aqui, ó, não precisa colocar. E aí você
vem aqui em finalizar e aí você vem
nessa opção aqui de implantar. E aí tem
esperar alguns segundinhos.
É rápido, tá? Não costuma demorar. E
assim que terminar eu mostro para você.
Ó, aqui aparece o avisozinho que tá
sendo construída.
E aí a gente precisa esperar. Olha só,
já apareceu o avisozinho dizendo que deu
certo. Então nosso app, gente, como é
simples, né? Utilizando a rochinger,
depois que a gente faz todo o processo
pra gente subir aqui, é muito simples.
Daí você entra aqui, ó, e ó, na mesma
URL que a gente colocou, configurou lá,
né? Claro que aqui nesse plano você vai
ter a sua, você vai poder configurar
qual é o domínio que você quer. Eu vou
colocar aqui. Aí eu já entrei aqui, ó.
Tá vendo? Agora a gente vai fazer a
configuração de fato da API da WhatsApp,
né? Porque naquela hora a gente
conectou, só que como nós estávamos
local host, aconteceu aquilo. Então vou
vir aqui aqui em configurações.
WhatsApp, código QR Code aqui. Agora eu
vou colocar as informações da WhatsApp.
Então você vai lá na sua WhatsApp e aí
se você não tiver instância você cria
uma instância, tá? Pega os dados e cola
lá. Então vou pegar aqui, ó, a URL do
servidor e a da o token também. Coloquei
aqui e vou dar conectar. Pronto, já está
conectado. Como eu já tinha conectado
naquela hora o QR Code e na minha
WhatsApp eu já conectei também, não tem
problema. Se for a primeira vez que você
for conectar, já vai aparecer o Qcode
para você, tá? Então agora vamos fazer o
teste, né? Então, olha só, acabei de
mandar uma mensagem aqui para esse
número e já apareceu aqui para mim, ó.
Tá vendo? Oi aqui. Olha só, limpiei aqui
a conversa. Eu vou mandar um oi aqui.
Automaticamente a minha mensagem já
aparece aqui, ó. Tá vendo? Então, agora
sim tá funcionando o nosso chat, né? A
gente consegue visualizar as mensagens,
consegue se comunicar com o nosso
usuário por aqui também. E se a gente
responder de lá também funciona, tá? tá
funcionando 100% aqui. Isso aqui dentro
da configuração que a gente fez lá na
própria Hostinger, né? E o legal deles é
que a gente consegue ter todo o controle
aqui, ó, do site, consegue ver o
desempenho, né? Consegue ter todos esses
dados aqui no próprio painel da
Rochinger. E agora a gente consegue, por
exemplo, continuar aqui na construção do
nosso CRM, né? seja na parte de
automação, de você construir as
automações, construir aqui os followups.
Então, a gente pode construir, por
exemplo, depois de tanto tempo, se a
pessoa não responder, você enviar outra
mensagem para ela ou aqui a parte do
broadcast, né, que vai funcionar mais
para quem trabalha com a payal, né?
Então aqui essa aba aqui ela vale mais
para quem trabalha com os templates da
meta e a parte dos flows também, né, que
a gente pode fazer os testes aí. Mas a
ideia desse vídeo aqui foi para te
mostrar como que você pode modificar
esse projeto também, colocar
funcionalidades que você quiser
utilizando Cloud Code ou outra IA, né?
Um projeto que é open source, que já
está funcionando. Então, por que não
adicionar mais funções, funções que você
precisa nele, né? Então agora eu quero
ver você implementando aí as alterações
que você quiser dentro desse projeto.
Então, recapitulando toda essa aula de
hoje, a gente pegou aquele mesmo CRM de
WhatsApp do vídeo anterior e evoluímos
ele com o cloud Code. Agora ele aceita
tanto a PI oficial da meta quanto a PI
não oficial com a conexão via QR Code.
Além disso, a gente ainda colocou um
seletor de idiomas direto na interface.
E mais importante que o resultado é que
eu te mostrei o processo de como é que
você descreve e deixa o Cloud Code
montar um plano antes de codar e só
depois ele vai partir pra implementação
com teste. E olha só, todo esse passo a
passo que eu fiz aqui durante o vídeo,
eu vou deixar em um material completo em
PDF lá dentro do meu treinamento. Então
se você é meu aluno, corre lá na área de
membros porque já tá disponível para
você. E ó, não esquece de colocar o meu
cupom Talena para aproveitar o desconto
da Roostinger e ainda colaborar assim
com o canal. E se esse conteúdo te
ajudou, deixa o teu like aqui, se
inscreve, porque toda semana eu trago um
jeito novo de você aplicar e aí
automação no teu negócio. E eu te vejo
no próximo.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
