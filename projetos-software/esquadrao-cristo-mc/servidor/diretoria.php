<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diretoria | Motoclub Presenca</title>
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
    .mc-board-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 14px;
    }

    .mc-board-card {
        padding: 16px;
        background: #fff;
        border: 1px solid #E6E9ED;
        border-radius: 6px;
    }

    .mc-board-person {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .mc-board-photo,
    .mc-board-empty {
        width: 54px;
        height: 54px;
        flex: 0 0 auto;
        border-radius: 50%;
    }

    .mc-board-photo {
        object-fit: cover;
    }

    .mc-board-empty {
        display: grid;
        place-items: center;
        color: #1ABB9C;
        background: #F5F7FA;
        border: 1px solid #E6E9ED;
    }

    .mc-board-card h4 {
        margin: 0;
        color: #2A3F54;
        font-weight: 800;
    }

    .mc-board-card p {
        margin: 4px 0 0;
        color: #73879C;
    }
    .mc-mandate-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:18px}
    .mc-mandate-card{display:block;color:#2A3F54!important;border:1px solid #E6E9ED;border-radius:9px;overflow:hidden;background:#fff;transition:.2s}
    .mc-mandate-card:hover{transform:translateY(-2px);box-shadow:0 8px 22px rgba(42,63,84,.12)}
    .mc-mandate-cover{min-height:150px;padding:20px;background:linear-gradient(135deg,#2A3F54,#17314a);color:#fff}
    .mc-mandate-cover h3{color:#fff;margin:8px 0 4px;font-weight:800}
    .mc-mandate-photos{display:flex;margin-top:18px}
    .mc-mandate-photo,.mc-mandate-avatar{width:48px;height:48px;border-radius:50%;object-fit:cover;border:3px solid #fff;margin-right:-10px;background:#edf2f5}
    .mc-mandate-avatar{display:grid;place-items:center;color:#73879C}
    .mc-mandate-info{padding:14px 20px}
    @media(max-width:767px){.mc-mandate-grid{grid-template-columns:1fr}.title_right .btn{margin-bottom:6px}}
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
  <div class="title_left"><h3>Diretoria <small>atual e historico</small></h3></div>
  <div class="title_right text-right">
    <a class="btn btn-success" href="novo_mandato_diretoria.php"><i class="fa fa-plus"></i> Novo mandato</a>
    <a class="btn btn-default" href="cargos.php"><i class="fa fa-cog"></i> Marcar cargos de diretoria</a>
  </div>
</div>
<div class="clearfix"></div>

<div class="x_panel">
  <div class="x_title"><h2>Mandatos de diretoria <small>em ordem de posse</small></h2><div class="clearfix"></div></div>
  <div class="x_content">
        <div class="mc-mandate-grid">
              <a class="mc-mandate-card" href="diretoria_mandato.php?id=6">
          <div class="mc-mandate-cover">
            <small>DIRETORIA 5 · PALMAS</small>
            <h3>5ª Gestão 2025 - Atual</h3>
            <div>14/10/2025 — Atual</div>
            <div class="mc-mandate-photos">
                                                <img class="mc-mandate-photo" src="uploads/membros/membro_5_1781263845.png" alt="Fernando Lucas Alves de Araújo">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_6_1781008349.jpeg" alt="John Dalto Alves de Sousa">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_7_1781187515.png" alt="Antônio Soares Júnior">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_8_1781187624.png" alt="Heráclito Botelho Toscano Barreto Junior">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_10_1781187343.png" alt="João Adolfo de Abreu Guimarães">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_9_1781018654.jpg" alt="Milton Gomes da Silva Filho">
                                          </div>
          </div>
          <div class="mc-mandate-info"><strong>7 integrante(s)</strong><span class="pull-right">Abrir organograma <i class="fa fa-arrow-right"></i></span></div>
        </a>
              <a class="mc-mandate-card" href="diretoria_mandato.php?id=5">
          <div class="mc-mandate-cover">
            <small>DIRETORIA 4 · PALMAS</small>
            <h3>4ª Gestão 2022 - 2025</h3>
            <div>22/01/2022 — 13/10/2025</div>
            <div class="mc-mandate-photos">
                                                <img class="mc-mandate-photo" src="uploads/membros/membro_12_1781025435.png" alt="Eber Miranda de Sousa">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_5_1781263845.png" alt="Fernando Lucas Alves de Araújo">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_7_1781187515.png" alt="Antônio Soares Júnior">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_20_1781188434.png" alt="Gildenor Pereira Barros Junior">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_6_1781008349.jpeg" alt="John Dalto Alves de Sousa">
                                          </div>
          </div>
          <div class="mc-mandate-info"><strong>5 integrante(s)</strong><span class="pull-right">Abrir organograma <i class="fa fa-arrow-right"></i></span></div>
        </a>
              <a class="mc-mandate-card" href="diretoria_mandato.php?id=4">
          <div class="mc-mandate-cover">
            <small>DIRETORIA 3 · PALMAS</small>
            <h3>3ª Gestão 2020 - 2022</h3>
            <div>01/01/2020 — 31/12/2022</div>
            <div class="mc-mandate-photos">
                                                <img class="mc-mandate-photo" src="uploads/membros/membro_27_1781188230.png" alt="Ildson Oliveira de Lima">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_20_1781188434.png" alt="Gildenor Pereira Barros Junior">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_12_1781025435.png" alt="Eber Miranda de Sousa">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_5_1781263845.png" alt="Fernando Lucas Alves de Araújo">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_7_1781187515.png" alt="Antônio Soares Júnior">
                                          </div>
          </div>
          <div class="mc-mandate-info"><strong>5 integrante(s)</strong><span class="pull-right">Abrir organograma <i class="fa fa-arrow-right"></i></span></div>
        </a>
              <a class="mc-mandate-card" href="diretoria_mandato.php?id=3">
          <div class="mc-mandate-cover">
            <small>DIRETORIA 2 · PALMAS</small>
            <h3>2ª Gestão - 2019 - 2020</h3>
            <div>01/01/2019 — 31/12/2020</div>
            <div class="mc-mandate-photos">
                                                <img class="mc-mandate-photo" src="uploads/membros/membro_27_1781188230.png" alt="Ildson Oliveira de Lima">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_32_1785337242.png" alt="Fabio">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_28_1781185603.png" alt="Algemiro">
                                                                <img class="mc-mandate-photo" src="uploads/membros/membro_20_1781188434.png" alt="Gildenor Pereira Barros Junior">
                                          </div>
          </div>
          <div class="mc-mandate-info"><strong>4 integrante(s)</strong><span class="pull-right">Abrir organograma <i class="fa fa-arrow-right"></i></span></div>
        </a>
              <a class="mc-mandate-card" href="diretoria_mandato.php?id=2">
          <div class="mc-mandate-cover">
            <small>DIRETORIA 1 · PALMAS</small>
            <h3>1ª Gestão 2016 - 2018</h3>
            <div>01/01/2016 — 31/12/2018</div>
            <div class="mc-mandate-photos">
                                                <img class="mc-mandate-photo" src="uploads/membros/membro_27_1781188230.png" alt="Ildson Oliveira de Lima">
                                          </div>
          </div>
          <div class="mc-mandate-info"><strong>1 integrante(s)</strong><span class="pull-right">Abrir organograma <i class="fa fa-arrow-right"></i></span></div>
        </a>
          </div>
  </div>
</div>

<div class="x_panel">
  <div class="x_title"><h2>Diretoria atual <small>7 membro(s)</small></h2><div class="clearfix"></div></div>
  <div class="x_content">
        <div class="mc-board-grid">
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_11_1781025520.png" class="mc-board-photo" alt="Sandoval Candido Farias Junior">
                        <div>
              <h4>Sandoval Candido Farias Junior</h4>
              <p>Alfa 1 - PALMAS</p>
              <a href="perfil_membro.php?id=11">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_5_1781263845.png" class="mc-board-photo" alt="Fernando Lucas Alves de Araújo">
                        <div>
              <h4>Fernando Lucas Alves de Araújo</h4>
              <p>Diretor de Base - PALMAS</p>
              <a href="perfil_membro.php?id=5">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_10_1781187343.png" class="mc-board-photo" alt="João Adolfo de Abreu Guimarães">
                        <div>
              <h4>João Adolfo de Abreu Guimarães</h4>
              <p>Diretor de Logística - PALMAS</p>
              <a href="perfil_membro.php?id=10">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_7_1781187515.png" class="mc-board-photo" alt="Antônio Soares Júnior">
                        <div>
              <h4>Antônio Soares Júnior</h4>
              <p>Diretor Financeiro - PALMAS</p>
              <a href="perfil_membro.php?id=7">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_27_1781188230.png" class="mc-board-photo" alt="Ildson Oliveira de Lima">
                        <div>
              <h4>Ildson Oliveira de Lima</h4>
              <p>Diretor Regional - PALMAS</p>
              <a href="perfil_membro.php?id=27">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_8_1781187624.png" class="mc-board-photo" alt="Heráclito Botelho Toscano Barreto Junior">
                        <div>
              <h4>Heráclito Botelho Toscano Barreto Junior</h4>
              <p>Secretário - PALMAS</p>
              <a href="perfil_membro.php?id=8">Ver perfil</a>
            </div>
          </div>
        </div>
              <div class="mc-board-card">
          <div class="mc-board-person">
                          <img src="uploads/membros/membro_6_1781008349.jpeg" class="mc-board-photo" alt="John Dalto Alves de Sousa">
                        <div>
              <h4>John Dalto Alves de Sousa</h4>
              <p>Vice Diretor de Base - PALMAS</p>
              <a href="perfil_membro.php?id=6">Ver perfil</a>
            </div>
          </div>
        </div>
          </div>
  </div>
</div>

<div class="x_panel">
  <div class="x_title"><h2>Historico de diretorias <small>por periodo registrado</small></h2><div class="clearfix"></div></div>
  <div class="x_content table-responsive">
    <table class="table table-striped jambo_table">
      <thead><tr><th>Membro</th><th>Cargo</th><th>Base</th><th>Inicio</th><th>Fim</th><th>Status na epoca</th><th>Acoes</th></tr></thead>
      <tbody>
                          <tr>
            <td>John Dalto Alves de Sousa<br><small>John</small></td>
            <td>Vice Diretor de Base</td>
            <td>PALMAS</td>
            <td>29/07/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=6"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>John Dalto Alves de Sousa<br><small>John</small></td>
            <td>Vice Diretor de Base</td>
            <td>REP. PORTO NACIONAL</td>
            <td>12/07/2026</td>
            <td>29/07/2026</td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=6"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>Fernando Lucas Alves de Araújo<br><small>Capl. Fernando</small></td>
            <td>Diretor de Base</td>
            <td>PALMAS</td>
            <td>12/06/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=5"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>João Adolfo de Abreu Guimarães<br><small>João</small></td>
            <td>Diretor de Logística</td>
            <td>PALMAS</td>
            <td>11/06/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=10"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>Antônio Soares Júnior<br><small>Soares</small></td>
            <td>Diretor Financeiro</td>
            <td>PALMAS</td>
            <td>11/06/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=7"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>Ildson Oliveira de Lima<br><small>Ildson</small></td>
            <td>Diretor Regional</td>
            <td>PALMAS</td>
            <td>11/06/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=27"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>Heráclito Botelho Toscano Barreto Junior<br><small>Toscano</small></td>
            <td>Secretário</td>
            <td>PALMAS</td>
            <td>11/06/2026</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=8"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>John Dalto Alves de Sousa<br><small>John</small></td>
            <td>Vice Diretor de Base</td>
            <td>PALMAS</td>
            <td>13/10/2025</td>
            <td>12/07/2026</td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=6"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>John Dalto Alves de Sousa<br><small>John</small></td>
            <td>Diretor Social</td>
            <td>PALMAS</td>
            <td>22/01/2022</td>
            <td>13/10/2025</td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=6"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
                  <tr>
            <td>Sandoval Candido Farias Junior<br><small>Sandoval</small></td>
            <td>Alfa 1</td>
            <td>PALMAS</td>
            <td>15/11/2017</td>
            <td><span class="label label-success">Atual</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td><a class="btn btn-info btn-xs" href="perfil_membro.php?id=11"><i class="fa fa-id-card"></i> Perfil</a></td>
          </tr>
              </tbody>
    </table>
  </div>
</div>

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
