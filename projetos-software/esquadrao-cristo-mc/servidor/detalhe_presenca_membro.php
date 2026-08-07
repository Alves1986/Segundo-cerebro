<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhe de Presenca | Motoclub Presenca</title>
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
    .mc-member-summary p {
        margin-bottom: 6px;
    }

    .mc-presence-detail-mobile {
        display: none;
    }

    .mc-presence-detail-card {
        margin-bottom: 12px;
        padding: 14px;
        background: #fff;
        border: 1px solid #E6E9ED;
        border-radius: 4px;
    }

    .mc-presence-detail-title {
        margin-bottom: 8px;
        color: #34495E;
        font-size: 16px;
        font-weight: 700;
    }

    .mc-presence-detail-line {
        margin-bottom: 5px;
        color: #73879C;
    }

    .mc-presence-detail-line strong {
        color: #34495E;
    }

    @media (max-width: 767px) {
        .mc-presence-detail-table {
            display: none;
        }

        .mc-presence-detail-mobile {
            display: block;
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
    <div class="title_left">
        <h3><i class="fa fa-list-alt"></i> Detalhe de Presenca</h3>
    </div>
    <div class="title_right text-right">
        <a href="presencas.php" class="btn btn-default">
            <i class="fa fa-arrow-left"></i> Voltar
        </a>
    </div>
</div>
<div class="clearfix"></div>

<div class="x_panel">
    <div class="x_title">
        <h2>Antônio Soares Júnior <small>historico individual</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content mc-member-summary">
                    <p><strong>Apelido:</strong> Soares</p>
                <p><strong>Base:</strong> PALMAS</p>
        <p><strong>Cargo:</strong> Diretor Financeiro</p>
        <p><strong>Entrada no grupo:</strong> 11/04/2017</p>
        <p class="text-muted">
            Mostrando apenas eventos Finalizados com data igual ou posterior a entrada do membro no grupo.
        </p>
    </div>
</div>

<div class="alert alert-info">
    <strong>Regra aplicada:</strong>
    este detalhe lista apenas eventos <strong>Finalizados</strong> realizados a partir da data de entrada do membro.</div>

<div class="row tile_count">
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-calendar"></i> Eventos elegiveis</span>
        <div class="count">164</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-check"></i> Foi</span>
        <div class="count green">26</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-times"></i> Nao foi</span>
        <div class="count red">137</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-percent"></i> Participacao</span>
        <div class="count">15.9%</div>
    </div>
</div>

<div class="x_panel">
    <div class="x_title">
        <h2>Eventos Elegiveis <small>presencas do membro</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="mc-presence-detail-table table-responsive">
            <table class="table table-striped jambo_table">
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Tipo</th>
                        <th>Base</th>
                        <th>Data</th>
                        <th>Status Evento</th>
                        <th>Presenca</th>
                        <th>Observacao</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                                                                                                    <tr>
                                <td>CAPITAL MOTO WEEK - DIA 7</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    01/08/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=101" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 6</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    31/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=100" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 5</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    30/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=99" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 4</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    26/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=98" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>PASSEIO E CAFÉ DA MANHÃ</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    26/07/2026                                                                            <br><small>07:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=273" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 3</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    25/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=97" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 2</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    24/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=96" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK - DIA 1</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    23/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=94" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>VOTAÇÃO - ELEIÇÃO PRESIDÊNCIA NACIONAL</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    19/07/2026                                                                            <br><small>21:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=93" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>PASSEIO E CAFÉ DA MANHÃ</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    19/07/2026                                                                            <br><small>07:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=272" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO DO EC PALMAS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    18/07/2026                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=271" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>VOTAÇÃO - ELEIÇÃO PRESIDÊNCIA NACIONAL</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    18/07/2026                                                                            <br><small>00:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=92" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>RODA ONLINE E ALINHAMENTO DO MOTO CULTO</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    14/07/2026                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=270" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHÃ - TAQUARUÇU GRANDE</td>
                                <td>Café</td>
                                <td>PALMAS</td>
                                <td>
                                    12/07/2026                                                                            <br><small>07:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-warning">Justificado</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=269" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ABUTRES</td>
                                <td>Aniversário</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    11/07/2026                                                                            <br><small>19:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=280" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ABERTURA DA CAMPANHA CEROL O</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    10/07/2026                                                                            <br><small>16:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=268" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>YAMAHA DAY</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    04/07/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=267" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO NACIONAIS MC</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    27/06/2026                                                                            <br><small>13:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=68" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>8° ANIVERSÁRIO DA AMG</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    27/06/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=88" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A. NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    22/06/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=237" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO FAMÍLIA ESQUADRÃO - DIAMANTE DA SERRA 21/06</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    21/06/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=236" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO MC MAVERICKS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    20/06/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=87" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTOCULTO</td>
                                <td>Motoculto</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    13/06/2026                                                                            <br><small>17:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=238" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>TO NA BRASA</td>
                                <td>Ação Social</td>
                                <td>PALMAS</td>
                                <td>
                                    13/06/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=66" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    29/05/2026                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=235" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENTREGA CESTA BÁSICA</td>
                                <td>Ação Social</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    28/05/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=80" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    23/05/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=77" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAMPANHA DOE VIDA DIA D</td>
                                <td>Ação Social</td>
                                <td>PALMAS</td>
                                <td>
                                    23/05/2026                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=61" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>DESFILE CÍVICO ANIVERSÁRIO DE PALMAS</td>
                                <td>Desfile</td>
                                <td>PALMAS</td>
                                <td>
                                    20/05/2026                                                                            <br><small>16:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=64" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO DO CAVALEIRO DE AÇO MC</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    19/05/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=65" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>2° ENCONTRO DE ANTIGOS TOCANTINS</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    16/05/2026                                                                            <br><small>13:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=86" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>1° ENCONTRO DE MOTOCICLISTAS E TRICICLISTAS DO JALAPÃO</td>
                                <td>Encontro</td>
                                <td>PALMAS</td>
                                <td>
                                    09/05/2026                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=78" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    07/05/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=2" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    07/05/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=1" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>TAQUARUÇU MOTO ROCK</td>
                                <td>Moto Rock</td>
                                <td>PALMAS</td>
                                <td>
                                    02/05/2026                                                                            <br><small>14:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=63" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>INALGURAÇÃO DA ROYAL</td>
                                <td>Inauguração</td>
                                <td>PALMAS</td>
                                <td>
                                    29/04/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=62" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    25/04/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=74" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENTREGA DE CESTA BÁSICA</td>
                                <td>Ação Social</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    10/04/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=82" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>2º ENCONTRO NACIONAL DO GIRO</td>
                                <td>Encontro</td>
                                <td>PALMAS</td>
                                <td>
                                    28/03/2026                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=60" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ - LIBER</td>
                                <td>Outro</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    07/03/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=12" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO ENTRE AMIGOS - CHURRASCO DO TIQUINHO EM LAJEADO</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    01/03/2026                                                                            <br><small>07:20</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=75" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    12/02/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=15" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>GIRO ESCOLAR | ASSENTAMENTO IRMÃ ADELAIDE</td>
                                <td>Ação Social</td>
                                <td>PALMAS</td>
                                <td>
                                    07/02/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=19" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Outro</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    05/02/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=13" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTOCULTO DE ANIVERSÁRIO DO FERNANDO E JOHN</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    31/01/2026                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=58" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>BATE VOLTA LAJEADO</td>
                                <td>Encontro</td>
                                <td>PALMAS</td>
                                <td>
                                    25/01/2026                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=76" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    22/01/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=5" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO DE MOTOS BAR DO ISAÍAS</td>
                                <td>Confraternização</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    18/01/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=7" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    08/01/2026                                                                            <br><small>19:30</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=4" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHA PORTO NACIONAL</td>
                                <td>Confraternização</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    04/01/2026                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=3" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    14/12/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td>Confirmado por pre-marcacao por foto</td>
                                <td>
                                    <a href="presenca_evento.php?id=131" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    11/12/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=133" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>AÇÃO SOCIAL - TIA ANGELINA</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    29/11/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=123" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO ISAIAS</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    29/11/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=128" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    20/11/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=134" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>COLETAMENTO INSANOS</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    14/11/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=135" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    31/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=130" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    24/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=124" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>NOVA DIRETORIA</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    21/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td>Confirmado por pre-marcacao por foto</td>
                                <td>
                                    <a href="presenca_evento.php?id=118" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    17/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td>Confirmado por pre-marcacao por foto</td>
                                <td>
                                    <a href="presenca_evento.php?id=136" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORDEM PASTOR OTÁVIO</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    16/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=129" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO VPR</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    04/10/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=122" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    02/09/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=126" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CHURRASCO DO TIKIN</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    23/08/2025                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=119" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    04/08/2025                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=117" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHÃ - PORTO NACIONAL</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    21/06/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=127" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO ESCÓRIA</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    21/06/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=125" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO ISAIAS</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    15/06/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=121" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    09/05/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=120" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    17/01/2025                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=132" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>NATAL BIKER</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    22/12/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=148" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ECM</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    15/12/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=149" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    26/11/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=150" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO INDOMÁVEIS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    23/11/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=151" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>INALGURAÇÃO - TRIUMPH</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    22/11/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=152" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHÁ TAQUARUÇU</td>
                                <td>Café</td>
                                <td>PALMAS</td>
                                <td>
                                    20/10/2024                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=201" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    07/09/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=154" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    08/08/2024                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=153" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHÃ HONDA - PORTO NACIONAL</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    27/04/2024                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=155" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONJUBAN - CBN TO</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    30/03/2024                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=202" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHA PORTO NACIONAL</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    30/12/2023                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=203" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>NATAL BIKER</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    18/12/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=114" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ECM</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    09/12/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=112" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO INDOMÁVEIS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    23/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=109" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    22/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=113" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>13º ANIVERSÁRIO ESCÓRIA</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    09/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=108" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    07/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=107" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>GINCANA ESCOLA ADVENTISTA</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    02/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=105" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAMPANHA DE DOAÇÃO DE SANGUE</td>
                                <td>Ação Social</td>
                                <td>PALMAS</td>
                                <td>
                                    02/09/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=104" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    31/08/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=106" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    14/06/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=110" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA AMNHÃ - PORTO NACIONAL - ECM</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    11/06/2023                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=116" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO VPR</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    07/11/2022                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=156" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    08/09/2022                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=205" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO MAVERIKS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    19/06/2022                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=229" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    13/05/2022                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=157" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    10/05/2022                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=208" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>NATAL BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    12/12/2021                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=158" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO DE FIM DE ANO</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    29/12/2020                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=234" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>BATE VOLTA MONTE DO CARMO</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    08/09/2020                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=232" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ DA MANHÃ</td>
                                <td>Café</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    05/07/2020                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=233" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    10/03/2020                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=209" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS-TO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    11/02/2020                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=210" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    08/02/2020                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=231" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    18/01/2020                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td>Confirmado por pré-marcação por foto</td>
                                <td>
                                    <a href="presenca_evento.php?id=230" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>2019-11-17 - 1º ENCONTRO DE MOTOCICLISTAS DO ISAÍAS - SILVANOPOLIS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    17/11/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=227" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    17/08/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=164" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO HELLMETS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    13/07/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=163" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>DESFILE CIVICO - PORTO NACIONAL</td>
                                <td>Desfile</td>
                                <td>PALMAS</td>
                                <td>
                                    13/07/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=162" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO MC</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    11/06/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=196" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ORDEM DOS TITÃS</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    08/06/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=159" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    01/06/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=195" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>PASSEIO ECM</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    30/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=198" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    27/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=197" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO DOS ABUTRES MC</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    23/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=194" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    18/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=193" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONVENÇÃO DE PASTORES</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    18/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=190" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    13/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=189" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>PASSEIO ECM</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    11/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=191" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    11/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=192" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    09/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=188" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    09/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=187" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO ORDEM DOS TITÃS</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    04/05/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=161" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    20/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=186" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    17/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=185" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    13/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=184" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>PASSEIO ECM</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    13/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=183" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PORTO NACIONAL</td>
                                <td>R.O.D.A</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    11/04/2019                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=182" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    10/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=181" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    04/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=180" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    04/04/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=179" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PORTO NACIONAL</td>
                                <td>Motoculto</td>
                                <td>REP. PORTO NACIONAL</td>
                                <td>
                                    30/03/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=160" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>WORKSHOP ESCÓRIA</td>
                                <td>Treinamento</td>
                                <td>PALMAS</td>
                                <td>
                                    23/03/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=178" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    14/03/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=177" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    13/03/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=176" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ECM</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    05/03/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=175" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ORAÇÃO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    27/02/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=174" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A - PALMAS</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    21/02/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=173" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>TREINAMENTO NOVOS MEMBROS</td>
                                <td>Treinamento</td>
                                <td>PALMAS</td>
                                <td>
                                    16/02/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=171" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    14/02/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=172" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>TREINAMENTO NOVOS MEMBROS</td>
                                <td>Treinamento</td>
                                <td>PALMAS</td>
                                <td>
                                    02/02/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=170" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPITAL MOTO WEEK</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    20/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=169" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAPACITAÇÃO NOVOS MEMBROS</td>
                                <td>Outro</td>
                                <td>PALMAS</td>
                                <td>
                                    07/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=115" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>QUINTA BIKER - PALMAS</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    06/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=165" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>R.O.D.A</td>
                                <td>R.O.D.A</td>
                                <td>PALMAS</td>
                                <td>
                                    06/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=168" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAFÉ - PALMAS</td>
                                <td>Café</td>
                                <td>PALMAS</td>
                                <td>
                                    05/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=166" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ECM</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    05/01/2019                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=167" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO - PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    11/12/2018                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=199" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTO CULTO DO ESQUADRÃO BASE/PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    22/01/2018                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=259" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    17/12/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=260" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>14º ANIVERSÁRIO DO GIRO</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    16/12/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=261" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO ALMOÇO COM MOTOCICLISTAS</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    04/11/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=264" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CONFRATERNIZAÇÃO COM CAFÉ NA MOTO PALMAS</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    04/11/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=265" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTOCIATA</td>
                                <td>Confraternização</td>
                                <td>PALMAS</td>
                                <td>
                                    04/11/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=266" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>LOUVOR E ADORAÇÃO IGREJA SEMENTE SANTA</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    03/11/2017                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=226" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOMENTO DE ORAÇÃO COM A EQUIPE DO GIRO</td>
                                <td>Oração</td>
                                <td>PALMAS</td>
                                <td>
                                    03/11/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=224" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ECMM BASE/DF E GO CONHECENDO PALMAS</td>
                                <td>Passeio</td>
                                <td>PALMAS</td>
                                <td>
                                    03/11/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=225" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ENCONTRO COM MOTOCILCISTAS NA PRAÇA</td>
                                <td>Quinta Biker</td>
                                <td>PALMAS</td>
                                <td>
                                    02/11/2017                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=223" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO MG VIVER PARA RODAR</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    21/10/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=222" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO DRAGÕES DE AÇO</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    16/10/2017                                                                            <br><small>08:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=221" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>MOTOEMA - ARAGUAINA</td>
                                <td>Encontro</td>
                                <td>PALMAS</td>
                                <td>
                                    09/09/2017                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=220" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>CAMPANHA CEROL</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    02/08/2017                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=218" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>ANIVERSÁRIO ANJOS AVESSO</td>
                                <td>Aniversário</td>
                                <td>PALMAS</td>
                                <td>
                                    10/06/2017                                                                            <br><small>07:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-danger">Ausente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=217" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                                                <tr>
                                <td>1º MOTO CULTO DO ESQUADRÃO BASE PALMAS</td>
                                <td>Motoculto</td>
                                <td>PALMAS</td>
                                <td>
                                    11/04/2017                                                                            <br><small>20:00</small>
                                                                    </td>
                                <td><span class="label label-default">Finalizado</span></td>
                                <td><span class="label label-success">Presente</span></td>
                                <td></td>
                                <td>
                                    <a href="presenca_evento.php?id=281" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit"></i> Editar presenca
                                    </a>
                                </td>
                            </tr>
                                                            </tbody>
            </table>
        </div>

        <div class="mc-presence-detail-mobile">
                                                                    <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 7</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 01/08/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=101" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 6</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 31/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=100" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 5</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 30/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=99" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 4</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 26/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=98" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">PASSEIO E CAFÉ DA MANHÃ</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 26/07/2026                                                            as 07:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=273" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 3</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 25/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=97" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 2</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 24/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=96" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK - DIA 1</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=94" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">VOTAÇÃO - ELEIÇÃO PRESIDÊNCIA NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 19/07/2026                                                            as 21:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=93" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">PASSEIO E CAFÉ DA MANHÃ</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 19/07/2026                                                            as 07:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=272" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO DO EC PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/07/2026                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=271" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">VOTAÇÃO - ELEIÇÃO PRESIDÊNCIA NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/07/2026                                                            as 00:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=92" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">RODA ONLINE E ALINHAMENTO DO MOTO CULTO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/07/2026                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=270" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHÃ - TAQUARUÇU GRANDE</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 12/07/2026                                                            as 07:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-warning">Justificado</span></div>
                                                <a href="presenca_evento.php?id=269" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ABUTRES</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/07/2026                                                            as 19:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=280" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ABERTURA DA CAMPANHA CEROL O</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/07/2026                                                            as 16:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=268" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">YAMAHA DAY</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/07/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=267" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO NACIONAIS MC</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 27/06/2026                                                            as 13:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=68" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">8° ANIVERSÁRIO DA AMG</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 27/06/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=88" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A. NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/06/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=237" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO FAMÍLIA ESQUADRÃO - DIAMANTE DA SERRA 21/06</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/06/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=236" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO MC MAVERICKS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/06/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=87" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTOCULTO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/06/2026                                                            as 17:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=238" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">TO NA BRASA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/06/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=66" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 29/05/2026                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=235" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENTREGA CESTA BÁSICA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 28/05/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=80" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/05/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=77" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAMPANHA DOE VIDA DIA D</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/05/2026                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=61" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">DESFILE CÍVICO ANIVERSÁRIO DE PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Desfile</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/05/2026                                                            as 16:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=64" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO DO CAVALEIRO DE AÇO MC</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 19/05/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=65" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">2° ENCONTRO DE ANTIGOS TOCANTINS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 16/05/2026                                                            as 13:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=86" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">1° ENCONTRO DE MOTOCICLISTAS E TRICICLISTAS DO JALAPÃO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Encontro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/05/2026                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=78" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/05/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=2" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/05/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=1" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">TAQUARUÇU MOTO ROCK</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Moto Rock</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/05/2026                                                            as 14:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=63" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">INALGURAÇÃO DA ROYAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Inauguração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 29/04/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=62" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 25/04/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=74" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENTREGA DE CESTA BÁSICA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/04/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=82" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">2º ENCONTRO NACIONAL DO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Encontro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 28/03/2026                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=60" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ - LIBER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/03/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=12" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO ENTRE AMIGOS - CHURRASCO DO TIQUINHO EM LAJEADO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 01/03/2026                                                            as 07:20                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=75" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 12/02/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=15" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">GIRO ESCOLAR | ASSENTAMENTO IRMÃ ADELAIDE</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/02/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=19" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 05/02/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=13" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTOCULTO DE ANIVERSÁRIO DO FERNANDO E JOHN</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 31/01/2026                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=58" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">BATE VOLTA LAJEADO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Encontro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 25/01/2026                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=76" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/01/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=5" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO DE MOTOS BAR DO ISAÍAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/01/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=7" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/01/2026                                                            as 19:30                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=4" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHA PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/01/2026                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=3" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/12/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                    <div class="mc-presence-detail-line"><strong>Observacao:</strong> Confirmado por pre-marcacao por foto</div>
                                                <a href="presenca_evento.php?id=131" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/12/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=133" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">AÇÃO SOCIAL - TIA ANGELINA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 29/11/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=123" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO ISAIAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 29/11/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=128" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/11/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=134" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">COLETAMENTO INSANOS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/11/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=135" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 31/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=130" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 24/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=124" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">NOVA DIRETORIA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                    <div class="mc-presence-detail-line"><strong>Observacao:</strong> Confirmado por pre-marcacao por foto</div>
                                                <a href="presenca_evento.php?id=118" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                    <div class="mc-presence-detail-line"><strong>Observacao:</strong> Confirmado por pre-marcacao por foto</div>
                                                <a href="presenca_evento.php?id=136" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORDEM PASTOR OTÁVIO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 16/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=129" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO VPR</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/10/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=122" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/09/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=126" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CHURRASCO DO TIKIN</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/08/2025                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=119" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/08/2025                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=117" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHÃ - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/06/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=127" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO ESCÓRIA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/06/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=125" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO ISAIAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 15/06/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=121" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/05/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=120" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/01/2025                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=132" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">NATAL BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/12/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=148" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 15/12/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=149" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 26/11/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=150" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO INDOMÁVEIS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/11/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=151" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">INALGURAÇÃO - TRIUMPH</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/11/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=152" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHÁ TAQUARUÇU</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/10/2024                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=201" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/09/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=154" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/08/2024                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=153" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHÃ HONDA - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 27/04/2024                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=155" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONJUBAN - CBN TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 30/03/2024                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=202" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHA PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 30/12/2023                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=203" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">NATAL BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/12/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=114" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/12/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=112" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO INDOMÁVEIS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=109" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=113" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">13º ANIVERSÁRIO ESCÓRIA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=108" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=107" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">GINCANA ESCOLA ADVENTISTA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=105" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAMPANHA DE DOAÇÃO DE SANGUE</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Ação Social</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/09/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=104" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 31/08/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=106" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/06/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=110" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA AMNHÃ - PORTO NACIONAL - ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/06/2023                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=116" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO VPR</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/11/2022                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=156" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/09/2022                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=205" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO MAVERIKS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 19/06/2022                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=229" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/05/2022                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=157" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/05/2022                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=208" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">NATAL BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 12/12/2021                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=158" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO DE FIM DE ANO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 29/12/2020                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=234" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">BATE VOLTA MONTE DO CARMO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/09/2020                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=232" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ DA MANHÃ</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 05/07/2020                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=233" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/03/2020                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=209" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS-TO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/02/2020                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=210" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/02/2020                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=231" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/01/2020                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                    <div class="mc-presence-detail-line"><strong>Observacao:</strong> Confirmado por pré-marcação por foto</div>
                                                <a href="presenca_evento.php?id=230" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">2019-11-17 - 1º ENCONTRO DE MOTOCICLISTAS DO ISAÍAS - SILVANOPOLIS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/11/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=227" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/08/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=164" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO HELLMETS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/07/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=163" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">DESFILE CIVICO - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Desfile</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/07/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=162" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO MC</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/06/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=196" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ORDEM DOS TITÃS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 08/06/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=159" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 01/06/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=195" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">PASSEIO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 30/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=198" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 27/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=197" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO DOS ABUTRES MC</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=194" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=193" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONVENÇÃO DE PASTORES</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 18/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=190" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=189" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">PASSEIO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=191" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=192" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=188" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=187" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO ORDEM DOS TITÃS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/05/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=161" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=186" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=185" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=184" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">PASSEIO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=183" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/04/2019                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=182" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=181" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=180" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/04/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=179" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> REP. PORTO NACIONAL</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 30/03/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=160" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">WORKSHOP ESCÓRIA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Treinamento</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 23/03/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=178" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/03/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=177" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 13/03/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=176" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 05/03/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=175" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ORAÇÃO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 27/02/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=174" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/02/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=173" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">TREINAMENTO NOVOS MEMBROS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Treinamento</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 16/02/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=171" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 14/02/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=172" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">TREINAMENTO NOVOS MEMBROS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Treinamento</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/02/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=170" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPITAL MOTO WEEK</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 20/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=169" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAPACITAÇÃO NOVOS MEMBROS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Outro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 07/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=115" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">QUINTA BIKER - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 06/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=165" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> R.O.D.A</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 06/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=168" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAFÉ - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Café</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 05/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=166" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ECM</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 05/01/2019                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=167" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO - PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/12/2018                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=199" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTO CULTO DO ESQUADRÃO BASE/PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 22/01/2018                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=259" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 17/12/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=260" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">14º ANIVERSÁRIO DO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 16/12/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=261" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO ALMOÇO COM MOTOCICLISTAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/11/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=264" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CONFRATERNIZAÇÃO COM CAFÉ NA MOTO PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/11/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=265" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTOCIATA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Confraternização</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 04/11/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=266" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">LOUVOR E ADORAÇÃO IGREJA SEMENTE SANTA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 03/11/2017                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=226" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOMENTO DE ORAÇÃO COM A EQUIPE DO GIRO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Oração</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 03/11/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=224" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ECMM BASE/DF E GO CONHECENDO PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Passeio</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 03/11/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=225" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ENCONTRO COM MOTOCILCISTAS NA PRAÇA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Quinta Biker</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/11/2017                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=223" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO MG VIVER PARA RODAR</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 21/10/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=222" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO DRAGÕES DE AÇO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 16/10/2017                                                            as 08:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=221" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">MOTOEMA - ARAGUAINA</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Encontro</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 09/09/2017                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=220" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">CAMPANHA CEROL</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 02/08/2017                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=218" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">ANIVERSÁRIO ANJOS AVESSO</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Aniversário</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 10/06/2017                                                            as 07:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-danger">Ausente</span></div>
                                                <a href="presenca_evento.php?id=217" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                                        <div class="mc-presence-detail-card">
                        <div class="mc-presence-detail-title">1º MOTO CULTO DO ESQUADRÃO BASE PALMAS</div>
                        <div class="mc-presence-detail-line"><strong>Tipo:</strong> Motoculto</div>
                        <div class="mc-presence-detail-line"><strong>Base:</strong> PALMAS</div>
                        <div class="mc-presence-detail-line">
                            <strong>Data:</strong> 11/04/2017                                                            as 20:00                                                    </div>
                        <div class="mc-presence-detail-line"><strong>Status Evento:</strong> <span class="label label-default">Finalizado</span></div>
                        <div class="mc-presence-detail-line"><strong>Presenca:</strong> <span class="label label-success">Presente</span></div>
                                                <a href="presenca_evento.php?id=281" class="btn btn-success btn-block">
                            <i class="fa fa-edit"></i> Editar presenca
                        </a>
                    </div>
                                    </div>
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
