<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artes de Aniversario | Motoclub Presenca</title>
    <link rel="icon" type="image/png" href="assets/images/motoclub-icon.png">
    <link rel="apple-touch-icon" href="assets/images/motoclub-icon.png">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="assets/css/app.css?v=1785509576" rel="stylesheet">
        <style>
  .mc-birthday-art-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
  }

  .mc-birthday-art-card {
    border: 1px solid #E6E9ED;
    border-radius: 4px;
    padding: 14px;
    background: #fff;
  }

  .mc-birthday-art-card h3 {
    margin-top: 0;
    color: #34495E;
  }

  .mc-birthday-art-thumb {
    width: 100%;
    max-height: 320px;
    object-fit: contain;
    background: #F5F7FA;
    border: 1px solid #E6E9ED;
    margin-bottom: 12px;
  }

  .mc-card-preview-wrap {
    display: grid;
    grid-template-columns: minmax(280px, 420px) minmax(0, 1fr);
    gap: 18px;
    align-items: start;
  }

  .mc-card-canvas-box {
    background: #F5F7FA;
    border: 1px solid #E6E9ED;
    border-radius: 4px;
    padding: 12px;
  }

  #previewCanvas {
    width: 100%;
    height: auto;
    display: block;
    background: #fff;
  }

  @media (max-width: 991px) {
    .mc-birthday-art-grid,
    .mc-card-preview-wrap {
      grid-template-columns: 1fr;
    }
  }
</style>    <!-- Google Analytics GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZR8358C7G"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-MZR8358C7G');
</script>
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="dashboard.php" class="site_title"><i class="fa fa-shield"></i> <span>MC 2.0</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
          <div class="profile_pic">
                          <div class="profile_initials">MC</div>
                      </div>
          <div class="profile_info">
            <span>Bem-vindo,</span>
            <h2>Administrador</h2>
            <small>Todas as bases</small>
          </div>
        </div>

        <br>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Menu</h3>
            <ul class="nav side-menu">
                              <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                            <li><a><i class="fa fa-users"></i> Membros <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="membros.php">Listar membros</a></li>
                                          <li><a href="novo_membro.php">Novo membro</a></li>
                                          <li><a href="prospects.php">Prospects</a></li>
                                          <li><a href="diretoria.php">Diretoria</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-calendar"></i> Eventos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="eventos.php">Listar eventos</a></li>
                                          <li><a href="novo_evento.php">Novo evento</a></li>
                                          <li><a href="mural_eventos.php">Mural de eventos</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-check-square-o"></i> Presencas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="presencas.php">Resumo de presencas</a></li>
                                          <li><a href="eventos.php?status=Aberto">Eventos para check-in</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-shopping-bag"></i> Pedidos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="pedidos.php">Itens</a></li>
                                          <li><a href="pedido_tipos.php">Tipos de item</a></li>
                                          <li><a href="novo_pedido_item.php">Novo item</a></li>
                                          <li><a href="novo_pedido_membro.php">Novo pedido</a></li>
                                          <li><a href="pedidos_membro.php">Pedidos por membro</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-cubes"></i> Patrimonio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="patrimonio_dashboard.php">Dashboard</a></li>
                                          <li><a href="patrimonio_itens.php">Itens</a></li>
                                          <li><a href="novo_patrimonio.php">Novo item</a></li>
                                          <li><a href="patrimonio_emprestimos.php">Emprestimos</a></li>
                                          <li><a href="patrimonio_manutencoes.php">Manutencoes</a></li>
                                          <li><a href="patrimonio_relatorios.php">Relatorios</a></li>
                                          <li><a href="patrimonio_categorias.php">Categorias</a></li>
                                          <li><a href="patrimonio_locais.php">Locais</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-flag"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="bases.php">Bases</a></li>
                                          <li><a href="cargos.php">Cargos</a></li>
                                          <li><a href="fases_membro.php">Fases do membro</a></li>
                                          <li><a href="artes_aniversario.php">Artes de aniversario</a></li>
                                          <li><a href="usuarios.php">Usuarios</a></li>
                                          <li><a href="perfis.php">Perfis</a></li>
                                          <li><a href="parametrizacoes.php">Parametrizacoes</a></li>
                                      </ul>
                </li>
                              <li><a><i class="fa fa-bar-chart"></i> Relatorios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                                          <li><a href="relatorios.php">Central de relatorios</a></li>
                                          <li><a href="relatorio_eventos_ano.php">Eventos por ano</a></li>
                                          <li><a href="relatorio_ranking_presenca.php">Ranking de presenca</a></li>
                                      </ul>
                </li>
                          </ul>
          </div>
        </div>

        <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Configuracoes" href="parametrizacoes.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                    <a data-toggle="tooltip" data-placement="top" title="Tela cheia"><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span></a>
          <a data-toggle="tooltip" data-placement="top" title="Bloquear"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a>
          <a data-toggle="tooltip" data-placement="top" title="Sair" href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>

    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="user-avatar-sm">MC</span>
                                Administrador                <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="javascript:void(0);"><span>Superadministrador</span></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="right_col" role="main">
