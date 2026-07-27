#!/usr/bin/env python3
"""Monta o deck de apresentacao de negocio para o Patrick Teixeira.
Nicho: Agencia de Sites Sob Medida para Pequenos Negocios Locais.
Imagens em ./assets/. Saida: deck-patrick.pptx
"""
from pptx import Presentation
from pptx.util import Inches, Pt, Emu
from pptx.dml.color import RGBColor
from pptx.enum.text import PP_ALIGN, MSO_ANCHOR
import os

BASE = os.path.dirname(os.path.abspath(__file__))
ASSETS = os.path.join(BASE, "assets")

NAVY = RGBColor(0x0F, 0x1E, 0x3D)
EMERALD = RGBColor(0x10, 0xB9, 0x81)
GOLD = RGBColor(0xE0, 0xA8, 0x2E)
WHITE = RGBColor(0xFF, 0xFF, 0xFF)
LIGHT = RGBColor(0xF2, 0xF5, 0xFA)
DARKTXT = RGBColor(0x16, 0x21, 0x33)

prs = Presentation()
prs.slide_width = Inches(13.333)
prs.slide_height = Inches(7.5)
SW, SH = prs.slide_width, prs.slide_height
BLANK = prs.slide_layouts[6]

def slide():
    return prs.slides.add_slide(BLANK)

def rect(s, x, y, w, h, color):
    from pptx.enum.shapes import MSO_SHAPE
    sp = s.shapes.add_shape(MSO_SHAPE.RECTANGLE, x, y, w, h)
    sp.fill.solid(); sp.fill.fore_color.rgb = color
    sp.line.fill.background()
    sp.shadow.inherit = False
    return sp

def txt(s, x, y, w, h, lines, align=PP_ALIGN.LEFT, anchor=MSO_ANCHOR.TOP):
    tb = s.shapes.add_textbox(x, y, w, h)
    tf = tb.text_frame; tf.word_wrap = True
    tf.vertical_anchor = anchor
    tf.margin_left = Inches(0.1); tf.margin_right = Inches(0.1)
    tf.margin_top = Inches(0.05); tf.margin_bottom = Inches(0.05)
    first = True
    for ln in lines:
        p = tf.paragraphs[0] if first else tf.add_paragraph()
        first = False
        p.alignment = ln.get("align", align)
        if "space_before" in ln: p.space_before = Pt(ln["space_before"])
        if "space_after" in ln: p.space_after = Pt(ln["space_after"])
        if "level" in ln: p.level = ln["level"]
        runs = ln["runs"] if isinstance(ln["runs"], list) else [ln["runs"]]
        for r in runs:
            run = p.add_run(); run.text = r["t"]
            f = run.font
            f.size = Pt(r.get("sz", 18)); f.bold = r.get("b", False)
            f.italic = r.get("i", False)
            f.color.rgb = r.get("c", DARKTXT)
            f.name = "Calibri"
    return tb

def pic_fit(s, path, x, y, w, h):
    # add image fit inside box keeping aspect, centered
    from PIL import Image
    iw, ih = Image.open(path).size
    box_ar = w / h; img_ar = iw / ih
    if img_ar > box_ar:
        nw = w; nh = int(w / img_ar)
    else:
        nh = h; nw = int(h * img_ar)
    nx = x + (w - nw)//2; ny = y + (h - nh)//2
    s.shapes.add_picture(path, nx, ny, nw, nh)

def bg(s, color=WHITE):
    rect(s, 0, 0, SW, SH, color)

# ----------------------------------------------------------------------------
# 1. CAPA
# ----------------------------------------------------------------------------
s = slide(); bg(s, NAVY)
rect(s, 0, 0, SW, Inches(0.25), EMERALD)
pic_fit(s, os.path.join(ASSETS, "capa.png"), Inches(0), Inches(0.25), SW, Inches(4.6))
rect(s, 0, Inches(4.85), SW, Inches(2.65), NAVY)
txt(s, Inches(0.8), Inches(5.05), Inches(11.7), Inches(1.4), [
    {"runs": [{"t":"NEGÓCIO DE SITES SOB MEDIDA", "sz":40, "b":True, "c":WHITE}]},
    {"runs": [{"t":"para pequenos negócios locais", "sz":26, "b":False, "c":EMERALD}], "space_before":4},
])
txt(s, Inches(0.8), Inches(6.5), Inches(11.7), Inches(0.7), [
    {"runs": [{"t":"Uma sociedade Anderson Alves × Patrick Teixeira", "sz":18, "i":True, "c":GOLD}]},
])

