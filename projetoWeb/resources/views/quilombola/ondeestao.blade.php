<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onde estão?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/quilombola/ondeestao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<header class="py-3 bg-warning">
    <div class="container d-flex align-items-center justify-content-between flex-wrap">
        <div class="d-flex align-items-center border-end pe-4" style="border-color: #743B0B;">
            <img src="imagem/logoprojeto.png" alt="Logo do projeto" width="100" class="img-fluid me-3">
            <div>
                <h4 class="mb-0 fw-bold" style="color: #743B0B;">Quilombo Digital</h4>
                <small style="color: #743B0B;">Projeto de comunicação comunitária</small>
            </div>
        </div>

        <div class="flex-grow-1 ms-4">
            <hr class="my-1" style="border-top: 3px solid white;">
            <nav class="d-flex gap-4 mt-2 flex-wrap">
                <a href="index.html" class="fw-bold text-dark text-decoration-none">Início</a>
                <a href="index.html#sobre" class="fw-bold text-dark text-decoration-none">Sobre</a>
                <a href="index.html#noticias" class="fw-bold text-dark text-decoration-none">Notícias</a>
                <a href="index.html#estudo" class="fw-bold text-dark text-decoration-none">Estudo</a>
                <a href="index.html#contato" class="fw-bold text-dark text-decoration-none">Contato</a>
                <a href="historia.blade.php" class="fw-bold text-dark text-decoration-none">História</a>
            </nav>
        </div>

        <div class="d-flex align-items-center gap-3 mt-3 mt-md-0">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Faça uma pesquisa">
                <span class="input-group-text bg-warning">
                    <i class="bi bi-search" style="color: #743B0B;"></i>
                </span>
            </div>
        </div>
    </div>
</header>

<section>
    <div id="map" aria-label="Mapa de localização de comunidades quilombolas" title="Mapa Interativo"></div>
</section>

<main>
    <section class="topico-inicial">
        <h2>Onde Estamos: A História e a Resistência Quilombola</h2>
        <p>Os quilombos são comunidades formadas por descendentes de africanos escravizados que fugiram do cativeiro e estabeleceram locais de resistência e liberdade. Essas comunidades se encontram em diversas regiões do Brasil, especialmente em áreas de difícil acesso, como matas, serras e regiões rurais, garantindo a preservação de sua cultura e identidade. Atualmente, existem milhares de comunidades quilombolas reconhecidas em todo o Brasil, distribuídas por diferentes estados, principalmente no Maranhão, Bahia, Pará, Minas Gerais e Goiás. Esses territórios são fundamentais para a manutenção da identidade quilombola e da continuidade de seus modos de vida tradicionais. Além das áreas rurais, algumas comunidades também se encontram próximas a centros urbanos, demonstrando a diversidade e adaptação dos quilombos ao longo do tempo.</p>
    </section>
    <section class="tabela-comunidades my-5">
    <div class="container">
        <h2 class="mb-4">Tabela de Comunidades Quilombolas</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-warning">
                <tr>
                    <th>Estado</th>
                    <th>População</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bahia</td>
                    <td>397.059</td>
                </tr>
                <tr>
                    <td>Maranhão</td>
                    <td>269.074</td>
                </tr>
                <tr>
                    <td>Minas Gerais</td>
                    <td>135.310</td>
                </tr>
                 <tr>
                    <td>Pará</td>
                    <td>135.033</td>
                </tr>
                 <tr>
                    <td>Pernambuco</td>
                    <td>78.827</td>
                </tr>
                <tr>
                    <td>Alagoas</td>
                    <td>37.722</td>
                </tr>
	            <tr>
                    <td>Piauí</td>
                    <td>31.686</td>
                </tr>
	            <tr>
                    <td>Goiás</td>
                    <td>30.387</td>
                </tr>
                <tr>
                    <td>Sergipe</td>
                    <td>28.124</td>
                </tr>
                <tr>
                    <td>Cerá</td>
                    <td>23.955</td>
                </tr>
                <tr>
                    <td>Rio Grande do Norte</td>
                    <td>22.384</td>
                </tr>
                <tr>
                    <td>Rio de Janeiro</td>
                    <td>20.344</td>
                </tr>
                <tr>
                    <td>Rio Grande do Sul</td>
                    <td>17.496</td>
                </tr>
                <tr>
                    <td>Paraíba</td>
                    <td>16.584</td>
                </tr>
                <tr>
                    <td>Espírito Santo</td>
                    <td>15.652</td>
                </tr>
                <tr>
                    <td>Tocantins</td>
                    <td>12.881</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

    <section class="origem-do-termo">
        <h2 class="titulo01">A Origem do Termo "Quilombola"</h2>
        <p>A palavra "quilombo" tem origem nas línguas bantu, faladas por diversos povos da África Central e Ocidental. Em idiomas como o quimbundo e o umbundo, os termos "kilombo" e "ochilombo" eram usados para designar acampamentos temporários ou locais fortificados, servindo de refúgio para grupos que precisavam de proteção.</p>
        <p>Com a chegada dos africanos escravizados ao Brasil, "quilombo" passou a definir os locais onde esses povos encontravam liberdade. O termo foi consolidado tanto pelo uso das próprias comunidades quanto pela legislação colonial portuguesa, que se referia a esses agrupamentos como forma de classificá-los juridicamente.</p>
    </section>

    <section class="a-vida">
        <h2 class="titulo02">A Vida nos Quilombos</h2>
        <p>Os quilombos eram muito mais do que simples esconderijos: eram espaços de resistência, organização social e preservação cultural.</p>
        <ul>
            <li>Autossuficiência: agricultura, pesca e criação de animais.</li>
            <li>Cultura viva: música, dança, culinária e religiosidade.</li>
            <li>Defesa e resistência: grupos armados para proteção.</li>
            <li>Preservação cultural: legado forte na cultura brasileira.</li>
        </ul>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-section">
            <img src="imagem/logoprojeto.png" alt="Logo" class="footer-logo">
            <p><strong>O Site Quilombo Digital um lugar seguro</strong></p>
            <p>© 2025 - Todos os direitos reservados.</p>
            <p><a href="#">Termos de Uso</a> | <a href="#">Política de Privacidade</a></p>
            <p>André Quintiliano e Thalita Ávalo<br>Projeto IFMS: Quilombo Digital- Um Caminho para o Conhecimento Afro-brasileiro

</p>
        </div>

        <div class="footer-section">
            <img src="imagem/email.png" alt="Ícone de E-mail" class="footer-icon">
            <p><strong>Dúvidas ou quer falar com os desenvolvedores?</strong></p>
            <p>Se quiser falar conosco ou tirar dúvidas sobre o site, envie um e-mail para:</p>
            <p><a href="mailto:quilombodigitalifms@gmail.com">quilombodigitalifms@gmail.com</a></p>
        </div>
