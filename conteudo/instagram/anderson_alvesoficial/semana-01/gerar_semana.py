#!/usr/bin/env python3
import os
base = os.path.expanduser("~/SegundoCerebro/conteudo/instagram/anderson_alvesoficial/semana-01")

# templates reuse same voice/tone. Each day: reel + post(carrossel) + story.
days = {
 "seg": {
   "theme":"Cabeça cheia não é organização",
   "reel_hook":"Se você organiza a empresa na cabeça, já perdeu cliente hoje.",
   "reel_body":["Todo mundo que cresce guarda tudo de cabeça. Até parar de caber.",
     "Eu tiro isso da sua cabeça e coloco num sistema. Site, automação, IA.",
     "O sistema lembra, avisa, cobra, organiza. Você dorme tranquilo."],
   "reel_close":"Quem trabalha de cabeça trabalha pra virar. Quem tem sistema trabalha pra lucrar. Comenta SISTEMA que eu te mostro o seu.",
   "post_title":"3 SINAIS QUE VOCÊ PRECISA DE UM SISTEMA",
   "post_cap":"Você não precisa de um site porque é 'moderno'. Precisa porque a cabeça estourou. Se algum desses 3 for verdadeiro, seu negócio já perdeu dinheiro hoje. Salva e me conta nos comentários qual te pegou.",
   "post_slides":["1. Você se lembra de tudo de cabeça — quando cabeça é o banco de dados, um esquecimento é prejuízo. Sistema não esquece.",
     "2. Cliente some no meio do funil — sem registro você não sabe quem prometeu o quê. Automação mantém o contato vivo.",
     "3. Seu dia vira apagar incêndio — tudo urgente porque nada é previsto. Sistema antecipa, você manda.",
     "O real: site + automação + IA = você trabalha menos e fatura mais. Sem milagre.",
     "CTA: quer ver seu negócio rodando sozinho? Comenta SISTEMA que eu monto o diagnóstico."],
   "story_txt":"Quem cresce guarda na cabeça até não caber mais. Eu construo o sistema que assume o peso. Você foca em fechar.",
   "story_sticker":"Você organiza na cabeça ou tem sistema? (Sim / Preciso de um)",
 },
 "ter": {
   "theme":"App em 1 tarde que traz cliente",
   "reel_hook":"Eu fiz um app em uma tarde que hoje me traz cliente todo dia.",
   "reel_body":["Não foi mágica, foi método.",
     "Defini 3 telas: o que vende, o que entrega, onde falar comigo.",
     "Subi com botão de WhatsApp grudado. No ar no mesmo dia.",
     "Desde então o cliente chega sozinho. Eu só respondo."],
   "reel_close":"Seu negócio precisa disso hoje, não ano que vem. Comenta APP que eu te mostro como.",
   "post_title":"O QUE É AUTOMAÇÃO COM IA PRA QUEM TEM NEGÓCIO",
   "post_cap":"Não é robô nem ficção. É tirar do seu colo o que a máquina faz melhor. E o resultado cai no seu bolso.",
   "post_slides":["1. IA responde o cliente nas horas mortas — você fecha quem mandou mensagem à meia-noite.",
     "2. Sistema agenda, lembra e cobra — sem você correr atrás.",
     "3. Dados viram decisão — você sabe o que vende, não chuta.",
     "Resumo: automação com IA é empregado que não dorme e não pede aumento.",
     "CTA: quer um que trabalhe por você? Comenta IA."],
   "story_txt":"Método > sorte. Construí o app em 1 tarde e ele trabalha por mim desde então.",
   "story_sticker":"Você teria um app pro seu negócio? (Sim / Ainda não)",
 },
 "qua": {
   "theme":"Concorrente aparece no Google e você não",
   "reel_hook":"Seu concorrente aparece no Google e você não. Adivinha quem leva o cliente?",
   "reel_body":["Ter site não é pra 'ter'. É pra ser achado.",
     "SEO local coloca você na busca da sua cidade.",
     "Quem busca seu serviço hoje achou o outro. Porque ele aparece.",
     "A gente vira esse jogo em semanas, não meses."],
   "reel_close":"Não deixe o cliente achar o outro de novo. Comenta ACHAR que eu te explico.",
   "post_title":"3 ERROS DE SITE QUE ESPANTAM CLIENTE",
   "post_cap":"Seu site tá te custando cliente e você nem percebe. Os 3 maiores estão aqui. Salva pra não esquecer.",
   "post_slides":["1. Site lento — 40% saem se demorar mais de 3s. Teste em pagespeed.web.dev",
     "2. Sem botão de WhatsApp — quem quer comprar quer falar JÁ. Um clique vale mais que formulário.",
     "3. Ninguém acha no Google — sem palavra-chave local, seu bairro nem sabe que você existe.",
     "O fixo: rápido + WhatsApp visível + aparece na cidade = cliente no pé.",
     "CTA: quer eu olhe seu site de graça? Comenta SITE."],
   "story_txt":"Você já buscou seu próprio serviço no Google? Se não apareceu, a gente tem conversa.",
   "story_sticker":"Você aparece no Google da sua cidade? (Sim / Não sei)",
 },
 "qui": {
   "theme":"SaaS que paga conta",
   "reel_hook":"Um SaaS bem feito não é custo. É a conta que chega sozinha.",
   "reel_body":["Software recorrente é renda que não depende de você estar acordado.",
     "Você vende uma vez e fatura todo mês.",
     "Cliente paga pra usar, pra manter, pra crescer.",
     "É o trabalho que trabalha por você."],
   "reel_close":"Quer ver um que gera retorno direto? Comenta SAAS.",
   "post_title":"APP QUE GERA RETORNO DIRETO (NÃO SÓ GASTO)",
   "post_cap":"A maioria trata sistema como despesa. Eu trato como máquina de fazer dinheiro. Tem diferença.",
   "post_slides":["1. Sistema que vende — fecha pedido sem você.",
     "2. Sistema que retém — cliente fica porque é fácil.",
     "3. Sistema que mostra — você corta o que não paga.",
     "Resultado: cada real investido volta multiplicado.",
     "CTA: quer um que pague a conta? Comenta RETORNO."],
   "story_txt":"Despesa vira máquina quando o sistema passa a trazer cliente. É assim que eu penso.",
   "story_sticker":"Seu sistema hoje é custo ou máquina? (Custo / Máquina)",
 },
 "sex": {
   "theme":"Toque no WhatsApp vale mais que formulário",
   "reel_hook":"Formulário ninguém preenche. WhatsApp todo mundo abre. Eu coloco o botão onde a mão já está.",
   "reel_body":["Cliente decide na hora. Se demorar, ele some.",
     "Botão de WhatsApp em toda tela = um toque e pronto.",
     "Você recebe a mensagem no celular. Fecha na hora.",
     "Menos atrito, mais venda. Simples assim."],
   "reel_close":"Quer o seu com botão de comprar falando? Comenta ZAP.",
   "post_title":"ANTES E DEPOIS: NEGÓCIO QUE APARECE E CONVERSA",
   "post_cap":"O antes: cliente procura, não acha, desiste. O depois: te acha no Google e fala com você no WhatsApp em 1 toque.",
   "post_slides":["Antes: site antigo, sem contato, some no Google.",
     "Depois: site rápido, WhatsApp em todo lugar, aparece na cidade.",
     "Antes: dia apagando incêndio.",
     "Depois: sistema avisa e você manda.",
     "CTA: quer o depois? Comenta DEIXA."],
   "story_txt":"Todo mundo tem o WhatsApp na mão. Por que obrigar o cliente a preencher formulário?",
   "story_sticker":"Você tem botão de WhatsApp no site? (Sim / Não)",
 },
 "sab": {
   "theme":"Resultado real",
   "reel_hook":"Não vendo promessa. Mostro o sistema rodando e o cliente chegando.",
   "reel_body":["Gravei a tela: pedido entrando sozinho.",
     "Automação avisou, cliente respondeu, negócio fechado.",
     "Isso acontece todo dia, não foi sorte.",
     "É o que eu construo pra quem quer parar de correr."],
   "reel_close":"Quer esse cenário no seu negócio? Comenta RESULTADO.",
   "post_title":"5 DICAS PRA QUEM QUER SAIR DA 'CABEÇA'",
   "post_cap":"Pequeno guia prático pra parar de depender da memória e começar a depender de sistema. Salva.",
   "post_slides":["1. Anote tudo em lugar único, não no zap espalhado.",
     "2. Tenha site com WhatsApp visível.",
     "3. Automatize o lembrete de quem prometeu.",
     "4. Olhe os dados uma vez por semana.",
     "5. Deixe o sistema cobrar por você. CTA: quer ajuda? Comenta DICA."],
   "story_txt":"Prova na mão vale mais que promessa. É assim que eu entrego.",
   "story_sticker":"Você anota tudo num lugar só? (Sim / Não)",
 },
 "dom": {
   "theme":"Trabalho que trabalha por você",
   "reel_hook":"O sonho não é trabalhar menos. É ter algo que trabalha por você enquanto você descansa.",
   "reel_body":["Sistema não cansa, não esquece, não some.",
     "Ele vende, avisa e organiza 24h.",
     "Você direciona, ele executa.",
     "É liberdade com renda, não só 'trabalho remoto'."],
   "reel_close":"Quer montar o seu? Comenta LIBERDADE.",
   "post_title":"POR QUE EU CONSTRUO SISTEMAS (E NÃO SÓ SITES)",
   "post_cap":"Site é vitrine. Sistema é operação. Quem vende todo dia usa sistema. A diferença é no bolso.",
   "post_slides":["Vitrine atrai. Sistema segura e repete.",
     "Sem sistema, todo cliente é esforço do zero.",
     "Com sistema, o cliente vira rotina.",
     "Por isso construo o que trabalha por você.",
     "CTA: pronto pra começar? Comenta COMEÇAR."],
   "story_txt":"Domingo é pra respirar. O sistema que eu construí é o que deixa isso acontecer.",
   "story_sticker":"Você teria algo trabalhando por você? (Sim / Quero)",
 },
}

