---
tipo: video-youtube
video_id: J61xQsGgfFw
titulo: Como Uso o MCP do N8N com Claude e Codex para Entregar Projetos Reais de Clientes
canal: Thalena Lima - IA & Automações
url: https://youtu.be/J61xQsGgfFw
data_publicacao: 20260506
duracao: 23m 16s
views: 2261
tags: []
criado_em: 2026-07-24
processado_para_wiki: false
---

# Como Uso o MCP do N8N com Claude e Codex para Entregar Projetos Reais de Clientes

## Metadados
- Canal: Thalena Lima - IA & Automações
- URL: [assistir](https://youtu.be/J61xQsGgfFw)
- Publicacao: 20260506
- Duracao: 23m 16s
- Views: 2261

## Descricao (original)
Como Uso o MCP do N8N com Claude e Codex para Entregar Projetos Reais de Clientes

➡️ Conheça meu Treinamento Completo: https://iaexperts.thalena.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video66

➡️ Acesse meus materiais gratuitos: https://academy.lenaai.com.br/?utm_source=organico&utm_medium=youtube&utm_campaign=videos&utm_term=descricao&utm_content=video66

Agora ele não só sugere: ele age. Cria workflows, edita nodes, valida fluxos e acessa execuções direto pelo chat.

Nesse vídeo eu mostro como estou usando isso em dois cenários reais:
✅ Editando um template de agente para clínica direto no app do Claude
✅ Construindo um projeto completo de cliente com Codex + MCP N8N + Supabase no VS Code

O que você vai aprender:
→ Como conectar o N8N no app do Claude (conector oficial)
→ Como criar um workflow do zero via chat
→ Como editar um template já validado sem abrir o N8N
→ Como usei o Codex no VS Code com MCP do N8N e Supabase num projeto real de cliente

⚠️ Importante: você precisa ter o app do Claude instalado na sua máquina - a opção de conectores ainda não aparece na interface web.


⏱ Capítulos:
00:00 - Atualização do MCP
02:51 - Configuração da Conexão
04:49 - Criação de Workflow do Zero
08:41 - Edição de Templates Existentes
18:06 - Projeto Real com Codex e Supabase

---

🔔 Se inscreve no canal para continuar aprendendo IA aplicada na prática - toda semana tem vídeo novo.

---

📢 Gostou do conteúdo?
👍 Deixa o like e se inscreve no canal pra não perder os próximos tutoriais!
📩 Compartilhe com alguém que precisa desse vídeo: https://youtu.be/J61xQsGgfFw
👀 Me siga no instagram: https://www.instagram.com/thalena.lima/
📅 Toda semana tem vídeo novo sobre IA, automação e produtividade com Inteligência Artificial.

CONTATOS📩 Parcerias ➜ contato@thalena.com.br

## Transcricao
O Cloud acabou de ganhar um conector
oficial do N8N e junto a isso, o MCP do
N8N teve uma atualização gigantesca.
Agora ele não só sugere, ele age, ele
vai conseguir criar workflows, editar
nodes, validar fluxos e ainda checar
execuções. Tudo isso com o MCP oficial
do N8. E o que que isso muda na prática,
né? Com um conhecimento básico de N8N,
você já vai conseguir desenvolver
automações complexas com muito mais
rapidez do que parece. Então você vai
direcionar e a IA vai executar dentro do
seu N8N. E eu tô usando aqui isso de
duas formas, para melhorar os fluxos que
eu já tenho rodando em produção e para
construir soluções novas do zero com
muito mais velocidade. Gente, eu
entreguei um projeto gigantesco que eu
vou mostrar aqui nesse vídeo com poucos
dias só utilizando esse MCP Nativo. E
nesse vídeo eu vou te mostrar como
conectar o N8N no app do cloud, criar um
fluxo rápido, editar um template que eu
uso nos meus projetos e ainda vou te
mostrar como é que isso aqui funcionou
num projeto real de cliente. Então, fica
até o final para acompanhar tudo. Já
estou aqui com a tela do meu computador
aberto na documentação do N8N. Então,
como eu te falei no começo, eles tiveram
uma atualização no MCP deles, então
agora ficou muito melhor. Antes o MCP do
N8N já existia, só que antes ele era
mais limitado. Agora ele tem funções
muito mais complexas, né? a gente
consegue criar workflows, editar algum
node específico. Então, de repente, você
quer mudar o prompt do seu agente de um
template que você já tem, igual a gente
vai fazer aqui, você vai conseguir pedir
para ele analisar aquele fluxo e dizer
onde é que você tem que alterar, se der
algum erro, enfim, ele consegue até
acessar também as execuções, tá? Muito
complexo. E isso significa que qualquer
agente a compatível com o NCP vai
conseguir agir dentro do seu N8N de
verdade, né? Não só te dar sugestões,
mas executar. Ou seja, você vai
conseguir conectar o MCP do seu NN
dentro, por exemplo, do cloud code, né,
em alguma IDE que você esteja usando o
cloud Code ou direto lá no terminal ou
de repente você quer colocar lá dentro
do antigravity, você vai conseguir fazer
o mesmo passo a passo que a gente vai
fazer aqui em qualquer assistente de A
que você quiser. Eu vou te mostrar
também no finalzinho como eu usei no
Codex, muito bom também. Tô utilizando
bastante ele lá no meu PS Code, né, com
Codex, porque o limite do Codex tá
excelente. Então já fica a dica se você
ainda não tá usando Codex. E aí eu vou
começar te mostrando como você vai usar
no app do cloud, não é naquela interface
web do cloud, tá? É no app, só no app
que tá aparecendo essa opção de
conectores que a gente vai já ver aqui.
E agora aparece a opção do N8N oficial,
né? A gente vai conseguir fazer essa
conexão oficial lá dentro. Então é muito
simples. Vou te mostrar isso na prática.
Vou deixar também esse link aqui, caso
você queira acessar até para ver como é
que tá funcionando agora todos os
detalhes dessa nova atualização do N8N
aqui do NCP. Então aqui, ó, já estou com
a tela do meu cloud aberto, do app e do
cloud, tá? Então você tem que baixar o
aplicativo do cloud e colocar na sua
máquina, não é na interface, porque
ainda não aparece. Então aqui tá a minha
tela, tá? Do do app do cloud. Você vai
vir e vai selecionar essa opção aqui de
customizer. Aí você vê que já aparece
aqui para mim, ó, conectores. Você vai
clicar aqui em conectores. E aqui você
vai buscar quais são esses conectores.
Você vai vir aqui em mais, ó, navegar
conectores e vai buscar N8N. E aí tem
vários outros aqui, tá, gente? Você vai
adicionar aqui, ó. E aqui ele já pede
qual é a URL do seu servidor. Então, a
gente vai aqui pra tela do nosso N8N. Ó,
tô aqui com a tela do N8N. Eu vou vir
aqui embaixo na opção de configurações e
aí tem essa opção aqui do MCP, tá vendo?
E aqui eu tô na última versão. E aí a
gente vem aqui em habilitar acesso. Aqui
automaticamente ele já abre a URL do meu
servidor. Então é essa URL que a gente
vai colocar lá. Vou copiar aqui. Voltei
aqui pra tela do cloud e aí a gente cola
aqui, ó. E aí a gente vem continuar.
Automaticamente ele já abre essa opção
pra gente poder fazer a confirmação
dessa conexão. Ó, tem que esperar um
pouquinho. Olha só, já aparece aqui essa
opção de eu confirmar esse acesso, ó.
Pronto, sucesso. Aí ele já carrega
automaticamente aqui para nós a página e
a gente consegue voltar pro aplicativo.
Quando a gente volta, você vai ver que
ele já está aqui. E aqui tem todas as
ferramentas que ele consegue fazer. E
aqui tudo ele vai pedir aprovação, mas
você pode botar aqui para sempre
permitir, ó. E daí ele já vai fazer tudo
para você sem você precisar ficar
confirmando, né? E aí a IA vai ter muito
mais desempenho dessa forma. Mas é claro
que você tem que ler ali que ele tá
falando, tá? Então agora sim tá tudo OK.
Agora a gente vai voltar aqui pra tela
de chat. E agora ele já tá conectado. Ó,
como é que a gente vê se deu certo, né?
Aqui você vem na aba de conexão aqui
MCP, vão ter os workflows e vai ter essa
opção aqui, ó, de clientes conectados.
Então aqui o cloud já tá OK.
Então aqui, ó, já voltei a minha tela
para o chat e agora a gente vai
realmente testar, né? Vou colocar esse
comando aqui, ó. Vou pedir para ele
criar um workflow chamado agente
agendamento V0 aqui para ele receber via
web hook e vai passar por um agente que
entende a intenção do usuário, né? Eu
pedi para ele colocar aqui um
modelozinho 4.1 mini e a gente vai ver o
funcionamento dele. Vou colocar o sonet.
Eles recomendam que você use o Opus, mas
o Opus gasta demais. Então, para maior
dos casos, a gente consegue utilizando o
próprio Sony. E, ó, ele já tá validando
o workflow, tá vendo, ó? Clica aqui, a
gente consegue ver tudo que ele tá
fazendo, ó. Ele já tá fazendo essa
criação do fluxo na minha conta do na
hora que ele terminar aqui, a gente vai
abrir a conta, você vai ver que ele vai
criar. Então, que ele tá fazendo tudo
isso, tudo que a gente pediu aqui com
único prompt, né? E isso no próprio chat
do Cloud, gente, que demais, né? Muito
fácil. Você viu a integração aí
rapidinho a gente conseguiu fazer, tá
muito mais simplificado. Agora, em vez
de você subir o seu Jon aqui,
simplesmente você pede para ele acessar
qual é o fluxo que você quer que ele
mude ou que que ele crie, né? Se for do
zero, igual a gente tá fazendo aqui.
Então, facilitou demais. A gente colocou
a permissão para ele criar do zero. Ele
não tá me perguntando, mas ainda assim
ele perguntou. Ó, vou botar aqui que eu
permito. Ó, ele acabou de criar, né? Ele
não conseguiu ver essa questão do
modelo. Acho que é porque eu botei
errado aqui, mas a gente vai ver já já
lá no N8N. Aqui ele já deixa até o
linkzinho paraa gente colocar e explica
a estrutura dos nós, né? Claro que
quando a gente for entrar aqui, eu vou
já te mostrar, ó. Quando eu abro aqui o
link que ele deu, o fluxo está pronto. A
gente vai precisar colocar aqui a nossa
credencial, ó. Mas ele não conseguiu
colocar do jeito certo, tá vendo? Então
você vem aqui, aí você reseta nessa
opção aqui que eu fiz e escolhe o modelo
manual. Deixa eu só selecionar uma conta
aqui que tenha créditos, ó. Aí aqui você
escolhe qual o modelo, tá? De acordo com
a sua credencial. Pronto, agora já tá
com o modelo OK. Mas aqui ele tá
aguardando, né? A gente pediu pedi para
ele criar como se ele fosse receber de
um web hook e aí você vai conseguir
conectar isso aqui em qualquer API que
você tiver utilizando. Aqui ele já vai
fazer a questão dos horários disponíveis
com base no horário atual. E aqui no
prompt, vamos ver aqui como é que ele
colocou. Ele criou um promitzinho bem
padrão, bem simples, porque eu não
trouxe, né, muitas variáveis aqui para
ele fazer. Então, ele fez algo bem
padrão. Colocou aqui um nó de código
para processar, ajeitar, né, como é que
essa resposta vai chegar e vai retornar
conversa aqui com o web hook de response
para o web hook. Então ele seguiu a
mesma estrutura que eu trouxe. Ele não
colocou nada de memória porque no prompt
que eu botei, né, gente, não tinha nada,
só algo bem simples, nada muito
sofisticado, mas tá aqui pra gente
testar. Ele trouxe aqui um modelozinho
de seu URL. Então vou te mostrar como é
que a gente faz, ó. Vou copiar aqui e aí
eu já vou voltar aqui na minha conta.
Vou aqui em http. Pronto. Pra gente
fazer uma requisição, ó, o nozinho aqui.
Vou abrir e aqui mesmo eu vou importar
esse seu RL que ele me deu, ó. Aqui a
gente pode colenido.
Eu vou acionar isso. Eu tenho que
publicar, né? Publiquei o fluxo. E aqui
eu consigo na hora que eu acionar isso
aqui, ó, acionei e ele já recebeu. Então
aqui na execução a gente consegue ver,
ó, aqui foi a execução que eu acionei e
aí chegou no web hook, né? Aí passou
direitinho, ó. Ele já listou com a
mensagem. o agente processou agendado,
só que aqui eu teria que colocar as
ferramentas, as tools do Google, né? Se
eu quiser fazer integração nativa com o
Google, por exemplo. Mas funcionou, tá
funcionando certinho. Foi a mesma
resposta aqui que a gente teve, ó, a
resposta certinho. Então, um fluxo
simples, criado aqui com poucos
comandos. Agora eu quero te mostrar algo
muito mais efetivo na prática, né, que é
a gente realmente editar um workflow que
nós já temos e é realmente uma parte que
vai mudar a entrega de fato do que você
tá construindo, né? Eu tenho vários
templates validados. Se você acompanha o
canal, você já viu aí inúmeros templates
meus do N8N e eu disponibilizo esses
templates pros meus alunos, né?
Inclusive, se você é aluno, corre no
curso que sempre eu tô atualizando,
trazendo novos templates. E agora, em
vez da gente começar do zero, por
exemplo, a editar esses templates, a
gente simplesmente vai subir o template
aqui e vai pedir pro Cláudio atualizar
do jeito que a gente quer. Então, olha
só como isso daqui aumenta a velocidade,
né? A gente vai conseguir fazer as
alterações com muito mais rapidez,
principalmente se você já tem templates
validados aí na tua estrutura. Então
você vai colocar o template e vai pedir
para ir alterar o que você quiser. Eu
vou voltar aqui
e eu vou abrir essa esse agente aqui, ó.
Esse aqui é um exemplo de agente que nós
temos do fluxo de console, que é uma
forma que eu construo os meus fluxos no
N8N. Eu sempre separo o fluxo de entrada
e saída do fluxo de console e o fluxo de
console é o responsável pelo agente em
si. Então agora o que que eu vou fazer?
Eu vou pedir pro meu agente fazer essa
alteração aqui. Então vou abrir, ó. Tô
aqui com esse template. Eu vou pedir
para ele mudar esse template que eu já
subi. Então vou voltar aqui no cloud, ó,
e vou colocar esse comando. Vendo aqui,
ó. Tem um workflow chamado a gente para
clínica, que foi o que eu te mostrei.
Ele é um sistema de multiaendamento e
tudo. Expliquei para ele um pouquinho.
Eu vou dizer que eu quero que ele troque
as informações, né? Eu vou colocar o
nome da clínica do meu cliente fictício
aqui que a gente tá testando, o nome da
assistente virtual que não é Laura, nem
nesse nome aqui da clínica. A
especialidade vão ser essas, os
procedimentos vão mudar. Então,
basicamente, eu quero que ele atualize o
nome da clínica, o nome da assistente e
o catálogo de procedimentos. No final,
eu peço para ele trazer uma validação do
fluxo. Quando a gente volta aqui, eu vou
te mostrar rapidamente, só para você
ver, o nome aqui tá Sofia e o nome da
clínica é Lene, então o fluxo tá assim,
né? Agora a gente vou pedir para ele e
vou enviar esse comando pra gente ver se
ele vai mudar. Então vou enviar aqui, ó.
Aí ele faz essa busca de qual é o fluxo
para encontrar esse fluxo que eu falei,
ó. Vou permitir aqui.
Aí ele tá fazendo a leitura do workflow.
Então, de repente, você não quer que a
Suiá faça um agendamento, você quer que
a SUIA só atenda, só indica qual é o
fluxo aqui e vai pedindo as alterações,
sabe? Quando você tiver fazendo os
testes e não der certo, der algum erro,
você pode pedir para ele, ó, veja a
última execução que eu fiz e me e
corrija esse erro que não tá
funcionando. Ele vai lá e explica para
você o que que é o erro, como é que você
pode corrigir super rápido aqui dentro
do cloud mesmo, no próprio chat. Ah,
sim. Aqui é porque esse workflow ele não
tá com o MCP ativado, ó. Vai dar esse
erro. Então, o que que eu vou fazer? Eu
vou pausar aqui, senão ele vai construir
muita coisa. Vamos ver se ele vai
conseguir, né? Porque eu tinha que ter
ativado a opção do MCP para esse fluxo e
eu acho que não tava ativado. Vou voltar
aqui pra minha conta. Vou vir nessa
opção aqui, ó, de configurações no
próprio fluxo. E aqui eu vou ativar essa
opção para ele conseguir ter acesso a
esse fluxo. Senão ele não vai conseguir,
por isso que deu esse erro. Então aqui,
ó. Pronto. E aí, gente, você vai lendo,
vai entendendo o que que é. Olha só,
gente. Aqui ele já tá fazendo toda a
troca do que eu pedi, né? E como nós
temos múltiplos agentes de a
multiagente, ele tá indo em cada pronte
de cada agente verificando onde é que
tem coisas para ele mudar, né? Ele já
identificou quais são os suagentes que
ele vai mudar e agora ele está fazendo
isso, né? Na prática ele tá trocando
tudo isso. Quando a gente clica aqui, a
gente consegue ir vendo tudo que ele tá
fazendo, ó. E aí ele já vai, ele valida
o que tá funcionando, o que ele percebe
que não tá de acordo, ele mesmo vai e
corrige. Vai corrigindo, ó. vai fazendo
aqui os updates necessários nos nós que
estão antigos em versões anteriores,
colocando nessa versão nova. Essa conta
aqui em específica, ela tava numa versão
bem 14 versões atrás e aí eu pedi, só
subir o template, ele verificou isso. Eu
atualizei a versão do NN agora e aí ele
já trouxe, ó, tá antigo esses nós, né, e
tudo. Faz a hora que ele tá fazendo
essas melhorias também nos nós,
colocando para as versões mais atuais. E
aí você clica e você consegue ir vendo o
que ele tá fazendo, ó. Aqui você
consegue vendo tudo que ele tá criando.
Como é uma estrutura mais robusta,
demora um pouquinho mais, mas aqui a
gente consegue ir acompanhando tudo que
ele tá fazendo. Toda essa troca no
template que eu coloquei não tem nada
sobre nutrição e ele tá fazendo toda
essa melhoria para o nicho de nutrição,
né? A gente tem um template que ele é de
clínica geral, mas aí o ideal é que a
gente faça essa personalização de acordo
com o cliente, que é o que ele tá
fazendo agora, que eu pedi no prompt,
né? Então vamos esperar mais um
pouquinho aqui para ele entregar o
resultado final. Olha só, ele já tá
finalizando aqui, já tá fazendo o
resumo, né? Depois que ele cria o
workflow, ele também faz a validação se
tá tudo certo. E aqui a gente consegue
acompanhar de tudo que ele fez de
alteração, né? Ele trocou os nomes,
colocou o nome que eu pedi, os
especialistas também trocou o nome do
agente, trocou a parte aqui do ID da
agenda, que não é mais daquele
profissional, é desse outro, né?
fictício. E aí você vai ter que ajustar
a questão da agenda também manual ou
então dá o acesso da sua conta, da conta
que tá aqui essas agendas para ele poder
fazer essa alteração também, ele
sozinho, tá? Ó, que ele tá até falando,
né, que a gente tem que substituir pelos
IDs reais da conta do Google que você
tenha, ou então você faz a conexão e diz
para ele qual é a credencial que ele
coloca certinho também, tá? Então vou
abrir aqui a conta, ó. Aqui a gente
consegue acompanhar o fluxo,
o mesmo fluxo que ele criou. Deixa eu
ver aqui que aqui ele não colocou os
modelos, né? Então aqui a gente
precisaria colocar os modelos certinho,
igual da outra vez.
O ideal mesmo nessa parte aqui, paraa
gente não perder o que tinha antes, é
você pedir para ele criar uma versão
nova, porque daí a versão que ele criou
não sobressai a que você tinha feito.
Como eu já tinha aqui, ó, você pode só
vir aqui na versão e pegar a versão
anterior que ele estava,
essa versão aqui, ó. Então eu posso só
pegar
essa parte aqui para
eu não me perder nessa outra que ele
fez. Se você quiser acessar algo da
versão que ele não alterou, você só
volta aqui nesse botão e vê o que que
ele precisou mudar. Então aqui, ó, vou
colocar o agente de entrada. Vamos logo
ver se ele mudou, né? Aqui, ó. Aqui ele
já mudou. Colocou certinho o ID da
clínica nova. colocou aqui os
atendimentos, ó, na parte de
especialidades
aqui. Vamos ver se ele mudou, já fez
essa mudança também, ó, especialistas.
E aqui também na parte de agendas já
mudou o nome da clínica. Aqui a gente
teria que colocar o ID da agenda, né,
como ele mencionou lá para nós, a gente
tem que colocar o ID da agenda, certinho
para substituir corretamente aqui nessa
partezinha aqui. E aí o bom quando você
vai fazendo junto com o template é que
você vai conferindo o que falta mudar e
o que não falta. Então, por exemplo,
aqui, como eu uso think no meu e ele
tirou, a gente pode tentar colocar para
ele não tirar no próximo comando, né?
Quequei um comandozinho aqui bem
simples, né? E ele não não seguiu, mas
aqui a gente pode voltar, ó, pro chat
memory que ele não conseguiu ligar.
Então é só a gente ligar tudo aqui para
esse. Ele usa o mesmo nó dessa forma
aqui, ó. E as tools aqui também. Você
vai fazendo esses ajustes, né? Lá no
Codex, que eu vou até te mostrar já já.
Eu nem precisei fazer esses ajustes.
Talvez quando você coloque eles em
outras. E também a gente usou um modelo
mais básico que é o son. Eles recomendam
que a gente use o Opus. Pode ser que
tenha, ele não tenha construído de forma
perfeita aqui por conta disso, que eu
usei um modelo mais básico, né? E aí a
gente vai precisar fazer esses
ajustezinhos assim. Mas você já
conhecendo o N8N é o ideal, né? né? Não
é que você não saiba nada de N8N. O
ideal é que você tenha conhecimento
básico de N8N para saber o que é que a
IA vai mudar no seu fluxo e o que que
você vai precisar ajustar depois que ela
mexer no seu fluxo, né? Aqui a gente só
abre aqui para selecionar a credencial
correta e aí o fluxo já volta com essas
alterações, né? Então posso excluir isso
aqui, ó. O fluxo já vem do jeito que a
gente precisa que ele funcione, ó. Já
coloquei assim e ele já testa. Então
aqui ele já fez todas as alterações do
prompt que eu te mostrei. Então aqui tá
tudo completo, ó. Fez todas as mudanças
e aí você tem que conferir, né? Entra no
fluxo e vai conferindo. Mas o ideal é
você coloque no modelo do Opus. Eu
testei no modelo baratinho, mas é bom
você botar no Opus mesmo e explicar
perfeitamente o que ele tem que mudar e
o que ele não tem que mudar para para
ele não fazer uma mudança muito brusca
no seu fluxo e mudar o que você não
quer, tá? Então agora a gente vai entrar
em outra conta, em outro caso real, que
é um projeto de um cliente, né? Então
vou abrir aqui. Então olha só, eu já tô
aqui com a minha conta do VS Code, né?
Eu já coloquei, ó, no meu VS Code eu
tenho o Codex, eu tenho o Cloud Code e
ainda tenho Gemini também aqui. Então eu
coloco tudo aqui no VS Code e aí eu vou
alterando, né? Quando acaba o limite de
uma coisa, eu vou paraa outra e assim
vai. Só que o Codex ele tá excepcional,
o limite dele tá demais. conseguir fazer
muita coisa até que a sessão atingisse o
limite. Então assim, maravilhoso. Esse
projeto aqui é um projeto bem maior, né?
É um agente de a de atendimento no
WhatsApp e ele faz acesso a um catálogo
de produtos. Então esse cliente ele tem
mais de 600 produtos e a Iá precisa
acessar esses produtos para entregar o
que o cliente que tá mandando mensagem
ali precisa. Então aqui eu fiz uma
conexão também direta e oficial com o
Supase, que é onde a gente tá
centralizando todos os dados da IA.
Então aqui além do N8N eu também
coloquei o Sup para IA do Codex aqui pro
GPT, né, modelo do GPT conseguir acessar
também o meu superabase. Então aqui ele
consegue entrar lá no meu superbase, ver
como é que tá organizado o meu banco de
dados e poder fazer as alterações do que
precisa. Então aqui, ó, eu vou te
mostrar só um caso de uso, né, onde a IA
ela conseguiu editar o meu workflow,
consultar o meu banco de dados e
analisar. Então, antes de tudo, eu pedi
para ela analisar os fluxos. E aqui, na
hora que eu fui testar o que ela fez, eu
disse: "Ó, fiz um teste aqui e não
trouxe a informação do produto. Acessa
aí o meu fluxo e vê o que que tá de
errado." Então, ele vai conferir a exata
execução daquele teste que você fez. E
aqui, ó, olha só, gente, ele consegue
identificar onde é a falha. Ó, a falha
não é nessa nessa parte do fluxo, é em
outra. E aí, ó, ele vai acessando tudo o
que precisa acessar dentro do banco de
dados. Por que que a Suia não conseguiu
puxar aquele produto específico? Então
aqui eu expliquei para ela. Então
confere só aqui. Depois que ela faz a
análise do que que não funcionou, você
tem que explicar como é o jeito ideal,
né? Tô te explicando como é que você vai
usar o teu favor. Aqui eu tô explicando
para ela como que ela tem que usar.
Então, ó, confere só. ele já me fala:
"Ah, beleza. Então, a gente tem que
fazer dessa forma." E aí eu falei, eh,
perguntei aqui, né, se ele mudou. Aí ele
falou que mudou, mas de forma aditiva,
não tirando o que eu queria. E aí a
gente foi corrigindo, foi corrigindo,
né? Ó, deu certo, né? Depois que ela ela
faz as análises, eu vou e testo. Então,
aqui eu vou te mostrar esse fluxo.
Então, olha só, essa aqui é a carinha do
fluxo, a mesma estrutura que a gente usa
no meu treinamento, só que mais robusto,
né? Porque sea aqui ela vai acessar, ela
vai fazer inúmeras coisas. E aí o Codex
que criou esse subworkflows, eu fui
testando aqui as execuções de teste, né?
Fiz um monte de teste e aí nos testes eu
ia identificando, ó, a IA não conseguiu
acessar essa tua específica de buscar um
produto. Aí a gente volta pro Codex e
explica, precisa melhorar isso, isso e
isso. E aí você vai até pedir uma
opinião pra Ia de como é que é o ideal,
qual seria a maneira ideal de ser feito
aquilo. E aí ela vai te dando, né? Aqui
ela criou, ela mesmo que criou esse
subworflow aqui para mim, ó, de buscar o
produto de acordo com está organizado o
meu banco de dados. Então essas queres
aqui, a IA que criou, não foi eu, ela
que criou esse fluxo aqui, né? E aí o
que eu preciso é do resultado pronto, é
daquela funcionando do jeito que tá lá
no briefing do meu cliente. E aí você
tem que explicar isso pra Iá, qual é a
maneira ideal que ela tem que se portar,
né? Então, olha só a quantidade de tools
que ela mesma criou, dos fluxos, dos
subfluxos que a IA criou para mim, a
partir de um modelo que eu já tinha, de
um template que eu já tinha. Então isso
aqui tô te mostrando é só um recorte,
tá? De um projeto que é completo. A
gente também criou a interface para
cliente poder ir adicionar esses
produtos, né, e tudo. Então assim, super
completo. Nos próximos dias já vai sair
dentro do meu treinamento. É realmente
como é que eu fiz isso aqui do zero, né?
Porque eu sempre trago projetos para meu
treinamento que eu estou executando.
Então, nos próximos dias, você que é meu
aluno, você vai ter acesso, como é que
você consegue utilizar, por exemplo, o
Codex, que é uma IA fantástica, para
criar e te ajudar nas melhorias do teu
fluxo, né? E no curso eu vou te mostrar
exatamente os comandos, como é que a
gente tem que se portar do jeitinho
aqui. Então, assim, tá demais. Eu quero
muito ver você lá, se você ainda não é
meu aluno. Mas agora eu quero ver você
utilizando essa forma que eu trouxe
aqui, que é usando o próprio chat do
cloud. Você viu que a integração aqui
foi facilitadíssima. Eu quero ver você
colocando isso aqui em prática agora.
Coloca aí, atualiza o MCP do teu N8N no
app do cloud, que eu tenho certeza que
vai facilitar demais a tua vida. E se
você gostou desse vídeo, não esquece de
já deixar o teu like aqui e se
inscrever, porque toda semana tem vídeo
novo. Eu tenho certeza que você vai
querer acompanhar. Então eu te vejo no
próximo.
[música]
[música]
Hum, hum. Yeah.

## Pontos pra estudar
- [ ] 
- [ ] 

## Resumo (preencher ao processar pra wiki)
-
