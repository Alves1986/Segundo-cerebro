<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bases publicas | Motoclub Presenca</title>
    <link rel="icon" type="image/png" href="assets/images/motoclub-icon.png">
    <link rel="apple-touch-icon" href="assets/images/motoclub-icon.png">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="assets/css/app.css?v=1785509576" rel="stylesheet">
        
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<style>
.mc-public-bases {
    max-width: 1180px;
    margin: 0 auto;
    padding: 24px;
}

.mc-public-bases-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.7fr) minmax(320px, .8fr);
    gap: 20px;
    align-items: start;
}

.mc-base-summary {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
    margin-bottom: 20px;
}

.mc-base-stat {
    background: #fff;
    border: 1px solid var(--mc-border);
    border-left: 4px solid var(--mc-accent);
    border-radius: 4px;
    padding: 18px;
}

.mc-base-stat strong {
    display: block;
    color: var(--mc-heading);
    font-size: 34px;
    line-height: 1;
}

.mc-base-stat span {
    color: var(--mc-text);
    font-weight: 600;
}

.mc-base-panel {
    background: #fff;
    border: 1px solid var(--mc-border);
    border-radius: 4px;
    padding: 16px;
}

.mc-base-toolbar {
    display: flex;
    gap: 10px;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 14px;
}

.mc-base-toolbar .form-control {
    width: min(260px, 100%);
}

.mc-base-map {
    height: 640px;
    min-height: 420px;
    border: 1px solid var(--mc-border);
    border-radius: 4px;
    overflow: hidden;
    background: #eef3f5;
}

.mc-base-list-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    border-bottom: 1px solid var(--mc-border);
    margin-bottom: 14px;
    padding-bottom: 10px;
}

.mc-base-list-head h2 {
    margin: 0;
    color: var(--mc-heading);
    font-size: 22px;
}

.mc-base-list-head small {
    color: var(--mc-text);
}

.mc-base-list {
    display: grid;
    gap: 10px;
    max-height: 690px;
    overflow: auto;
    padding-right: 4px;
}

.mc-base-card {
    width: 100%;
    text-align: left;
    background: #fff;
    border: 1px solid var(--mc-border);
    border-radius: 4px;
    padding: 14px;
    color: var(--mc-text);
    cursor: pointer;
    transition: border-color .18s, box-shadow .18s, transform .18s;
}

.mc-base-card:hover,
.mc-base-card:focus {
    border-color: var(--mc-accent);
    box-shadow: 0 8px 18px rgba(42, 63, 84, .1);
    color: var(--mc-text);
    outline: 0;
    transform: translateY(-1px);
}

.mc-base-card strong {
    display: block;
    color: var(--mc-heading);
    font-size: 16px;
    margin-bottom: 4px;
    text-transform: uppercase;
}

.mc-base-card span,
.mc-base-card small {
    display: block;
}

.mc-base-card span {
    color: #5A738E;
    font-weight: 600;
}

.mc-base-card small {
    margin-top: 8px;
    line-height: 1.45;
}

.mc-base-empty {
    border: 1px dashed var(--mc-border);
    color: var(--mc-text);
    padding: 24px;
    text-align: center;
}

.mc-base-popup {
    color: #34495E;
    min-width: 220px;
}

.mc-base-popup h3 {
    margin: 0 0 6px;
    color: #2A3F54;
    font-size: 17px;
}

.mc-base-popup p {
    margin: 5px 0;
}

.mc-base-popup a {
    display: block;
    margin-top: 10px;
    text-align: center;
}

.mc-base-marker {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--mc-accent);
    border: 3px solid #fff;
    box-shadow: 0 4px 14px rgba(42, 63, 84, .28);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
}

@media (max-width: 991px) {
    .mc-public-bases-grid {
        grid-template-columns: 1fr;
    }

    .mc-base-map {
        height: 520px;
    }
}

