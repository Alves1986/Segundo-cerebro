<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cargos | Motoclub Presenca</title>
    <link rel="icon" type="image/png" href="assets/images/motoclub-icon.png">
    <link rel="apple-touch-icon" href="assets/images/motoclub-icon.png">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="assets/css/app.css?v=1785509576" rel="stylesheet">
            <!-- Google Analytics GA4 -->
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
  <div class="title_left"><h3>Cargos <small>funcoes do motoclub</small></h3></div>
  <div class="title_right text-right"><a class="btn btn-success" href="novo_cargo.php"><i class="fa fa-plus"></i> Novo cargo</a></div>
</div>
<div class="clearfix"></div>
<div class="x_panel">
  <div class="x_title"><h2>Lista de cargos <small>total: 14</small></h2><div class="clearfix"></div></div>
  <div class="x_content table-responsive">
    <table class="table table-striped jambo_table">
      <thead><tr><th>Nome</th><th>Descricao</th><th>Diretoria</th><th>Status</th><th>Criado em</th><th>Acoes</th></tr></thead>
      <tbody>
                          <tr>
            <td>Alfa 1</td>
            <td>Alfa 1</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>08/05/2026 12:15</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=8"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Capelania</td>
            <td>Prestação de assistência religiosa, espiritual e emocional exercida por capelães em ambientes seculares, com foco principal nos setores hospitalar, prisional e militar;</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>29/07/2026 14:47</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=14"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Dependente</td>
            <td>Dependente de Membro</td>
            <td><span class="label label-default">Nao</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>08/05/2026 14:16</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=12"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Diretor de Base</td>
            <td>Responsável pela direção da base</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=1"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Diretor de Logística</td>
            <td>Responsável pela logística do MC e de Eventos Oficiais</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>08/05/2026 14:13</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=11"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Diretor Financeiro</td>
            <td>Responsável financeiro</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=6"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Diretor Regional</td>
            <td>Diretor Regional</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>10/05/2026 23:26</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=13"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Diretor Social</td>
            <td>Responsável por Mídias Sociais e Ações Sociais</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>08/05/2026 14:09</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=10"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Membro</td>
            <td>Membro oficial</td>
            <td><span class="label label-default">Nao</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=3"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Pastor</td>
            <td>Pastor do MC</td>
            <td><span class="label label-default">Nao</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>08/05/2026 12:15</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=9"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Prospect</td>
            <td>Membro em avaliação</td>
            <td><span class="label label-default">Nao</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=4"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Sargento de Armas</td>
            <td>Responsável pela disciplina</td>
            <td><span class="label label-default">Nao</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=7"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Secretário</td>
            <td>Responsável pelas atas e registros</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=5"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
                  <tr>
            <td>Vice Diretor de Base</td>
            <td>Auxilia a direção</td>
            <td><span class="label label-success">Sim</span></td>
            <td><span class="label label-success">Ativo</span></td>
            <td>07/05/2026 20:31</td>
            <td><a class="btn btn-primary btn-xs" href="editar_cargo.php?id=2"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
              </tbody>
    </table>
    <div class="mc-pagination"><div class="mc-pagination-summary">Mostrando 1-14 de 14</div><div class="mc-pagination-controls"><a class="btn btn-default btn-sm disabled" href="?pagina=1"><i class="fa fa-angle-left"></i></a><a class="btn btn-success btn-sm" href="?pagina=1">1</a><a class="btn btn-default btn-sm disabled" href="?pagina=1"><i class="fa fa-angle-right"></i></a></div><form class="mc-pagination-size" method="get"><input type="hidden" name="pagina" value="1"><label>Por pagina</label><select name="por_pagina" class="form-control input-sm" onchange="this.form.submit()"><option value="10">10</option><option value="20" selected>20</option><option value="50">50</option><option value="100">100</option></select></form></div>  </div>
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
