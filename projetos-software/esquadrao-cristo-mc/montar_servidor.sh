#!/bin/bash
set -u
# Monta servidor/ com paginas .html (renderizaveis no navegador) + CSS, reescrevendo links .php -> .html
BASE="/c/Anderson/Segundo-cerebro/projetos-software/esquadrao-cristo-mc"
SRC="$BASE/estrutura-extraida"
OUT="$BASE/servidor"
A="$BASE/assets"

rm -rf "$OUT"
mkdir -p "$OUT"

# 1. assets na raiz (estrutura original do /mc)
mkdir -p "$OUT/assets/css" "$OUT/assets/js" "$OUT/assets/images" "$OUT/build/css" "$OUT/build/js"
cp "$A/css/app.css"            "$OUT/assets/css/app.css"
cp "$A/css/theme-esquadrao.css" "$OUT/assets/css/theme-esquadrao.css" 2>/dev/null || true
cp "$A/js/app.js"              "$OUT/assets/js/app.js"
cp "$A/imagens/motoclub-icon.png" "$OUT/assets/images/motoclub-icon.png"
mkdir -p "$OUT/uploads/aniversarios"
cp "$A/imagens/arte_masculino.jpg" "$OUT/uploads/aniversarios/arte_m_1786021519.jpeg" 2>/dev/null || true
cp "$A/imagens/arte_feminino.jpg"  "$OUT/uploads/aniversarios/arte_f_1786021526.jpeg" 2>/dev/null || true
cp "$A/build/css/custom.min.css" "$OUT/build/css/custom.min.css"
cp "$A/build/js/custom.min.js"   "$OUT/build/js/custom.min.js"
cp -r "$A/vendors" "$OUT/vendors"

# 2. paginas -> .html na raiz, com links .php->.html reescritos
while IFS='|' read -r rel htmlname; do
  [ -z "$rel" ] && continue
  srcf="$SRC/$rel.html"
  [ -f "$srcf" ] || { echo "AVISO: falta $rel"; continue; }
  # copia e reescreve href=/action= .php -> .html
  sed -e 's/\(href="\)\([a-zA-Z0-9_]*\)\.php/\1\2.html/g' \
      -e 's/\(action="\)\([a-zA-Z0-9_]*\)\.php/\1\2.html/g' \
      "$srcf" > "$OUT/$htmlname.html"
done <<'MAP'
dashboard/dashboard|dashboard
membros/membros|membros
membros/novo_membro|novo_membro
membros/prospects|prospects
membros/diretoria|diretoria
membros/perfil_membro|perfil_membro
membros/detalhe_presenca|detalhe_presenca_membro
eventos/eventos|eventos
eventos/novo_evento|novo_evento
eventos/mural_eventos|mural_eventos
eventos/checkin|checkin_evento
presencas/presencas|presencas
presencas/presenca_evento|presenca_evento
pedidos/pedidos|pedidos
pedidos/pedido_tipos|pedido_tipos
pedidos/novo_pedido_item|novo_pedido_item
pedidos/novo_pedido_membro|novo_pedido_membro
pedidos/pedidos_membro|pedidos_membro
pedidos/ver_item|ver_pedido_item
pedidos/editar_pedido_item|editar_pedido_item
patrimonio/dashboard|patrimonio_dashboard
patrimonio/itens|patrimonio_itens
patrimonio/item|patrimonio_item
patrimonio/novo_patrimonio|novo_patrimonio
patrimonio/editar|editar_patrimonio
patrimonio/emprestimos|patrimonio_emprestimos
patrimonio/manutencoes|patrimonio_manutencoes
patrimonio/relatorios|patrimonio_relatorios
patrimonio/categorias|patrimonio_categorias
patrimonio/locais|patrimonio_locais
cadastros/bases|bases
cadastros/nova_base|nova_base
cadastros/editar_base|editar_base
cadastros/cargos|cargos
cadastros/novo_cargo|novo_cargo
cadastros/editar_cargo|editar_cargo
cadastros/fases_membro|fases_membro
cadastros/artes_aniversario|artes_aniversario
cadastros/usuarios|usuarios
cadastros/novo_usuario|novo_usuario
cadastros/editar_usuario|editar_usuario
cadastros/perfis|perfis
cadastros/novo_perfil|novo_perfil
cadastros/editar_perfil|editar_perfil
cadastros/parametrizacoes|parametrizacoes
cadastros/diretoria_mandato|diretoria_mandato
cadastros/novo_mandato|novo_mandato_diretoria
relatorios/relatorios|relatorios
relatorios/eventos_ano|relatorio_eventos_ano
relatorios/eventos_analise|relatorio_eventos_analise
relatorios/eventos_base|relatorio_eventos_base
relatorios/ranking_presenca|relatorio_ranking_presenca
relatorios/baixa_frequencia|relatorio_baixa_frequencia
detalhes/cartao_aniversario|cartao_aniversario
detalhes/editar_evento|editar_evento
detalhes/editar_membro|editar_membro
galeria/agenda_drive|galeria_drive_mosaico
publico/index_login|index
publico/mural|mural_eventos
publico/bases|bases_publico
publico/galeria|galeria_publica
MAP

echo "=== HTML gerados: $(ls "$OUT"/*.html | wc -l) ==="
echo "--- Exemplo links reescritos em dashboard.html ---"
grep -oE 'href="[a-z_]+\.(html|php)"' "$OUT/dashboard.html" | head -5
echo "OK - sirva esta pasta: cd servidor && python -m http.server 8012"