@media (max-width: 640px) {
    .mc-public-bases {
        padding: 12px;
    }

    .mc-base-summary {
        grid-template-columns: 1fr;
    }

    .mc-base-toolbar {
        align-items: stretch;
        flex-direction: column;
    }

    .mc-base-toolbar .form-control,
    .mc-base-toolbar .btn {
        width: 100%;
    }

    .mc-base-map {
        height: 420px;
    }

    .mc-base-list {
        max-height: none;
        overflow: visible;
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
<body class="mc-public-body">
<main class="mc-public-bases">
  <header class="mc-public-hero">
    <div>
      <span>Bases publicas</span>
      <h1>Bases do Motoclub</h1>
      <p>Veja no mapa onde estao nossas bases e acompanhe os eventos do MC.</p>
    </div>
    <div class="mc-public-actions">
      <a class="btn btn-default" href="mural_eventos.php"><i class="fa fa-calendar"></i> Mural publico</a>
      <a class="btn btn-success" href="index.php"><i class="fa fa-lock"></i> Area restrita</a>
    </div>
  </header>

  <section class="mc-base-summary" aria-label="Resumo das bases">
    <div class="mc-base-stat">
      <strong>29</strong>
      <span>Base(s) no mapa</span>
    </div>
    <div class="mc-base-stat">
      <strong>13</strong>
      <span>Estado(s)</span>
    </div>
  </section>

  <section class="mc-public-bases-grid">
    <div class="mc-base-panel">
      <div class="mc-base-toolbar">
        <select id="filtroEstado" class="form-control" onchange="filtrarEstado()">
          <option value="">Todos os estados</option>
                      <option value="AM">AM</option>
                      <option value="BA">BA</option>
                      <option value="CE">CE</option>
                      <option value="DF">DF</option>
                      <option value="GO">GO</option>
                      <option value="PA">PA</option>
                      <option value="PB">PB</option>
                      <option value="PE">PE</option>
                      <option value="PR">PR</option>
                      <option value="RN">RN</option>
                      <option value="SC">SC</option>
                      <option value="SP">SP</option>
                      <option value="To">To</option>
                  </select>
        <button class="btn btn-default" type="button" onclick="centralizarBrasil()">
          <i class="fa fa-crosshairs"></i> Centralizar Brasil
        </button>
      </div>
      <div id="mapaBases" class="mc-base-map"></div>
    </div>

    <aside class="mc-base-panel">
      <div class="mc-base-list-head">
        <h2><i class="fa fa-map-marker"></i> Lista de bases</h2>
        <small>29 total</small>
      </div>

              <div class="mc-base-list" id="listaBases">
                      <button class="mc-base-card"
                    type="button"
                    data-estado="AM"
                    onclick="focarBase(13)">
              <strong>MANAUS</strong>
              <span>
                Manaus                                  - AM                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="BA"
                    onclick="focarBase(19)">
              <strong>REPRESENTAÇÃO SALVADOR</strong>
              <span>
                Salvador                                  - BA                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="CE"
                    onclick="focarBase(22)">
              <strong>REPRESENTAÇÃO EUSÉBIO</strong>
              <span>
                Eusébio                                  - CE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="CE"
                    onclick="focarBase(30)">
              <strong>REPRESENTAÇÃO JUAZEIRO DO NORTE</strong>
              <span>
                Juazeiro do Norte                                  - CE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="DF"
                    onclick="focarBase(6)">
              <strong>BRASÍLIA</strong>
              <span>
                Brasília                                  - DF                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="GO"
                    onclick="focarBase(3)">
              <strong>APARECIDA DE GOIÂNIA</strong>
              <span>
                Aparecida de Goiânia                                  - GO                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="GO"
                    onclick="focarBase(10)">
              <strong>GOIANÉSIA</strong>
              <span>
                Goianésia                                  - GO                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="GO"
                    onclick="focarBase(4)">
              <strong>GOIÂNIA</strong>
              <span>
                Goiânia                                  - GO                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PA"
                    onclick="focarBase(5)">
              <strong>BELÉM</strong>
              <span>
                Belém                                  - PA                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PB"
                    onclick="focarBase(12)">
              <strong>REPRESENTAÇÃO JOÃO PESSOA</strong>
              <span>
                João Pessoa                                  - PB                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PB"
                    onclick="focarBase(28)">
              <strong>REPRESENTAÇÃO MONTEIRO</strong>
              <span>
                Monteiro                                  - PB                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(23)">
              <strong>REPRESENTAÇÃO AFOGADOS DA INGAZEIRA</strong>
              <span>
                Afogados da Ingazeira                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(7)">
              <strong>CARUARU</strong>
              <span>
                Caruaru                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(26)">
              <strong>REPRESENTAÇÃO GARANHUNS</strong>
              <span>
                Garanhuns                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(27)">
              <strong>REPRESENTAÇÃO GOIANA</strong>
              <span>
                Goiana                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(24)">
              <strong>JABOATÃO</strong>
              <span>
                Jaboatão dos Guararapes                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(17)">
              <strong>PAULISTA</strong>
              <span>
                Paulista                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(29)">
              <strong>REPRESENTAÇÃO PETROLINA</strong>
              <span>
                Petrolina                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PE"
                    onclick="focarBase(18)">
              <strong>RECIFE</strong>
              <span>
                Recife                                  - PE                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PR"
                    onclick="focarBase(8)">
              <strong>CURITIBA</strong>
              <span>
                Curitiba                                  - PR                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PR"
                    onclick="focarBase(9)">
              <strong>FAXINAL</strong>
              <span>
                Faxinal                                  - PR                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PR"
                    onclick="focarBase(11)">
              <strong>IVAIPORÃ</strong>
              <span>
                Ivaiporã                                  - PR                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PR"
                    onclick="focarBase(14)">
              <strong>MARINGÁ</strong>
              <span>
                Maringá                                  - PR                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="PR"
                    onclick="focarBase(21)">
              <strong>TELÊMACO BORBA</strong>
              <span>
                Telêmaco Borba                                  - PR                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="RN"
                    onclick="focarBase(15)">
              <strong>NATAL</strong>
              <span>
                Natal                                  - RN                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="SC"
                    onclick="focarBase(25)">
              <strong>SÃO BENTO DO SUL</strong>
              <span>
                São Bento do Sul                                  - SC                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="SP"
                    onclick="focarBase(20)">
              <strong>SÃO PAULO</strong>
              <span>
                São Paulo                                  - SP                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="To"
                    onclick="focarBase(1)">
              <strong>PALMAS</strong>
              <span>
                Palmas                                  - To                              </span>
                          </button>
                      <button class="mc-base-card"
                    type="button"
                    data-estado="To"
                    onclick="focarBase(2)">
              <strong>REP. PORTO NACIONAL</strong>
              <span>
                Porto Nacional                                  - To                              </span>
                          </button>
                  </div>
          </aside>
  </section>
</main>
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<script src="build/js/custom.min.js"></script>
<script src="assets/js/app.js?v=1785509576"></script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
var bases = [{"id_base":"13","nome":"MANAUS","cidade":"Manaus","estado":"AM","latitude":"-3.11900000","longitude":"-60.02170000","descricao":null,"foto_base":null},{"id_base":"19","nome":"REPRESENTAÇÃO SALVADOR","cidade":"Salvador","estado":"BA","latitude":"-12.97770000","longitude":"-38.50160000","descricao":null,"foto_base":null},{"id_base":"22","nome":"REPRESENTAÇÃO EUSÉBIO","cidade":"Eusébio","estado":"CE","latitude":"-3.89000000","longitude":"-38.45000000","descricao":null,"foto_base":null},{"id_base":"30","nome":"REPRESENTAÇÃO JUAZEIRO DO NORTE","cidade":"Juazeiro do Norte","estado":"CE","latitude":"-7.21310000","longitude":"-39.31530000","descricao":null,"foto_base":null},{"id_base":"6","nome":"BRASÍLIA","cidade":"Brasília","estado":"DF","latitude":"-15.79390000","longitude":"-47.88280000","descricao":null,"foto_base":null},{"id_base":"3","nome":"APARECIDA DE GOIÂNIA","cidade":"Aparecida de Goiânia","estado":"GO","latitude":"-16.81810000","longitude":"-49.24640000","descricao":null,"foto_base":null},{"id_base":"10","nome":"GOIANÉSIA","cidade":"Goianésia","estado":"GO","latitude":"-15.31890000","longitude":"-49.11780000","descricao":null,"foto_base":null},{"id_base":"4","nome":"GOIÂNIA","cidade":"Goiânia","estado":"GO","latitude":"-16.68690000","longitude":"-49.26480000","descricao":null,"foto_base":null},{"id_base":"5","nome":"BELÉM","cidade":"Belém","estado":"PA","latitude":"-1.45580000","longitude":"-48.49020000","descricao":null,"foto_base":null},{"id_base":"12","nome":"REPRESENTAÇÃO JOÃO PESSOA","cidade":"João Pessoa","estado":"PB","latitude":"-7.11950000","longitude":"-34.84500000","descricao":null,"foto_base":null},{"id_base":"28","nome":"REPRESENTAÇÃO MONTEIRO","cidade":"Monteiro","estado":"PB","latitude":"-7.88940000","longitude":"-37.12010000","descricao":null,"foto_base":null},{"id_base":"23","nome":"REPRESENTAÇÃO AFOGADOS DA INGAZEIRA","cidade":"Afogados da Ingazeira","estado":"PE","latitude":"-7.75000000","longitude":"-37.63330000","descricao":null,"foto_base":null},{"id_base":"7","nome":"CARUARU","cidade":"Caruaru","estado":"PE","latitude":"-8.28460000","longitude":"-35.96990000","descricao":null,"foto_base":null},{"id_base":"26","nome":"REPRESENTAÇÃO GARANHUNS","cidade":"Garanhuns","estado":"PE","latitude":"-8.88290000","longitude":"-36.49660000","descricao":null,"foto_base":null},{"id_base":"27","nome":"REPRESENTAÇÃO GOIANA","cidade":"Goiana","estado":"PE","latitude":"-7.56000000","longitude":"-35.00250000","descricao":null,"foto_base":null},{"id_base":"24","nome":"JABOATÃO","cidade":"Jaboatão dos Guararapes","estado":"PE","latitude":"-8.11200000","longitude":"-35.01500000","descricao":null,"foto_base":null},{"id_base":"17","nome":"PAULISTA","cidade":"Paulista","estado":"PE","latitude":"-7.94080000","longitude":"-34.87310000","descricao":null,"foto_base":null},{"id_base":"29","nome":"REPRESENTAÇÃO PETROLINA","cidade":"Petrolina","estado":"PE","latitude":"-9.38910000","longitude":"-40.50300000","descricao":null,"foto_base":null},{"id_base":"18","nome":"RECIFE","cidade":"Recife","estado":"PE","latitude":"-8.04760000","longitude":"-34.87700000","descricao":null,"foto_base":null},{"id_base":"8","nome":"CURITIBA","cidade":"Curitiba","estado":"PR","latitude":"-25.42840000","longitude":"-49.27330000","descricao":null,"foto_base":null},{"id_base":"9","nome":"FAXINAL","cidade":"Faxinal","estado":"PR","latitude":"-24.00000000","longitude":"-51.32000000","descricao":null,"foto_base":null},{"id_base":"11","nome":"IVAIPORÃ","cidade":"Ivaiporã","estado":"PR","latitude":"-24.24860000","longitude":"-51.67540000","descricao":null,"foto_base":null},{"id_base":"14","nome":"MARINGÁ","cidade":"Maringá","estado":"PR","latitude":"-23.42050000","longitude":"-51.93310000","descricao":null,"foto_base":null},{"id_base":"21","nome":"TELÊMACO BORBA","cidade":"Telêmaco Borba","estado":"PR","latitude":"-24.32390000","longitude":"-50.61760000","descricao":null,"foto_base":null},{"id_base":"15","nome":"NATAL","cidade":"Natal","estado":"RN","latitude":"-5.79450000","longitude":"-35.21100000","descricao":null,"foto_base":null},{"id_base":"25","nome":"SÃO BENTO DO SUL","cidade":"São Bento do Sul","estado":"SC","latitude":"-26.25030000","longitude":"-49.37860000","descricao":null,"foto_base":null},{"id_base":"20","nome":"SÃO PAULO","cidade":"São Paulo","estado":"SP","latitude":"-23.55050000","longitude":"-46.63330000","descricao":null,"foto_base":null},{"id_base":"1","nome":"PALMAS","cidade":"Palmas","estado":"To","latitude":"-10.21748690","longitude":"-48.33977620","descricao":null,"foto_base":null},{"id_base":"2","nome":"REP. PORTO NACIONAL","cidade":"Porto Nacional","estado":"To","latitude":"-10.70031830","longitude":"-48.39581450","descricao":null,"foto_base":null}];
var mapa = L.map("mapaBases").setView([-14.2350, -51.9253], 4);
var marcadores = {};
var layerBases = L.layerGroup().addTo(mapa);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution: "&copy; OpenStreetMap"
}).addTo(mapa);