<div class="page-title">
  <div class="title_left"><h3>Artes de aniversario <small>mensagens por sexo</small></h3></div>
  <div class="title_right text-right"><a class="btn btn-default" href="dashboard.php"><i class="fa fa-arrow-left"></i> Voltar</a></div>
</div>
<div class="clearfix"></div>


<div class="x_panel">
  <div class="x_title"><h2>Cadastro das artes <small>masculina e feminina</small></h2><div class="clearfix"></div></div>
  <div class="x_content">
    <div class="mc-birthday-art-grid">
              <section class="mc-birthday-art-card">
          <h3><i class="fa fa-picture-o"></i> Arte Masculina</h3>
                      <img class="mc-birthday-art-thumb" src="uploads/aniversarios/arte_m_1786021519.jpeg" alt="Arte Masculina">
            <p class="text-muted">Atualizada em 06/08/2026 13:05</p>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="sexo" value="M">
            <div class="form-group">
              <label>Imagem Masculina</label>
              <input type="file" name="imagem" class="form-control" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp" required>
              <small class="text-muted">Use a arte completa no formato vertical do modelo. JPG, PNG ou WEBP ate 8MB.</small>
            </div>
            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar arte masculina</button>
          </form>
        </section>
              <section class="mc-birthday-art-card">
          <h3><i class="fa fa-picture-o"></i> Arte Feminina</h3>
                      <img class="mc-birthday-art-thumb" src="uploads/aniversarios/arte_f_1786021526.jpeg" alt="Arte Feminina">
            <p class="text-muted">Atualizada em 06/08/2026 13:05</p>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="sexo" value="F">
            <div class="form-group">
              <label>Imagem Feminina</label>
              <input type="file" name="imagem" class="form-control" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp" required>
              <small class="text-muted">Use a arte completa no formato vertical do modelo. JPG, PNG ou WEBP ate 8MB.</small>
            </div>
            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar arte feminina</button>
          </form>
        </section>
          </div>
  </div>
</div>

