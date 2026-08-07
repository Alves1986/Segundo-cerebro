<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presenca do Evento | Motoclub Presenca</title>
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
    .mc-presence-summary .tile_stats_count {
        min-height: 92px;
    }

    .mc-presence-event {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 260px;
        gap: 18px;
        align-items: center;
    }

    .mc-presence-photo {
        width: 100%;
        max-height: 210px;
        object-fit: cover;
        border: 1px solid #E6E9ED;
        border-radius: 4px;
    }

    .mc-mobile-presence {
        display: none;
    }

    .mc-mobile-presence-item {
        margin-bottom: 12px;
        padding: 14px;
        background: #fff;
        border: 1px solid #E6E9ED;
        border-radius: 4px;
    }

    .mc-mobile-presence-title {
        margin-bottom: 8px;
        color: #34495E;
        font-size: 16px;
        font-weight: 700;
    }

    .mc-mobile-presence-line {
        margin-bottom: 5px;
        color: #73879C;
    }

    .mc-mobile-presence-line strong {
        color: #34495E;
    }

    .mc-checkin-share {
        display: grid;
        grid-template-columns: 190px minmax(0, 1fr);
        gap: 18px;
        align-items: center;
    }

    .mc-checkin-share-qr {
        width: 180px;
        height: 180px;
        padding: 10px;
        background: #fff;
        border: 1px solid #E6E9ED;
        border-radius: 6px;
    }

    .mc-checkin-share-url {
        display: block;
        margin: 8px 0 14px;
        padding: 10px 12px;
        overflow: hidden;
        color: #2A3F54;
        background: #F7F7F7;
        border: 1px solid #E6E9ED;
        border-radius: 4px;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .mc-checkin-share-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    @media (max-width: 767px) {
        .mc-presence-event {
            grid-template-columns: 1fr;
        }

        .mc-checkin-share {
            grid-template-columns: 1fr;
        }

        .mc-desktop-presence {
            display: none;
        }

        .mc-mobile-presence {
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
        <h3><i class="fa fa-check-square-o"></i> Presenca do Evento</h3>
    </div>
    <div class="title_right text-right">
        <a href="eventos.php" class="btn btn-default">
            <i class="fa fa-arrow-left"></i> Voltar
        </a>
        <a href="reconhecimento_presenca.php?id_evento=71" class="btn btn-warning">
            <i class="fa fa-camera"></i> Pre-marcar por foto
        </a>
    </div>
</div>
<div class="clearfix"></div>



<div class="alert alert-warning">
    <strong>Regra aplicada:</strong>
    esta lista mostra somente membros <strong>Ativos</strong>, obrigatorios em eventos, que ja faziam parte do MC na data deste evento.
</div>

<div class="x_panel">
    <div class="x_title">
        <h2>ANIVERSÁRIO ÁGUIAS DE HAASTS MC <small>resumo do evento</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="mc-presence-event">
            <div>
                <p><strong>Tipo:</strong> Aniversário</p>
                <p><strong>Base:</strong> PALMAS</p>
                <p>
                    <strong>Data:</strong> 08/08/2026                                    </p>
                            </div>

                            <img src="uploads/eventos/evento_71_1785876639.png" class="mc-presence-photo" alt="Foto do evento">
                    </div>
    </div>
</div>

<div class="x_panel">
    <div class="x_title">
        <h2>Check-in por QR Code <small>geolocalizacao e auditoria</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="mc-checkin-share">
            <img class="mc-checkin-share-qr" src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&amp;data=https%3A%2F%2Fdaltoinfo.com.br%2Fmc%2Fcheckin_evento.php%3Fid_evento%3D71" alt="QR Code do check-in">
            <div>
                <p>
                    Mostre este QR Code no evento ou compartilhe o link. O membro seleciona o nome, captura a localizacao e,
                    estando dentro do raio configurado, a presenca e marcada automaticamente.
                </p>
                <span id="linkCheckinEvento" class="mc-checkin-share-url" data-url="https://daltoinfo.com.br/mc/checkin_evento.php?id_evento=71">https://daltoinfo.com.br/mc/checkin_evento.php?id_evento=71</span>
                <div class="mc-checkin-share-actions">
                    <button type="button" class="btn btn-success" onclick="copiarCheckin()">
                        <i class="fa fa-copy"></i> Copiar link
                    </button>
                    <a class="btn btn-info" href="https://daltoinfo.com.br/mc/checkin_evento.php?id_evento=71" target="_blank" rel="noopener">
                        <i class="fa fa-external-link"></i> Abrir check-in
                    </a>
                    <a class="btn btn-default" href="https://wa.me/?text=Check-in+do+evento%3A+ANIVERS%C3%81RIO+%C3%81GUIAS+DE+HAASTS+MC%0Ahttps%3A%2F%2Fdaltoinfo.com.br%2Fmc%2Fcheckin_evento.php%3Fid_evento%3D71" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> Compartilhar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row tile_count mc-presence-summary">
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users"></i> Membros elegiveis</span>
        <div class="count">19</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-check"></i> Presentes</span>
        <div class="count green">0</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-times"></i> Ausentes</span>
        <div class="count red">19</div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-percent"></i> Presenca</span>
        <div class="count">0%</div>
    </div>
</div>

<form method="post" action="presenca_evento.php?id=71" onsubmit="return prepararEnvio();">
    <div class="x_panel">
        <div class="x_title">
            <h2>Lista de Membros <small>marcacao de presenca</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <button type="button" class="btn btn-xs btn-success" onclick="marcarTodos('Presente')">
                        Todos Presentes
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-xs btn-danger" onclick="marcarTodos('Ausente')">
                        Todos Ausentes
                    </button>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="mc-desktop-presence table-responsive">
                <table class="table table-striped jambo_table">
                    <thead>
                        <tr>
                            <th>Membro</th>
                            <th>Base</th>
                            <th>Cargo</th>
                            <th>Status</th>
                            <th>Presenca</th>
                            <th>Observacao</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                                                                    <tr>
                                    <td>
                                        Algemiro                                                                                    <br><small>Algemiro</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[28]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[28]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Antônio Soares Júnior                                                                                    <br><small>Soares</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Diretor Financeiro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[7]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[7]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Betânia                                                                                    <br><small>Betânia</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[31]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[31]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Eber Miranda de Sousa                                                                                    <br><small>Pr. Eber</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Pastor</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[12]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[12]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Erika Silper                                                                                    <br><small>Erica</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[29]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[29]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Fabio                                                                                    <br><small>Fabio</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[32]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[32]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Fernando Lucas Alves de Araújo                                                                                    <br><small>Capl. Fernando</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Diretor de Base</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[5]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[5]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Gildenor Pereira Barros Junior                                                                                    <br><small>Guerriro</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[20]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[20]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Heráclito Botelho Toscano Barreto Junior                                                                                    <br><small>Toscano</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Secretário</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[8]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[8]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Ildson Oliveira de Lima                                                                                    <br><small>Ildson</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Diretor Regional</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[27]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[27]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Jales                                                                                    <br><small>Jales</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Prospect</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[43]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[43]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        João Adolfo de Abreu Guimarães                                                                                    <br><small>João</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Diretor de Logística</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[10]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[10]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        John Dalto Alves de Sousa                                                                                    <br><small>John</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Vice Diretor de Base</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[6]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[6]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        José Neto                                                                                    <br><small>Neto</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[18]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[18]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Leo Marcio Bona                                                                                    <br><small>Bona</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[25]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[25]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Milton Gomes da Silva Filho                                                                                    <br><small>Milton</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Diretor Social</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[9]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[9]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Nádia Flausino Vieira Borges                                                                                    <br><small>Nádia</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[23]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[23]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Sandoval Candido Farias Junior                                                                                    <br><small>Sandoval</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Alfa 1</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[11]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[11]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                                            <tr>
                                    <td>
                                        Vinicius Regis Felix                                                                                    <br><small>Vinicius</small>
                                                                            </td>
                                    <td>PALMAS</td>
                                    <td>Membro</td>
                                    <td><span class="label label-success">Ativo</span></td>
                                    <td style="min-width: 180px;">
                                        <select name="presenca[16]" class="form-control" data-presenca="1">
                                            <option value="Presente" >Presente</option>
                                            <option value="Ausente" selected>Ausente</option>
                                            <option value="Justificado" >Justificado</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 260px;">
                                        <input type="text" name="observacao[16]" class="form-control" value="" placeholder="Observacao">
                                    </td>
                                </tr>
                                                                        </tbody>
                </table>
            </div>

            <div class="mc-mobile-presence">
                                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Algemiro</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Algemiro</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[28]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[28]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Antônio Soares Júnior</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Soares</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Diretor Financeiro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[7]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[7]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Betânia</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Betânia</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[31]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[31]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Eber Miranda de Sousa</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Pr. Eber</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Pastor</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[12]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[12]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Erika Silper</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Erica</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[29]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[29]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Fabio</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Fabio</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[32]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[32]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Fernando Lucas Alves de Araújo</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Capl. Fernando</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Diretor de Base</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[5]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[5]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Gildenor Pereira Barros Junior</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Guerriro</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[20]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[20]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Heráclito Botelho Toscano Barreto Junior</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Toscano</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Secretário</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[8]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[8]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Ildson Oliveira de Lima</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Ildson</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Diretor Regional</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[27]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[27]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Jales</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Jales</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Prospect</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[43]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[43]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">João Adolfo de Abreu Guimarães</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> João</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Diretor de Logística</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[10]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[10]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">John Dalto Alves de Sousa</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> John</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Vice Diretor de Base</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[6]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[6]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">José Neto</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Neto</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[18]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[18]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Leo Marcio Bona</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Bona</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[25]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[25]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Milton Gomes da Silva Filho</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Milton</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Diretor Social</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[9]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[9]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Nádia Flausino Vieira Borges</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Nádia</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[23]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[23]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Sandoval Candido Farias Junior</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Sandoval</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Alfa 1</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[11]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[11]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                                    <div class="mc-mobile-presence-item">
                            <div class="mc-mobile-presence-title">Vinicius Regis Felix</div>

                                                            <div class="mc-mobile-presence-line"><strong>Apelido:</strong> Vinicius</div>
                            
                            <div class="mc-mobile-presence-line"><strong>Base:</strong> PALMAS</div>
                            <div class="mc-mobile-presence-line"><strong>Cargo:</strong> Membro</div>
                            <div class="mc-mobile-presence-line"><strong>Status:</strong> <span class="label label-success">Ativo</span></div>

                            <div class="form-group">
                                <label>Presenca</label>
                                <select name="presenca[16]" class="form-control" data-presenca="1">
                                    <option value="Presente" >Presente</option>
                                    <option value="Ausente" selected>Ausente</option>
                                    <option value="Justificado" >Justificado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Observacao</label>
                                <input type="text" name="observacao[16]" class="form-control" value="" placeholder="Observacao">
                            </div>
                        </div>
                                                </div>

            <div class="ln_solid"></div>

            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> Salvar Presencas
            </button>
            <a href="eventos.php" class="btn btn-default">
                <i class="fa fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</form>

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
<script>
function marcarTodos(status) {
    document.querySelectorAll('select[data-presenca="1"]').forEach(function(select) {
        select.value = status;
    });
}

function copiarCheckin() {
    var campo = document.getElementById('linkCheckinEvento');

    if (!campo) {
        return;
    }

    var texto = campo.getAttribute('data-url') || campo.textContent;

    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(texto);
        return;
    }

    var temporario = document.createElement('textarea');
    temporario.value = texto;
    document.body.appendChild(temporario);
    temporario.select();
    document.execCommand('copy');
    document.body.removeChild(temporario);
}

function prepararEnvio() {
    const desktop = document.querySelector('.mc-desktop-presence');
    const mobile = document.querySelector('.mc-mobile-presence');
    const desktopVisivel = desktop && window.getComputedStyle(desktop).display !== 'none';
    const mobileVisivel = mobile && window.getComputedStyle(mobile).display !== 'none';

    if (desktop && !desktopVisivel) {
        desktop.querySelectorAll('select, input, textarea').forEach(function(campo) {
            campo.disabled = true;
        });
    }

    if (mobile && !mobileVisivel) {
        mobile.querySelectorAll('select, input, textarea').forEach(function(campo) {
            campo.disabled = true;
        });
    }

    return true;
}
</script></body>
</html>