var iconeBase = L.divIcon({
    className: "",
    html: "<div class=\"mc-base-marker\"><i class=\"fa fa-map-marker\"></i></div>",
    iconSize: [32, 32],
    iconAnchor: [16, 16]
});

function montarPopup(base) {
    var local = "";

    if (base.cidade) local += escapeHtml(base.cidade);
    if (base.estado) local += (local ? " - " : "") + escapeHtml(base.estado);

    var html = "<div class=\"mc-base-popup\">";
    html += "<h3>" + escapeHtml(base.nome || "") + "</h3>";

    if (local) html += "<p><strong>Local:</strong> " + local + "</p>";
    if (base.descricao) html += "<p>" + escapeHtml(base.descricao) + "</p>";

    html += "<a class=\"btn btn-success btn-sm\" href=\"mural_eventos.php?id_base=" + encodeURIComponent(base.id_base) + "\">Ver mural de eventos</a>";
    html += "</div>";

    return html;
}

function desenharBases(estado) {
    layerBases.clearLayers();
    marcadores = {};

    bases.forEach(function (base) {
        if (estado && base.estado !== estado) return;

        var lat = parseFloat(base.latitude);
        var lng = parseFloat(base.longitude);

        if (isNaN(lat) || isNaN(lng)) return;

        var marker = L.marker([lat, lng], { icon: iconeBase }).bindPopup(montarPopup(base));
        marker.addTo(layerBases);
        marcadores[base.id_base] = marker;
    });
}