def reel_md(d):
    return f"""---
tags: [instagram, reel, pronto, anderson, tiktok]
criado: 2026-07-26
tipo: reel
duracao: 40s
tema: {d['theme']}
status: pronto-pra-gravar
rede: [instagram, tiktok]
tom: confianca-credibilidade
---

# REEL — {d['theme']}

**Gancho (0-4s):** "{d['reel_hook']}" (olho na câmera, tom calmo e firme)

**Corpo (4-30s):**
""" + "\n".join(f'- "{b}"' for b in d['reel_body']) + f"""

**Fechamento (30-40s):** "{d['reel_close']}" (sorriso leve, corte)

**Overlay:** "{d['theme']}."
**Legenda (IG):** {d['reel_hook']} Eu construo o sistema que tira você do 'de cabeça' e põe dinheiro no bolso. Comenta pra eu te mostrar o seu. 👇 #criadordesites #automacao #ia #pequenonegocio
**Legenda (TikTok):** mesmo texto, sem link.
**Áudio:** trending calmo ou voz limpa sobre beat suave.
"""

def post_md(d):
    slides = "\n".join(f"{i+1}. {s}" for i,s in enumerate(d['post_slides']))
    return f"""---
tags: [instagram, post, carrossel, pronto, anderson, tiktok]
criado: 2026-07-26
tipo: post-carrossel
tema: {d['theme']}
status: pronto-pra-postar
rede: [instagram, tiktok]
tom: confianca-credibilidade
---

# POST CARROSSEL — {d['post_title']}

**Legenda:**
{d['post_cap']}
#sistemas #automacao #ia #negocio #criadordesites

**Slides:**
1. (Capa) "{d['post_title']}" — fundo navy, texto emerald.
{slides}
6. (CTA) "{d['post_slides'][-1].split('CTA: ',1)[-1]}"

**TikTok:** postar slides como vídeo de imagens na mesma ordem.
"""

def story_md(d):
    return f"""---
tags: [instagram, story, pronto, anderson, tiktok]
criado: 2026-07-26
tipo: story
tema: {d['theme']}
status: pronto-pra-postar
rede: [instagram, tiktok]
tom: confianca-credibilidade
---

# STORY — {d['theme']}

**Texto (fundo navy, texto emerald centralizado ou print do sistema rodando):**
"{d['story_txt']}"

**Adesivo/interação:** enquete "{d['story_sticker']}"

**Apoio (se story com foto):** "Dia de tirar mais um cliente do 'de cabeça'. 🔧"
"""

for day, d in days.items():
    folder = os.path.join(base, day)
    with open(os.path.join(folder, f"reel-{d['theme'].split()[0].lower()}.md"), "w") as f: f.write(reel_md(d))
    with open(os.path.join(folder, f"post-{d['theme'].split()[0].lower()}.md"), "w") as f: f.write(post_md(d))
    with open(os.path.join(folder, f"story-{d['theme'].split()[0].lower()}.md"), "w") as f: f.write(story_md(d))
    print(f"{day}: reel+post+story OK")

print("TOTAL arquivos:", sum(len(files) for _,_,files in os.walk(base)))