<div class="x_panel">
  <div class="x_title"><h2>Previa de composicao <small>foto no quadro e nome abaixo</small></h2><div class="clearfix"></div></div>
  <div class="x_content">
          <div class="mc-card-preview-wrap">
        <div class="mc-card-canvas-box">
          <canvas id="previewCanvas" width="1080" height="1350"></canvas>
        </div>
        <div>
          <div class="form-group">
            <label>Membro para testar</label>
            <select id="previewMembro" class="form-control mc-select-search">
                                              <option value="19"
                        data-sexo="F"
                        data-nome="Adeilane"
                        data-foto="uploads/membros/membro_19_1781025387.png">
                  Adeilane Reis - Feminino                </option>
                                              <option value="13"
                        data-sexo="M"
                        data-nome="Alexandre"
                        data-foto="uploads/membros/membro_13_1781010074.png">
                  Alexandre Florentino Ferreira - Masculino                </option>
                                              <option value="28"
                        data-sexo="M"
                        data-nome="Algemiro"
                        data-foto="uploads/membros/membro_28_1781185603.png">
                  Algemiro - Masculino                </option>
                                              <option value="7"
                        data-sexo="M"
                        data-nome="Soares"
                        data-foto="uploads/membros/membro_7_1781187515.png">
                  Antônio Soares Júnior - Masculino                </option>
                                              <option value="31"
                        data-sexo="F"
                        data-nome="Betânia"
                        data-foto="uploads/membros/membro_31_1781817398.png">
                  Betânia - Feminino                </option>
                                              <option value="12"
                        data-sexo="M"
                        data-nome="Pr. Eber"
                        data-foto="uploads/membros/membro_12_1781025435.png">
                  Eber Miranda de Sousa - Masculino                </option>
                                              <option value="29"
                        data-sexo="F"
                        data-nome="Erica"
                        data-foto="uploads/membros/membro_29_1785004926.png">
                  Erika Silper - Feminino                </option>
                                              <option value="32"
                        data-sexo="M"
                        data-nome="Fabio"
                        data-foto="uploads/membros/membro_32_1785337242.png">
                  Fabio - Masculino                </option>
                                              <option value="5"
                        data-sexo="M"
                        data-nome="Capl. Fernando"
                        data-foto="uploads/membros/membro_5_1781263845.png">
                  Fernando Lucas Alves de Araújo - Masculino                </option>
                                              <option value="20"
                        data-sexo="M"
                        data-nome="Guerriro"
                        data-foto="uploads/membros/membro_20_1781188434.png">
                  Gildenor Pereira Barros Junior - Masculino                </option>
                                              <option value="8"
                        data-sexo="M"
                        data-nome="Toscano"
                        data-foto="uploads/membros/membro_8_1781187624.png">
                  Heráclito Botelho Toscano Barreto Junior - Masculino                </option>
                                              <option value="27"
                        data-sexo="M"
                        data-nome="Ildson"
                        data-foto="uploads/membros/membro_27_1781188230.png">
                  Ildson Oliveira de Lima - Masculino                </option>
                                              <option value="43"
                        data-sexo="M"
                        data-nome="Jales"
                        data-foto="">
                  Jales - Masculino                </option>
                                              <option value="10"
                        data-sexo="M"
                        data-nome="João"
                        data-foto="uploads/membros/membro_10_1781187343.png">
                  João Adolfo de Abreu Guimarães - Masculino                </option>
                                              <option value="6"
                        data-sexo="M"
                        data-nome="John"
                        data-foto="uploads/membros/membro_6_1781008349.jpeg">
                  John Dalto Alves de Sousa - Masculino                </option>
                                              <option value="18"
                        data-sexo="M"
                        data-nome="Neto"
                        data-foto="uploads/membros/membro_18_1781187882.png">
                  José Neto - Masculino                </option>
                                              <option value="25"
                        data-sexo="M"
                        data-nome="Bona"
                        data-foto="uploads/membros/membro_25_1781025496.png">
                  Leo Marcio Bona - Masculino                </option>
                                              <option value="14"
                        data-sexo="F"
                        data-nome="Lua"
                        data-foto="uploads/membros/membro_14_1781181473.png">
                  Maria Lua - Feminino                </option>
                                              <option value="9"
                        data-sexo="M"
                        data-nome="Milton"
                        data-foto="uploads/membros/membro_9_1781018654.jpg">
                  Milton Gomes da Silva Filho - Masculino                </option>
                                              <option value="17"
                        data-sexo="M"
                        data-nome="Myller"
                        data-foto="">
                  Myller de França Ferreira - Masculino                </option>
                                              <option value="23"
                        data-sexo="F"
                        data-nome="Nádia"
                        data-foto="uploads/membros/membro_23_1781025507.png">
                  Nádia Flausino Vieira Borges - Feminino                </option>
                                              <option value="11"
                        data-sexo="M"
                        data-nome="Sandoval"
                        data-foto="uploads/membros/membro_11_1781025520.png">
                  Sandoval Candido Farias Junior - Masculino                </option>
                                              <option value="16"
                        data-sexo="M"
                        data-nome="Vinicius"
                        data-foto="uploads/membros/membro_16_1781187747.png">
                  Vinicius Regis Felix - Masculino                </option>
                                              <option value="15"
                        data-sexo="F"
                        data-nome="Zélia"
                        data-foto="uploads/membros/membro_15_1781187456.png">
                  Zélia - Feminino                </option>
                          </select>
          </div>
          <button class="btn btn-primary" type="button" onclick="desenharPreview()"><i class="fa fa-refresh"></i> Atualizar previa</button>
          <button class="btn btn-success" type="button" onclick="baixarCartao()"><i class="fa fa-download"></i> Baixar imagem</button>
          <hr>
          <p class="text-muted">A composicao usa a arte do sexo do membro. A foto entra no espaco branco e o apelido, quando existir, aparece abaixo; se nao houver apelido, usa o primeiro nome.</p>
        </div>
      </div>
      </div>