# ----------------------------------------------------------------------------
# 2. PROBLEMA (gatilho de dor)
# ----------------------------------------------------------------------------
s = slide(); bg(s)
rect(s, 0, 0, Inches(0.25), SH, EMERALD)
txt(s, Inches(0.7), Inches(0.5), Inches(12), Inches(0.9), [
    {"runs": [{"t":"O problema que todo pequeno negócio tem", "sz":32, "b":True, "c":NAVY}]},
])
txt(s, Inches(0.7), Inches(1.5), Inches(6.0), Inches(5.2), [
    {"runs": [{"t":"❌ ", "sz":20, "c":EMERALD}, {"t":"Invisível no Google", "sz":20, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"O cliente procura no celular e não te acha.", "sz":15, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"❌ ", "sz":20, "c":EMERALD}, {"t":"Sem canal de contato direto", "sz":20, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Formulário que ninguém preenche. WhatsApp some.", "sz":15, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"❌ ", "sz":20, "c":EMERALD}, {"t":"Parece amador", "sz":20, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Site feito há 5 anos transmite desconfiança.", "sz":15, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"❌ ", "sz":20, "c":EMERALD}, {"t":"Concorrente leva o cliente", "sz":20, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Quem tem site bem feito ganha antes de abrir a porta.", "sz":15, "c":DARKTXT}], "space_before":2},
])
pic_fit(s, os.path.join(ASSETS, "antes-depois.png"), Inches(6.9), Inches(1.4), Inches(6.0), Inches(5.4))

# ----------------------------------------------------------------------------
# 3. SOLUÇÃO (antes/depois visual ja na imagem; copys de virada)
# ----------------------------------------------------------------------------
s = slide(); bg(s, LIGHT)
rect(s, 0, 0, SW, Inches(0.25), GOLD)
txt(s, Inches(0.7), Inches(0.45), Inches(12), Inches(0.9), [
    {"runs": [{"t":"A virada: um site que trabalha por você", "sz":32, "b":True, "c":NAVY}]},
])
cards = [
    ("Rápido", "Carrega em menos de 3s. Quem entra, fica."),
    ("WhatsApp", "Botão grudado em todo lugar. Um toque fecha negócio."),
    ("No Google", "Aparece na sua cidade. Cliente te acha sozinho."),
    ("Credível", "Visual profissional. Transmite confiança na hora."),
]
cx = Inches(0.7); cw = Inches(2.9); gap = Inches(0.18); cy = Inches(1.7); ch = Inches(2.4)
for i, (t, d) in enumerate(cards):
    x = cx + i*(cw+gap)
    rect(s, x, cy, cw, ch, WHITE)
    rect(s, x, cy, cw, Inches(0.18), EMERALD)
    txt(s, x+Inches(0.15), cy+Inches(0.35), cw-Inches(0.3), Inches(0.7), [
        {"runs": [{"t":t, "sz":22, "b":True, "c":NAVY}]}])
    txt(s, x+Inches(0.15), cy+Inches(1.1), cw-Inches(0.3), Inches(1.2), [
        {"runs": [{"t":d, "sz":15, "c":DARKTXT}]}])
txt(s, Inches(0.7), Inches(4.5), Inches(12), Inches(2.2), [
    {"runs": [{"t":"Resultado: ", "sz":20, "b":True, "c":EMERALD}, {"t":"o telefone toca, o cliente chega, a venda acontece.", "sz":20, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Não é 'ter um site'. É ter um vendedor que não dorme.", "sz":16, "i":True, "c":NAVY}], "space_before":8},
])

# ----------------------------------------------------------------------------
# 4. MODELO DE RECEITA RECORRENTE (gatilho de retorno)
# ----------------------------------------------------------------------------
s = slide(); bg(s)
rect(s, 0, 0, SW, Inches(0.25), EMERALD)
txt(s, Inches(0.7), Inches(0.45), Inches(12), Inches(0.9), [
    {"runs": [{"t":"Por que esse negócio dá retorno alto", "sz":32, "b":True, "c":NAVY}]},
])
pic_fit(s, os.path.join(ASSETS, "recorrencia.png"), Inches(7.0), Inches(1.4), Inches(5.9), Inches(5.4))
txt(s, Inches(0.7), Inches(1.6), Inches(6.0), Inches(5.2), [
    {"runs": [{"t":"💰 ", "sz":18, "c":GOLD}, {"t":"Receita recorrente", "sz":19, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Todo cliente paga todo mês: hospedagem + manutenção + tráfego.", "sz":14, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"📈 ", "sz":18, "c":GOLD}, {"t":"Custo de aquisição baixo", "sz":19, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Pequeno negócio local é fácil de encontrar e convencer.", "sz":14, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"🔁 ", "sz":18, "c":GOLD}, {"t":"Efeito composto", "sz":19, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"10 clientes viraram 50 em meses. Renda previsível.", "sz":14, "c":DARKTXT}], "space_before":2, "space_after":10},
    {"runs": [{"t":"🤝 ", "sz":18, "c":GOLD}, {"t":"Você não vende uma vez", "sz":19, "b":True, "c":DARKTXT}]},
    {"runs": [{"t":"Você vende uma assinatura de crescimento.", "sz":14, "c":DARKTXT}], "space_before":2},
])

# ----------------------------------------------------------------------------
# 5. PROCESSO SIMPLES (3 passos) - confiança
# ----------------------------------------------------------------------------
s = slide(); bg(s, LIGHT)
rect(s, 0, 0, SW, Inches(0.25), GOLD)
txt(s, Inches(0.7), Inches(0.45), Inches(12), Inches(0.9), [
    {"runs": [{"t":"Como funciona: simples de vender, simples de entregar", "sz":30, "b":True, "c":NAVY}]},
])
pic_fit(s, os.path.join(ASSETS, "processo.png"), Inches(0.6), Inches(1.5), Inches(6.2), Inches(5.2))
steps = [
    ("1. Encontramos", "Mapeamos o negócio local e a dor dele."),
    ("2. Construímos", "Site sob medida com botão de WhatsApp e SEO local."),
    ("3. Crescemos", "Tráfego e leads recorrentes. Você fatura todo mês."),
]
txt(s, Inches(7.0), Inches(1.7), Inches(5.8), Inches(5.0), [
    {"runs": [{"t":f"{t}", "sz":20, "b":True, "c":EMERALD}, {"t":f" — {d}", "sz":16, "c":DARKTXT}], "space_after":14}
    for t, d in steps
])
txt(s, Inches(7.0), Inches(5.9), Inches(5.8), Inches(1.0), [
    {"runs": [{"t":"Sem código pra cliente ver. Sem burocracia.", "sz":15, "i":True, "c":NAVY}]},
])

# ----------------------------------------------------------------------------
# 6. A SOCIEDADE (Patrick + Anderson) - gatilho de parceria
# ----------------------------------------------------------------------------
s = slide(); bg(s, NAVY)
rect(s, 0, 0, SW, Inches(0.25), EMERALD)
txt(s, Inches(0.7), Inches(0.5), Inches(12), Inches(0.9), [
    {"runs": [{"t":"A sociedade: duas forças, um negócio", "sz":30, "b":True, "c":WHITE}]},
])
pic_fit(s, os.path.join(ASSETS, "sociedade.png"), Inches(0.6), Inches(1.6), Inches(6.0), Inches(5.2))
txt(s, Inches(7.0), Inches(1.8), Inches(5.8), Inches(5.0), [
    {"runs": [{"t":"Anderson — ", "sz":18, "b":True, "c":EMERALD}, {"t":"Quem faz", "sz":18, "b":True, "c":WHITE}]},
    {"runs": [{"t":"Tech, criação de sites, operação e entrega.", "sz":14, "c":WHITE}], "space_before":2, "space_after":12},
    {"runs": [{"t":"Patrick — ", "sz":18, "b":True, "c":GOLD}, {"t":"Quem lidera", "sz":18, "b":True, "c":WHITE}]},
    {"runs": [{"t":"Vendas, relacionamento, visão de escala.", "sz":14, "c":WHITE}], "space_before":2, "space_after":12},
    {"runs": [{"t":"Juntos: ", "sz":18, "b":True, "c":EMERALD}, {"t":"produção ágil + liderança que fecha.", "sz":18, "b":True, "c":WHITE}]},
    {"runs": [{"t":"Um fecha, o outro entrega. O cliente nem percebe a divisão.", "sz":14, "c":WHITE}], "space_before":2},
])

# ----------------------------------------------------------------------------
# 7. CALL TO ACTION (gatilho final de decisao)
# ----------------------------------------------------------------------------
s = slide(); bg(s)
rect(s, 0, 0, SW, SH, NAVY)
rect(s, 0, Inches(2.6), SW, Inches(2.3), EMERALD)
txt(s, Inches(0.8), Inches(2.75), Inches(11.7), Inches(2.0), [
    {"runs": [{"t":"Vamos fechar os 10 primeiros clientes?", "sz":40, "b":True, "c":NAVY, "align":PP_ALIGN.CENTER}], "align":PP_ALIGN.CENTER},
], align=PP_ALIGN.CENTER)
txt(s, Inches(0.8), Inches(5.2), Inches(11.7), Inches(1.6), [
    {"runs": [{"t":"Plano de 30 dias: lista de alvos locais, proposta pronta, primeiro site no ar.", "sz":18, "c":WHITE, "align":PP_ALIGN.CENTER}], "align":PP_ALIGN.CENTER},
    {"runs": [{"t":"Daqui a 90 dias: renda recorrente rodando. Quer começar segunda?", "sz":16, "i":True, "c":GOLD, "align":PP_ALIGN.CENTER}], "space_before":10, "align":PP_ALIGN.CENTER},
])

out = os.path.join(BASE, "deck-patrick.pptx")
prs.save(out)
print("DECK_SAVED", out, "slides:", len(prs.slides._sldIdLst))