</footer>
<html>
<head>
    <title>Mapa de Comunidades Quilombolas em Nioaque</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map { height: 600px; width: 100%; }
    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Inicializa o mapa e define o centro em Nioaque, MS (Mudar depois para o centro do Brasil)
        var map = L.map('map').setView([-21.141, -55.825], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var comunidades = [
            /**MS**/
            {
                name: "Família Cardoso",
                lat: -21.141,
                lng: -55.825,
                desc: "Comunidade rural no Largo da Baía, próxima ao rio Nioaque."
            },
            {
                name: "Famílias Araújo e Ribeiro",
                lat: -21.139,
                lng: -55.827,
                desc: "Localizada na saída da cidade, vizinha ao rio Urumbeva."
            },
            {
                name: "Família Romano Martins da Conceição",
                lat: -21.143,
                lng: -55.823,
                desc: "Comunidade rural em Nioaque."
            },
            {
                name: "Família Bulhões",
                lat: -21.140,
                lng: -55.829,
                desc: "Comunidade rural em Nioaque."
            },
            {
                name: "COMUNIDADE QUILOMBOLA TIA EVA",
                lat: -20.423,
                lng: -54.618,
                desc: "Campo Grande"
            },
            {
                name: "	FURNAS DOS BAIANOS 1",
                lat: -20.470,
                lng: -54.566,
                desc: "Aquidauana"
            },
            {
                name: "ARQUITERC (OS PRETOS)",
                lat: -20.254,
                lng: -54.904,
                desc: "Terenos"
            },
             {
                name: " FURNAS DO DIONÍSIO",
                lat: -20.159,
                lng: -54.561,
                desc: "	Jaraguari"
            },
            {
                name: " FURNAS DA BOA SORTE",
                lat: -19.906,
                lng: -55.148,
                desc: "	Corguinho"
            },
            {
                name: "Dezideiro Felipe de Oliveira e Picadinha",
                lat: -22.163,
                lng: -54.978,
                desc: "Dourados"
            },
            {
                name: "COLÔNIA SÃO MIGUEL",
                lat: -21.250,
                lng: -55.653,
                desc: "Maracaju"
            },
            {
                name: "	ÁGUAS DO RIO MIRANDA",
                lat: -20.762,
                lng: -56.094,
                desc: "Bonito"
            },
            {
                name: "CHÁCARA BURITI",
                lat: -20.741,
                lng: -54.531,
                desc: "Campo Grande"
            },
            {
                name: "SÃO JOÃO BATISTA",
                lat: -20.494,
                lng: -54.630,
                desc: "Campo Grande"
            },
            {

                name: "COMUNIDADE QUILOMBOLA PICADINHA",
                lat: -22.156,
                lng: -54.945,
                desc: "Dourados"
            },
            {
                name: "COMUNIDADE QUILOMBOLA PICADINHA",
                lat: -22.156,
                lng: -54.945,
                desc: "Dourados"
            },
            {
                name: "FAMÍLIA JARCEM",
                lat: -21.809,
                lng: -54.533,
                desc: "Rio Brilhante"
            },
             {
                name: "FAMÍLIA JARCEM",
                lat: -21.608,
                lng: -54.923,
                desc: "Rio Brilhante"
            },
            {
                name: "CAMPOS CORREIA",
                lat: -18.997,
                lng: -57.643,
                desc: "Corumbá"
            },
             {
                name: "SANTA TEREZA",
                lat: -18.986,
                lng: -53.732,
                desc: "	Figueirão"
            },{
                name: "FAMÍLIA QUINTINO",
                lat: -18.078,
                lng: -54.512,
                desc: "Pedro Gomes"
            },
        {
            name: "Barra do Mendes",
            lat: -11.7385644583,
            lng: -42.0965991116,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.7357934582,
            lng: -42.0936808801,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9983579305,
            lng: -39.2934835852,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.0116439721,
            lng: -40.6911947758,
            desc: "AGRUPAMENTO QUILOMBOLA ABREUS"
        },
        {
            name: "Maraú",
            lat: -13.9027691944,
            lng: -38.9567892488,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9720271681029,
            lng: -39.1356547914999,
            desc: "COMUNIDADE QUILOMBOLA ACARAÍ"
        },
        {
            name: "Monte Santo",
            lat: -10.2642647777,
            lng: -39.3718829731,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.2951834303,
            lng: -41.6526273526,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0179632916,
            lng: -38.7792153461,
            desc: ""
        },
        {
            name: "Santo Amaro",
            lat: -12.6656733194,
            lng: -38.7489499937,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DO CRUZEIRO-ACUPE"
        },
        {
            name: "Cachoeira",
            lat: -12.6155335692,
            lng: -38.8255272718,
            desc: "ACUTINGA"
        },
        {
            name: "Aracatu",
            lat: -14.2895207219,
            lng: -41.4013954092,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0846098471,
            lng: -38.4122793241,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.1046909166,
            lng: -38.3779395388,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.7002257916,
            lng: -41.8412083203,
            desc: ""
        },
        {
            name: "Tremedal",
            lat: -15.129022885,
            lng: -41.4235408470884,
            desc: "COMUNIDADE QUILOMBOLA AGRESTE"
        },
        {
            name: "Seabra",
            lat: -12.5260201109,
            lng: -41.8866940768,
            desc: ""
        },
        {
            name: "Tremedal",
            lat: -15.1341564714,
            lng: -41.4228059328,
            desc: "COMUNIDADE QUILOMBOLA AGRESTE"
        },
        {
            name: "Riacho de Santana",
            lat: -13.8737034998,
            lng: -43.2118684349,
            desc: "COMUNIDADE QUILOMBOLA AGRESTE"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2474053054,
            lng: -43.1593610861,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.9785738053,
            lng: -43.2207099644,
            desc: "COMUNIDADE QUILOMBOLA AGRESTINHO"
        },
        {
            name: "Mirangaba",
            lat: -10.9576700555,
            lng: -40.5730916379,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2604869582,
            lng: -43.17107007,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.3070966249,
            lng: -42.4272102366,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.5178162777,
            lng: -40.703689558,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.2787297221,
            lng: -43.5870407241,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.6812024347716,
            lng: -43.5688605324999,
            desc: "COMUNIDADE QUILOMBOLA ÁGUA FRIA"
        },
        {
            name: "Lapão",
            lat: -11.4564501386,
            lng: -41.8122473582,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.308339,
            lng: -39.105002,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6811680039899,
            lng: -40.184381291,
            desc: "COMUNIDADE QUILOMBOLA AGUADA"
        },
        {
            name: "Filadélfia",
            lat: -10.6980822915,
            lng: -40.1986577936,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.489044736,
            lng: -40.1614548172,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.4984906111,
            lng: -43.0721413056,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9260819027,
            lng: -43.3040085278,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9223789859,
            lng: -41.5685430083,
            desc: "COMUNIDADE QUILOMBOLA ALAGADIÇO"
        },
        {
            name: "Juazeiro",
            lat: -9.47769672214,
            lng: -40.5978047504,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1801098193,
            lng: -40.9447550386,
            desc: "COMUNIDADE QUILOMBOLA ALAGADIÇO DE  LAGE DOS NEGROS"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9112021664,
            lng: -41.580897894,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0652515276,
            lng: -38.382044956,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.653075613,
            lng: -42.6836794849993,
            desc: "COMUNIDADE QUILOMBOLA ALAGOINHAS"
        },
        {
            name: "Canarana",
            lat: -11.6163899721,
            lng: -41.6070878388,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9651001665,
            lng: -39.0150939913,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0081310831,
            lng: -38.8460416027,
            desc: ""
        },
        {
            name: "Itaeté",
            lat: -12.8971439304,
            lng: -41.1090956793,
            desc: "AGRUPAMENTO QUILOMBOLA ALECRIM"
        },
        {
            name: "América Dourada",
            lat: -11.2427658192,
            lng: -41.4359799719,
            desc: "COMUNIDADE QUILOMBOLA ALEGRE"
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.1557182359,
            lng: -42.3625709147,
            desc: "COMUNIDADE QUILOMBOLA ALEGRE"
        },
        {
            name: "América Dourada",
            lat: -11.2511193472,
            lng: -41.4266126386,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.6736872775,
            lng: -41.9989076988,
            desc: "COMUNIDADE QUILOMBOLA ALEIXO"
        },
        {
            name: "Jussara",
            lat: -10.9731145276,
            lng: -41.8075484527,
            desc: "COMUNIDADE QUILOMBOLA ALGODÕES"
        },
        {
            name: "Bonito",
            lat: -11.8453206249,
            lng: -41.2851003897,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.6198279026,
            lng: -40.9035256084,
            desc: "COMUNIDADE QUILOMBOLA ALMEIDA"
        },
        {
            name: "Conde",
            lat: -11.7705722908191,
            lng: -37.8025549906428,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -11.966739611,
            lng: -38.8363654135,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.3783070277,
            lng: -40.4588541384,
            desc: ""
        },
        {
            name: "Presidente Tancredo Neves",
            lat: -13.4482482775,
            lng: -39.5093480391,
            desc: ""
        },
        {
            name: "Jequié",
            lat: -13.8518756387,
            lng: -40.0905535398,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.2452508332,
            lng: -41.6588005728,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -11.0959224999,
            lng: -41.6695409998,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.3683782221,
            lng: -42.0163546541,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9468054027,
            lng: -41.2700559164,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.6346250276,
            lng: -40.1367420022,
            desc: "COMUNIDADE QUILOMBOLA ALTO DO BONITO"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7254324302,
            lng: -40.8035000297,
            desc: "COMUNIDADE QUILOMBOLA ALTO DA CABECEIRA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5859764583,
            lng: -40.2743745542,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.5676441526,
            lng: -38.8539249684,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DO CAMELO"
        },
        {
            name: "Quixabeira",
            lat: -11.4834060552,
            lng: -40.1777219676,
            desc: "COMUNIDADE QUILOMBOLA ALTO CAPIM"
        },
        {
            name: "Quixabeira",
            lat: -11.4842970692,
            lng: -40.1777791462,
            desc: "COMUNIDADE QUILOMBOLA ALTO CAPIM"
        },
        {
            name: "Capim Grosso",
            lat: -11.3788273332,
            lng: -40.015418537,
            desc: ""
        },
        {
            name: "Serrolândia",
            lat: -11.5089367915,
            lng: -40.2066759846,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.464995111,
            lng: -40.1968726104,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9442216527,
            lng: -38.4597775003,
            desc: ""
        },
        {
            name: "Santo Amaro",
            lat: -12.6593111939,
            lng: -38.7497361387,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DO CRUZEIRO-ACUPE"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.463863861,
            lng: -40.2181073777,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6196006353796,
            lng: -41.6245245984343,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DO MATO VERDE"
        },
        {
            name: "Filadélfia",
            lat: -10.6282857431804,
            lng: -40.267628698574,
            desc: "ALTO DO PAPAGAIO"
        },
        {
            name: "Salvador",
            lat: -12.8150498888,
            lng: -38.4841419866,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8436039444,
            lng: -38.4649564864,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6936066248,
            lng: -43.1783791229,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.7735139165,
            lng: -43.2031089207,
            desc: ""
        },
        {
            name: "Retirolândia",
            lat: -11.5613967359,
            lng: -39.4220981885,
            desc: "COMUNIDADE QUILOMBOLA ALTO DO JITAÍ"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4532399304,
            lng: -40.1995462645,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DA MARAVILHA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4577322633,
            lng: -40.193571343,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DA MARAVILHA"
        },
        {
            name: "Valença",
            lat: -13.3919326388,
            lng: -39.0721756655,
            desc: "COMUNIDADE QUILOMBOLA JAQUEIRA"
        },
        {
            name: "Santo Antônio de Jesus",
            lat: -13.0489528609,
            lng: -39.2470575105,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.3697086388,
            lng: -43.3100368475,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -13.0112863332,
            lng: -38.4999549863,
            desc: ""
        },
        {
            name: "Pilão Arcado",
            lat: -10.5487712915,
            lng: -42.6102022943,
            desc: "AGRUPAMENTO QUILOMBOLA ALTO DO SILVA"
        },
        {
            name: "Cansanção",
            lat: -10.747457986,
            lng: -39.5168902481,
            desc: "COMUNIDADE QUILOMBOLA TAMANDUÁ"
        },
        {
            name: "Santanópolis",
            lat: -12.0481160136,
            lng: -38.8596793339,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0357340832,
            lng: -38.380408627,
            desc: "ALTO DA TAPERA"
        },
        {
            name: "Maraú",
            lat: -14.1897666805,
            lng: -39.0517880011,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7510371943,
            lng: -38.5243111643,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6606026387,
            lng: -41.8089150427,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5803270971,
            lng: -40.1324634436,
            desc: "COMUNIDADE QUILOMBOLA ANACLETO"
        },
        {
            name: "Sento Sé",
            lat: -9.74243305544,
            lng: -41.9913765962,
            desc: "ANDORINHA"
        },
        {
            name: "Irecê",
            lat: -11.2366870554,
            lng: -41.7539746252,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.080354736,
            lng: -41.3990558049,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.689639736,
            lng: -40.4801450927,
            desc: "COMUNIDADE QUILOMBOLA ANGICO"
        },
        {
            name: "Carinhanha",
            lat: -14.1015262637,
            lng: -43.6758553919,
            desc: ""
        },
        {
            name: "Ponto Novo",
            lat: -10.9982329582,
            lng: -40.1495461214,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.0693633749,
            lng: -40.512182974,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9557699998,
            lng: -43.4021859181,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.7899790829,
            lng: -38.9240625136,
            desc: "COMUNIDADE QUILOMBOLA ANGOLÁ"
        },
        {
            name: "Candiba",
            lat: -14.4137179442,
            lng: -42.8754229667,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -12.160366472,
            lng: -42.0232581846,
            desc: "COMUNIDADE QUILOMBOLA ANTARI"
        },
        {
            name: "Salvador",
            lat: -12.9502997221,
            lng: -38.4672966532,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.2568978749,
            lng: -38.9855318774,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.2310173888,
            lng: -40.3270509272,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.4069529404659,
            lng: -43.368119412,
            desc: "COMUNIDADE QUILOMBOLA ARAÇÁ"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2481200555,
            lng: -43.4013787637,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.4216365822,
            lng: -43.3728960654,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.4346975833,
            lng: -43.4161161667,
            desc: ""
        },
        {
            name: "Teixeira de Freitas",
            lat: -17.5310630971,
            lng: -39.6259909444,
            desc: ""
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8409876109,
            lng: -38.3498793175,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2139938194,
            lng: -38.2868006817,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.8571520275,
            lng: -41.3076613634,
            desc: "COMUNIDADE QUILOMBOLA CATUABA"
        },
        {
            name: "Valença",
            lat: -13.4353181754999,
            lng: -39.1388502615701,
            desc: "COMUNIDADE QUILOMBOLA ARUEIRA"
        },
        {
            name: "Valença",
            lat: -13.4468183888,
            lng: -39.1494530117,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.0413833193,
            lng: -43.1337716436,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4690546388,
            lng: -41.716145846,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6894801944,
            lng: -38.8539809026,
            desc: "COMUNIDADE QUILOMBOLA SANTIAGO DO IGUAPÊ"
        },
        {
            name: "Paratinga",
            lat: -12.6965918888,
            lng: -43.1822356807,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6957782916,
            lng: -43.182872613,
            desc: ""
        },
        {
            name: "Ruy Barbosa",
            lat: -12.285924083,
            lng: -40.4670189889,
            desc: "COMUNIDADE QUILOMBOLA BAIRRO DAS FLORES"
        },
        {
            name: "Ibititá",
            lat: -11.5456638054,
            lng: -41.9744809036,
            desc: "COMUNIDADE QUILOMBOLA BAIRRO DA MATA"
        },
        {
            name: "Santanópolis",
            lat: -12.0615302499,
            lng: -38.85227672,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9939839027,
            lng: -41.4106260828,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9648707359,
            lng: -41.6747760581,
            desc: "COMUNIDADE QUILOMBOLA BAIXA DA CAINANA/UMBUZEIRO"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9690200555,
            lng: -41.6383119732,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.6938385135,
            lng: -40.6939906493,
            desc: "AGRUPAMENTO QUILOMBOLA BAIXA DO CEDRO"
        },
        {
            name: "Bonito",
            lat: -11.9120893885,
            lng: -41.3189485369,
            desc: "COMUNIDADE QUILOMBOLA BAIXA DO CHEIRO"
        },
        {
            name: "Ibitiara",
            lat: -12.5229273332,
            lng: -42.0170739282,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -9.98986384717,
            lng: -38.4338020692,
            desc: ""
        },
        {
            name: "Cruz das Almas",
            lat: -12.648606804,
            lng: -39.0829557561684,
            desc: "COMUNIDADE QUILOMBOLA BAIXA DA LINHA"
        },
        {
            name: "Água Fria",
            lat: -11.8893575694,
            lng: -38.7800451801,
            desc: ""
        },
        {
            name: "Água Fria",
            lat: -11.8613541005553,
            lng: -38.7893214751656,
            desc: "AGRUPAMENTO QUILOMBOLA BAIXA DA MINA"
        },
        {
            name: "Araçás",
            lat: -12.168395333,
            lng: -38.1783515134,
            desc: "COMUNIDADE QUILOMBOLA BAIXA DA RAPOSA"
        },
        {
            name: "João Dourado",
            lat: -11.163023347,
            lng: -41.5054509684,
            desc: "COMUNIDADE QUILOMBOLA BAIXA DAS CABAÇAS"
        },
        {
            name: "Santa Maria da Vitória",
            lat: -13.3415355277,
            lng: -44.4107631389,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.7280075833,
            lng: -42.6637662913,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.7626656527,
            lng: -41.6846512652,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -9.98059166653,
            lng: -38.4380430381,
            desc: "COMUNIDADE QUILOMBOLA QUELÉS"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8013924721,
            lng: -40.9893774695,
            desc: ""
        },
        {
            name: "Ituaçu",
            lat: -13.9539225767784,
            lng: -41.3296550170445,
            desc: "COMUNIDADE QUILOMBOLA BAIXA FUNDA"
        },
        {
            name: "Ituaçu",
            lat: -13.9549231802,
            lng: -41.330094969,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.0650370277,
            lng: -40.7360772784,
            desc: ""
        },
        {
            name: "Governador Mangabeira",
            lat: -12.5921961527,
            lng: -39.1469098344,
            desc: ""
        },
        {
            name: "Muritiba",
            lat: -12.5999252633,
            lng: -39.1383716297,
            desc: "AGRUPAMENTO QUILOMBOLA BAIXA GRANDE"
        },
        {
            name: "Muritiba",
            lat: -12.6121118887,
            lng: -39.1542426948,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2973821386,
            lng: -41.0735326997,
            desc: "COMUNIDADE QUILOMBOLA BAIXA SECA"
        },
        {
            name: "Bonito",
            lat: -11.9763321525,
            lng: -41.4075262723,
            desc: "COMUNIDADE QUILOMBOLA BAIXA VISTOSA"
        },
        {
            name: "Condeúba",
            lat: -14.9512456388,
            lng: -42.1922149011,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.2933967499,
            lng: -41.8928782222,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8322060547,
            lng: -40.9339788784,
            desc: "COMUNIDADE QUILOMBOLA BAIXÃO"
        },
        {
            name: "Jeremoabo",
            lat: -10.2577333193,
            lng: -38.4145485578,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.2682938055,
            lng: -38.4417500705,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.2665650694,
            lng: -41.9281163894,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.2708566109,
            lng: -41.9187550342,
            desc: "COMUNIDADE QUILOMBOLA BAIXÃO DE ZÉ PRETO"
        },
        {
            name: "Irecê",
            lat: -11.2969384722,
            lng: -41.8637898611,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.264799111,
            lng: -38.429864614,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8577492777,
            lng: -38.8489862247,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO ROQUE DO PARAGUAÇU"
        },
        {
            name: "Banzaê",
            lat: -10.5907714305,
            lng: -38.5627970569,
            desc: ""
        },
        {
            name: "Banzaê",
            lat: -10.5808205971,
            lng: -38.5661841351,
            desc: "COMUNIDADE QUILOMBOLA BAIXÃO II"
        },
        {
            name: "Boninal",
            lat: -12.7132510833,
            lng: -41.8330725556,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.554824486,
            lng: -41.9057035378,
            desc: "COMUNIDADE QUILOMBOLA BAIXÃO VELHO"
        },
        {
            name: "Seabra",
            lat: -12.6489747044921,
            lng: -41.8616975805,
            desc: "COMUNIDADE QUILOMBOLA BAIXÃOZINHO"
        },
        {
            name: "Campo Formoso",
            lat: -10.0247365415,
            lng: -40.7141618513,
            desc: "AGRUPAMENTO QUILOMBOLA BAIXINHA"
        },
        {
            name: "Taperoá",
            lat: -13.5407453055,
            lng: -39.111691166,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0981086661,
            lng: -38.7393730977,
            desc: "COMUNIDADE QUILOMBOLA BAIXINHA"
        },
        {
            name: "Bonito",
            lat: -11.9498429582,
            lng: -41.3398186859,
            desc: "COMUNIDADE QUILOMBOLA BALIZA"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6411334027,
            lng: -41.8491100833,
            desc: ""
        },
        {
            name: "Itamari",
            lat: -13.7530974443,
            lng: -39.6556919438,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5133963887,
            lng: -41.8502594875,
            desc: "COMUNIDADE QUILOMBOLA BANANAL"
        },
        {
            name: "Rio de Contas",
            lat: -13.5082034701,
            lng: -41.8533879669,
            desc: ""
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5719168888,
            lng: -40.2773584743,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.6060969026,
            lng: -40.3138985431,
            desc: "COMUNIDADE QUILOMBOLA BANANEIRAS DE SANTA EFIGÊNIA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.6049488261,
            lng: -40.3028242468,
            desc: "COMUNIDADE QUILOMBOLA BANANEIRA DOS PRETOS"
        },
        {
            name: "Jacobina",
            lat: -11.1847631109,
            lng: -40.4970988213,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.1862530832,
            lng: -40.4984943331,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.1859689027,
            lng: -40.5031050682,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7544890553,
            lng: -38.5194283581,
            desc: ""
        },
        {
            name: "Itaeté",
            lat: -13.1892310969,
            lng: -40.9489768358,
            desc: "COMUNIDADE QUILOMBOLA BANANEIRAS"
        },
        {
            name: "Jeremoabo",
            lat: -10.0977503749,
            lng: -38.4092955145,
            desc: ""
        },
        {
            name: "Cafarnaum",
            lat: -11.6196962539999,
            lng: -41.5704665784695,
            desc: "COMUNIDADE QUILOMBOLA BANDEIRA"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2479535832,
            lng: -43.387512389,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9507102499,
            lng: -41.5730592647,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9329961387,
            lng: -41.6745927216,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5765334859,
            lng: -41.6483817864,
            desc: "COMUNIDADE QUILOMBOLA BARAÚNAS"
        },
        {
            name: "Jacobina",
            lat: -11.241789755222,
            lng: -40.5848190279801,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0476345415,
            lng: -39.008794017,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.4902135610946,
            lng: -41.8575249248333,
            desc: "AGRUPAMENTO QUILOMBOLA BARRA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.6195593055,
            lng: -40.2704903328,
            desc: "COMUNIDADE QUILOMBOLA BARRA"
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5442000416,
            lng: -41.1648766261,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.4913816468,
            lng: -41.8604133635,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5695705276,
            lng: -41.8175535179,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2364701206652,
            lng: -43.1664195068177,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5829051386,
            lng: -41.8072790587,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.5102905416,
            lng: -43.3028320685,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.3763919569372,
            lng: -41.6425007843422,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.4957209583,
            lng: -41.8632653885,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.4937293054,
            lng: -41.88262224,
            desc: "AGRUPAMENTO QUILOMBOLA BARRA DO BRUMADO"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6555801388,
            lng: -41.8450145672,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6709274443,
            lng: -41.8435744699,
            desc: ""
        },
        {
            name: "Carinhanha",
            lat: -13.9351225832,
            lng: -43.6292389598,
            desc: "COMUNIDADE QUILOMBOLA BARRA DO PARATECA"
        },
        {
            name: "Serra do Ramalho",
            lat: -13.2823279721,
            lng: -43.4509725599,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5507513333,
            lng: -41.1654213883,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5465036387,
            lng: -41.1639226194,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.464549879,
            lng: -41.1808561604284,
            desc: "COMUNIDADE QUILOMBOLA BARRA II"
        },
        {
            name: "Filadélfia",
            lat: -10.6397552777,
            lng: -40.1647589166,
            desc: "COMUNIDADE QUILOMBOLA BARREIRAS"
        },
        {
            name: "Filadélfia",
            lat: -10.7441193055,
            lng: -40.1316242195,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7458642914,
            lng: -40.1329478025,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7816320832,
            lng: -40.1807022376,
            desc: ""
        },
        {
            name: "Barreiras",
            lat: -12.1188494721,
            lng: -45.0011268214,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.8093804721,
            lng: -41.9517064421,
            desc: "COMUNIDADE QUILOMBOLA BARREIRINHO"
        },
        {
            name: "Urandi",
            lat: -14.5784654026,
            lng: -42.6497757969,
            desc: ""
        },
        {
            name: "Sítio do Quinto",
            lat: -10.3331518878726,
            lng: -38.0644975461683,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1758934999,
            lng: -41.9322668628,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1445469444,
            lng: -41.7815111673,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.5798076527,
            lng: -43.1047549973,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.7254616248,
            lng: -43.6554808879,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.7652116924999,
            lng: -43.5967158674936,
            desc: "COMUNIDADE QUILOMBOLA BARREIRO GRANDE"
        },
        {
            name: "Gentio do Ouro",
            lat: -11.7083559444,
            lng: -42.5914761102,
            desc: "COMUNIDADE QUILOMBOLA BARREIRO PRETO"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.4165851387,
            lng: -40.9361697187,
            desc: "COMUNIDADE QUILOMBOLA BARREIRO DO RIO PARDO"
        },
        {
            name: "Central",
            lat: -11.1356801527,
            lng: -42.1059832917,
            desc: ""
        },
        {
            name: "Uibaí",
            lat: -11.3821666666,
            lng: -42.0958766527,
            desc: ""
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.0144362083,
            lng: -42.3965192787,
            desc: ""
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.1177029024,
            lng: -42.3556594226,
            desc: "COMUNIDADE QUILOMBOLA BARREIROS"
        },
        {
            name: "Souto Soares",
            lat: -12.0453759999,
            lng: -41.701069403,
            desc: ""
        },
        {
            name: "Mucugê",
            lat: -12.7173987914,
            lng: -41.5718077666,
            desc: "COMUNIDADE QUILOMBOLA BARRIGUDA"
        },
        {
            name: "América Dourada",
            lat: -11.3736505999999,
            lng: -41.4412346921952,
            desc: "COMUNIDADE QUILOMBOLA BARRIGUDA DOS BIDÓS"
        },
        {
            name: "América Dourada",
            lat: -11.4415706944,
            lng: -41.4263117634,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.46354563877,
            lng: -40.5522863215,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2559956943,
            lng: -43.4362341404,
            desc: "COMUNIDADE QUILOMBOLA BARRINHA"
        },
        {
            name: "Serra do Ramalho",
            lat: -13.2640326388,
            lng: -43.4405864015,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6174337638,
            lng: -43.1653319447,
            desc: "COMUNIDADE QUILOMBOLA BARRO"
        },
        {
            name: "Paratinga",
            lat: -12.5982123955,
            lng: -43.1900272168198,
            desc: "COMUNIDADE QUILOMBOLA BARRO"
        },
        {
            name: "Barro Alto",
            lat: -11.7626403749,
            lng: -41.907851833,
            desc: ""
        },
        {
            name: "Itaparica",
            lat: -12.9075690416,
            lng: -38.6660308616,
            desc: ""
        },
        {
            name: "Presidente Tancredo Neves",
            lat: -13.4675573333,
            lng: -39.5099997636,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -12.8205022777,
            lng: -41.8196808462,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.5530641248,
            lng: -41.9745759876,
            desc: "COMUNIDADE QUILOMBOLA BARRO DURO"
        },
        {
            name: "Juazeiro",
            lat: -9.47458333329,
            lng: -40.4988620139,
            desc: ""
        },
        {
            name: "Jequié",
            lat: -13.8485937494,
            lng: -40.0918191158,
            desc: "AGRUPAMENTO QUILOMBOLA BARRO PRETO"
        },
        {
            name: "Ibipeba",
            lat: -11.5542695554,
            lng: -42.2256848278,
            desc: ""
        },
        {
            name: "Sítio do Mato",
            lat: -12.6970183730568,
            lng: -43.3754547955,
            desc: "AGROVILA DO PA QUILOMBOLA BARRO VERMELHO"
        },
        {
            name: "Capim Grosso",
            lat: -11.1908241665,
            lng: -40.1348462788,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.1655193471,
            lng: -39.2739088309,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.0262124999,
            lng: -40.5654507222,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.0306812498,
            lng: -40.557476984,
            desc: "AGRUPAMENTO QUILOMBOLA BARROCÃO DE BAIXO"
        },
        {
            name: "Mirangaba",
            lat: -11.0165746387,
            lng: -40.541429942,
            desc: "AGRUPAMENTO QUILOMBOLA BARROCÃO DE CIMA"
        },
        {
            name: "Jacobina",
            lat: -11.0505187637,
            lng: -40.5127548486,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0135843333,
            lng: -38.3749585286,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9887879855,
            lng: -40.8206779652,
            desc: "COMUNIDADE QUILOMBOLA BARROCAS"
        },
        {
            name: "Campo Formoso",
            lat: -10.2021513192,
            lng: -40.992921465,
            desc: "COMUNIDADE QUILOMBOLA BARROCAS"
        },
        {
            name: "Camamu",
            lat: -14.056826236,
            lng: -39.2802630037,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.6014545554,
            lng: -43.4328135854,
            desc: "AGRUPAMENTO QUILOMBOLA RIBEIRINHO"
        },
        {
            name: "Rio do Antônio",
            lat: -14.3393981666,
            lng: -42.1237161935,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6852342222,
            lng: -41.7698379167,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.6529818331,
            lng: -41.8144277631,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DOS BATATAS"
        },
        {
            name: "São Gabriel",
            lat: -11.0824439721,
            lng: -41.5843563476,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.4851763193,
            lng: -38.9616589163,
            desc: "COMUNIDADE QUILOMBOLA BATATEIRA"
        },
        {
            name: "Boninal",
            lat: -12.7715600275,
            lng: -41.894838641,
            desc: "AGRUPAMENTO QUILOMBOLA BATEIAS"
        },
        {
            name: "Barra",
            lat: -10.6124045971,
            lng: -42.6968936709,
            desc: ""
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.1050589027,
            lng: -42.3373226126,
            desc: "COMUNIDADE QUILOMBOLA BEBEDOURO"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.5223438887,
            lng: -43.4224656712,
            desc: "COMUNIDADE QUILOMBOLA JUÁ"
        },
        {
            name: "Campo Formoso",
            lat: -10.0892333059999,
            lng: -40.80477,
            desc: "COMUNIDADE QUILOMBOLA BEBEDOURO"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8417239027,
            lng: -40.8330786537,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8420641805,
            lng: -40.828828348,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2465983055,
            lng: -43.4198629728,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9442805416,
            lng: -38.443189902,
            desc: ""
        },
        {
            name: "Catu",
            lat: -12.4013583471,
            lng: -38.4636299779,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.2804082212806,
            lng: -41.999432567195,
            desc: "AGRUPAMENTO QUILOMBOLA BERNARDES"
        },
        {
            name: "São Gabriel",
            lat: -11.1230276666,
            lng: -41.7909961953,
            desc: "AGRUPAMENTO QUILOMBOLA BESOURO"
        },
        {
            name: "Cícero Dantas",
            lat: -10.543321486,
            lng: -38.5360136947,
            desc: "AGRUPAMENTO QUILOMBOLA BETÂNIA"
        },
        {
            name: "Paratinga",
            lat: -12.6836601665,
            lng: -43.1793738495,
            desc: ""
        },
        {
            name: "São Gonçalo dos Campos",
            lat: -12.4954590138,
            lng: -38.9004924997,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.0278869304,
            lng: -40.8960709486,
            desc: "BICAS"
        },
        {
            name: "Araçás",
            lat: -12.139679472,
            lng: -38.1592545286,
            desc: "COMUNIDADE QUILOMBOLA BIRIBA"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6018831803,
            lng: -39.6995756341,
            desc: "COMUNIDADE QUILOMBOLA NOVA ESPERANÇA"
        },
        {
            name: "Santanópolis",
            lat: -11.9134194304,
            lng: -38.8997664975,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.6273104721,
            lng: -41.9805154862,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.4983047380159,
            lng: -41.6797179405,
            desc: "COMUNIDADE QUILOMBOLA BOA ESPERANÇA"
        },
        {
            name: "Araçás",
            lat: -12.1568409582,
            lng: -38.206035766,
            desc: "COMUNIDADE QUILOMBOLA BOA ESPERANÇA"
        },
        {
            name: "Lapão",
            lat: -11.4809368662482,
            lng: -41.6959020451101,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -11.0623202776,
            lng: -41.6118201227,
            desc: "COMUNIDADE QUILOMBOLA BOA HORA"
        },
        {
            name: "Lapão",
            lat: -11.3888721111,
            lng: -41.8502816389,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.0634743055,
            lng: -41.6598562907,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.141799986,
            lng: -38.4380855686,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.5130417776,
            lng: -42.5683938808,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9477659027,
            lng: -39.250072293,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6248351387,
            lng: -40.0185834381,
            desc: "AGRUPAMENTO QUILOMBOLA BOA VISTA"
        },
        {
            name: "Piripá",
            lat: -14.8741368332,
            lng: -41.7476869981,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.5127601393416,
            lng: -42.5690013245064,
            desc: "AGRUPAMENTO QUILOMBOLA BOA VISTA"
        },
        {
            name: "Aramari",
            lat: -12.1421793471,
            lng: -38.527070296,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.2886118193,
            lng: -43.5848379587,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.278311361,
            lng: -41.626811627,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.973604486,
            lng: -41.591504142,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9010556944,
            lng: -43.2996059855,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.2405913887,
            lng: -41.6593709942,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.4028969304,
            lng: -41.4324745966,
            desc: "COMUNIDADE QUILOMBOLA BOA VISTA"
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5176868888,
            lng: -41.493521608,
            desc: ""
        },
        {
            name: "Muquém do São Francisco",
            lat: -12.0347290414,
            lng: -43.3380327779,
            desc: "COMUNIDADE QUILOMBOLA BOA VISTA DO PIXAIM"
        },
        {
            name: "Muquém do São Francisco",
            lat: -12.0693115971,
            lng: -43.5505983903,
            desc: ""
        },
        {
            name: "Ibotirama",
            lat: -12.1804600555,
            lng: -43.2228105418,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1272786248,
            lng: -41.7533908563,
            desc: ""
        },
        {
            name: "Candeias",
            lat: -12.7834858193,
            lng: -38.4912333215,
            desc: "AGRUPAMENTO QUILOMBOLA BOCA DO RIO"
        },
        {
            name: "Piatã",
            lat: -13.1486438469,
            lng: -41.7720802813,
            desc: ""
        },
        {
            name: "Pindaí",
            lat: -14.5732318608,
            lng: -42.6548715483,
            desc: "COMUNIDADE QUILOMBOLA BOI"
        },
        {
            name: "Cairu",
            lat: -13.5858168467,
            lng: -38.9277443952,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.7318237777,
            lng: -39.1534212226,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.5368910694,
            lng: -39.0964405141,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.3561546527,
            lng: -39.0511340819,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.727604111,
            lng: -39.1463518333,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.3694726666,
            lng: -39.0688800556,
            desc: ""
        },
        {
            name: "Nilo Peçanha",
            lat: -13.5908021804,
            lng: -39.0219908449,
            desc: "COMUNIDADE QUILOMBOLA BOITACARA"
        },
        {
            name: "Esplanada",
            lat: -11.9122892914,
            lng: -37.8534848138,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8398902221,
            lng: -39.0906221006,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.1734114444,
            lng: -40.5500294441,
            desc: ""
        },
        {
            name: "Caém",
            lat: -11.1738556523,
            lng: -40.4477820172,
            desc: "AGRUPAMENTO QUILOMBOLA BOM JARDIM"
        },
        {
            name: "Maraú",
            lat: -14.179010111,
            lng: -39.2693394313,
            desc: ""
        },
        {
            name: "Pedro Alexandre",
            lat: -9.9473017638,
            lng: -38.0148101655,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.859662972,
            lng: -39.4497630635,
            desc: ""
        },
        {
            name: "Belo Campo",
            lat: -14.969627486,
            lng: -41.2100567348,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.1135330416,
            lng: -43.3869543767,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.474924861,
            lng: -40.2011809623,
            desc: "COMUNIDADE QUILOMBOLA OLARIA"
        },
        {
            name: "Aramari",
            lat: -12.1033624999,
            lng: -38.5097341425,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.634570583,
            lng: -40.7667801184,
            desc: "AGRUPAMENTO QUILOMBOLA BOQUEIRÃO"
        },
        {
            name: "Santa Terezinha",
            lat: -12.6965935971,
            lng: -39.5725699331,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.6337543471,
            lng: -40.7851729846,
            desc: ""
        },
        {
            name: "Teolândia",
            lat: -13.5345786943,
            lng: -39.6028122209,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7234825971,
            lng: -40.731808039,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1080941525,
            lng: -40.9303549935,
            desc: "AGRUPAMENTO QUILOMBOLA BORGES"
        },
        {
            name: "Bonito",
            lat: -12.1211726804,
            lng: -41.3253066094,
            desc: "COMUNIDADE QUILOMBOLA BOTAFOGO"
        },
        {
            name: "Salvador",
            lat: -12.7817302494,
            lng: -38.5173360269,
            desc: "AGRUPAMENTO QUILOMBOLA BOTELHO"
        },
        {
            name: "Riacho de Santana",
            lat: -13.6688274305,
            lng: -42.8551677784,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2495851944,
            lng: -43.4174085833,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.0763510580977,
            lng: -43.1162897174475,
            desc: ""
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.642020993,
            lng: -40.4785281703013,
            desc: "COMUNIDADE QUILOMBOLA BREJÃO DA GROTA"
        },
        {
            name: "Paripiranga",
            lat: -10.641604861,
            lng: -37.8844487923,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0371160693,
            lng: -38.366815678,
            desc: "BREJINHO"
        },
        {
            name: "Ribeirão do Largo",
            lat: -15.3564159305,
            lng: -40.8818069312,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6600826943,
            lng: -41.6208482342,
            desc: "COMUNIDADE QUILOMBOLA BREJINHO"
        },
        {
            name: "Encruzilhada",
            lat: -15.3508300138,
            lng: -40.8882209861,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -11.9900158888,
            lng: -38.8374141801,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6651944444444,
            lng: -38.9203333333333,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1507878055,
            lng: -41.9929806791,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.7158501527,
            lng: -39.219047792,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.137336736,
            lng: -39.2688715416,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.441310361,
            lng: -40.1915796081,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5642419859,
            lng: -40.1654494494,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.9587227853958,
            lng: -37.7517892570057,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -10.9409231527,
            lng: -41.6526342657,
            desc: "COMUNIDADE QUILOMBOLA BOQUEIRÃO DOS CARLOS"
        },
        {
            name: "São Gabriel",
            lat: -10.9508786249,
            lng: -41.6601627506,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1199455137,
            lng: -40.8290444799,
            desc: "COMUNIDADE QUILOMBOLA BURACO"
        },
        {
            name: "Valença",
            lat: -13.318883361,
            lng: -39.0663247912,
            desc: ""
        },
        {
            name: "Tucano",
            lat: -10.9546780416,
            lng: -38.7399277085,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0810758055,
            lng: -38.6020063612,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1406120138,
            lng: -38.4375968602,
            desc: ""
        },
        {
            name: "Pedrão",
            lat: -12.147319611,
            lng: -38.6507813209,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.854748847,
            lng: -38.8503457841,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO ROQUE DO PARAGUAÇU"
        },
        {
            name: "Maragogipe",
            lat: -12.8477350277,
            lng: -38.8725368611,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.7857705686891,
            lng: -37.554575461,
            desc: "COMUNIDADE QUILOMBOLA BURI"
        },
        {
            name: "Conde",
            lat: -11.7808145694,
            lng: -37.5556619999,
            desc: "COMUNIDADE QUILOMBOLA BURI"
        },
        {
            name: "Pedrão",
            lat: -12.1374024301,
            lng: -38.6295884031,
            desc: "COMUNIDADE QUILOMBOLA BURI"
        },
        {
            name: "Formosa do Rio Preto",
            lat: -11.0328116666,
            lng: -45.1926536808,
            desc: ""
        },
        {
            name: "Formosa do Rio Preto",
            lat: -10.8372646388,
            lng: -45.2277369022,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9253191804,
            lng: -41.5033216638,
            desc: "COMUNIDADE QUILOMBOLA CAATINGA DO EGÍDIO"
        },
        {
            name: "Muritiba",
            lat: -12.6022674027,
            lng: -39.1208999466,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7409173193,
            lng: -40.1264760847,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.709026861,
            lng: -40.0903627888,
            desc: "COMUNIDADE QUILOMBOLA CABEÇA DE VACA I"
        },
        {
            name: "Filadélfia",
            lat: -10.7169214165,
            lng: -40.0888164685,
            desc: "COMUNIDADE QUILOMBOLA CABEÇA DE VACA I"
        },
        {
            name: "Filadélfia",
            lat: -10.7364266666,
            lng: -40.1343378889,
            desc: ""
        },
        {
            name: "Coração de Maria",
            lat: -12.2422878333,
            lng: -38.7599631522,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9921423888,
            lng: -41.3392690674,
            desc: "COMUNIDADE QUILOMBOLA CABECEIRA DO BREJO"
        },
        {
            name: "Botuporã",
            lat: -13.4065184859,
            lng: -42.4241541749,
            desc: ""
        },
        {
            name: "Buritirama",
            lat: -10.8402540416,
            lng: -43.8675075422,
            desc: "AGRUPAMENTO QUIMLOBOLA PAU DE PILÃO"
        },
        {
            name: "Planaltino",
            lat: -13.0759057777,
            lng: -40.264166693,
            desc: "COMUNIDADE QUILOMBOLA CABOCLO"
        },
        {
            name: "Cipó",
            lat: -11.1024797776,
            lng: -38.499166618,
            desc: "COMUNIDADE QUILOMBOLA CABOGE"
        },
        {
            name: "Irará",
            lat: -12.0050080831,
            lng: -38.7666363328,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1246439166,
            lng: -38.1833858175,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9496677082,
            lng: -38.4400790565,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7491362775,
            lng: -40.1340748731,
            desc: ""
        },
        {
            name: "Wanderley",
            lat: -12.1217338639218,
            lng: -43.8862336553499,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7441233748,
            lng: -40.13147261,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.3417192638,
            lng: -40.9373913995,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9502049165,
            lng: -38.4401663486,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5755759579,
            lng: -41.7144804599,
            desc: "COMUNIDADE QUILOMBOLA CACHOEIRA DA VÁRZEA"
        },
        {
            name: "Presidente Tancredo Neves",
            lat: -13.464704861,
            lng: -39.5001519722,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2741606386,
            lng: -40.953992114,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9001740828,
            lng: -41.0260935665,
            desc: "COMUNIDADE QUILOMBOLA CACHOEIRA DAS ARARAS"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9557131109,
            lng: -41.0061350637,
            desc: ""
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6893089721,
            lng: -39.541981484,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.7119089101265,
            lng: -37.6251572560664,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.5078415555,
            lng: -39.1666151939,
            desc: ""
        },
        {
            name: "Ipirá",
            lat: -12.2196012914,
            lng: -39.4997393128,
            desc: "CACHOEIRINHA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4931027777,
            lng: -40.1540241817,
            desc: "AGRUPAMENTO QUILOMBOLA CACHOEIRINHA"
        },
        {
            name: "Santanópolis",
            lat: -12.0505138193,
            lng: -38.8294224472,
            desc: ""
        },
        {
            name: "Candiba",
            lat: -14.4385704026,
            lng: -42.7697462626,
            desc: ""
        },
        {
            name: "Pindaí",
            lat: -14.4460492774,
            lng: -42.7582123508,
            desc: ""
        },
        {
            name: "Santo Amaro",
            lat: -12.5626803887,
            lng: -38.6973673279,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.0230776526,
            lng: -40.5338640241,
            desc: "COMUNIDADE QUILOMBOLA CAFELÂNDIA"
        },
        {
            name: "Barro Alto",
            lat: -11.7491046111,
            lng: -41.8224570694,
            desc: "COMUNIDADE QUILOMBOLA MALVINAS"
        },
        {
            name: "Santa Maria da Vitória",
            lat: -13.271601597,
            lng: -44.3932644898,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.6362824164,
            lng: -40.2857238113,
            desc: "CÁGADOS"
        },
        {
            name: "Ituberá",
            lat: -13.7248058040908,
            lng: -39.1464369459898,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6853524439999,
            lng: -38.8154313329999,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.6765201679,
            lng: -38.3818697962,
            desc: "COMUNIDADE QUILOMBOLA PITANGA DOS PALMARES"
        },
        {
            name: "Cairu",
            lat: -13.4889276246,
            lng: -39.0475396959,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.8826514305,
            lng: -43.0845867504,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5470719582,
            lng: -41.8786836767,
            desc: ""
        },
        {
            name: "Jequié",
            lat: -13.8515453749,
            lng: -40.0906268449,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7396808471,
            lng: -40.1270366674,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.4387033333,
            lng: -39.0793416806,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2240754582,
            lng: -38.307645778,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.014130986,
            lng: -41.6548924713,
            desc: "COMUNIDADE QUILOMBOLA CAJAZEIRAS"
        },
        {
            name: "Cairu",
            lat: -13.4853008193,
            lng: -39.0474103208,
            desc: "COMUNIDADE QUILOMBOLA CAJAZEIRAS E PRATA"
        },
        {
            name: "Cocos",
            lat: -14.8289537498,
            lng: -45.3086925972,
            desc: "COMUNIDADE QUILOMBOLA CAJUEIRO"
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.0670731805,
            lng: -42.309492638,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -13.0011031109,
            lng: -38.5150387532,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.697124986,
            lng: -41.9055966559,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.4373514166,
            lng: -42.138009624,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9892150414,
            lng: -41.6127459432,
            desc: "COMUNIDADE QUILOMBOLA CALDEIRÃO"
        },
        {
            name: "Uibaí",
            lat: -11.2738679303,
            lng: -42.0848038853,
            desc: "COMUNIDADE QUILOMBOLA CALDEIRÃO"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5818521385,
            lng: -40.1947190449,
            desc: "COMUNIDADE QUILOMBOLA CALDEIRÃO DO MULATO"
        },
        {
            name: "Nordestina",
            lat: -10.8755253887,
            lng: -39.4644129691,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8563318886,
            lng: -39.4741565521,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.971378361,
            lng: -41.6392892183,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1976807499,
            lng: -42.0350018457,
            desc: "COMUNIDADE QUILOMBOLA CALDEIRÃOZINHO"
        },
        {
            name: "Cachoeira",
            lat: -12.6497368886,
            lng: -38.8558850263,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6348911526,
            lng: -38.897835066,
            desc: "COMUNIDADE QUILOMBOLA CALOLÉ"
        },
        {
            name: "São Félix",
            lat: -12.7101408193,
            lng: -39.0255866551,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -13.8862735415,
            lng: -38.9408880541,
            desc: ""
        },
        {
            name: "Caém",
            lat: -11.1793616805,
            lng: -40.150272374,
            desc: ""
        },
        {
            name: "Capim Grosso",
            lat: -11.1874100137,
            lng: -40.0421603176,
            desc: "AGRUPAMENTO QUILOMBOLA CAMBUEIRO"
        },
        {
            name: "Santo Amaro",
            lat: -12.5644313261172,
            lng: -38.6952451999404,
            desc: "AGRUPAMENTO QUILOMBOLA CAMBUTA"
        },
        {
            name: "Santo Amaro",
            lat: -12.564642333,
            lng: -38.6979574311,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -10.8879213193,
            lng: -41.5951231272,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.2916974166,
            lng: -40.4642120303,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.6205040138,
            lng: -43.5468204023,
            desc: "AGRUPAMENTO QUILOMBOLA CAMPINHOS"
        },
        {
            name: "Santa Terezinha",
            lat: -12.8921031985,
            lng: -39.597111789197,
            desc: "COMUNIDADE QUILOMBOLA CAMPO ALEGRE"
        },
        {
            name: "João Dourado",
            lat: -11.3526539166,
            lng: -41.6676569875,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.470572243,
            lng: -41.6046895827,
            desc: "COMUNIDADE QUILOMBOLA CAMPO ALEGRE"
        },
        {
            name: "Ituberá",
            lat: -13.7162202638,
            lng: -39.2147991515,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.5042319166,
            lng: -40.3216278611,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.8425645910952,
            lng: -37.6911457715049,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.9862954721,
            lng: -40.5854575698,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -13.0056532082,
            lng: -38.4759692375,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9896025828,
            lng: -43.3446384885,
            desc: ""
        },
        {
            name: "Santa Terezinha",
            lat: -12.662163332892,
            lng: -39.5197554665946,
            desc: "COMUNIDADE QUILOMBOLA CAMPO GRANDE"
        },
        {
            name: "Santa Terezinha",
            lat: -12.770625208,
            lng: -39.5223911868,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2482785277,
            lng: -43.3923918333,
            desc: ""
        },
        {
            name: "Santa Bárbara",
            lat: -11.9689375971,
            lng: -38.9942916682,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.0372875277,
            lng: -41.6763097814,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5797366527,
            lng: -41.8071712917,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2798383749,
            lng: -43.4055823868,
            desc: ""
        },
        {
            name: "Barra da Estiva",
            lat: -13.5392926954505,
            lng: -41.182515014,
            desc: "COMUNIDADE QUILOMBOLA CAMULENGO"
        },
        {
            name: "Ouriçangas",
            lat: -12.0434984305,
            lng: -38.5924509166,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.4106781944,
            lng: -41.3737063611,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.5205141246,
            lng: -42.14160002,
            desc: "COMUNIDADE QUILOMBOLA CANA BRAVA"
        },
        {
            name: "América Dourada",
            lat: -11.3431885415,
            lng: -41.3829420071,
            desc: "COMUNIDADE QUILOMBOLA CANABRAVA"
        },
        {
            name: "Filadélfia",
            lat: -10.7462857222,
            lng: -40.1348233888,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6521449999,
            lng: -40.0790622232,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.4150592777,
            lng: -41.7874137222,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -12.2130836109,
            lng: -42.0206190114,
            desc: "COMUNIDADE QUILOMBOLA CANARINA"
        },
        {
            name: "Nova Ibiá",
            lat: -13.8110975553,
            lng: -39.5923428122,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0813442498,
            lng: -38.8615070914,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1617730775,
            lng: -38.9214040658111,
            desc: "AGRUPAMENTO QUILOMBOLA CANDEAL II"
        },
        {
            name: "Valença",
            lat: -13.4405863194,
            lng: -39.2363733056,
            desc: ""
        },
        {
            name: "Nova Viçosa",
            lat: -17.8774978609,
            lng: -39.7201801727,
            desc: "COMUNIDADE QUILOMBOLA CÂNDIDO MARIANO"
        },
        {
            name: "Valença",
            lat: -13.442459361,
            lng: -39.2602166252,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.8438220276,
            lng: -42.3913167656,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.3268610833,
            lng: -41.8689406667,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.4982544164,
            lng: -42.0081780271,
            desc: "COMUNIDADE QUILOMBOLA CANOÃO"
        },
        {
            name: "Canarana",
            lat: -11.7046987638,
            lng: -41.6333299453,
            desc: "COMUNIDADE QUILOMBOLA CANSANÇÃO"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9525588192,
            lng: -41.6183600562,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6485974444,
            lng: -38.8460057932,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.6883933054,
            lng: -41.9036108175,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.6036489999,
            lng: -41.9964051231,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.163067236,
            lng: -41.9578811653,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.7122845276,
            lng: -41.8359887271,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5788723888,
            lng: -41.8442973898,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6942208055,
            lng: -43.1528739742,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4099266322351,
            lng: -40.1608000847964,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.0605306387,
            lng: -42.0703646886,
            desc: "COMUNIDADE QUILOMBOLA CAPOEIRA DA SERRA"
        },
        {
            name: "Salvador",
            lat: -12.785562736,
            lng: -38.5333002918,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.4694002916,
            lng: -40.4394897063,
            desc: "AGRUPAMENTO QUILOMBOLA CARAÍBAS"
        },
        {
            name: "Ibitiara",
            lat: -12.5669186527,
            lng: -42.0742492773,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.9896688888,
            lng: -43.0571184988,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5026811107,
            lng: -40.1301008858,
            desc: "COMUNIDADE QUILOMBOLA CARIACÁ"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2474162221,
            lng: -43.387269516,
            desc: ""
        },
        {
            name: "Barreiras",
            lat: -12.1198162777,
            lng: -45.001116109,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1313326943,
            lng: -42.2093248927,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -10.9891285831,
            lng: -41.7318054215,
            desc: "COMUNIDADE QUILOMBOLA CAROAZAL"
        },
        {
            name: "Irará",
            lat: -12.053311361,
            lng: -38.7604734169,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7102805693,
            lng: -40.0254709155,
            desc: "CARRAPATO"
        },
        {
            name: "Piatã",
            lat: -13.2014987777,
            lng: -41.6865655145,
            desc: ""
        },
        {
            name: "Correntina",
            lat: -13.3881493608,
            lng: -44.410681209,
            desc: "AGRUPAMENTO QUILOMBOLA CARUARU"
        },
        {
            name: "Rio de Contas",
            lat: -13.5825517916,
            lng: -41.7016861249,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1812930693,
            lng: -40.9345217758,
            desc: "COMUNIDADE QUILOMBOLA CASA NOVA DOS AMAROS"
        },
        {
            name: "Campo Formoso",
            lat: -10.1897186527,
            lng: -40.9340358034,
            desc: "COMUNIDADE QUILOMBOLA CASA NOVA DOS FERREIRAS"
        },
        {
            name: "Campo Formoso",
            lat: -10.1784689582,
            lng: -40.9346806532,
            desc: "COMUNIDADE QUILOMBOLA CASA NOVA DOS MARINOS"
        },
        {
            name: "Lapão",
            lat: -11.5151742777,
            lng: -41.8021288213,
            desc: "COMUNIDADE QUILOMBOLA CASAL I"
        },
        {
            name: "Lapão",
            lat: -11.5152294304,
            lng: -41.8045046084,
            desc: "COMUNIDADE QUILOMBOLA CASAL I"
        },
        {
            name: "Érico Cardoso",
            lat: -13.4213176943,
            lng: -42.1366457345,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -12.0075618192,
            lng: -41.6528952638,
            desc: "COMUNIDADE QUILOMBOLA CASCAVEL"
        },
        {
            name: "Jeremoabo",
            lat: -10.2564084582,
            lng: -38.3975358895,
            desc: "COMUNIDADE QUILOMBOLA CASINHAS"
        },
        {
            name: "Ibipitanga",
            lat: -12.928539722,
            lng: -42.3508966552,
            desc: "COMUNIDADE QUILOMBOLA CASTANHÃO"
        },
        {
            name: "Entre Rios",
            lat: -11.8231773333,
            lng: -38.1346182508,
            desc: "COMUNIDADE QUILOMBOLA DOS PEDROS"
        },
        {
            name: "Macaúbas",
            lat: -12.9470385971,
            lng: -42.7026927631,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -11.814205486,
            lng: -42.0400809017,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.8553913469,
            lng: -41.3100806394,
            desc: "COMUNIDADE QUILOMBOLA CATUABA"
        },
        {
            name: "Bonito",
            lat: -11.8702497081,
            lng: -41.301912324,
            desc: "COMUNIDADE QUILOMBOLA CATUABINHA"
        },
        {
            name: "Jeremoabo",
            lat: -10.2884636388,
            lng: -38.4928698055,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.0441713468,
            lng: -38.4341541713,
            desc: "COMUNIDADE QUILOMBOLA CATUZINHO"
        },
        {
            name: "Aramari",
            lat: -12.0484165829,
            lng: -38.4426269605,
            desc: "COMUNIDADE QUILOMBOLA CATUZINHO"
        },
        {
            name: "Maraú",
            lat: -14.2095924721,
            lng: -39.0396544155,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3742251527,
            lng: -39.1527712065,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5441422637,
            lng: -40.1591196133,
            desc: "COMUNIDADE QUILOMBOLA CAZUMBA"
        },
        {
            name: "Riacho de Santana",
            lat: -13.9058239721,
            lng: -43.4165130958,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9234217914,
            lng: -43.434000844,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1323074027,
            lng: -42.1132351388,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6967940694,
            lng: -43.1812049184,
            desc: ""
        },
        {
            name: "Ibicoara",
            lat: -13.4576600832,
            lng: -41.4730779197,
            desc: ""
        },
        {
            name: "Teodoro Sampaio",
            lat: -12.2744574859,
            lng: -38.6145599843,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -12.1138933054,
            lng: -38.1609716352,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1172757637,
            lng: -38.1708703834,
            desc: "COMUNIDADE QUILOMBOLA CHAPADA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.964643111,
            lng: -41.6510618215,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4376383887,
            lng: -40.1908103471,
            desc: "AGRUPAMENTO QUILOMBOLA CIDADE NOVA"
        },
        {
            name: "Entre Rios",
            lat: -11.9549719582,
            lng: -38.0621815917,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4378926805,
            lng: -40.1898320952,
            desc: "AGRUPAMENTO QUILOMBOLA CIDADE NOVA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4358026666,
            lng: -40.1903849847,
            desc: "AGRUPAMENTO QUILOMBOLA CIDADE NOVA"
        },
        {
            name: "Planalto",
            lat: -14.5962318609,
            lng: -40.5649424357,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1066502638,
            lng: -42.0107782501,
            desc: ""
        },
        {
            name: "Muquém do São Francisco",
            lat: -12.1412464443,
            lng: -43.3197371503,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7651533193,
            lng: -42.238586672,
            desc: ""
        },
        {
            name: "Capim Grosso",
            lat: -11.2375237638,
            lng: -40.108036751,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.2649521526,
            lng: -41.9718943092,
            desc: "COLOUDO RAMOS"
        },
        {
            name: "Barra",
            lat: -11.1459227082,
            lng: -43.1552109455,
            desc: "AGRUPAMENTO QUILOMBOLA CONCEIÇÃO"
        },
        {
            name: "Araçás",
            lat: -12.2480386666,
            lng: -38.2620015711,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.7828407774,
            lng: -41.8938776198,
            desc: "COMUNIDADE QUILOMBOLA CONCEIÇÃO"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.6187658332,
            lng: -40.1689878585,
            desc: "COMUNIDADE QUILOMBOLA CONCEIÇÃO"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9928190416,
            lng: -40.8203286509,
            desc: "COMUNIDADE QUILOMBOLA BARROCAS"
        },
        {
            name: "Salinas da Margarida",
            lat: -12.8795003883,
            lng: -38.7779173845,
            desc: "COMUNIDADE QUILOMBOLA CONCEIÇÃO DE SALINAS"
        },
        {
            name: "Camamu",
            lat: -13.937826611,
            lng: -39.1144744832,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.8036293762579,
            lng: -42.363389134206,
            desc: "COMUNIDADE QUILOMBOLA CONTENDAS"
        },
        {
            name: "Caetité",
            lat: -13.8440598193,
            lng: -42.3913823014,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.1771970971,
            lng: -40.5254521935,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.7156894859,
            lng: -38.9349420216,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.6406203053,
            lng: -42.0396049965,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.7072204858,
            lng: -43.1956019969,
            desc: "AGRUPAMENTO QUILOMBOLA COQUEIRO"
        },
        {
            name: "Mirangaba",
            lat: -10.9967839303,
            lng: -40.5211385459,
            desc: "COMUNIDADE QUILOMBOLA COQUEIROS"
        },
        {
            name: "Palmeiras",
            lat: -12.515808861,
            lng: -41.5839496413,
            desc: ""
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8414556805,
            lng: -38.3289455964,
            desc: ""
        },
        {
            name: "Camaçari",
            lat: -12.8118804025,
            lng: -38.3126753625,
            desc: "COMUNIDADE QUILOMBOLA CORDOARIA"
        },
        {
            name: "Jacobina",
            lat: -11.2889962638,
            lng: -40.4804522237,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.1830314166,
            lng: -41.6708264444,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.1432698053,
            lng: -41.0324331669,
            desc: "COMUNIDADE QUILOMBOLA CORTA LOTE"
        },
        {
            name: "Quixabeira",
            lat: -11.4694725831,
            lng: -40.1607382032,
            desc: "AGRUPAMENTO QUILOMBOLA COVA DO ANJO"
        },
        {
            name: "Miguel Calmon",
            lat: -11.3910069305,
            lng: -40.5011901666,
            desc: "COMUNIDADE QUILOMBOLA COVAS"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.5098665832,
            lng: -43.3680199601,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.4010421526,
            lng: -39.1640332085,
            desc: "AGRUPAMENTO QUILOMBOLA CRUMATAI"
        },
        {
            name: "Canarana",
            lat: -11.706029647,
            lng: -41.6176376219157,
            desc: "COMUNIDADE QUILOMBOLA CRUZEIRO"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5269311664,
            lng: -40.1616597446,
            desc: "COMUNIDADE QUILOMBOLA CRUZEIRO"
        },
        {
            name: "Buritirama",
            lat: -10.5383303332,
            lng: -43.5682988605,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1442719443,
            lng: -41.7810318872,
            desc: ""
        },
        {
            name: "Abaré",
            lat: -8.78051122214,
            lng: -39.2568928195,
            desc: ""
        },
        {
            name: "Água Fria",
            lat: -11.7035663009999,
            lng: -38.691982852817,
            desc: "COMUNIDADE QUILOMBOLA CURRAL DE FORA"
        },
        {
            name: "Piatã",
            lat: -13.1466190832,
            lng: -41.7813058289,
            desc: ""
        },
        {
            name: "Buritirama",
            lat: -10.6134721666,
            lng: -43.5679296089,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.52461980539,
            lng: -40.644217947,
            desc: "AGRUPAMENTO QUILOMBOLA CURRAL NOVO"
        },
        {
            name: "Campo Formoso",
            lat: -10.5030519999,
            lng: -40.3181334722,
            desc: ""
        },
        {
            name: "Ribeira do Pombal",
            lat: -10.845572986,
            lng: -38.5340718905,
            desc: ""
        },
        {
            name: "Curaçá",
            lat: -8.81938730549,
            lng: -39.7772076102,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.2073356388,
            lng: -40.6180379881,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.2205166663,
            lng: -43.1977858198,
            desc: "COMUNIDADE QUILOMBOLA CURRALINHO"
        },
        {
            name: "São Gabriel",
            lat: -10.8727092221,
            lng: -41.6199149391,
            desc: "COMUNIDADE QUILOMBOLA CURRALINHO"
        },
        {
            name: "Cafarnaum",
            lat: -11.603667736,
            lng: -41.5390895524,
            desc: "COMUNIDADE QUILOMBOLA CURRALINHO"
        },
        {
            name: "Boninal",
            lat: -12.8137531246,
            lng: -41.8059913634,
            desc: "COMUNIDADE QUILOMBOLA CUTIA"
        },
        {
            name: "Simões Filho",
            lat: -12.7122531943,
            lng: -38.3964790425,
            desc: "COMUNIDADE QUILOMBOLA DANDÁ"
        },
        {
            name: "Camamu",
            lat: -14.0308177638,
            lng: -39.1452560005,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.7790470277,
            lng: -38.9120702778,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6576620971,
            lng: -38.8519750045,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.2162999718,
            lng: -41.6536912314,
            desc: "COMUNIDADE QUILOMBOLA DESCOBERTA"
        },
        {
            name: "João Dourado",
            lat: -11.1919441388,
            lng: -41.6551626534,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.8980575207,
            lng: -40.4934698178,
            desc: "COMUNIDADE QUILOMBOLA DIONÍSIA"
        },
        {
            name: "Araçás",
            lat: -12.2056732083,
            lng: -38.1984374165,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA CRUZEIRO"
        },
        {
            name: "Araçás",
            lat: -12.1972267636,
            lng: -38.1900079417,
            desc: "COMUNIDADE QUILOMBOLA DOIS RIACHOS DE CIMA"
        },
        {
            name: "São Francisco do Conde",
            lat: -12.6109511388,
            lng: -38.662219333,
            desc: "COMUNIDADE QUILOMBOLA PORTO DE DOM JOÃO"
        },
        {
            name: "São Francisco do Conde",
            lat: -12.6134729582,
            lng: -38.6484321666,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9972348332,
            lng: -41.3174864485,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.0126639027,
            lng: -38.2167228461,
            desc: ""
        },
        {
            name: "Ituaçu",
            lat: -13.9494480693,
            lng: -41.3340462787,
            desc: "COMUNIDADE QUILOMBOLA DUAS BARRAS"
        },
        {
            name: "Riacho de Santana",
            lat: -13.8647841387,
            lng: -43.2635754905,
            desc: "COMUNIDADE QUILOMBOLA DUAS LAGOAS"
        },
        {
            name: "Ouriçangas",
            lat: -12.0833803471,
            lng: -38.5937572867,
            desc: ""
        },
        {
            name: "Rio do Antônio",
            lat: -14.2744792637,
            lng: -41.9906359338,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6564847497,
            lng: -38.8924527854,
            desc: "AGRUPAMENTO QUILOMBOLA EMBIARA"
        },
        {
            name: "Cachoeira",
            lat: -12.6457525832,
            lng: -38.9057585387,
            desc: "AGRUPAMENTO QUILOMBOLA EMBIARA DE CIMA"
        },
        {
            name: "Maraú",
            lat: -14.1815685691,
            lng: -39.2048184912,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9807837637,
            lng: -43.1677926653,
            desc: ""
        },
        {
            name: "Santa Rita de Cássia",
            lat: -10.7068716388,
            lng: -44.2745391397,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6096257637,
            lng: -38.8307587549,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6438994302,
            lng: -38.8631190836,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.643407722,
            lng: -38.8699228948,
            desc: ""
        },
        {
            name: "Coração de Maria",
            lat: -12.2487489026,
            lng: -38.8081592365,
            desc: "COMUNIDADE QUILOMBOLA ENGENHO DA RAIZ MANGALÔ"
        },
        {
            name: "Cachoeira",
            lat: -12.6492793055,
            lng: -38.9439681505,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.7079047636,
            lng: -39.0456553322,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.5879143053,
            lng: -38.8493865663,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.667679736,
            lng: -38.9729278455,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8660053748,
            lng: -38.8258592948,
            desc: "COMUNIDADE QUILOMBOLA ENSEADA PARAGUAÇU"
        },
        {
            name: "Itatim",
            lat: -12.7058633193,
            lng: -39.7237231947,
            desc: "AGRUPAMENTO QUILOMBOLA DEPARTAMENTO RIO-BAHIA"
        },
        {
            name: "Jacobina",
            lat: -11.1819748749,
            lng: -40.4986774583,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.2998727082,
            lng: -41.5515793196,
            desc: "COMUNIDADE QUILOMBOLA ESCONSO"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9879756804,
            lng: -41.586782741,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -10.964609486,
            lng: -41.7276378882,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9810137776,
            lng: -43.3468562099,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.724644236,
            lng: -43.6589696407,
            desc: ""
        },
        {
            name: "Tanque Novo",
            lat: -13.5543648888,
            lng: -42.4599923483,
            desc: ""
        },
        {
            name: "Carinhanha",
            lat: -13.827144296,
            lng: -43.6107910809678,
            desc: "COMUNIDADE QUILOMBOLA ESTREITO"
        },
        {
            name: "Bonito",
            lat: -12.0001123472,
            lng: -41.3456751806,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -11.050719861,
            lng: -41.6064254457,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.0775909582,
            lng: -41.7183265307,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.4724136388,
            lng: -41.9474154167,
            desc: "COMUNIDADE QUILOMBOLA FAVELEIRA"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2486901804,
            lng: -43.4214610723,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0502323888,
            lng: -38.6065562935,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.0826209719,
            lng: -38.4260790602,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2844611387,
            lng: -43.4035113499,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2525218065562,
            lng: -43.1684047503335,
            desc: ""
        },
        {
            name: "Condeúba",
            lat: -14.9510718888,
            lng: -42.1748160291,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3126360833,
            lng: -39.2370759164,
            desc: ""
        },
        {
            name: "Cardeal da Silva",
            lat: -11.9421563,
            lng: -37.9494488,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.171309069,
            lng: -38.4930072486,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA CANGULA"
        },
        {
            name: "Serrolândia",
            lat: -11.5073510832,
            lng: -40.2097439017,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.0542685971,
            lng: -38.4305533615,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.7019695832,
            lng: -38.3913799849,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8458519443,
            lng: -38.4621000453,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2007446737914,
            lng: -38.204810060427,
            desc: ""
        },
        {
            name: "Abaré",
            lat: -8.63231788879,
            lng: -39.2481907927,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.8196531870431,
            lng: -37.6588692493717,
            desc: ""
        },
        {
            name: "Conde",
            lat: -12.0106958718116,
            lng: -37.729937360661,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7376864304,
            lng: -40.1340831017,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7408866388,
            lng: -40.1264769038,
            desc: ""
        },
        {
            name: "Ibotirama",
            lat: -12.1763699583,
            lng: -43.2186126259,
            desc: ""
        },
        {
            name: "Muquém do São Francisco",
            lat: -11.8777348608,
            lng: -43.3279533456,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA GRANDE"
        },
        {
            name: "Mirangaba",
            lat: -10.9993698888,
            lng: -40.538239458,
            desc: "AGRUPAMENTO QUILOMBOLA FAZENDA JATOBÁ"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7227813471,
            lng: -40.7332140664,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0108925416,
            lng: -38.777120308,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0443070971,
            lng: -38.5948660683,
            desc: ""
        },
        {
            name: "Aurelino Leal",
            lat: -14.3853561145777,
            lng: -39.5149340022306,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8399535971,
            lng: -40.8865332502,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1773085413,
            lng: -38.5116416811,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA OITEIRO"
        },
        {
            name: "Mirangaba",
            lat: -10.9574416249,
            lng: -40.5728293897,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0435226525,
            lng: -38.6096528289,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA PICADA"
        },
        {
            name: "Conde",
            lat: -11.8057235075851,
            lng: -37.6084472742312,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.2041889582,
            lng: -38.5144888106,
            desc: "AGRUPAMENTO QUILOMBOLA PIPIRI"
        },
        {
            name: "Entre Rios",
            lat: -11.9429793962378,
            lng: -38.0533075245757,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA PORTEIRAS"
        },
        {
            name: "Entre Rios",
            lat: -11.9437097359,
            lng: -38.0585855387,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -11.9570843715,
            lng: -38.0619333016,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA PORTEIRAS"
        },
        {
            name: "Curaçá",
            lat: -8.90598237487,
            lng: -39.8256640701,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8651440277,
            lng: -39.4858911796,
            desc: ""
        },
        {
            name: "Terra Nova",
            lat: -12.4019598054,
            lng: -38.6212390673,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0441994304,
            lng: -38.6016386253,
            desc: ""
        },
        {
            name: "Andaraí",
            lat: -12.7933524442,
            lng: -41.3292665267,
            desc: ""
        },
        {
            name: "Capim Grosso",
            lat: -11.213148208,
            lng: -40.1132776866,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2785776944,
            lng: -43.4050426386,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8266783194,
            lng: -39.4518099876,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.273890305,
            lng: -43.4672329228,
            desc: "AGRUPAMENTO QUILOMBOLA FECHADINHA"
        },
        {
            name: "Feira de Santana",
            lat: -12.256424861,
            lng: -38.9849948884,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.3299099721,
            lng: -41.665311469,
            desc: "COMUNIDADE QUILOMBOLA FEITOSA"
        },
        {
            name: "João Dourado",
            lat: -11.3456347777,
            lng: -41.6656686516,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.3628212915,
            lng: -41.4230686351,
            desc: ""
        },
        {
            name: "Curaçá",
            lat: -8.80378304722788,
            lng: -39.7549127340342,
            desc: "AGRUPAMENTO QUILOMBOLA FERRETE"
        },
        {
            name: "Curaçá",
            lat: -8.80354337485,
            lng: -39.7544521234,
            desc: ""
        },
        {
            name: "Ichu",
            lat: -11.7162992498,
            lng: -39.0955955692,
            desc: ""
        },
        {
            name: "Serrinha",
            lat: -11.7147200555,
            lng: -39.093661515,
            desc: ""
        },
        {
            name: "Ruy Barbosa",
            lat: -12.28188493,
            lng: -40.4882648462,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.243130736,
            lng: -41.5363981105,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1887637499,
            lng: -42.1364546671,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1694492984,
            lng: -38.1729110639,
            desc: "COMUNIDADE QUILOMBOLA FLORESTA"
        },
        {
            name: "Canarana",
            lat: -11.679848236,
            lng: -41.5963448603,
            desc: "COMUNIDADE QUILOMBOLA FLORESTA I"
        },
        {
            name: "Canarana",
            lat: -11.6623608333,
            lng: -41.5897714716,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.3424476941,
            lng: -39.1078648671,
            desc: ""
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.1376674026,
            lng: -42.2944708363,
            desc: ""
        },
        {
            name: "Sítio do Mato",
            lat: -12.8632155276,
            lng: -43.3837510004,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.8721280415,
            lng: -43.3231639916,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.8347553393994,
            lng: -43.336814858,
            desc: "COMUNIDADE QUILOMBOLA FORTALEZA"
        },
        {
            name: "Aramari",
            lat: -12.1082210832,
            lng: -38.5365898183,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.839909222,
            lng: -39.4730017739,
            desc: "AGRUPAMENTO QUILOMBOLA FUMAÇA"
        },
        {
            name: "Pindobaçu",
            lat: -10.7397883888,
            lng: -40.3652044167,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.6704912632674,
            lng: -40.3251675049999,
            desc: "COMUNIDADE QUILOMBOLA FUMAÇA"
        },
        {
            name: "Palmeiras",
            lat: -12.666427861,
            lng: -41.5747141561,
            desc: "COMUNIDADE QUILOMBOLA FUNDÃO"
        },
        {
            name: "Xique-Xique",
            lat: -10.4897352359,
            lng: -42.5596216647,
            desc: ""
        },
        {
            name: "Alcobaça",
            lat: -17.4402560554,
            lng: -39.2312374017,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9902830413,
            lng: -41.0756505596,
            desc: "COMUNIDADE QUILOMBOLA FURADINHO"
        },
        {
            name: "Araçás",
            lat: -12.1803146666,
            lng: -38.1807362646,
            desc: "COMUNIDADE QUILOMBOLA GAIOSO"
        },
        {
            name: "Esplanada",
            lat: -11.7939451944,
            lng: -37.9598471519,
            desc: "AGRUPAMENTO QUILOMBOLA TIMBÓ"
        },
        {
            name: "Cairu",
            lat: -13.3978060832,
            lng: -39.0337167236,
            desc: "COMUNIDADE QUILOMBOLA GALEÃO"
        },
        {
            name: "Entre Rios",
            lat: -11.8662877082,
            lng: -38.0963288283,
            desc: "COMUNIDADE QUILOMBOLA GAMBA"
        },
        {
            name: "Mirangaba",
            lat: -11.0141798887,
            lng: -40.547609637,
            desc: "AGRUPAMENTO QUILOMBOLA GAMELEIRA"
        },
        {
            name: "Pedrão",
            lat: -12.1217680844999,
            lng: -38.6308813293973,
            desc: "COMUNIDADE QUILOMBOLA GAMELEIRA"
        },
        {
            name: "Juazeiro",
            lat: -9.42977444438,
            lng: -40.5161881942,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1880342429,
            lng: -41.0257238665,
            desc: "COMUNIDADE QUILOMBOLA GAMELEIRA"
        },
        {
            name: "São Gabriel",
            lat: -11.0689100555,
            lng: -41.6923423466,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.1870341605,
            lng: -41.3690429533357,
            desc: "COMUNIDADE QUILOMBOLA GARAPA"
        },
        {
            name: "Morro do Chapéu",
            lat: -11.2225067242202,
            lng: -41.3612340620288,
            desc: ""
        },
        {
            name: "Andaraí",
            lat: -12.7921105833,
            lng: -41.3296023468,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.4760084651,
            lng: -38.9213150929,
            desc: "AGRUPAMENTO QUILOMBOLA GARAPUÁ"
        },
        {
            name: "Maraú",
            lat: -13.9020507776,
            lng: -38.9571110136,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0026417079,
            lng: -39.1027942414,
            desc: "COMUNIDADE QUILOMBOLA GARCIA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4495863749,
            lng: -40.0375782937,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.10825,
            lng: -39.233716,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.8972251943,
            lng: -43.3904481436,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1552521804,
            lng: -42.2333251219,
            desc: "AGRUPAMENTO QUILOMBOLA GAVIÃO"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3791495137,
            lng: -39.1304445925,
            desc: "AGRUPAMENTO QUILOMBOLA GAVIÃO"
        },
        {
            name: "Filadélfia",
            lat: -10.6733081804,
            lng: -40.1436284018,
            desc: "COMUNIDADE QUILOMBOLA GAVIÃO"
        },
        {
            name: "Barra da Estiva",
            lat: -13.5628670675,
            lng: -41.1717962164168,
            desc: "COMUNIDADE QUILOMBOLA GINETE"
        },
        {
            name: "Ibititá",
            lat: -11.5060336387,
            lng: -41.9011143392,
            desc: "AGRUPAMENTO QUILOMBOLA GINO"
        },
        {
            name: "Maragogipe",
            lat: -12.8493967081,
            lng: -38.9341263122,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9618512846,
            lng: -41.3160842511,
            desc: "COMUNIDADE QUILOMBOLA GITIRANA"
        },
        {
            name: "Aramari",
            lat: -12.1555604582,
            lng: -38.5013936404,
            desc: ""
        },
        {
            name: "Novo Horizonte",
            lat: -12.7415294997,
            lng: -42.0985392872,
            desc: "COMUNIDADE QUILOMBOLA GÓIS"
        },
        {
            name: "Lapão",
            lat: -11.4879550274,
            lng: -41.8198982608,
            desc: "COMUNIDADE QUILOMBOLA GONZAGA"
        },
        {
            name: "Valença",
            lat: -13.4791227776,
            lng: -39.0902912406,
            desc: "AGRUPAMENTO QUILOMBOLA GRACIOSA"
        },
        {
            name: "Taperoá",
            lat: -13.4829905137,
            lng: -39.0890243735,
            desc: "AGRUPAMENTO QUILOMBOLA GRACIOSA"
        },
        {
            name: "Bonito",
            lat: -11.9727589304,
            lng: -41.3571094844,
            desc: "COMUNIDADE QUILOMBOLA GRAMIAR"
        },
        {
            name: "Filadélfia",
            lat: -10.7397682082,
            lng: -40.1344463321,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.6727450693,
            lng: -42.6022104684,
            desc: ""
        },
        {
            name: "Saúde",
            lat: -10.9463464027,
            lng: -40.4215457056,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8360709998,
            lng: -39.4656561766,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.341793611,
            lng: -41.6674078212,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.0129065833,
            lng: -41.4329784303,
            desc: "COMUNIDADE QUILOMBOLA GRUTA DOS BREJÕES"
        },
        {
            name: "Alagoinhas",
            lat: -12.2026671943,
            lng: -38.5005885268,
            desc: "AGRUPAMENTO QUILOMBOLA GUABIRABA"
        },
        {
            name: "Nazaré",
            lat: -12.8899991804,
            lng: -38.9605601822,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.857933472,
            lng: -38.8540188076,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO ROQUE DO PARAGUAÇU"
        },
        {
            name: "Cachoeira",
            lat: -12.6637946802,
            lng: -38.9145960858,
            desc: "COMUNIDADE QUILOMBOLA BREJO DO ENGENHO DA GUAÍBA"
        },
        {
            name: "Bonito",
            lat: -11.9056902355,
            lng: -41.2918922516,
            desc: "COMUNIDADE QUILOMBOLA GUARANI"
        },
        {
            name: "Condeúba",
            lat: -14.6838786804,
            lng: -42.0315008643,
            desc: "COMUNIDADE QUILOMBOLA GUARIBA"
        },
        {
            name: "Piripá",
            lat: -14.8953410553,
            lng: -41.7148334684,
            desc: ""
        },
        {
            name: "Piripá",
            lat: -14.8820469721,
            lng: -41.7289805825,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8694034025,
            lng: -38.9497126993,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.879338847,
            lng: -38.9559140937,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8852449024,
            lng: -38.9402890706,
            desc: "COMUNIDADE QUILOMBOLA GUERÉM"
        },
        {
            name: "Maragogipe",
            lat: -12.8868375831,
            lng: -38.9356676289,
            desc: ""
        },
        {
            name: "Igaporã",
            lat: -13.9677139303,
            lng: -42.6606664948,
            desc: "COMUNIDADE QUILOMBOLA GURUNGA"
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8702012221,
            lng: -38.3276240848,
            desc: "AGRUPAMENTO QUILOMBOLA QUINGOMA"
        },
        {
            name: "Teixeira de Freitas",
            lat: -17.5352586943,
            lng: -39.7391513036,
            desc: ""
        },
        {
            name: "Nova Viçosa",
            lat: -17.8120114993,
            lng: -39.6641218146,
            desc: "COMUNIDADE QUILOMBOLA HELVÉCIA"
        },
        {
            name: "Uibaí",
            lat: -11.2660099998,
            lng: -42.1533316478,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.3979472638,
            lng: -40.1162501817,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.6140764719,
            lng: -43.3801398268,
            desc: "COMUNIDADE QUILOMBOLA IGARITÉ"
        },
        {
            name: "Ibipeba",
            lat: -11.4820929443,
            lng: -42.2125325975,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9508416388,
            lng: -38.4653343722,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.7282949166,
            lng: -42.7054075291,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0960972916,
            lng: -39.0563098891,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2389753333,
            lng: -43.3953193751,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.8197089442,
            lng: -42.8509878761,
            desc: "AGRUPAMENTO QUILOMBOLA ILHA DE CHAMPRONA"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2487112916,
            lng: -43.3887682623,
            desc: ""
        },
        {
            name: "Candeias",
            lat: -12.7192014024,
            lng: -38.5222726241,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.7093869721,
            lng: -42.6963400148,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.8056311944,
            lng: -42.7189883899,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.8149549721,
            lng: -42.7185551098,
            desc: ""
        },
        {
            name: "São Francisco do Conde",
            lat: -12.7076873471,
            lng: -38.6263501286,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.9257722221,
            lng: -43.4064092072,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.7177426663,
            lng: -39.1981879242,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2739850555,
            lng: -40.9548232904,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1002674026,
            lng: -42.0152302801,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6912995277,
            lng: -41.7729551132,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.676674847,
            lng: -41.7688988125,
            desc: "COMUNIDADE QUILOMBOLA IRECEZINHO"
        },
        {
            name: "Abaré",
            lat: -8.72182915272,
            lng: -39.1132253062,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.5975265554,
            lng: -41.928369803,
            desc: "COMUNIDADE QUILOMBOLA ITAGUAÇU"
        },
        {
            name: "Salvador",
            lat: -12.7970173054,
            lng: -38.5268564438,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.3465864998,
            lng: -43.2132685188,
            desc: "AGRUPAMENTO QUILOMBOLA ITAQUATIARA"
        },
        {
            name: "Entre Rios",
            lat: -12.0457166526,
            lng: -38.1376174656,
            desc: ""
        },
        {
            name: "Lençóis",
            lat: -12.4982835414,
            lng: -41.2941121509,
            desc: ""
        },
        {
            name: "Lençóis",
            lat: -12.5465416913,
            lng: -41.3247325307,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7401364582,
            lng: -40.1264474845,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.9544526844706,
            lng: -37.6949019909021,
            desc: ""
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8398544304,
            lng: -38.3283777335,
            desc: ""
        },
        {
            name: "São Sebastião do Passé",
            lat: -12.5064590693,
            lng: -38.4788795495,
            desc: ""
        },
        {
            name: "Cardeal da Silva",
            lat: -12.129881633,
            lng: -37.9432335577245,
            desc: "JANGADA"
        },
        {
            name: "Valença",
            lat: -13.3918853539,
            lng: -39.0738442893,
            desc: "COMUNIDADE QUILOMBOLA JAQUEIRA"
        },
        {
            name: "Irará",
            lat: -11.9895759722,
            lng: -38.746525125,
            desc: ""
        },
        {
            name: "Sítio do Quinto",
            lat: -10.317503431694,
            lng: -38.1619768392987,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.7288864858,
            lng: -39.1435335052,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.3482380971,
            lng: -39.0553464717,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.5434339303,
            lng: -39.0982711417,
            desc: ""
        },
        {
            name: "Nilo Peçanha",
            lat: -13.692075958,
            lng: -39.0454355659,
            desc: "COMUNIDADE QUILOMBOLA JATIMANE"
        },
        {
            name: "Cansanção",
            lat: -10.7457984441,
            lng: -39.5016918391,
            desc: "COMUNIDADE QUILOMBOLA JATOBÁ"
        },
        {
            name: "Muquém do São Francisco",
            lat: -12.6396342216,
            lng: -43.1937435662,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7737916525,
            lng: -42.2319483152,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.7435235875,
            lng: -40.485959814154,
            desc: "COMUNIDADE QUILOMBOLA JATOBÁ"
        },
        {
            name: "Cansanção",
            lat: -10.7570755971,
            lng: -39.5003483738,
            desc: "AGRUPAMENTO QUILOMBOLA JATOBÁ II"
        },
        {
            name: "Mundo Novo",
            lat: -12.0557106943,
            lng: -40.4975590122,
            desc: "COMUNIDADE QUILOMBOLA JEQUITIBÁ"
        },
        {
            name: "Gandu",
            lat: -13.7197191526,
            lng: -39.5125658264,
            desc: ""
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.7098997358,
            lng: -39.5234404109,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6994579443,
            lng: -43.1877927602,
            desc: "COMUNIDADE QUILOMBOLA TOMBA"
        },
        {
            name: "Feira de Santana",
            lat: -12.2511618193,
            lng: -38.9559076793,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.5450302083,
            lng: -41.9761463609,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9399531665,
            lng: -39.1145532497,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9460121388,
            lng: -39.106984,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0708180831,
            lng: -38.8387845792,
            desc: "AGRUPAMENTO QUILOMBOLA JIBOIA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5766902082,
            lng: -40.2778973333,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6464861891221,
            lng: -41.8469316057888,
            desc: ""
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5944118746,
            lng: -40.2501052932,
            desc: "COMUNIDADE QUILOMBOLA JIBOIA"
        },
        {
            name: "Itacaré",
            lat: -14.2785308192,
            lng: -38.9967631925,
            desc: ""
        },
        {
            name: "Jequié",
            lat: -13.8548246527,
            lng: -40.0913979708,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7269590277,
            lng: -40.724100985,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9958724582,
            lng: -41.642756362,
            desc: "AGRUPAMENTO QUILOMBOLA JOSÉ RAIMUNDO"
        },
        {
            name: "Barreiras",
            lat: -12.2727498194,
            lng: -45.0422504166,
            desc: "COMUNIDADE QUILOMBOLA MUCAMBO"
        },
        {
            name: "Barra",
            lat: -11.171772486,
            lng: -43.1662683236,
            desc: "COMUNIDADE QUILOMBOLA JUÁ"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9791191064463,
            lng: -43.393055576,
            desc: "COMUNIDADE QUILOMBOLA BEBEDOURO"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9610996663,
            lng: -43.3972344948,
            desc: "COMUNIDADE QUILOMBOLA BANDEIRA"
        },
        {
            name: "Mansidão",
            lat: -10.6282131942,
            lng: -44.0906272882,
            desc: "AGRUPAMENTO QUILOMBOLA JUAÍ"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9893043332,
            lng: -43.1061492925,
            desc: ""
        },
        {
            name: "Caravelas",
            lat: -17.7331626664,
            lng: -39.8611248787,
            desc: ""
        },
        {
            name: "Novo Triunfo",
            lat: -10.309036986,
            lng: -38.4626140285,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.2704225138,
            lng: -38.4868104157,
            desc: ""
        },
        {
            name: "Caravelas",
            lat: -17.7614034165,
            lng: -39.8570909514,
            desc: ""
        },
        {
            name: "Ibirapuã",
            lat: -17.7749144304,
            lng: -39.8625667948,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -14.0550684166,
            lng: -42.4799029009,
            desc: ""
        },
        {
            name: "Nova Viçosa",
            lat: -17.8560771664,
            lng: -39.7615802626,
            desc: "AGRUPAMENTO QUILOMBOLA JUSSARA"
        },
        {
            name: "Caatiba",
            lat: -15.0468353332,
            lng: -40.4062032379,
            desc: "COMUNIDADE QUILOMBOLA JUSSARA"
        },
        {
            name: "Maraú",
            lat: -14.1026410276,
            lng: -39.1646286408,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.3294576388,
            lng: -40.1723672341,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.8113154581,
            lng: -42.4088276543,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2146624722,
            lng: -38.2051045278,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.194453519,
            lng: -38.2575147550097,
            desc: "COMUNIDADE QUILOMBOLA JUREMA"
        },
        {
            name: "Cipó",
            lat: -11.1375607916,
            lng: -38.4575032218,
            desc: ""
        },
        {
            name: "Sítio do Quinto",
            lat: -10.2826061664064,
            lng: -38.0791596591327,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9918908192,
            lng: -43.2165383313,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.6359322499,
            lng: -42.6702522655,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8541507916,
            lng: -38.3589437232,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.7578245971,
            lng: -40.4812510798,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8341224998,
            lng: -39.4556999564,
            desc: "COMUNIDADE QUILOMBOLA LAJE DAS CABRAS"
        },
        {
            name: "Monte Santo",
            lat: -10.462509361,
            lng: -39.607155403,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.43574637486,
            lng: -40.521209776,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.42950451371,
            lng: -40.5174071294,
            desc: ""
        },
        {
            name: "Esplanada",
            lat: -11.7938957638,
            lng: -37.9599153326,
            desc: "AGRUPAMENTO QUILOMBOLA TIMBÓ"
        },
        {
            name: "Campo Formoso",
            lat: -10.5013005554,
            lng: -40.3191680822,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1808571108,
            lng: -40.9608037807,
            desc: "COMUNIDADE QUILOMBOLA DE LAGE DOS NEGROS"
        },
        {
            name: "Campo Formoso",
            lat: -10.496548222,
            lng: -40.3971781113,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.053550472,
            lng: -40.7835219486,
            desc: "COMUNIDADE QUILOMBOLA LAGES DO BATATA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5761656944,
            lng: -40.2771432224,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4723377499,
            lng: -40.1820131223,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.6190184581,
            lng: -40.2882321764,
            desc: "COMUNIDADE QUILOMBOLA LAGINHA"
        },
        {
            name: "Feira de Santana",
            lat: -12.1334269304,
            lng: -38.9877766407,
            desc: "COMUNIDADE QUILOMBOLA LAGOA GRANDE"
        },
        {
            name: "Salvador",
            lat: -12.8547910832,
            lng: -38.4443814021,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.0015981665,
            lng: -40.7543639622,
            desc: ""
        },
        {
            name: "Wagner",
            lat: -12.374846,
            lng: -41.172191,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DOS PRETOS"
        },
        {
            name: "Campo Formoso",
            lat: -10.2904207221,
            lng: -40.7524248619,
            desc: "COMUNIDADE QUILOMBOLA LAGOA BRANCA"
        },
        {
            name: "Cansanção",
            lat: -10.739594861,
            lng: -39.4705114884,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1484436804,
            lng: -38.9893868719,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.6768774026,
            lng: -42.4166264732,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8535273191,
            lng: -39.4637540472,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DA CRUZ"
        },
        {
            name: "Ituaçu",
            lat: -13.9687062498,
            lng: -41.4225499443,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.0736584305,
            lng: -39.0063263054,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7372284303,
            lng: -40.7119454181,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.3087468888,
            lng: -41.8610381111,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.511687733995,
            lng: -41.9061722709999,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DA PEDRA"
        },
        {
            name: "Cansanção",
            lat: -10.7614615416,
            lng: -39.5099737081,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -14.0581546109,
            lng: -42.4818348592,
            desc: ""
        },
        {
            name: "Lagoa Real",
            lat: -14.0401816665,
            lng: -42.2822551851,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO ROCHA"
        },
        {
            name: "Nordestina",
            lat: -10.8447655832,
            lng: -39.4483324427,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DA SALINA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9347629997,
            lng: -41.4595488618,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DAMASCENO"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.1819982984,
            lng: -43.4716161831,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DAS PIRANHAS"
        },
        {
            name: "São Gabriel",
            lat: -11.0220616665,
            lng: -41.6234281752,
            desc: "LAGOA DE FORA"
        },
        {
            name: "Lapão",
            lat: -11.4567125692,
            lng: -41.8096604655,
            desc: ""
        },
        {
            name: "Poções",
            lat: -14.5071809444,
            lng: -40.5209717222,
            desc: ""
        },
        {
            name: "Poções",
            lat: -14.5278861941,
            lng: -40.5646403536,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8364845277,
            lng: -40.8563500544,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.7773740137,
            lng: -40.9641168429,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DE MARIA CLEMÊNCIA"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7819791386,
            lng: -40.9623641643,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DE MARIA CLEMÊNCIA"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7296615416,
            lng: -40.8644770566,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.8824529443,
            lng: -41.2829746276,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4735294304,
            lng: -41.8079044012,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7706673054,
            lng: -40.9164801671,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.7000410276,
            lng: -41.8425925278,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.6305777216,
            lng: -41.8741581636,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO BAIXÃO"
        },
        {
            name: "América Dourada",
            lat: -11.3081202776,
            lng: -41.480680499,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.2705041805,
            lng: -41.5193668752,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.0728961943,
            lng: -43.2496828466,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.6527754856,
            lng: -41.9863023787,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DO CEDRO"
        },
        {
            name: "Barro Alto",
            lat: -11.8190802777,
            lng: -41.9140879192,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DO CIPÓ"
        },
        {
            name: "Serrinha",
            lat: -11.7230342633,
            lng: -38.9443200443,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO CURRALINHO"
        },
        {
            name: "Cafarnaum",
            lat: -11.6923996666,
            lng: -41.472695541,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4838813053,
            lng: -41.7943219724,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO GAUDÊNCIO"
        },
        {
            name: "Paratinga",
            lat: -12.7976507222,
            lng: -43.2339730278,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7780949397598,
            lng: -42.036056364635,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1994040554,
            lng: -42.0208708517,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO MARTINHO"
        },
        {
            name: "Caetité",
            lat: -13.7270610276,
            lng: -42.3615875435,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO MATO"
        },
        {
            name: "João Dourado",
            lat: -11.1559432776,
            lng: -41.4392951232,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO MEIO"
        },
        {
            name: "Caetité",
            lat: -14.127007861,
            lng: -42.3727508771,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.272016444,
            lng: -41.047274828,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DE MELQUÍADES"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2114787499,
            lng: -41.0863654597,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.3604077218,
            lng: -43.380386887,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.085590861,
            lng: -41.469841528,
            desc: ""
        },
        {
            name: "Aracatu",
            lat: -14.2934075136,
            lng: -41.422895248,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.48885549984,
            lng: -40.6165194327,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.2585833192,
            lng: -40.4639657988,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO TIMBÓ"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7077558332,
            lng: -40.8624410116,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.3020562221,
            lng: -41.8451671139,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.655781208,
            lng: -41.6563533077,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DO ZECA"
        },
        {
            name: "Candiba",
            lat: -14.4560048887,
            lng: -42.8497050436,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8651193885,
            lng: -39.4433442141,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.3972712915,
            lng: -41.534761179,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7551523332,
            lng: -42.1187812136,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.1526422498,
            lng: -41.4696398762,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DOS LUNDUS"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9320254583,
            lng: -41.6039425563,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4878156942,
            lng: -41.8707509935,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DOS PATOS"
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8944835971,
            lng: -38.3039768872,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7127844304,
            lng: -40.708210832,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DOS PATOS"
        },
        {
            name: "Wagner",
            lat: -12.278870222,
            lng: -41.1710524049,
            desc: ""
        },
        {
            name: "Abaíra",
            lat: -13.3388358748,
            lng: -41.6321262087,
            desc: ""
        },
        {
            name: "Retirolândia",
            lat: -11.4440781387,
            lng: -39.3295270411,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA GRANDE"
        },
        {
            name: "Urandi",
            lat: -14.7455920691,
            lng: -42.8338935111,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2770151387,
            lng: -43.4048886266,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1305459577,
            lng: -38.993393017,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.4233741388,
            lng: -42.1644801667,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -12.011390972,
            lng: -41.6116584856,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA NOVA"
        },
        {
            name: "Irecê",
            lat: -11.3394297915,
            lng: -41.7445311494,
            desc: "COMUNIDADE QUILOMBOLA LAGOA NOVA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9024429026,
            lng: -41.6230471969,
            desc: "COMUNIDADE QUILOMBOLA LAGOA PRETA"
        },
        {
            name: "Ituberá",
            lat: -13.6713090971,
            lng: -39.1981094476,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2417277637,
            lng: -43.0502217908,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1257846527,
            lng: -38.9786174182,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8403719997,
            lng: -40.8844824375,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.7199290693,
            lng: -41.0602988202,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.2784374026,
            lng: -41.435492954,
            desc: "COMUNIDADE QUILOMBOLA LAGOA VERDE"
        },
        {
            name: "América Dourada",
            lat: -11.2581398846165,
            lng: -41.449931355576,
            desc: "COMUNIDADE QUILOMBOLA LAGOA VERDE DE BAHIA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9702883053,
            lng: -41.5670784945,
            desc: "COMUNIDADE QUILOMBOLA LAGOA VERMELHA"
        },
        {
            name: "Cansanção",
            lat: -10.7394096109,
            lng: -39.4925099769,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5747864166,
            lng: -40.1714740556,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.6469043332,
            lng: -41.0775272939,
            desc: ""
        },
        {
            name: "Nova Canaã",
            lat: -14.8186642916,
            lng: -40.3112882378,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -11.0633020553,
            lng: -41.644025175,
            desc: "COMUNIDADE QUILOMBOLA LAGOINHA"
        },
        {
            name: "Casa Nova",
            lat: -9.29431574991,
            lng: -41.2748420289,
            desc: ""
        },
        {
            name: "Uibaí",
            lat: -11.3095568608,
            lng: -42.1147673307,
            desc: "COMUNIDADE QUILOMBOLA LAGOINHA"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.9047318191,
            lng: -41.8984227271,
            desc: ""
        },
        {
            name: "Nova Canaã",
            lat: -14.8240729305,
            lng: -40.3046716946,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.682190861,
            lng: -42.4343052246,
            desc: ""
        },
        {
            name: "Uibaí",
            lat: -11.3320192359,
            lng: -42.1287704302,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.7342083471,
            lng: -40.3573352251,
            desc: ""
        },
        {
            name: "Cansanção",
            lat: -10.7585693749,
            lng: -39.4830909131,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1855930833,
            lng: -40.9667647779,
            desc: "AGRUPAMENTO QUILOMBOLA LAJE DE CIMA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4458999027,
            lng: -40.1792764172,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5399906249,
            lng: -40.1812528471,
            desc: ""
        },
        {
            name: "Itaguaçu da Bahia",
            lat: -11.009113486,
            lng: -42.3951997088,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.481095611,
            lng: -41.7574942537,
            desc: "COMUNIDADE QUILOMBOLA LAJEADO"
        },
        {
            name: "Lapão",
            lat: -11.482358833,
            lng: -41.7569726065,
            desc: "COMUNIDADE QUILOMBOLA LAJEADO"
        },
        {
            name: "Ibititá",
            lat: -11.5607024721,
            lng: -41.9004780796,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.3262796666,
            lng: -41.5258640301,
            desc: "COMUNIDADE QUILOMBOLA LAJEDÃO DOS MATEUS"
        },
        {
            name: "Ibipeba",
            lat: -11.7027778887,
            lng: -42.1269718232,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.5757187637,
            lng: -41.6909647291,
            desc: "COMUNIDADE QUILOMBOLA LAGEDINHO"
        },
        {
            name: "Saúde",
            lat: -10.927231736,
            lng: -40.4815830974,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.5285082083,
            lng: -41.8197397641,
            desc: "COMUNIDADE QUILOMBOLA LAJEDO DE EURÍPEDES"
        },
        {
            name: "Lapão",
            lat: -11.5268617637,
            lng: -41.7942150265,
            desc: "COMUNIDADE QUILOMBOLA LAJEDO DO PAU D'ARCO"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.552029986,
            lng: -40.1742098297,
            desc: ""
        },
        {
            name: "Sento Sé",
            lat: -9.75017451378,
            lng: -41.8856881666,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1850504443,
            lng: -40.9717084222,
            desc: "AGRUPAMENTO QUILOMBOLA LAJE DE CIMA"
        },
        {
            name: "Campo Formoso",
            lat: -10.1905867776,
            lng: -40.9707451155,
            desc: "COMUNIDADE QUILOMBOLA LAJE DE CIMA II"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.6106338333,
            lng: -40.1369499586,
            desc: "COMUNIDADE QUILOMBOLA LAGINHA"
        },
        {
            name: "Presidente Jânio Quadros",
            lat: -14.8890278471,
            lng: -41.7127848201,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2678007081,
            lng: -41.015865961,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.4931122337298,
            lng: -39.1172241727673,
            desc: "COMUNIDADE QUILOMBOLA LAMEGO"
        },
        {
            name: "Taperoá",
            lat: -13.4923780416,
            lng: -39.1358720147,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0321969999,
            lng: -39.2905074722,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.379832722,
            lng: -41.8300117519,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.3238792082,
            lng: -41.6079352056,
            desc: ""
        },
        {
            name: "Igaporã",
            lat: -13.6841277913,
            lng: -42.6925985583,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.4136162637,
            lng: -41.3961996394,
            desc: "COMUNIDADE QUILOMBOLA LAPINHA"
        },
        {
            name: "Igaporã",
            lat: -13.692086385,
            lng: -42.7089756561252,
            desc: "COMUNIDADE QUILOMBOLA LAPINHA"
        },
        {
            name: "Camamu",
            lat: -13.9382048888,
            lng: -39.11456442,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.6638628748,
            lng: -42.8783730296,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.9051779410159,
            lng: -39.2109884755,
            desc: "COMUNIDADE QUILOMBOLA LARANJEIRAS"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8606690271,
            lng: -41.0224074572,
            desc: "COMUNIDADE QUILOMBOLA LARANJEIRA"
        },
        {
            name: "Paratinga",
            lat: -12.7615084721,
            lng: -43.2265278764,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4604269388054,
            lng: -41.8049197488722,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.6107317434999,
            lng: -42.9389040640615,
            desc: "COMUNIDADE QUILOMBOLA LARGO DA VITÓRIA"
        },
        {
            name: "Riacho de Santana",
            lat: -13.6124497982,
            lng: -42.939943446,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1071959026,
            lng: -42.0285903654,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6290657776,
            lng: -41.6711366872,
            desc: "COMUNIDADE QUILOMBOLA LARGO DO MIRANDA"
        },
        {
            name: "Jacobina",
            lat: -11.2729668471,
            lng: -40.4708457094,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.0770608331,
            lng: -43.1659049847,
            desc: ""
        },
        {
            name: "Botuporã",
            lat: -13.4368631248,
            lng: -42.4743542446,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.749285347,
            lng: -41.6172437641,
            desc: "LICURI DE JOÃO SIMEÃO"
        },
        {
            name: "Entre Rios",
            lat: -12.2785715277,
            lng: -37.8806760561,
            desc: "COMUNIDADE QUILOMBOLA LIMOEIRO"
        },
        {
            name: "Maragogipe",
            lat: -12.7245431666,
            lng: -38.9401878195,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.6625607777,
            lng: -40.3361164856,
            desc: "AGRUPAMENTO QUILOMBOLA LUTANDA"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.630151149,
            lng: -40.183546745412,
            desc: "COMUNIDADE QUILOMBOLA MACACO DE CIMA"
        },
        {
            name: "Itaeté",
            lat: -12.9188717694475,
            lng: -41.1095518994352,
            desc: "AGRUPAMENTO QUILOMBOLA MACACO SECO"
        },
        {
            name: "Itaeté",
            lat: -12.9223918192,
            lng: -41.1079602519,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6269547638,
            lng: -40.1698399715,
            desc: "COMUNIDADE QUILOMBOLA MACACO DE BAIXO"
        },
        {
            name: "Lapão",
            lat: -11.503666486,
            lng: -41.7779904709,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.8024764025,
            lng: -41.8508372422,
            desc: "AGRUPAMENTO QUILOMBOLA MACHADO"
        },
        {
            name: "Rodelas",
            lat: -8.84499629154,
            lng: -38.7687351948,
            desc: ""
        },
        {
            name: "Guanambi",
            lat: -14.3250920277,
            lng: -42.9785045556,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8244614025,
            lng: -40.9279742734,
            desc: "AGRUPAMENTO QUILOMBOLA UMBURANA E MALHADA"
        },
        {
            name: "Gentio do Ouro",
            lat: -11.5482723471,
            lng: -42.7969072206,
            desc: "COMUNIDADE QUILOMBOLA MALHADA"
        },
        {
            name: "Caetité",
            lat: -13.7436634856,
            lng: -42.3284914804,
            desc: ""
        },
        {
            name: "Santa Rita de Cássia",
            lat: -10.723367486,
            lng: -44.2596983033,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.2286548888,
            lng: -40.5746055573,
            desc: "COMUNIDADE QUILOMBOLA MALHADINHA DE DENTRO"
        },
        {
            name: "Jacobina",
            lat: -11.2270089305,
            lng: -40.5720224297,
            desc: "COMUNIDADE QUILOMBOLA MALHADINHA DE DENTRO"
        },
        {
            name: "Salvador",
            lat: -12.8493381388,
            lng: -38.4600570002,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.7452931246,
            lng: -41.8244777732,
            desc: "COMUNIDADE QUILOMBOLA MALVINAS"
        },
        {
            name: "São Gabriel",
            lat: -11.006175111,
            lng: -41.5778716508,
            desc: "COMUNIDADE QUILOMBOLA MANDACARU"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2599997222,
            lng: -43.1589853889,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.7947957498,
            lng: -41.8814138142,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1754790138,
            lng: -38.117124958,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.5917408609,
            lng: -40.7747997848,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1860716942,
            lng: -41.9538847686,
            desc: "COMUNIDADE QUILOMBOLA MANDACARU DOS PILÕES"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5896705832,
            lng: -40.3181953213,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0537184999,
            lng: -38.7529047386,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3265510138,
            lng: -39.2315901077,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2746661666,
            lng: -43.4064593478,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6950607916,
            lng: -43.183877224,
            desc: ""
        },
        {
            name: "Sítio do Mato",
            lat: -12.7609262634,
            lng: -43.3116258108,
            desc: "COMUNIDADE QUILOMBOLA BARRO VERMELHO"
        },
        {
            name: "Tanque Novo",
            lat: -13.5793159998,
            lng: -42.4547317309,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1841492499,
            lng: -38.9192864169,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7504045693,
            lng: -38.5238072015,
            desc: ""
        },
        {
            name: "Riachão do Jacuípe",
            lat: -11.6678787359,
            lng: -39.3774030709,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7436645832,
            lng: -42.1293788904,
            desc: ""
        },
        {
            name: "Conceição do Coité",
            lat: -11.6657223054,
            lng: -39.336661211,
            desc: "COMUNIDADE QUILOMBOLA MARACUJÁ"
        },
        {
            name: "Vera Cruz",
            lat: -12.9669372915,
            lng: -38.6148932054,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.1053532634,
            lng: -39.0154245238,
            desc: "COMUNIDADE QUILOMBOLA MARAÚ"
        },
        {
            name: "Camamu",
            lat: -14.0575541805,
            lng: -39.206056153,
            desc: ""
        },
        {
            name: "Jandaíra",
            lat: -11.5822574999,
            lng: -37.6630704615,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9762083963396,
            lng: -43.3799547055,
            desc: "COMUNIDADE QUILOMBOLA MARI"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9802160554,
            lng: -43.3478033291,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6237123332,
            lng: -38.9541548844,
            desc: ""
        },
        {
            name: "Banzaê",
            lat: -10.5666095831,
            lng: -38.6960099678,
            desc: "COMUNIDADE QUILOMBOLA MARIA PRETA"
        },
        {
            name: "Feira de Santana",
            lat: -12.1933603888,
            lng: -38.9339989167,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9421067916,
            lng: -39.114879961,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9824179027,
            lng: -39.2219645282,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7481111108,
            lng: -38.537460485,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -12.304838861,
            lng: -37.9045519205,
            desc: "AGRUPAMENTO QUILOMBOLA FAZENDA NOVA CANAÃ ITAITA"
        },
        {
            name: "Irará",
            lat: -12.0780584997,
            lng: -38.6918322681,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -12.3038224099999,
            lng: -37.8581958466913,
            desc: "COMUNIDADE QUILOMBOLA MASSARANDUPIÓ"
        },
        {
            name: "Filadélfia",
            lat: -10.7041158748,
            lng: -40.0668879009,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.5439158888,
            lng: -41.9741456516,
            desc: "COMUNIDADE QUILOMBOLA BAIRRO DA MATA"
        },
        {
            name: "Coração de Maria",
            lat: -12.1791328749,
            lng: -38.7735775126,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.4179259722,
            lng: -42.1359129449,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.3105741111,
            lng: -41.4793121389,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.1732044025,
            lng: -41.4292195191,
            desc: "COMUNIDADE QUILOMBOLA MATA DO MILHO"
        },
        {
            name: "Riacho de Santana",
            lat: -13.5560558609,
            lng: -42.7798377024,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.8541556526,
            lng: -41.2633039079,
            desc: "COMUNIDADE QUILOMBOLA MATA FLORENÇA"
        },
        {
            name: "Bonito",
            lat: -12.011123958,
            lng: -41.3989816123,
            desc: "AGRUPAMENTO QUILOMBOLA MATA VERDE"
        },
        {
            name: "Camamu",
            lat: -14.0015676666,
            lng: -39.024039138,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.5141492221,
            lng: -39.1721754576,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.2657194722,
            lng: -39.0515624167,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.5468113609,
            lng: -41.9758532675,
            desc: "COMUNIDADE QUILOMBOLA BAIRRO DA MATA"
        },
        {
            name: "Souto Soares",
            lat: -12.017475736,
            lng: -41.6471616798,
            desc: "COMUNIDADE QUILOMBOLA MATINHA"
        },
        {
            name: "Feira de Santana",
            lat: -12.1470413186,
            lng: -38.9267396117,
            desc: "AGRUPAMENTO QUILOMBOLA MATINHA DOS PRETOS"
        },
        {
            name: "Feira de Santana",
            lat: -12.1507182154923,
            lng: -38.9174768165,
            desc: "AGRUPAMENTO QUILOMBOLA MATINHA DOS PRETOS"
        },
        {
            name: "Feira de Santana",
            lat: -12.1398023054,
            lng: -38.9275488777,
            desc: "AGRUPAMENTO QUILOMBOLA MATINHA DOS PRETOS"
        },
        {
            name: "Xique-Xique",
            lat: -10.6877384998,
            lng: -42.6769728981,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.5046481530413,
            lng: -42.6784321354999,
            desc: "COMUNIDADE QUILOMBOLA MATO GROSSO"
        },
        {
            name: "Araçás",
            lat: -12.1660096248,
            lng: -38.1535692134,
            desc: "COMUNIDADE QUILOMBOLA MATO LIMPO"
        },
        {
            name: "Iraquara",
            lat: -12.2719643054,
            lng: -41.5569081992,
            desc: "COMUNIDADE QUILOMBOLA MATO PRETO"
        },
        {
            name: "Irecê",
            lat: -11.3016250277,
            lng: -41.8428028904,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.6135778332,
            lng: -41.6237395311,
            desc: "COMUNIDADE QUILOMBOLA MATO VERDE"
        },
        {
            name: "América Dourada",
            lat: -11.3813008609,
            lng: -41.4225754194,
            desc: "AGRUPAMENTO QUILOMBOLA MAXIMINO"
        },
        {
            name: "Jeremoabo",
            lat: -10.0236406527,
            lng: -38.3666450412,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.3110599027,
            lng: -41.5671102643,
            desc: "COMUNIDADE QUILOMBOLA MEIO CENTRO"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.266356861,
            lng: -41.0449013455,
            desc: ""
        },
        {
            name: "Tanque Novo",
            lat: -13.6327277776,
            lng: -42.3712398524,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.6263271375,
            lng: -39.2837179898001,
            desc: "COMUNIDADE QUILOMBOLA MIGUEL CHICO"
        },
        {
            name: "Taperoá",
            lat: -13.6346174443,
            lng: -39.2860891137,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1433134166,
            lng: -38.4467660543,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.2142650138,
            lng: -42.0276823172,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.2130558471,
            lng: -42.0290438543,
            desc: "COMUNIDADE QUILOMBOLA MILHO VERDE"
        },
        {
            name: "Guanambi",
            lat: -14.3173834444,
            lng: -42.9832009716,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.139053111,
            lng: -39.1420800831,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.4402055416,
            lng: -42.3159693892,
            desc: ""
        },
        {
            name: "Itaparica",
            lat: -12.9065850554,
            lng: -38.672638516,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0235708055,
            lng: -38.8646302222,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0450682082,
            lng: -38.8499286386,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5565600275,
            lng: -41.7201045334,
            desc: "COMUNIDADE QUILOMBOLA MOCAMBO DA CACHOEIRA"
        },
        {
            name: "Seabra",
            lat: -12.4078372777,
            lng: -41.7586814722,
            desc: ""
        },
        {
            name: "Rio Real",
            lat: -11.634272,
            lng: -37.85099,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1687542359,
            lng: -41.6906189412,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0939940554,
            lng: -38.8392263999,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -11.8023891249,
            lng: -42.0571842788,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.7052410276,
            lng: -42.0226571091,
            desc: "COMUNIDADE QUILOMBOLA MOCOBEU"
        },
        {
            name: "Jandaíra",
            lat: -11.5477731388,
            lng: -37.6133325292,
            desc: ""
        },
        {
            name: "Barra da Estiva",
            lat: -13.6139709721,
            lng: -41.2112848508,
            desc: "COMUNIDADE QUILOMBOLA MOITINHA"
        },
        {
            name: "Ouriçangas",
            lat: -12.0795572222,
            lng: -38.5983816667,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.6125755692,
            lng: -38.9205480208,
            desc: "COMUNIDADE QUILOMBOLA VILA DE MONTE ALEGRE"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4434338525273,
            lng: -40.1915848988781,
            desc: ""
        },
        {
            name: "São Francisco do Conde",
            lat: -12.6395000414,
            lng: -38.6208933319,
            desc: "AGRUPAMENTO QUILOMBOLA MONTE RECÔNCAVO"
        },
        {
            name: "Santa Maria da Vitória",
            lat: -13.3243215964,
            lng: -44.4216821823,
            desc: "COMUNIDADE QUILOMBOLA MONTEVIDINHA"
        },
        {
            name: "Caém",
            lat: -11.1408100137,
            lng: -40.4458092148,
            desc: ""
        },
        {
            name: "Caém",
            lat: -11.094671861,
            lng: -40.4359255268,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1464902916,
            lng: -38.991373668,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.6134256109,
            lng: -38.9094209196,
            desc: "AGRUPAMENTO QUILOMBOLA MORERÉ"
        },
        {
            name: "Bonito",
            lat: -11.8118646249,
            lng: -41.2852440684,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7143571526,
            lng: -40.0758607711,
            desc: "COMUNIDADE QUILOMBOLA MORRINHO"
        },
        {
            name: "Guanambi",
            lat: -14.295767458,
            lng: -42.8291099923,
            desc: "AGRUPAMENTO QUILOMBOLA MORRO DE DENTRO"
        },
        {
            name: "Central",
            lat: -11.1639179443,
            lng: -41.9674228861,
            desc: "COMUNIDADE QUILOMBOLA MORRO DE LÚCIO"
        },
        {
            name: "Ibipeba",
            lat: -11.68333,
            lng: -42.11667,
            desc: ""
        },
        {
            name: "Ilhéus",
            lat: -14.7860640693,
            lng: -39.1068878719,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5225149858,
            lng: -42.0008049922,
            desc: ""
        },
        {
            name: "Itanhém",
            lat: -17.1067250138,
            lng: -40.4389027501,
            desc: "COMUNIDADE QUILOMBOLA MOTA"
        },
        {
            name: "Conde",
            lat: -11.9467000080958,
            lng: -37.6742399506988,
            desc: ""
        },
        {
            name: "Esplanada",
            lat: -11.823337,
            lng: -37.946116,
            desc: "COMUNIDADE QUILOMBOLA MUCAMBINHO"
        },
        {
            name: "Buritirama",
            lat: -10.5698135138,
            lng: -43.5910948322,
            desc: ""
        },
        {
            name: "Tabocas do Brejo Velho",
            lat: -12.4568931526,
            lng: -44.3071624048,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7382536944,
            lng: -42.2338498056,
            desc: ""
        },
        {
            name: "Serrolândia",
            lat: -11.4145318193,
            lng: -40.3025672241,
            desc: ""
        },
        {
            name: "Casa Nova",
            lat: -9.18252766662,
            lng: -40.9782448056,
            desc: ""
        },
        {
            name: "Pedrão",
            lat: -12.0708215416,
            lng: -38.6669900706,
            desc: ""
        },
        {
            name: "Barreiras",
            lat: -12.2713631108,
            lng: -45.0381445367,
            desc: "COMUNIDADE QUILOMBOLA MUCAMBO"
        },
        {
            name: "Miguel Calmon",
            lat: -11.547526472,
            lng: -40.4534550544,
            desc: "AGRUPAMENTO QUILOMBOLA MUCAMBO DOS NEGROS"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.5151023879999,
            lng: -39.729086753679,
            desc: "COMUNIDADE QUILOMBOLA MUCUGÊ"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.5243473749,
            lng: -39.7352456285,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0509346789097,
            lng: -38.6085046493602,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9704738471,
            lng: -41.6406125538,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.2284639997,
            lng: -41.0338866168,
            desc: "MULUNGU"
        },
        {
            name: "Esplanada",
            lat: -11.8354186941,
            lng: -38.010840713,
            desc: "AGRUPAMENTO QUILOMBOLA MULUNGU"
        },
        {
            name: "Várzea Nova",
            lat: -11.2027944581,
            lng: -41.0266926115,
            desc: "COMUNIDADE QUILOMBOLA MULUNGU"
        },
        {
            name: "Boninal",
            lat: -12.7274542634,
            lng: -41.8665818786,
            desc: "COMUNIDADE QUILOMBOLA MULUNGU"
        },
        {
            name: "América Dourada",
            lat: -11.4473304858,
            lng: -41.691952501,
            desc: "COMUNIDADE QUILOMBOLA MULUNGÚ"
        },
        {
            name: "Iraquara",
            lat: -12.2916197777,
            lng: -41.5981216389,
            desc: ""
        },
        {
            name: "Bom Jesus da Serra",
            lat: -14.3732690829,
            lng: -40.5746096866,
            desc: "COMUNIDADE QUILOMBOLA MUMBUCA"
        },
        {
            name: "Filadélfia",
            lat: -10.6790756388,
            lng: -40.1305845591,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9529771666,
            lng: -41.6632918345,
            desc: ""
        },
        {
            name: "Muquém do São Francisco",
            lat: -12.0641526943,
            lng: -43.5499243748,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.718469736,
            lng: -40.216037209,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -11.7391622916,
            lng: -42.0677889014,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0091808331,
            lng: -38.8061365934,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.7419310831,
            lng: -43.1952434843,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0113674443,
            lng: -38.806339067,
            desc: "AGRUPAMENTO QUILOMBOLA OLARIA"
        },
        {
            name: "Maragogipe",
            lat: -12.859198597,
            lng: -38.9085605209,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.616578597,
            lng: -38.8184448223,
            desc: "AGRUPAMENTO QUILOMBOLA MUTECHO"
        },
        {
            name: "Caravelas",
            lat: -17.819790994444,
            lng: -39.4029808044433,
            desc: ""
        },
        {
            name: "Santa Maria da Vitória",
            lat: -13.1130367499,
            lng: -44.4368165833,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.7274655554,
            lng: -38.9342309926,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7939743332,
            lng: -38.5205726266,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -13.0113587637,
            lng: -38.4796755694,
            desc: ""
        },
        {
            name: "Ituaçu",
            lat: -13.9722079166,
            lng: -41.430357638,
            desc: "COMUNIDADE QUILOMBOLA LAGOA DA LAJE"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.6174233887,
            lng: -40.1715702327,
            desc: "COMUNIDADE QUILOMBOLA CONCEIÇÃO"
        },
        {
            name: "São Sebastião do Passé",
            lat: -12.4655423054,
            lng: -38.5020854828,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.6644501525,
            lng: -43.4778770949,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.8168712082,
            lng: -41.7190978897,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8627907082,
            lng: -38.4658421226,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.4869787083,
            lng: -39.0479435563,
            desc: ""
        },
        {
            name: "Jaguaquara",
            lat: -13.5357621944,
            lng: -39.9616574849,
            desc: ""
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.609890347,
            lng: -39.7006459102,
            desc: "COMUNIDADE QUILOMBOLA NOVA ESPERANÇA"
        },
        {
            name: "Curaçá",
            lat: -8.9230469305,
            lng: -39.8498168887,
            desc: ""
        },
        {
            name: "Curaçá",
            lat: -8.92265899991,
            lng: -39.8667298607,
            desc: "COMUNIDADE QUILOMBOLA NOVA JATOBÁ"
        },
        {
            name: "Curaçá",
            lat: -8.99079906927,
            lng: -39.9037288042,
            desc: ""
        },
        {
            name: "Jaguaquara",
            lat: -13.7529758055,
            lng: -39.7276441393,
            desc: "COMUNIDADE QUILOMBOLA NOVA PONTE"
        },
        {
            name: "Itamari",
            lat: -13.778636778,
            lng: -39.676258833,
            desc: ""
        },
        {
            name: "Ponto Novo",
            lat: -11.0044070553,
            lng: -40.0969903508,
            desc: "COMUNIDADE QUILOMBOLA REPRESA"
        },
        {
            name: "Xique-Xique",
            lat: -10.5218953193,
            lng: -42.5722648064,
            desc: ""
        },
        {
            name: "Serrinha",
            lat: -11.6743300832,
            lng: -39.0130701364,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.4656853193,
            lng: -39.163742242,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.0363195137,
            lng: -41.6661005546,
            desc: "COMUNIDADE QUILOMBOLA NOVO HORIZONTE"
        },
        {
            name: "Canarana",
            lat: -11.7279224304,
            lng: -41.6258521374,
            desc: "COMUNIDADE QUILOMBOLA NOVO HORIZONTE"
        },
        {
            name: "Valença",
            lat: -13.4490007499,
            lng: -39.1644569766,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.480917486,
            lng: -39.1732881936,
            desc: ""
        },
        {
            name: "Pindobaçu",
            lat: -10.729319236,
            lng: -40.4508420273,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.8275185832,
            lng: -40.4966182329,
            desc: "AGRUPAMENTO QUILOMBOLA NUGUAÇU"
        },
        {
            name: "Jaguaquara",
            lat: -13.5477882776,
            lng: -39.9797165317,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1744602915,
            lng: -38.513136151,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA OITEIRO"
        },
        {
            name: "Vitória da Conquista",
            lat: -14.7737566524,
            lng: -40.9507513138,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0103816249,
            lng: -38.8106898333,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4717616247,
            lng: -40.1991137051,
            desc: "COMUNIDADE QUILOMBOLA OLARIA"
        },
        {
            name: "Irará",
            lat: -12.0152420272,
            lng: -38.8010983647,
            desc: "AGRUPAMENTO QUILOMBOLA OLARIA"
        },
        {
            name: "Boninal",
            lat: -12.7004608054,
            lng: -41.8392195999,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.9087196804,
            lng: -41.9261439965,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1340314722,
            lng: -38.4370766111,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.4996034583,
            lng: -42.2147596948,
            desc: ""
        },
        {
            name: "São Félix do Coribe",
            lat: -13.7438144721,
            lng: -44.0302933072,
            desc: ""
        },
        {
            name: "Aramari",
            lat: -12.0582295693,
            lng: -38.558810648,
            desc: "COMUNIDADE QUILOMBOLA OLHOS D'ÁGUA"
        },
        {
            name: "Caetité",
            lat: -13.9988964996,
            lng: -42.6838446097,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.7398871109,
            lng: -41.9103854189,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.9497856805,
            lng: -40.5746916676,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.1382099859,
            lng: -38.9437132126,
            desc: "AGRUPAMENTO QUILOMBOLA MATINHA DOS PRETOS"
        },
        {
            name: "Seabra",
            lat: -12.6145604581,
            lng: -41.9228838617,
            desc: "COMUNIDADE QUILOMBOLA OLHOS D'ÁGUA DO BASÍLIO"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.9346994027,
            lng: -41.9061190278,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.7071643331,
            lng: -42.1480363099,
            desc: "AGRUPAMENTO QUILOMBOLA OLHOS D'ÁGUA"
        },
        {
            name: "Ibitiara",
            lat: -12.4902396943,
            lng: -42.1129347978,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.5063380416,
            lng: -42.2071216513,
            desc: "COMUNIDADE QUILOMBOLA OLHO D'ÁGUA DO BADU"
        },
        {
            name: "Boninal",
            lat: -12.7542186964999,
            lng: -41.629794183087,
            desc: "COMUNIDADE QUILOMBOLA OLHOS DE AGUINHA"
        },
        {
            name: "Araçás",
            lat: -12.195287236,
            lng: -38.2418723326,
            desc: "AGRUPAMENTO QUILOMBOLA ONÇA"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3488840138,
            lng: -39.1838759579,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0657181108,
            lng: -39.220977914,
            desc: "AGRUPAMENTO QUILOMBOLA OROJÓ"
        },
        {
            name: "Novo Triunfo",
            lat: -10.3406653472,
            lng: -38.4396958899,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5568610665991,
            lng: -41.459530049,
            desc: "COMUNIDADE QUILOMBOLA OURICURI II"
        },
        {
            name: "Tucano",
            lat: -11.0042341247,
            lng: -38.7402729218,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.4106855694,
            lng: -42.55826107,
            desc: "COMUNIDADE QUILOMBOLA PACHECO"
        },
        {
            name: "Campo Formoso",
            lat: -10.111068208,
            lng: -40.8212914973,
            desc: "COMUNIDADE QUILOMBOLA PACUÍ"
        },
        {
            name: "Rio do Antônio",
            lat: -14.3543971526,
            lng: -42.0675011422,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2197395277,
            lng: -43.1776629033,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7337053887,
            lng: -42.1550836573,
            desc: ""
        },
        {
            name: "Muritiba",
            lat: -12.595034486,
            lng: -39.1153771278,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8478761387,
            lng: -39.4427444671,
            desc: "COMUNIDADE QUILOMBOLA PALHA"
        },
        {
            name: "Nordestina",
            lat: -10.8474157498,
            lng: -39.4446105823,
            desc: "COMUNIDADE QUILOMBOLA PALHA"
        },
        {
            name: "Nordestina",
            lat: -10.8491958471,
            lng: -39.4408776379,
            desc: "COMUNIDADE QUILOMBOLA PALHA"
        },
        {
            name: "Maraú",
            lat: -14.1022878471,
            lng: -39.0157694994,
            desc: "COMUNIDADE QUILOMBOLA MARAÚ"
        },
        {
            name: "Salvador",
            lat: -12.8536469444,
            lng: -38.3585120278,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.7020217499,
            lng: -38.3906160972,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.5475083888,
            lng: -43.5874966927,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.8183917221,
            lng: -41.8112933929,
            desc: "COMUNIDADE QUILOMBOLA CUTIA"
        },
        {
            name: "Cachoeira",
            lat: -12.629153472,
            lng: -38.8792351906,
            desc: ""
        },
        {
            name: "Aramari",
            lat: -12.1364465694,
            lng: -38.5286348742,
            desc: ""
        },
        {
            name: "Palmeiras",
            lat: -12.5157029998,
            lng: -41.5866823884,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1543686388,
            lng: -41.908310653,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.9824050831,
            lng: -40.5376432407,
            desc: "COMUNIDADE QUILOMBOLA PALMEIRA"
        },
        {
            name: "Piatã",
            lat: -13.1642982637,
            lng: -41.9024907332,
            desc: ""
        },
        {
            name: "São Sebastião do Passé",
            lat: -12.4676087082,
            lng: -38.5429480949,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1457792914,
            lng: -41.7819374269,
            desc: ""
        },
        {
            name: "Miguel Calmon",
            lat: -11.6029245654978,
            lng: -40.4737231645017,
            desc: "AGRUPAMENTO QUILOMBOLA PALMEIRINHA"
        },
        {
            name: "Serra do Ramalho",
            lat: -13.3600768607,
            lng: -43.4785946913,
            desc: "COMUNIDADE QUILOMBOLA PAMBU/ARAÇÁS"
        },
        {
            name: "Serra do Ramalho",
            lat: -13.3512681387,
            lng: -43.4787369438,
            desc: "COMUNIDADE QUILOMBOLA PAMBU/ARAÇÁS"
        },
        {
            name: "Serra do Ramalho",
            lat: -13.3441688608,
            lng: -43.4784258651,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.2756008749,
            lng: -39.0986078198,
            desc: "AGRUPAMENTO QUILOMBOLA PANCADA GRANDE"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5716931805,
            lng: -40.2743979579,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6502870971,
            lng: -40.2730237487,
            desc: "COMUNIDADE QUILOMBOLA PAPAGAIO"
        },
        {
            name: "Araçás",
            lat: -12.2232271527,
            lng: -38.2148099717,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.190255111,
            lng: -41.6472790689,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2468708332,
            lng: -43.1505495571,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.0598553748,
            lng: -41.6810544782,
            desc: "PARAGUAI"
        },
        {
            name: "Salvador",
            lat: -12.8670667915,
            lng: -38.4577200164,
            desc: ""
        },
        {
            name: "Teolândia",
            lat: -13.5770288331,
            lng: -39.390367371,
            desc: ""
        },
        {
            name: "Érico Cardoso",
            lat: -13.476857197221,
            lng: -42.0428289114128,
            desc: "COMUNIDADE QUILOMBOLA PARAMIRIM DAS CREOLAS"
        },
        {
            name: "Érico Cardoso",
            lat: -13.4237544444,
            lng: -42.0529841111,
            desc: ""
        },
        {
            name: "Érico Cardoso",
            lat: -13.4206326664,
            lng: -42.1385447623,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6677258194,
            lng: -41.8542634021,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.4396651387,
            lng: -39.2050257466,
            desc: ""
        },
        {
            name: "Malhada",
            lat: -14.3395535416,
            lng: -43.7718451674,
            desc: ""
        },
        {
            name: "Malhada",
            lat: -13.8977899996,
            lng: -43.5408667175,
            desc: "COMUNIDADE QUILOMBOLA PARATECA"
        },
        {
            name: "Paratinga",
            lat: -12.7051596804,
            lng: -43.1884480405,
            desc: "COMUNIDADE QUILOMBOLA TOMBA"
        },
        {
            name: "Igaporã",
            lat: -13.8590437082,
            lng: -42.588730749,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.8991931944,
            lng: -42.3275487638,
            desc: ""
        },
        {
            name: "Condeúba",
            lat: -14.8167345831,
            lng: -42.1365160362,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5070518887,
            lng: -40.1599860251,
            desc: "COMUNIDADE QUILOMBOLA PASSAGEM VELHA"
        },
        {
            name: "Nordestina",
            lat: -10.8431255138,
            lng: -39.3922861251,
            desc: ""
        },
        {
            name: "Candeias",
            lat: -12.7357132915,
            lng: -38.5311953977,
            desc: ""
        },
        {
            name: "Tanhaçu",
            lat: -13.8984213748,
            lng: -41.2333906059,
            desc: "COMUNIDADE QUILOMBOLA PASTINHO"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.6937878193,
            lng: -41.8322976485,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.64723683067,
            lng: -40.1160971735381,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.4898416109,
            lng: -41.8713782243,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DOS PATOS"
        },
        {
            name: "Campo Formoso",
            lat: -10.182698736,
            lng: -40.9213215253,
            desc: "COMUNIDADE QUILOMBOLA PATOS I"
        },
        {
            name: "Juazeiro",
            lat: -9.43003008328,
            lng: -40.5152630832,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1827579027,
            lng: -40.9093914443,
            desc: "COMUNIDADE QUILOMBOLA PATOS II"
        },
        {
            name: "Campo Formoso",
            lat: -10.1850495277,
            lng: -40.8946822788,
            desc: "COMUNIDADE QUILOMBOLA PATOS III"
        },
        {
            name: "Presidente Tancredo Neves",
            lat: -13.4841286664,
            lng: -39.5440945435,
            desc: ""
        },
        {
            name: "Malhada",
            lat: -13.9236310689,
            lng: -43.5427634859,
            desc: "COMUNIDADE QUILOMBOLA PAU D'ARCO"
        },
        {
            name: "Lençóis",
            lat: -12.5645270971,
            lng: -41.3857662507,
            desc: ""
        },
        {
            name: "Andaraí",
            lat: -12.5939689722,
            lng: -41.3251668889,
            desc: ""
        },
        {
            name: "Muritiba",
            lat: -12.6104227915,
            lng: -39.1350431403,
            desc: "AGRUPAMENTO QUILOMBOLA BAIXA GRANDE"
        },
        {
            name: "Jequié",
            lat: -13.8767486942,
            lng: -40.0575430448,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0651840554,
            lng: -38.5943864813,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.8881767914,
            lng: -42.2208509569,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.5031597784292,
            lng: -40.3182673027315,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.7302685275,
            lng: -39.0463126725,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.4875192221,
            lng: -39.1618022927,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3458643296124,
            lng: -39.1617814190881,
            desc: "AGRUPAMENTO QUILOMBOLA PAUS ALTOS"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3523606666,
            lng: -39.162090262,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3792292498,
            lng: -39.160054665,
            desc: "AGRUPAMENTO QUILOMBOLA PAUS ALTOS E GAVIÃO."
        },
        {
            name: "Ibitiara",
            lat: -12.483260736,
            lng: -42.0655189885,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.9855357082,
            lng: -43.3135533318,
            desc: "COMUNIDADE QUILOMBOLA PAUS PRETOS"
        },
        {
            name: "Araçás",
            lat: -12.1814283193,
            lng: -38.3009349831,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.4273711387,
            lng: -42.9833546124,
            desc: "COMUNIDADE QUILOMBOLA PÉ DE MORRO"
        },
        {
            name: "Bom Jesus da Serra",
            lat: -14.3825360276,
            lng: -40.5693004359,
            desc: "COMUNIDADE QUILOMBOLA MUMBUCA"
        },
        {
            name: "Ibititá",
            lat: -11.4942731804,
            lng: -41.8812252236,
            desc: "AGRUPAMENTO QUILOMBOLA LAGOA DA PEDRA II"
        },
        {
            name: "Campo Formoso",
            lat: -10.1902925416,
            lng: -40.8830173757,
            desc: "COMUNIDADE QUILOMBOLA PEDRA"
        },
        {
            name: "Itambé",
            lat: -15.0652068054,
            lng: -40.5535731938,
            desc: "COMUNIDADE QUILOMBOLA PEDRA"
        },
        {
            name: "Taperoá",
            lat: -13.5514687915,
            lng: -39.2717154359,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.9034398055,
            lng: -39.294610389,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.5659139027,
            lng: -39.2648366106,
            desc: ""
        },
        {
            name: "Taperoá",
            lat: -13.562042986,
            lng: -39.2710066435,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1332499304,
            lng: -38.2794557496,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.4696177638,
            lng: -43.4267575668,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2091211249,
            lng: -38.1539755838,
            desc: "COMUNIDADE QUILOMBOLA PEDRA FURADA"
        },
        {
            name: "Esplanada",
            lat: -12.0717639027,
            lng: -37.715154694,
            desc: ""
        },
        {
            name: "Conde",
            lat: -12.046884597,
            lng: -37.7278814955,
            desc: "COMUNIDADE QUILOMBOLA PEDRA GRANDE"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9546650693,
            lng: -41.5868752097,
            desc: "AGRUPAMENTO QUILOMBOLA PEDRA LISA"
        },
        {
            name: "Ibititá",
            lat: -11.5750158609,
            lng: -41.953700899,
            desc: "COMUNIDADE QUILOMBOLA PEDRA LISA"
        },
        {
            name: "Ibititá",
            lat: -11.5486885277,
            lng: -41.9796537365,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8372467497,
            lng: -39.0983038832,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.7113016665,
            lng: -43.3910316478,
            desc: "COMUNIDADE QUILOMBOLA PEDRA NEGRA DA EXTREMA"
        },
        {
            name: "Maraú",
            lat: -13.9067976527,
            lng: -38.9675358747,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0375288606,
            lng: -39.0672497517,
            desc: "COMUNIDADE QUILOMBOLA PEDRA RASA"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2463684722,
            lng: -43.3876711111,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8604647915,
            lng: -39.0804064301,
            desc: ""
        },
        {
            name: "Muquém do São Francisco",
            lat: -11.8133184997,
            lng: -43.3876828295,
            desc: "COMUNIDADE QUILOMBOLA PEDRINHAS"
        },
        {
            name: "Entre Rios",
            lat: -11.814834361,
            lng: -38.1621277076,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2417092916,
            lng: -38.3013339461,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.453784486,
            lng: -40.1884293205,
            desc: ""
        },
        {
            name: "Presidente Jânio Quadros",
            lat: -14.6243585693,
            lng: -41.6724369292,
            desc: ""
        },
        {
            name: "Presidente Jânio Quadros",
            lat: -14.6781791804,
            lng: -41.6689078049,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.5974556355714,
            lng: -41.9436902802238,
            desc: "PERNAMBUCO"
        },
        {
            name: "Lajedo do Tabocal",
            lat: -13.4541977081,
            lng: -40.2574445284,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.0433522118329,
            lng: -43.1131727419346,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8974973332,
            lng: -39.039440164,
            desc: "COMUNIDADE QUILOMBOLA AMBA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4397079443,
            lng: -40.1010744602,
            desc: ""
        },
        {
            name: "Ouriçangas",
            lat: -12.0152293055,
            lng: -38.6280347211,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0538953471,
            lng: -38.6911500005,
            desc: "AGRUPAMENTO QUILOMBOLA PIEDADE"
        },
        {
            name: "Tanque Novo",
            lat: -13.5526556803,
            lng: -42.4807957558,
            desc: ""
        },
        {
            name: "Poções",
            lat: -14.5276058828388,
            lng: -40.5768629999999,
            desc: "COMUNIDADE QUILOMBOLA PIMENTEIRA"
        },
        {
            name: "Camamu",
            lat: -14.0155139581,
            lng: -39.2491017159,
            desc: ""
        },
        {
            name: "Poções",
            lat: -14.538209736,
            lng: -40.5774469827,
            desc: ""
        },
        {
            name: "Amélia Rodrigues",
            lat: -12.4353426249,
            lng: -38.7641962198,
            desc: "COMUNIDADE QUILOMBOLA PINGUELA"
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5409056109,
            lng: -41.1717510068,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2476661944,
            lng: -43.4115863611,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.6762691258798,
            lng: -38.4109522520483,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.6801016445,
            lng: -38.383077344,
            desc: "COMUNIDADE QUILOMBOLA PITANGA DOS PALMARES"
        },
        {
            name: "Simões Filho",
            lat: -12.7015699304,
            lng: -38.3880331619,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8307804722,
            lng: -38.4735464444,
            desc: ""
        },
        {
            name: "Camaçari",
            lat: -12.7103590833,
            lng: -38.3488100406,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.643083111,
            lng: -43.559510264,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.6307924583,
            lng: -43.5540886534,
            desc: ""
        },
        {
            name: "Wanderley",
            lat: -11.5639282916,
            lng: -44.0375398079,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.8323796386,
            lng: -43.2749712555,
            desc: "AGRUPAMENTO QUILOMBOLA POÇÃO SANTO ANTÔNIO"
        },
        {
            name: "Paratinga",
            lat: -12.8529695555,
            lng: -43.2672447761,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.8026162668298,
            lng: -37.5415762054023,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8545655831,
            lng: -39.4469815408,
            desc: "COMUNIDADE QUILOMBOLA POÇAS"
        },
        {
            name: "Mansidão",
            lat: -10.8114425971,
            lng: -44.1170102467,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.298030926909,
            lng: -39.1972170094825,
            desc: "AGRUPAMENTO QUILOMBOLA POÇO"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3045410552,
            lng: -39.1876065188,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.9127520414,
            lng: -41.8935342152,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5329210694,
            lng: -41.501172694,
            desc: "COMUNIDADE QUILOMBOLA BOA VISTA"
        },
        {
            name: "Campo Formoso",
            lat: -10.2035488469,
            lng: -40.7614019615,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.227854611,
            lng: -38.1121256984,
            desc: ""
        },
        {
            name: "Buritirama",
            lat: -10.6638628194,
            lng: -43.5760760126,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8609535275,
            lng: -39.0711346585,
            desc: "PONTA"
        },
        {
            name: "Salvador",
            lat: -12.754277861,
            lng: -38.517456877,
            desc: ""
        },
        {
            name: "Itaparica",
            lat: -12.9037192221,
            lng: -38.6617961517,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.9743946525,
            lng: -38.9999755692,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7464970971,
            lng: -38.5298621364,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.5590016944,
            lng: -43.1020226812,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.8531299304,
            lng: -40.5355528356,
            desc: "COMUNIDADE QUILOMBOLA PONTO ALEGRE"
        },
        {
            name: "Caldeirão Grande",
            lat: -11.100502861,
            lng: -40.2127658895,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8465644026,
            lng: -38.9122963588,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.2765264443,
            lng: -38.9979659599,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -13.9167415277,
            lng: -38.9834035833,
            desc: ""
        },
        {
            name: "Alcobaça",
            lat: -17.5179224025,
            lng: -39.2581728551,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -13.964947444,
            lng: -39.052460036,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.311332,
            lng: -39.104801,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7437064999,
            lng: -38.5332285689,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7295089506234,
            lng: -40.0493351604877,
            desc: "AGRUPAMENTO QUILOMBOLA VÁRZEA GRANDE DO SACO"
        },
        {
            name: "São Gabriel",
            lat: -10.9279023749,
            lng: -41.6379560428,
            desc: ""
        },
        {
            name: "Aramari",
            lat: -12.0828955415,
            lng: -38.484101262,
            desc: "AGRUPAMENTO QUILOMBOLA MUTIRÃO"
        },
        {
            name: "Salvador",
            lat: -12.778520833,
            lng: -38.5308282392,
            desc: "AGUPAMENTO QUILOMBOLA PRAIA GRANDE"
        },
        {
            name: "Ichu",
            lat: -11.7176134166,
            lng: -39.0944170267,
            desc: ""
        },
        {
            name: "Serrinha",
            lat: -11.7185584026,
            lng: -39.0914409986,
            desc: ""
        },
        {
            name: "Cairu",
            lat: -13.4916676942,
            lng: -39.0494933545,
            desc: "COMUNIDADE QUILOMBOLA CAJAZEIRAS E PRATA"
        },
        {
            name: "Seabra",
            lat: -12.4017660972,
            lng: -41.740498333,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.3834553333,
            lng: -41.7440496667,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.3878319998,
            lng: -41.745923634,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0292116729285,
            lng: -39.032531328,
            desc: "COMUNIDADE QUILOMBOLA PRATIGI"
        },
        {
            name: "Cafarnaum",
            lat: -11.5955840693,
            lng: -41.5698065852,
            desc: ""
        },
        {
            name: "Irecê",
            lat: -11.3097784999,
            lng: -41.8471493313,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.213922847,
            lng: -38.2001912105,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA CRUZEIRO"
        },
        {
            name: "Barra",
            lat: -11.6158065971,
            lng: -43.3796207508,
            desc: "COMUNIDADE QUILOMBOLA IGARITÉ"
        },
        {
            name: "América Dourada",
            lat: -11.4742854719,
            lng: -41.5150558878,
            desc: "COMUNIDADE QUILOMBOLA PREVENIDO"
        },
        {
            name: "Feira de Santana",
            lat: -12.2959442916,
            lng: -38.89533915,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.9916866387,
            lng: -40.8853205106,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8407588333,
            lng: -40.9577866944,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.609021611,
            lng: -38.9496782903,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.623803111,
            lng: -40.1183309748,
            desc: "COMUNIDADE QUILOMBOLA QUEBRA FACÃO"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9411793469,
            lng: -41.5884156398,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADA DA ONÇA"
        },
        {
            name: "Barra do Mendes",
            lat: -11.7670177776,
            lng: -42.0574654166,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.4107565415,
            lng: -41.7575230432,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.8231013471,
            lng: -41.9011671128,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -12.1593106387,
            lng: -41.9888400404,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADA DO RUFINO"
        },
        {
            name: "Cafarnaum",
            lat: -11.7206107914,
            lng: -41.5851721919,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADA DO TIANO"
        },
        {
            name: "Cafarnaum",
            lat: -11.6949634166,
            lng: -41.472962346,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.2426317499,
            lng: -41.4136326116,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADA DOS BENEDITOS"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4099266322351,
            lng: -40.1608000847964,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5581708054,
            lng: -41.4937479147,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADA NOVA"
        },
        {
            name: "Guanambi",
            lat: -14.26454376,
            lng: -42.9515806117584,
            desc: "COMUNIDADE QUILOMBOLA QUEIMADAS"
        },
        {
            name: "Nordestina",
            lat: -10.8398484305,
            lng: -39.4228589443,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.0428311942,
            lng: -40.919642237,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -9.96487915272,
            lng: -38.4066890558,
            desc: ""
        },
        {
            name: "Tremedal",
            lat: -15.019210972,
            lng: -41.4075305964,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8493451664,
            lng: -38.9348096065,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8403049166,
            lng: -40.8968980821,
            desc: ""
        },
        {
            name: "Laje",
            lat: -13.1139518263385,
            lng: -39.1804796123853,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.4928834583,
            lng: -42.0052852081,
            desc: "COMUNIDADE QUILOMBOLA CANOÃO"
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8929968055,
            lng: -38.3471015416,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8390760415,
            lng: -38.3552117596,
            desc: ""
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8862525832,
            lng: -38.3449628576,
            desc: ""
        },
        {
            name: "Lauro de Freitas",
            lat: -12.8572552912,
            lng: -38.3248814011,
            desc: "AGRUPAMENTO QUILOMBOLA QUINGOMA"
        },
        {
            name: "Maraú",
            lat: -14.165599984,
            lng: -39.0916133091459,
            desc: "COMUNIDADE QUILOMBOLA QUITUNGO"
        },
        {
            name: "Maraú",
            lat: -14.2126671388,
            lng: -39.102467945,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.6711585137,
            lng: -42.6707807722,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.8837714163,
            lng: -41.3202294135,
            desc: "COMUNIDADE QUILOMBOLA QUIXABÁ"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7444739998,
            lng: -42.1737225329,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8535026665,
            lng: -38.9616370017,
            desc: ""
        },
        {
            name: "Presidente Dutra",
            lat: -11.2986644443,
            lng: -41.9927830876,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4434846943,
            lng: -40.0860847116,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5791061388,
            lng: -41.6732541653,
            desc: "COMUNIDADE QUILOMBOLA RANCHARIA DO MEIO"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.235607347,
            lng: -43.0460354481,
            desc: "AGRUPAMENTO QUILOMBOLA RANCHO DAS MÃES"
        },
        {
            name: "Caldeirão Grande",
            lat: -11.0795969304,
            lng: -40.2249116962,
            desc: "AGRUPAMENTO QUILOMBOLA RAPOSA"
        },
        {
            name: "Filadélfia",
            lat: -10.7409581249,
            lng: -40.1410987474,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.1944527050339,
            lng: -38.0723348816237,
            desc: "AGRUPAMENTO QUILOMBOLA RAPOSO"
        },
        {
            name: "Araçás",
            lat: -12.2154878888,
            lng: -38.2046729722,
            desc: ""
        },
        {
            name: "Antas",
            lat: -10.419996361,
            lng: -38.3697528607,
            desc: "COMUNIDADE QUILOMBOLA RASO VELOSO"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.316888486,
            lng: -39.2395113883,
            desc: ""
        },
        {
            name: "Ibotirama",
            lat: -12.0194796665,
            lng: -43.3235788998,
            desc: ""
        },
        {
            name: "Cipó",
            lat: -11.1232037776,
            lng: -38.5168722524,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.178975361,
            lng: -41.889114832,
            desc: ""
        },
        {
            name: "Andaraí",
            lat: -12.7953828607,
            lng: -41.3293990359,
            desc: ""
        },
        {
            name: "Lençóis",
            lat: -12.6629793606,
            lng: -41.3322430271,
            desc: "COMUNIDADE QUILOMBOLA REMANSO"
        },
        {
            name: "Valença",
            lat: -13.2636754998,
            lng: -39.0457691158,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.3116340416,
            lng: -41.5806391535,
            desc: "COMUNIDADE QUILOMBOLA MORENOS"
        },
        {
            name: "Ponto Novo",
            lat: -11.0045730066,
            lng: -40.1017471557,
            desc: "COMUNIDADE QUILOMBOLA REPRESA"
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.483397611,
            lng: -43.3843930997,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.694435361,
            lng: -39.213156014,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7636829305,
            lng: -40.0461505827,
            desc: ""
        },
        {
            name: "Ibitiara",
            lat: -12.563577611,
            lng: -42.0429864294,
            desc: ""
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6251616388,
            lng: -39.4269513211,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.7888049721,
            lng: -40.6373818763,
            desc: ""
        },
        {
            name: "Ibititá",
            lat: -11.5451850694,
            lng: -41.9873211807,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -11.9565691248,
            lng: -38.3783344053,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.098538597,
            lng: -41.4706426911,
            desc: "COMUNIDADE QUILOMBOLA RIACHO"
        },
        {
            name: "Itanagra",
            lat: -12.1942229721,
            lng: -38.0657915561,
            desc: ""
        },
        {
            name: "Wanderley",
            lat: -11.4606777776,
            lng: -43.9007057422,
            desc: "COMUNIDADE QUILOMBOLA RIACHO SACUTIABA E SACUTIABA"
        },
        {
            name: "Wanderley",
            lat: -11.509425979,
            lng: -43.9877571917,
            desc: "AGRUPAMENTO QUILOMBOLA RIACHO DA SACUTIABA E SACUTIABA"
        },
        {
            name: "Caetité",
            lat: -13.8202053192,
            lng: -42.2730713507,
            desc: ""
        },
        {
            name: "Rio de Contas",
            lat: -13.5794578471,
            lng: -41.808277386,
            desc: ""
        },
        {
            name: "Itiúba",
            lat: -10.7356122638,
            lng: -40.0297001948,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7342062776,
            lng: -40.0355116764,
            desc: "COMUNIDADE QUILOMBOLA RIACHO DAS PEDRINHAS"
        },
        {
            name: "Buritirama",
            lat: -10.6564746527,
            lng: -43.5601294574,
            desc: "COMUNIDADE QUILOMBOLA RIACHO DO MEIO"
        },
        {
            name: "Seabra",
            lat: -12.414346361,
            lng: -41.7618394853,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.3356256942,
            lng: -41.4928934581,
            desc: "COMUNIDADE QUILOMBOLA RIACHO DO MEL"
        },
        {
            name: "Filadélfia",
            lat: -10.7158055833,
            lng: -40.0439976806,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.3520396527,
            lng: -41.6644165823,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7993244027,
            lng: -40.0888413478,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.8320041664,
            lng: -43.2161315401,
            desc: ""
        },
        {
            name: "Casa Nova",
            lat: -9.36316947218,
            lng: -41.2817338056,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1878725138,
            lng: -42.2293717926,
            desc: ""
        },
        {
            name: "Mata de São João",
            lat: -12.4403585,
            lng: -37.9549773,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.6171860277,
            lng: -42.9397053056,
            desc: ""
        },
        {
            name: "Nova Viçosa",
            lat: -17.830276361,
            lng: -39.7140684444,
            desc: ""
        },
        {
            name: "Alcobaça",
            lat: -17.381093736,
            lng: -39.3349696961,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8802277914,
            lng: -41.0625192241,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1087113749,
            lng: -42.0123409756,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1820483887,
            lng: -41.9240437863,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1479133749,
            lng: -41.782350637,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8377851943,
            lng: -40.8584089692,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.2487418333,
            lng: -43.3905159444,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -12.083928111,
            lng: -41.3185407123,
            desc: "COMUNIDADE QUILOMBOLA RIBEIRO"
        },
        {
            name: "Maraú",
            lat: -14.1043805693,
            lng: -39.1343234694,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -12.106101097,
            lng: -41.234347278,
            desc: "COMUNIDADE QUILOMBOLA RIO DAS LAJES"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.2609883888,
            lng: -43.1733324444,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.2865117499,
            lng: -43.5838904741,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.7532458468257,
            lng: -43.4997447254999,
            desc: "COMUNIDADE QUILOMBOLA RIO DAS RÃS"
        },
        {
            name: "Riacho de Santana",
            lat: -13.8122199721,
            lng: -43.3560714162,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.8726853394999,
            lng: -43.451283823762,
            desc: "COMUNIDADE QUILOMBOLA RIO DAS RÃS II"
        },
        {
            name: "Riacho de Santana",
            lat: -13.8775778054,
            lng: -43.436526861,
            desc: "COMUNIDADE QUILOMBOLA RIO DAS RÃS II"
        },
        {
            name: "Piatã",
            lat: -13.124134236,
            lng: -41.6747500122,
            desc: ""
        },
        {
            name: "Barreiras",
            lat: -12.1927318887,
            lng: -45.4864679833,
            desc: "AGRUPAMENTO QUILOMBOLA RIO DE PEDRAS"
        },
        {
            name: "Conde",
            lat: -11.8428526352896,
            lng: -37.6492166680684,
            desc: ""
        },
        {
            name: "Nova Viçosa",
            lat: -17.7829814998,
            lng: -39.7177295613,
            desc: "AGRUPAMENTO QUILOMBOLA RIO DO SUL"
        },
        {
            name: "Igaporã",
            lat: -13.7699322499,
            lng: -42.7165380443,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.6336392330477,
            lng: -42.7192168560153,
            desc: "COMUNIDADE QUILOMBOLA RIO DO TANQUE"
        },
        {
            name: "Riacho de Santana",
            lat: -13.6341790137,
            lng: -42.7221419512,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.8381197641285,
            lng: -38.4544964670637,
            desc: "COMUNIDADE QUILOMBOLA RIO DOS MACACOS"
        },
        {
            name: "Simões Filho",
            lat: -12.8295566666,
            lng: -38.4544243339,
            desc: "COMUNIDADE QUILOMBOLA RIO DOS MACACOS"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.273255597,
            lng: -40.9546429227,
            desc: ""
        },
        {
            name: "Teolândia",
            lat: -13.6048672498,
            lng: -39.4902537012,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -12.0299257777,
            lng: -38.1342156111,
            desc: "COMUNIDADE QUILOMBOLA RIO PRETO"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6049378191,
            lng: -39.492926937,
            desc: "COMUNIDADE QUILOMBOLA RIO PRETO"
        },
        {
            name: "Alagoinhas",
            lat: -12.182518347,
            lng: -38.5288592342,
            desc: "AGRUPAMENTO QUILOMBOLA FAZENDA RIO SECO"
        },
        {
            name: "Barra do Mendes",
            lat: -12.2269424443,
            lng: -42.0056364977,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.586936583,
            lng: -41.9416143986,
            desc: "COMUNIDADE QUILOMBOLA ROCINHA"
        },
        {
            name: "Lapão",
            lat: -11.5663789721,
            lng: -41.7676491254,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0587586249,
            lng: -38.8494203483,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.47174436094,
            lng: -40.5723892261,
            desc: "COMUNIDADE QUILOMBOLA RODEADOURO"
        },
        {
            name: "Camamu",
            lat: -13.940345986,
            lng: -39.1064407061,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9766966804,
            lng: -41.6161945999,
            desc: "COMUNIDADE QUILOMBOLA ROSENDO"
        },
        {
            name: "Cairu",
            lat: -13.492524236,
            lng: -39.0451944063,
            desc: "COMUNIDADE QUILOMBOLA RUA DO FOGO"
        },
        {
            name: "Ibititá",
            lat: -11.5483187916,
            lng: -41.9817487494,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.2281115831,
            lng: -39.0945838079,
            desc: ""
        },
        {
            name: "Itororó",
            lat: -14.9861492218,
            lng: -40.0224072814,
            desc: "COMUNIDADE QUILOMBOLA RUA DE PALHA"
        },
        {
            name: "Cairu",
            lat: -13.4867836249,
            lng: -39.0494141692,
            desc: "COMUNIDADE QUILOMBOLA CAJAZEIRAS E PRATA"
        },
        {
            name: "Ibititá",
            lat: -11.5476525276,
            lng: -41.9695204963,
            desc: "COMUNIDADE QUILOMBOLA BAIRRO DA MATA"
        },
        {
            name: "Cairu",
            lat: -13.4911253055,
            lng: -39.0456945585757,
            desc: "COMUNIDADE QUILOMBOLA RUA DO FOGO"
        },
        {
            name: "Conde",
            lat: -11.7910357221,
            lng: -37.6207894054,
            desc: ""
        },
        {
            name: "Cipó",
            lat: -11.1070160330543,
            lng: -38.5192839875,
            desc: "COMUNIDADE QUILOMBOLA RUA DO JORRO"
        },
        {
            name: "Barro Alto",
            lat: -11.7627743333,
            lng: -41.9146569866,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.2576201804,
            lng: -38.9846207922,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1824563333,
            lng: -40.97521368,
            desc: "AGRUPAMENTO QUILOMBOLA LAJE DE CIMA"
        },
        {
            name: "Santanópolis",
            lat: -12.031698847,
            lng: -38.8524395066,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.386560986,
            lng: -41.650864042,
            desc: "COMUNIDADE QUILOMBOLA SABINO"
        },
        {
            name: "Filadélfia",
            lat: -10.7448395543252,
            lng: -40.1323282495899,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0629942776,
            lng: -38.8611383767,
            desc: ""
        },
        {
            name: "Ibotirama",
            lat: -12.1016654721,
            lng: -43.2548248424,
            desc: ""
        },
        {
            name: "Ibotirama",
            lat: -12.0577617082,
            lng: -43.2745220937,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.2967634861,
            lng: -38.4575137921,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.798393972,
            lng: -38.8637113851,
            desc: ""
        },
        {
            name: "Cafarnaum",
            lat: -11.608404986,
            lng: -41.5764808206,
            desc: "COMUNIDADE QUILOMBOLA SALAMINHO"
        },
        {
            name: "Lapão",
            lat: -11.4856946457,
            lng: -41.8082052409,
            desc: "COMUNIDADE QUILOMBOLA SALGADA"
        },
        {
            name: "Campo Formoso",
            lat: -10.3198451804,
            lng: -40.747612525,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3919406805,
            lng: -39.1469271666,
            desc: ""
        },
        {
            name: "Nordestina",
            lat: -10.8403405693,
            lng: -39.4482815808,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.0799211387,
            lng: -41.4718334149,
            desc: "COMUNIDADE QUILOMBOLA SALINAS"
        },
        {
            name: "Ibipeba",
            lat: -11.3328319025,
            lng: -42.2873386844,
            desc: "AGRUPAMENTO QUILOMBOLA SALVA-VIDAS"
        },
        {
            name: "Maragogipe",
            lat: -12.8332306388,
            lng: -38.9393122222,
            desc: ""
        },
        {
            name: "Bom Jesus da Serra",
            lat: -14.3808645969,
            lng: -40.5962646845,
            desc: "COMUNIDADE QUILOMBOLA SAMAMBAIA"
        },
        {
            name: "Caetité",
            lat: -13.6164095552,
            lng: -42.7114886788,
            desc: "COMUNIDADE QUILOMBOLA SAMBAÍBA"
        },
        {
            name: "Igaporã",
            lat: -13.7684273053,
            lng: -42.7225725297,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.5911373464,
            lng: -42.724965569,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.798641347,
            lng: -40.4882015278,
            desc: "COMUNIDADE QUILOMBOLA SAMBAÍBA"
        },
        {
            name: "Campo Formoso",
            lat: -10.2091936527,
            lng: -41.0010715994,
            desc: "COMUNIDADE QUILOMBOLA SANGRADOURO II"
        },
        {
            name: "Campo Formoso",
            lat: -10.2164967001727,
            lng: -41.0092252225,
            desc: "COMUNIDADE QUILOMBOLA SANGRADOURO I"
        },
        {
            name: "Campo Formoso",
            lat: -10.2061690694,
            lng: -41.0073581527,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.349178611,
            lng: -39.1652888721,
            desc: ""
        },
        {
            name: "Jacobina",
            lat: -11.1750231388,
            lng: -40.5156512224,
            desc: ""
        },
        {
            name: "Luís Eduardo Magalhães",
            lat: -12.1055611388,
            lng: -45.8032458489,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -11.0135649859,
            lng: -40.5096132243,
            desc: "AGRUPAMENTO QUILOMBOLA SANTA CRUZ"
        },
        {
            name: "Bonito",
            lat: -12.1387390138,
            lng: -41.31504657,
            desc: "AGRUPAMENTO QUILOMBOLA VILA CRUZINHA"
        },
        {
            name: "Maraú",
            lat: -14.1304955275,
            lng: -39.1500774961,
            desc: ""
        },
        {
            name: "Mucuri",
            lat: -17.9429210276,
            lng: -40.2380488301,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.2134382499,
            lng: -39.1004569983,
            desc: ""
        },
        {
            name: "Nazaré",
            lat: -13.0389055693,
            lng: -39.0262593162,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.9513395136,
            lng: -43.3224577312,
            desc: ""
        },
        {
            name: "Mansidão",
            lat: -10.8042728333,
            lng: -44.0786471944,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -12.1071966944,
            lng: -41.3293188457,
            desc: ""
        },
        {
            name: "Santa Terezinha",
            lat: -12.7707926109,
            lng: -39.525365533,
            desc: ""
        },
        {
            name: "Uauá",
            lat: -9.88237652772,
            lng: -39.6657057078,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.7923740414,
            lng: -38.5318146019,
            desc: "AGRUPAMENTO QUILOMBOLA SANTANA"
        },
        {
            name: "Salvador",
            lat: -12.9493920416,
            lng: -38.4741675137,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6865083747,
            lng: -38.8568820586,
            desc: "COMUNIDADE QUILOMBOLA SANTIAGO DO IGUAPÊ"
        },
        {
            name: "Cipó",
            lat: -11.1021101388,
            lng: -38.5098279157,
            desc: "COMUNIDADE QUILOMBOLA CABOGE"
        },
        {
            name: "Santo Amaro",
            lat: -12.5476917222,
            lng: -38.7030046665,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9499898054,
            lng: -38.4412345951,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.2778846943,
            lng: -38.9993446001,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.7966170832,
            lng: -43.2444524073,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.8448400832,
            lng: -38.4623423921,
            desc: ""
        },
        {
            name: "Muritiba",
            lat: -12.631573097,
            lng: -38.9900007628,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1056429166,
            lng: -42.0162762367,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -12.8809753332,
            lng: -43.2833438043,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3142103927632,
            lng: -39.1689619999467,
            desc: "AGRUPAMENTO QUILOMBOLA SANTO ANTÔNIO"
        },
        {
            name: "Santa Rita de Cássia",
            lat: -11.0995818332,
            lng: -44.7910518449,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -11.7377936666,
            lng: -42.0814331799,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3137870832,
            lng: -39.1665473973,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.6483944997,
            lng: -38.9800995212,
            desc: "AGRUPAMENTO QUILOMBOLA SANTO ANTÔNIO"
        },
        {
            name: "Filadélfia",
            lat: -10.6746654722,
            lng: -40.0606035828,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.7235515277,
            lng: -39.0485354169,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.6449463887,
            lng: -38.9851312655,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3994131802,
            lng: -39.1452305513,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.6018083193,
            lng: -43.3753425035,
            desc: ""
        },
        {
            name: "Gentio do Ouro",
            lat: -11.1107997916,
            lng: -42.7204084052,
            desc: ""
        },
        {
            name: "Ibiassucê",
            lat: -14.3684895275,
            lng: -42.2535762274,
            desc: "COMUNIDADE QUILOMBOLA SANTO INÁCIO"
        },
        {
            name: "Santo Amaro",
            lat: -12.6058524163,
            lng: -38.7278757406,
            desc: "COMUNIDADE QUILOMBOLA SÃO BRÁS"
        },
        {
            name: "Ibitiara",
            lat: -12.565553611,
            lng: -42.2665534184,
            desc: ""
        },
        {
            name: "Mortugaba",
            lat: -15.0326303471,
            lng: -42.310610108,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.7664110416,
            lng: -41.9002136658,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO FRANCISCO"
        },
        {
            name: "Nilo Peçanha",
            lat: -13.6323306804,
            lng: -38.989072736,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9189768333,
            lng: -38.4436855,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.745769958,
            lng: -38.869902862,
            desc: "COMUNIDADE QUILOMBOLA SÃO FRANCISCO DO PARAGUAÇU"
        },
        {
            name: "Contendas do Sincorá",
            lat: -13.7025568053,
            lng: -41.1456101677,
            desc: "COMUNIDADE QUILOMBOLA SÃO GONÇALO"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5602489582,
            lng: -40.2248871763,
            desc: "SÃO JOÃO"
        },
        {
            name: "Ituberá",
            lat: -13.6870140554,
            lng: -39.2233040994,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.1368757499,
            lng: -42.108018639,
            desc: ""
        },
        {
            name: "Ituberá",
            lat: -13.6948015277,
            lng: -39.2318269014,
            desc: ""
        },
        {
            name: "Central",
            lat: -11.089475854,
            lng: -42.075088388,
            desc: ""
        },
        {
            name: "Alagoinhas",
            lat: -12.1421449721,
            lng: -38.4472803188,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8459796525,
            lng: -41.0393370481,
            desc: "COMUNIDADE QUILOMBOLA SÃO JOAQUIM DO SERTÃO"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.0096237637,
            lng: -40.7996935541,
            desc: "COMUNIDADE QUILOMBOLA SÃO JOAQUIM DE PAULO"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.0118434162,
            lng: -40.8047827412,
            desc: "COMUNIDADE QUILOMBOLA SÃO JOAQUIM DE PAULO"
        },
        {
            name: "Vitória da Conquista",
            lat: -15.0100833332,
            lng: -40.7864676802,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.848367611,
            lng: -41.0402027355,
            desc: "COMUNIDADE QUILOMBOLA SÃO JOAQUIM DO SERTÃO"
        },
        {
            name: "Feira de Santana",
            lat: -12.2584116944,
            lng: -38.9840439303,
            desc: ""
        },
        {
            name: "Itaeté",
            lat: -12.9207851388,
            lng: -41.1240791267,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2245349443,
            lng: -38.0893356001,
            desc: "COMUNIDADE QUILOMBOLA SÃO MATEUS"
        },
        {
            name: "Itapicuru",
            lat: -11.3934988888,
            lng: -38.1096878901,
            desc: ""
        },
        {
            name: "Monte Santo",
            lat: -10.2290967498,
            lng: -39.3771981388,
            desc: ""
        },
        {
            name: "Monte Santo",
            lat: -10.2133195275,
            lng: -39.3770689292,
            desc: ""
        },
        {
            name: "Itacaré",
            lat: -14.2750271944,
            lng: -39.0985773611,
            desc: "AGRUPAMENTO QUILOMBOLA PANCADA GRANDE"
        },
        {
            name: "Maraú",
            lat: -14.2629525554,
            lng: -39.1903188981,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.2505793581697,
            lng: -39.1496777041204,
            desc: "COMUNIDADE QUILOMBOLA SÃO RAIMUNDO"
        },
        {
            name: "Lagoa Real",
            lat: -14.0468316248,
            lng: -42.1037451521,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO ROQUE"
        },
        {
            name: "Maragogipe",
            lat: -12.8564530971,
            lng: -38.8534998752,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO ROQUE DO PARAGUAÇU"
        },
        {
            name: "São Sebastião do Passé",
            lat: -12.5093866249,
            lng: -38.4928612374,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.609040236,
            lng: -38.9595137245,
            desc: ""
        },
        {
            name: "Umburanas",
            lat: -10.548921986,
            lng: -40.9102823209,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO TOMÉ"
        },
        {
            name: "Candeias",
            lat: -12.7371155972,
            lng: -38.5307350693,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.6370005416,
            lng: -40.8327457766,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.7085356804,
            lng: -42.0620245948,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO TOMÉ"
        },
        {
            name: "Campo Formoso",
            lat: -10.5068652777,
            lng: -40.3229826524,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.5999527219,
            lng: -40.9296615618,
            desc: "AGRUPAMENTO QUILOMBOLA SÃO TOMÉ"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.5951079027,
            lng: -40.343362763,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.6325616525,
            lng: -42.5856716882,
            desc: "COMUNIDADE QUILOMBOLA FAZENDA SAPE"
        },
        {
            name: "Condeúba",
            lat: -14.6688184997,
            lng: -42.0229280015,
            desc: ""
        },
        {
            name: "Igrapiúna",
            lat: -13.8988993609,
            lng: -39.2378195646,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.1904098054,
            lng: -40.7754172223,
            desc: "COMUNIDADE QUILOMBOLA SAQUINHO"
        },
        {
            name: "América Dourada",
            lat: -11.4483370693,
            lng: -41.6245483323,
            desc: "COMUNIDADE QUILOMBOLA SARANDÍ"
        },
        {
            name: "Valença",
            lat: -13.4746989997,
            lng: -39.1286094331,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.473239441231,
            lng: -39.1327658456135,
            desc: "COMUNIDADE QUILOMBOLA SARAPUÍ"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6335218963934,
            lng: -39.4883513795334,
            desc: "COMUNIDADE QUILOMBOLA SARILÂNDIA"
        },
        {
            name: "Wenceslau Guimarães",
            lat: -13.6490850555,
            lng: -39.4869570978,
            desc: ""
        },
        {
            name: "Iraquara",
            lat: -12.2380005694,
            lng: -41.6151022492,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9722274444,
            lng: -41.6415171944,
            desc: ""
        },
        {
            name: "Bom Jesus da Serra",
            lat: -14.3113239443,
            lng: -40.611252071,
            desc: ""
        },
        {
            name: "Barro Alto",
            lat: -11.793543972,
            lng: -41.8295600619,
            desc: "COMUNIDADE QUILOMBOLA SEGREDO"
        },
        {
            name: "Canarana",
            lat: -11.6921293885,
            lng: -41.6128195286551,
            desc: "COMUNIDADE QUILOMBOLA SEGREDO"
        },
        {
            name: "Ibipeba",
            lat: -11.6704146387,
            lng: -41.9351968884,
            desc: "COMUNIDADE QUILOMBOLA SEGREDO"
        },
        {
            name: "Souto Soares",
            lat: -12.0162363606,
            lng: -41.6666475222,
            desc: "COMUNIDADE QUILOMBOLA SEGREDO"
        },
        {
            name: "Araçás",
            lat: -12.2159234305,
            lng: -38.204284459,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.8013246944444,
            lng: -37.6213172266684,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4746440971,
            lng: -40.198851527,
            desc: "COMUNIDADE QUILOMBOLA OLARIA"
        },
        {
            name: "Xique-Xique",
            lat: -10.5979984305,
            lng: -42.603226027,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.156649611,
            lng: -41.4041972647,
            desc: "COMUNIDADE QUILOMBOLA SERRA AZUL"
        },
        {
            name: "Itacaré",
            lat: -14.4078343887,
            lng: -39.1771952005,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.2508687359,
            lng: -38.4749632952,
            desc: "SERRA DO NOEL"
        },
        {
            name: "Valença",
            lat: -13.3479901249,
            lng: -39.0551405538,
            desc: ""
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3574482498,
            lng: -39.1979208186,
            desc: ""
        },
        {
            name: "Boninal",
            lat: -12.6998876387,
            lng: -41.8408022105,
            desc: ""
        },
        {
            name: "Seabra",
            lat: -12.5976766665,
            lng: -41.8593208142,
            desc: "COMUNIDADE QUILOMBOLA SERRA DO QUEIMADÃO"
        },
        {
            name: "Buerarema",
            lat: -14.9567483,
            lng: -39.3016915,
            desc: ""
        },
        {
            name: "Ibipeba",
            lat: -11.5485388053,
            lng: -42.1757955627,
            desc: "COMUNIDADE QUILOMBOLA SERRA GRANDE"
        },
        {
            name: "Aracatu",
            lat: -14.2873973609,
            lng: -41.4209456604,
            desc: ""
        },
        {
            name: "Palmeiras",
            lat: -12.5787973607,
            lng: -41.6055214677,
            desc: ""
        },
        {
            name: "Fátima",
            lat: -10.5932872635,
            lng: -38.2122558651,
            desc: ""
        },
        {
            name: "Fátima",
            lat: -10.5627584215,
            lng: -38.1884481850431,
            desc: "COMUNIDADE QUILOMBOLA SERRADINHA"
        },
        {
            name: "Jacobina",
            lat: -11.1864534582,
            lng: -40.5120419577,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.2021220971,
            lng: -41.6723405421,
            desc: ""
        },
        {
            name: "João Dourado",
            lat: -11.2386086526,
            lng: -41.422375267,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.9667237776,
            lng: -43.3635363317,
            desc: "AGRUPAMENTO QUILOMBOLA VESPERINA"
        },
        {
            name: "Pilão Arcado",
            lat: -10.5556541666,
            lng: -42.6231674195,
            desc: "AGRUPAMENTO QUILOMBOLA SILVA"
        },
        {
            name: "Gentio do Ouro",
            lat: -11.676365861,
            lng: -42.5931703328,
            desc: ""
        },
        {
            name: "Anagé",
            lat: -14.6663971942,
            lng: -40.7045493361,
            desc: "COMUNIDADE QUILOMBOLA SINZOCA"
        },
        {
            name: "Conde",
            lat: -11.7634709693297,
            lng: -37.5248838563638,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.2729390833,
            lng: -38.4690220129,
            desc: ""
        },
        {
            name: "Juazeiro",
            lat: -9.45107808328,
            lng: -40.5014099857,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -13.9315099999,
            lng: -43.4407429411,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.1478166387,
            lng: -43.3894662355,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -12.0422677915,
            lng: -38.8584362208,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8348793052,
            lng: -38.9293227161,
            desc: ""
        },
        {
            name: "Souto Soares",
            lat: -12.0166683749,
            lng: -41.6278480256,
            desc: ""
        },
        {
            name: "Jussara",
            lat: -11.1123808887,
            lng: -41.9686609288,
            desc: "COMUNIDADE QUILOMBOLA SÍTIO NOVO"
        },
        {
            name: "Lamarão",
            lat: -11.8359490413,
            lng: -38.9331456428,
            desc: "COMUNIDADE QUILOMBOLA SÍTIO DE SANTANA"
        },
        {
            name: "Camamu",
            lat: -14.0152309722,
            lng: -39.2015803471,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7628524027,
            lng: -40.1486256496,
            desc: ""
        },
        {
            name: "Mirangaba",
            lat: -10.9721242082,
            lng: -40.5176534119,
            desc: ""
        },
        {
            name: "Condeúba",
            lat: -14.6780340554,
            lng: -42.0135719272,
            desc: "COMUNIDADE QUILOMBOLA SOSSEGO"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3959323332,
            lng: -39.1627234338,
            desc: ""
        },
        {
            name: "São Félix",
            lat: -12.6603645275,
            lng: -38.9744841123,
            desc: ""
        },
        {
            name: "Santa Bárbara",
            lat: -11.997178486,
            lng: -38.9957104267,
            desc: ""
        },
        {
            name: "Santa Bárbara",
            lat: -12.0116714474462,
            lng: -38.9958522454419,
            desc: "AGRUPAMENTO QUILOMBOLA SUCUPIRA"
        },
        {
            name: "Alagoinhas",
            lat: -11.9694180555,
            lng: -38.3771819722,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8598279998,
            lng: -38.943022906,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.1500698749,
            lng: -39.2696428743,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1202495971,
            lng: -41.7309870129,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.2551220832,
            lng: -40.7437355249,
            desc: ""
        },
        {
            name: "Pindaí",
            lat: -14.4411731387,
            lng: -42.7384438381,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.2041631248,
            lng: -39.2985480429,
            desc: "COMUNIDADE QUILOMBOLA TABULEIRO"
        },
        {
            name: "Salvador",
            lat: -12.9085829722,
            lng: -38.4364105693,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6720673413704,
            lng: -38.9219575229999,
            desc: "COMUNIDADE QUILOMBOLA TABULEIRO DA VITÓRIA"
        },
        {
            name: "Alagoinhas",
            lat: -12.1179711526,
            lng: -38.409278446,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.836738236,
            lng: -38.9574110971,
            desc: ""
        },
        {
            name: "Cansanção",
            lat: -10.750554074,
            lng: -39.5181050023678,
            desc: "COMUNIDADE QUILOMBOLA TAMANDUÁ"
        },
        {
            name: "Paratinga",
            lat: -12.8682883332,
            lng: -43.2573125016,
            desc: ""
        },
        {
            name: "Mortugaba",
            lat: -15.0262555276,
            lng: -42.2130781728,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.1935187776,
            lng: -41.9422397914,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.7520345277,
            lng: -42.4598149429,
            desc: ""
        },
        {
            name: "Mansidão",
            lat: -10.8047196114999,
            lng: -44.0917972053252,
            desc: "TAMBORIL"
        },
        {
            name: "Condeúba",
            lat: -15.0490856943,
            lng: -42.2349888179,
            desc: ""
        },
        {
            name: "Mansidão",
            lat: -10.9125812499,
            lng: -44.143234556,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.0111711804,
            lng: -38.9812503779,
            desc: "AGRUPAMENTO QUILOMBOLA TANQUE"
        },
        {
            name: "Nordestina",
            lat: -10.8503892914,
            lng: -39.4557367622,
            desc: ""
        },
        {
            name: "Malhada de Pedras",
            lat: -14.2690600276,
            lng: -41.9711635557,
            desc: ""
        },
        {
            name: "Feira de Santana",
            lat: -12.2879271524,
            lng: -38.8960126501,
            desc: "AGRUPAMENTO QUILOMBOLA TANQUINHOS"
        },
        {
            name: "Feira de Santana",
            lat: -12.284054236,
            lng: -38.894334138,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.563427847,
            lng: -40.1412802925,
            desc: "AGRUPAMENTO QUILOMBOLA TANQUINHO"
        },
        {
            name: "Tanhaçu",
            lat: -14.0142240555,
            lng: -41.2433220427,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -11.9881388193,
            lng: -38.8378979335,
            desc: ""
        },
        {
            name: "Jeremoabo",
            lat: -10.0379551804,
            lng: -38.3788640119,
            desc: "ALTO DA TAPERA"
        },
        {
            name: "Mata de São João",
            lat: -12.5687073976443,
            lng: -38.0377081217434,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0706121105,
            lng: -38.7977696351,
            desc: ""
        },
        {
            name: "Santanópolis",
            lat: -11.9967424444,
            lng: -38.840039333,
            desc: "AGRUPAMENTO QUILOMBOLA TAPERINHA"
        },
        {
        name: "Tremedal",
        lat: -15.1229425554,
        lng: -41.7412868381,
        desc: ""
        },
        {
            name: "Miguel Calmon",
            lat: -11.4435974859,
            lng: -40.4227636655,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -13.9006630971,
            lng: -38.9594019577,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0880560969,
            lng: -39.089854615,
            desc: "COMUNIDADE QUILOMBOLA TAPUIA"
        },
        {
            name: "Jandaíra",
            lat: -11.5730387221,
            lng: -37.6649572661,
            desc: ""
        },
        {
            name: "Palmeiras",
            lat: -12.7083081942,
            lng: -41.571417212,
            desc: "COMUNIDADE QUILOMBOLA TEJUCO"
        },
        {
            name: "Vera Cruz",
            lat: -12.965151439,
            lng: -38.622857533,
            desc: ""
        },
        {
            name: "Banzaê",
            lat: -10.6105538471,
            lng: -38.6809949973,
            desc: "COMUNIDADE QUILOMBOLA TERRA DA LUA"
        },
        {
            name: "Cairu",
            lat: -13.4878023749,
            lng: -39.0443076234,
            desc: ""
        },
        {
            name: "Camaçari",
            lat: -12.7065300971,
            lng: -38.1573790559,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.1830883192,
            lng: -39.1552484687,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6228494303,
            lng: -38.9258271584,
            desc: "AGRUPAMENTO QUILOMBOLA TERRA VERMELHA"
        },
        {
            name: "Sátiro Dias",
            lat: -11.7260731249,
            lng: -38.5578981496,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4542367161199,
            lng: -40.1847991627734,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4753229913878,
            lng: -40.1996778398129,
            desc: "COMUNIDADE QUILOMBOLA OLARIA"
        },
        {
            name: "São Félix",
            lat: -12.6667220688,
            lng: -38.9779505059,
            desc: ""
        },
        {
            name: "Ribeirão do Largo",
            lat: -15.4515937638,
            lng: -40.6837725832,
            desc: ""
        },
        {
            name: "Ribeirão do Largo",
            lat: -15.4430001943,
            lng: -40.6555026805,
            desc: "COMUNIDADE QUILOMBOLA THIAGOS"
        },
        {
            name: "Campo Formoso",
            lat: -10.4949091249,
            lng: -40.3177959141,
            desc: ""
        },
        {
            name: "Salvador",
            lat: -12.9491002916,
            lng: -38.452405528,
            desc: ""
        },
        {
            name: "Ponto Novo",
            lat: -10.8644942777,
            lng: -40.1300189722,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7391206803,
            lng: -40.1336100379,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.6236215136,
            lng: -40.1343999335,
            desc: "COMUNIDADE QUILOMBOLA TIJUAÇU"
        },
        {
            name: "Filadélfia",
            lat: -10.6397023472,
            lng: -40.1649909578,
            desc: "COMUNIDADE QUILOMBOLA BARREIRAS"
        },
        {
            name: "Antônio Gonçalves",
            lat: -10.6191873193,
            lng: -40.1689392083,
            desc: "COMUNIDADE QUILOMBOLA CONCEIÇÃO"
        },
        {
            name: "Piatã",
            lat: -13.1254624582,
            lng: -41.7765018908,
            desc: ""
        },
        {
            name: "Esplanada",
            lat: -11.7906669305,
            lng: -37.956700446,
            desc: "AGRUPAMENTO QUILOMBOLA TIMBÓ"
        },
        {
            name: "Conde",
            lat: -11.7574908380986,
            lng: -37.7699114097711,
            desc: ""
        },
        {
            name: "Maiquinique",
            lat: -15.6616090969,
            lng: -40.3493258408,
            desc: ""
        },
        {
            name: "Campo Formoso",
            lat: -10.464526722,
            lng: -40.5470610118,
            desc: "AGRUPAMENTO QUILOMBOLA TIQUARA"
        },
        {
            name: "Ibitiara",
            lat: -12.5084691803,
            lng: -42.0686263245,
            desc: "COMUNIDADE QUILOMBOLA TIRIRICA DE CIMA"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3159160736349,
            lng: -39.1835173679765,
            desc: "AGRUPAMENTO QUILOMBOLA TOCOS"
        },
        {
            name: "Antônio Cardoso",
            lat: -12.3339525276,
            lng: -39.1698638496,
            desc: ""
        },
        {
            name: "Bom Jesus da Lapa",
            lat: -13.247369111,
            lng: -43.4101700845,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6957894499256,
            lng: -43.1906578589999,
            desc: "COMUNIDADE QUILOMBOLA TOMBA"
        },
        {
            name: "Piatã",
            lat: -13.1641468054,
            lng: -41.977846387,
            desc: ""
        },
        {
            name: "Carinhanha",
            lat: -14.3019061386,
            lng: -43.7632675671,
            desc: ""
        },
        {
            name: "Malhada",
            lat: -14.2788496111,
            lng: -43.7225211389,
            desc: "AGRUPAMENTO QUILOMBOLA TOMÉ NUNES"
        },
        {
            name: "Malhada",
            lat: -14.3390751039,
            lng: -43.7712637147,
            desc: ""
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.264882046712,
            lng: -43.1514894085755,
            desc: ""
        },
        {
            name: "Barra",
            lat: -11.5038749859,
            lng: -43.277852895,
            desc: "AGRUPAMENTO QUILOMBOLA TORRINHA"
        },
        {
            name: "Cairu",
            lat: -13.5704266734,
            lng: -39.0104839485,
            desc: "COMUNIDADE QUILOMBOLA TORRINHA"
        },
        {
            name: "Jeremoabo",
            lat: -10.2133524165,
            lng: -38.4242094618,
            desc: ""
        },
        {
            name: "Maraú",
            lat: -14.1534747912,
            lng: -39.0906829399,
            desc: "AGRUPAMENTO QUILOMBOLA TREMEMBÉ"
        },
        {
            name: "Jacobina",
            lat: -11.1765905972,
            lng: -40.5248697778,
            desc: ""
        },
        {
            name: "Canarana",
            lat: -11.7017346944,
            lng: -41.6568504025,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8509804721,
            lng: -38.9514228011,
            desc: ""
        },
        {
            name: "Biritinga",
            lat: -11.6025137496,
            lng: -38.8222068215,
            desc: "COMUNIDADE QUILOMBOLA TRINDADE"
        },
        {
            name: "Araçás",
            lat: -12.2441568194,
            lng: -38.2724158629,
            desc: ""
        },
        {
            name: "Tanhaçu",
            lat: -13.9620979021,
            lng: -41.1997859209,
            desc: "COMUNIDADE QUILOMBOLA TUCUM"
        },
        {
            name: "Uibaí",
            lat: -11.3300886387,
            lng: -42.132454481,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.6424445416,
            lng: -42.6702795108,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -14.8244156526,
            lng: -40.9311764431,
            desc: "AGRUPAMENTO QUILOMBOLA UMBURANA E MALHADA"
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.4585554721,
            lng: -40.1389240431,
            desc: "COMUNIDADE QUILOMBOLA UMBURANA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.8986807775,
            lng: -41.6004541276,
            desc: "COMUNIDADE QUILOMBOLA UMBURANINHA DO DIONÍSIO"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9126578055,
            lng: -41.6047851812,
            desc: ""
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9219655554,
            lng: -41.6312478519,
            desc: ""
        },
        {
            name: "São Gabriel",
            lat: -11.0276242499,
            lng: -41.572424445,
            desc: ""
        },
        {
            name: "Uauá",
            lat: -9.91158422211,
            lng: -39.6721035132,
            desc: ""
        },
        {
            name: "Xique-Xique",
            lat: -10.6743052915,
            lng: -42.6292027137,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.3480462916,
            lng: -39.0549378186,
            desc: ""
        },
        {
            name: "Cachoeira",
            lat: -12.6618782916,
            lng: -38.9081306261,
            desc: "AGRUPAMENTO QUILOMBOLA VALENÇA"
        },
        {
            name: "Seabra",
            lat: -12.5614741661,
            lng: -41.8316264482,
            desc: "COMUNIDADE QUILOMBOLA VÃO DAS PALMEIRAS"
        },
        {
            name: "Piatã",
            lat: -12.9860112083,
            lng: -41.8083896802,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9395263469,
            lng: -41.3143932871,
            desc: "COMUNIDADE QUILOMBOLA VARAME"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.082534347,
            lng: -43.2690009252,
            desc: "COMUNIDADE QUILOMBOLA VARGEM ALTA"
        },
        {
            name: "Palmas de Monte Alto",
            lat: -14.0805983332,
            lng: -43.0950066518,
            desc: ""
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.7044349721,
            lng: -42.2102766534,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -13.654511104,
            lng: -42.2279881889,
            desc: ""
        },
        {
            name: "Irará",
            lat: -12.0108391664,
            lng: -38.7538915895,
            desc: "AGRUPAMENTO QUILOMBOLA VÁRZEA"
        },
        {
            name: "Piatã",
            lat: -13.2169081247,
            lng: -41.8997811006,
            desc: ""
        },
        {
            name: "Serrolândia",
            lat: -11.5065063749,
            lng: -40.2084259861,
            desc: ""
        },
        {
            name: "Caém",
            lat: -11.1783078749,
            lng: -40.1539687219,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6968676387,
            lng: -40.2335115439,
            desc: "COMUNIDADE QUILOMBOLA VÁRZEA DA SERRA"
        },
        {
            name: "Quixabeira",
            lat: -11.4324415277,
            lng: -40.1803887747,
            desc: ""
        },
        {
            name: "Senhor do Bonfim",
            lat: -10.5883649096,
            lng: -40.173542728,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.6785197638,
            lng: -40.0543551105,
            desc: ""
        },
        {
            name: "Quixabeira",
            lat: -11.4588182638,
            lng: -40.1929242666,
            desc: ""
        },
        {
            name: "Piatã",
            lat: -13.129822236,
            lng: -41.9394035574,
            desc: ""
        },
        {
            name: "Cipó",
            lat: -11.0937158748,
            lng: -38.5060737093,
            desc: ""
        },
        {
            name: "Cipó",
            lat: -11.0870014235,
            lng: -38.4984757044431,
            desc: "COMUNIDADE QUILOMBOLA VÁRZEA GRANDE"
        },
        {
            name: "Livramento de Nossa Senhora",
            lat: -13.754533736,
            lng: -42.1803068357,
            desc: ""
        },
        {
            name: "Filadélfia",
            lat: -10.7264221109,
            lng: -40.0547797423,
            desc: "AGRUPAMENTO QUILOMBOLA VÁRZEA GRANDE DO SACO"
        },
        {
            name: "Rio de Contas",
            lat: -13.566246663,
            lng: -41.6520050013943,
            desc: "COMUNIDADE QUILOMBOLA VÁRZEA NOVA"
        },
        {
            name: "Rio de Contas",
            lat: -13.5714874027,
            lng: -41.6547192918,
            desc: ""
        },
        {
            name: "Caém",
            lat: -11.1500503745,
            lng: -40.161134114,
            desc: "COMUNIDADE QUILOMBOLA VÁRZEA QUEIMADA"
        },
        {
            name: "Boninal",
            lat: -12.6996114721,
            lng: -41.8408053766,
            desc: ""
        },
        {
            name: "Cafarnaum",
            lat: -11.6883857083,
            lng: -41.4693379158,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2109173609,
            lng: -41.0842764638,
            desc: ""
        },
        {
            name: "América Dourada",
            lat: -11.4539478748,
            lng: -41.4371905446,
            desc: ""
        },
        {
            name: "Vitória da Conquista",
            lat: -15.2478077705,
            lng: -41.0822238165,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5339322656192,
            lng: -41.4637990285,
            desc: "COMUNIDADE QUILOMBOLA VELAME"
        },
        {
            name: "Barra do Mendes",
            lat: -11.7877008333,
            lng: -42.0342088477,
            desc: ""
        },
        {
            name: "Barra",
            lat: -10.840591486,
            lng: -42.9180642071,
            desc: "AGRUPAMENTO QUILOMBOLA VENTURA"
        },
        {
            name: "Ibipeba",
            lat: -11.4160975416,
            lng: -42.2639203889,
            desc: "AGRUPAMENTO QUILOMBOLA SALVA-VIDAS"
        },
        {
            name: "Central",
            lat: -11.1626673471,
            lng: -42.2212058744,
            desc: "COMUNIDADE QUILOMBOLA VEREDA"
        },
        {
            name: "Caetité",
            lat: -13.685127139,
            lng: -42.306861028,
            desc: ""
        },
        {
            name: "Caetité",
            lat: -14.0587199027,
            lng: -42.4889521542,
            desc: ""
        },
        {
            name: "Serra do Ramalho",
            lat: -13.3849217774,
            lng: -43.4832542586,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.5494184581,
            lng: -41.1633998768,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.8697825670698,
            lng: -37.7312797280885,
            desc: ""
        },
        {
            name: "Riacho de Santana",
            lat: -13.967062847,
            lng: -43.3611200731,
            desc: "AGRUPAMENTO QUILOMBOLA VESPERINA"
        },
        {
            name: "Xique-Xique",
            lat: -10.6227100416,
            lng: -42.6670621279,
            desc: ""
        },
        {
            name: "Entre Rios",
            lat: -11.8596239999,
            lng: -38.1440046241,
            desc: ""
        },
        {
            name: "São Domingos",
            lat: -11.4755180694,
            lng: -39.5817405839,
            desc: "COMUNIDADE QUILOMBOLA VILA ÁFRICA"
        },
        {
            name: "Remanso",
            lat: -9.68910811097,
            lng: -42.2141301677,
            desc: "COMUNIDADE QUILOMBOLA VILA APARECIDA"
        },
        {
            name: "Bonito",
            lat: -12.1386347775,
            lng: -41.3163947152,
            desc: "AGRUPAMENTO QUILOMBOLA VILA CRUZINHA"
        },
        {
            name: "Mulungu do Morro",
            lat: -11.9512335554,
            lng: -41.6469330832,
            desc: ""
        },
        {
            name: "Conde",
            lat: -11.7917969583,
            lng: -37.6208074869,
            desc: ""
        },
        {
            name: "Cruz das Almas",
            lat: -12.6525105275,
            lng: -39.0860878082,
            desc: "COMUNIDADE QUILOMBOLA VILA GUAXINIM"
        },
        {
            name: "Caravelas",
            lat: -17.7209898333,
            lng: -39.8805163611,
            desc: ""
        },
        {
            name: "Ibirapuã",
            lat: -17.7656472219,
            lng: -39.8424075231,
            desc: "COMUNIDADE QUILOMBOLA VILA JUAZEIRO"
        },
        {
            name: "Itacaré",
            lat: -14.3146340415,
            lng: -39.0254565668,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.9734115416,
            lng: -41.3249468349,
            desc: ""
        },
        {
            name: "Biritinga",
            lat: -11.6745254441,
            lng: -38.6964648772,
            desc: "COMUNIDADE QUILOMBOLA VILA NOVA"
        },
        {
            name: "Ibitiara",
            lat: -12.6239117634,
            lng: -42.0407663866,
            desc: "COMUNIDADE QUILOMBOLA VILA NOVA"
        },
        {
            name: "Bonito",
            lat: -12.0453582915,
            lng: -41.3268132315,
            desc: ""
        },
        {
            name: "Bonito",
            lat: -11.989925236,
            lng: -41.3439811122,
            desc: ""
        },
        {
            name: "Valença",
            lat: -13.348155986,
            lng: -39.0546777489,
            desc: ""
        },
        {
            name: "Biritinga",
            lat: -11.6861075137,
            lng: -38.6847207474,
            desc: "VILA DO ALTO"
        },
        {
            name: "Jeremoabo",
            lat: -10.2646634582,
            lng: -38.4678076526,
            desc: "COMUNIDADE QUILOMBOLA VIRAÇÃO"
        },
        {
            name: "Araçás",
            lat: -12.2067629304,
            lng: -38.1058248462,
            desc: ""
        },
        {
            name: "Araçás",
            lat: -12.2289233333,
            lng: -38.2208747355,
            desc: ""
        },
        {
            name: "Barra do Mendes",
            lat: -12.2302559164,
            lng: -42.0249635217,
            desc: "COMUNIDADE QUILOMBOLA VOLTA DO ABDON"
        },
        {
            name: "Canarana",
            lat: -11.6179329026,
            lng: -41.6409011416,
            desc: "COMUNIDADE QUILOMBOLA VOLTA DO ANGICO"
        },
        {
            name: "Canarana",
            lat: -11.6899976665,
            lng: -41.7698163526,
            desc: ""
        },
        {
            name: "Lapão",
            lat: -11.6456511525,
            lng: -41.7244184409,
            desc: "COMUNIDADE QUILOMBOLA VOLTA GRANDE"
        },
        {
            name: "Barro Alto",
            lat: -11.79576667,
            lng: -41.8976363818184,
            desc: "COMUNIDADE QUILOMBOLA VOLTA GRANDE"
        },
        {
            name: "Barro Alto",
            lat: -11.7629459303,
            lng: -41.9096413433,
            desc: ""
        },
        {
            name: "Teixeira de Freitas",
            lat: -17.5520324443,
            lng: -39.7528876358,
            desc: ""
        },
        {
            name: "Caravelas",
            lat: -17.7445624581,
            lng: -39.6264059842,
            desc: ""
        },
        {
            name: "Morro do Chapéu",
            lat: -11.560799986,
            lng: -41.5481859038,
            desc: "COMUNIDADE QUILOMBOLA XARÉU"
        },
        {
            name: "Coração de Maria",
            lat: -12.2161846249,
            lng: -38.818641335,
            desc: ""
        },
        {
            name: "Paratinga",
            lat: -12.6983828748,
            lng: -43.1695663006,
            desc: ""
        },
        {
            name: "Simões Filho",
            lat: -12.684066611,
            lng: -38.3875378477,
            desc: "COMUNIDADE QUILOMBOLA PITANGA DOS PALMARES"
        },
        {
            name: "Salvador",
            lat: -12.9531336388,
            lng: -38.4865353333,
            desc: ""
        },
        {
            name: "Camamu",
            lat: -14.0304543749,
            lng: -39.1728181123,
            desc: ""
        },
        {
            name: "Euclides da Cunha",
            lat: -10.5611314999,
            lng: -39.0370210696,
            desc: ""
        },
        {
            name: "Pedro Alexandre",
            lat: -10.0383751666,
            lng: -37.8022971111,
            desc: ""
        },
        {
            name: "Maragogipe",
            lat: -12.8677729995,
            lng: -38.8554057442,
            desc: ""
        },
];

        // Adiciona marcadores e quadrados para cada comunidade
        comunidades.forEach(function(comunidade) {
            // Adiciona o marcador
            var marker = L.marker([comunidade.lat, comunidade.lng]).addTo(map);
            marker.bindPopup(`<b>${comunidade.name}</b><br>${comunidade.desc}`).openPopup();

            // cria um quadrado de 200 m por 200 m ao redor do marcador
            var bounds = [
                [comunidade.lat - 0.0009, comunidade.lng - 0.00097], // Canto inferior esquerdo
                [comunidade.lat + 0.0009, comunidade.lng + 0.00097]  // Canto superior direito
            ];
            var rectangle = L.rectangle(bounds, {
                color: "#ff7800",    //borda
                weight: 2,           //espessura da borda
                fillColor: "#ff7800",//Cor de preenchimento
                fillOpacity: 0.2     //transparência do preenchimento
            }).addTo(map);
        });
    </script>
</body>
</html>