function focarBase(idBase) {
    var marker = marcadores[idBase];

    if (!marker) return;

    mapa.setView(marker.getLatLng(), 9);
    marker.openPopup();
}

function filtrarEstado() {
    var estado = document.getElementById("filtroEstado").value;
    var pontos = [];

    desenharBases(estado);

    document.querySelectorAll(".mc-base-card").forEach(function (card) {
        card.style.display = (!estado || card.dataset.estado === estado) ? "block" : "none";
    });

    bases.forEach(function (base) {
        if (estado && base.estado !== estado) return;

        var lat = parseFloat(base.latitude);
        var lng = parseFloat(base.longitude);
        if (!isNaN(lat) && !isNaN(lng)) pontos.push([lat, lng]);
    });

    if (pontos.length > 0) {
        mapa.fitBounds(pontos, { padding: [40, 40] });
    } else {
        centralizarBrasil();
    }
}

function centralizarBrasil() {
    mapa.setView([-14.2350, -51.9253], 4);
}

function escapeHtml(texto) {
    return String(texto || "")
        .replaceAll("&", "&amp;")
        .replaceAll("<", "&lt;")
        .replaceAll(">", "&gt;")
        .replaceAll("\"", "&quot;")
        .replaceAll("'", "&#039;");
}

desenharBases("");

if (bases.length > 0) {
    filtrarEstado();
}
</script></body>
</html>