</div>

<script>
var artesAniversario = {
  M: "uploads/aniversarios/arte_m_1786021519.jpeg",
  F: "uploads/aniversarios/arte_f_1786021526.jpeg"};

function carregarImagem(src) {
  return new Promise(function (resolve, reject) {
    if (!src) {
      reject(new Error('Imagem nao informada.'));
      return;
    }

    var img = new Image();
    img.onload = function () { resolve(img); };
    img.onerror = reject;
    img.src = src;
  });
}

function desenharImagemCover(ctx, img, x, y, w, h) {
  var escala = Math.max(w / img.width, h / img.height);
  var sw = w / escala;
  var sh = h / escala;
  var sx = (img.width - sw) / 2;
  var sy = (img.height - sh) / 2;
  ctx.drawImage(img, sx, sy, sw, sh, x, y, w, h);
}

function desenharTextoAjustado(ctx, texto, x, y, w) {
  var tamanho = 92;
  ctx.textAlign = 'center';
  ctx.textBaseline = 'middle';
  ctx.fillStyle = '#000';
  ctx.font = '700 ' + tamanho + 'px Arial, sans-serif';

  while (ctx.measureText(texto).width > w && tamanho > 42) {
    tamanho -= 4;
    ctx.font = '700 ' + tamanho + 'px Arial, sans-serif';
  }

  ctx.fillText(texto, x + (w / 2), y);
}

async function desenharPreview() {
  var canvas = document.getElementById('previewCanvas');
  var select = document.getElementById('previewMembro');

  if (!canvas || !select) return;

  var option = select.options[select.selectedIndex];
  var sexo = option.dataset.sexo || 'M';
  var nome = option.dataset.nome || 'Aniversariante';
  var foto = option.dataset.foto || '';
  var arte = artesAniversario[sexo] || '';
  var ctx = canvas.getContext('2d');

  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = '#fff';
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  if (!arte) {
    ctx.fillStyle = '#34495E';
    ctx.font = '42px Arial, sans-serif';
    ctx.textAlign = 'center';
    ctx.fillText('Cadastre a arte ' + (sexo === 'F' ? 'feminina' : 'masculina') + '.', canvas.width / 2, canvas.height / 2);
    return;
  }

  var arteImg = await carregarImagem(arte);
  ctx.drawImage(arteImg, 0, 0, canvas.width, canvas.height);

  var fotoX = 288;
  var fotoY = 390;
  var fotoW = 502;
  var fotoH = 480;

  ctx.fillStyle = '#fff';
  ctx.fillRect(fotoX, fotoY, fotoW, fotoH);

  if (foto) {
    var fotoImg = await carregarImagem(foto);
    desenharImagemCover(ctx, fotoImg, fotoX, fotoY, fotoW, fotoH);
  }

  desenharTextoAjustado(ctx, nome, 255, 945, 570);
}

function baixarCartao() {
  var canvas = document.getElementById('previewCanvas');
  var select = document.getElementById('previewMembro');
  var nome = 'cartao-aniversario';

  if (select && select.selectedOptions.length) {
    nome = 'aniversario-' + (select.selectedOptions[0].dataset.nome || 'membro').toLowerCase().replace(/[^a-z0-9]+/g, '-');
  }

  var link = document.createElement('a');
  link.download = nome + '.png';
  link.href = canvas.toDataURL('image/png');
  link.click();
}

document.addEventListener('DOMContentLoaded', desenharPreview);
</script>
        </div>
        <footer>
            <div class="pull-right">
                Motoclub Presenca 2.0            </div>
            <div class="clearfix"></div>
        </footer>
      </div>
    </div>
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<script src="build/js/custom.min.js"></script>
<script src="assets/js/app.js?v=1785509576"></script>
</body>
</html>
