#!/bin/bash
set -u
# Reconstroi a estrutura /mc original para servir as paginas com CSS.
BASE="/c/Anderson/Segundo-cerebro/projetos-software/esquadrao-cristo-mc"
SRC="$BASE/estrutura-extraida"
OUT="$BASE/servidor"
A="$BASE/assets"

rm -rf "$OUT"
mkdir -p "$OUT"

# 1. Copiar assets na raiz do servidor (estrutura original: assets/, build/, vendors/, uploads/)
#    assets/css -> servidor/assets/css ; assets/js -> servidor/assets/js ; assets/images -> servidor/assets/images
mkdir -p "$OUT/assets/css" "$OUT/assets/js" "$OUT/assets/images"
cp "$A/css/app.css" "$OUT/assets/css/app.css"
cp "$A/css/theme-esquadrao.css" "$OUT/assets/css/theme-esquadrao.css" 2>/dev/null
cp "$A/js/app.js" "$OUT/assets/js/app.js"
cp "$A/imagens/motoclub-icon.png" "$OUT/assets/images/motoclub-icon.png"
cp "$A/imagens/arte_masculino.jpg" "$OUT/uploads/aniversarios/arte_m_1786021519.jpeg" 2>/dev/null
cp "$A/imagens/arte_feminino.jpg" "$OUT/uploads/aniversarios/arte_f_1786021526.jpeg" 2>/dev/null

# build/ -> raiz build
mkdir -p "$OUT/build/css" "$OUT/build/js"
cp "$A/build/css/custom.min.css" "$OUT/build/css/custom.min.css"
cp "$A/build/js/custom.min.js" "$OUT/build/js/custom.min.js"

# vendors/ -> raiz vendors (estrutura original do tema Gentelella)
cp -r "$A/vendors" "$OUT/vendors"

echo "assets copiados OK"

# 2. Copiar paginas na raiz com nome .php (para os links internos funcionarem)
# mapeamento: <path no src> -> <nome .php>
while IFS='|' read -r rel php; do
  [ -z "$rel" ] && continue
  if [ -f "$SRC/$rel.html" ]; then
    cp "$SRC/$rel.html" "$OUT/$php"
  else
    echo "AVISO: falta $rel.html"
  fi
done <<'MAP'
dashboard/dashboard|dashboard.php
membros/membros|membros.php
membros/novo_membro|novo_membro.php
membros/prospects|prospects.php
membros/diretoria|diretoria.php
membros/perfil_membro|perfil_membro.php
membros/detalhe_presenca|detalhe_presenca_membro.php
eventos/eventos|eventos.php
eventos/novo_evento|novo_evento.php
eventos/mural_eventos|mural_eventos.php
eventos/checkin|checkin_evento.php
presencas/presencas|presencas.php
presencas/presenca_evento|presenca_evento.php
pedidos/pedidos|pedidos.php
pedidos/pedido_tipos|pedido_tipos.php
pedidos/novo_pedido_item|novo_pedido_item.php
pedidos/novo_pedido_membro|novo_pedido_membro.php
pedidos/pedidos_membro|pedidos_membro.php
pedidos/ver_item|ver_pedido_item.php
pedidos/editar_pedido_item|editar_pedido_item.php
patrimonio/dashboard|patrimonio_dashboard.php
patrimonio/itens|patrimonio_itens.php
patrimonio/item|patrimonio_item.php
patrimonio/novo_patrimonio|novo_patrimonio.php
patrimonio/editar|editar_patrimonio.php
patrimonio/emprestimos|patrimonio_emprestimos.php
patrimonio/manutencoes|patrimonio_manutencoes.php
patrimonio/relatorios|patrimonio_relatorios.php
patrimonio/categorias|patrimonio_categorias.php
patrimonio/locais|patrimonio_locais.php
cadastros/bases|bases.php
cadastros/nova_base|nova_base.php
cadastros/editar_base|editar_base.php
cadastros/cargos|cargos.php
cadastros/novo_cargo|novo_cargo.php
cadastros/editar_cargo|editar_cargo.php
cadastros/fases_membro|fases_membro.php
cadastros/artes_aniversario|artes_aniversario.php
cadastros/usuarios|usuarios.php
cadastros/novo_usuario|novo_usuario.php
cadastros/editar_usuario|editar_usuario.php
cadastros/perfis|perfis.php
cadastros/novo_perfil|novo_perfil.php
cadastros/editar_perfil|editar_perfil.php
cadastros/parametrizacoes|parametrizacoes.php
cadastros/diretoria_mandato|diretoria_mandato.php
cadastros/novo_mandato|novo_mandato_diretoria.php
relatorios/relatorios|relatorios.php
relatorios/eventos_ano|relatorio_eventos_ano.php
relatorios/eventos_analise|relatorio_eventos_analise.php
relatorios/eventos_base|relatorio_eventos_base.php
relatorios/ranking_presenca|relatorio_ranking_presenca.php
relatorios/baixa_frequencia|relatorio_baixa_frequencia.php
detalhes/cartao_aniversario|cartao_aniversario.php
detalhes/editar_evento|editar_evento.php
detalhes/editar_membro|editar_membro.php
galeria/agenda_drive|galeria_drive_mosaico.php
publico/index_login|index.php
publico/mural|mural_eventos.php
publico/bases|bases_publico.php
publico/galeria|galeria_publica.php
MAP

echo "=== paginas copiadas: $(ls "$OUT"/*.php 2>/dev/null | wc -l) ==="
echo "OK - estrutura do servidor montada em: $OUT"