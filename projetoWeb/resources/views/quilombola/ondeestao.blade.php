@extends('layouts.quilombola.base')

@section('page-css')
    @vite('resources/css/quilombola/ondeestao.css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('content')

    <main>
        <section>
            <div id="map" aria-label="Mapa de localização de comunidades quilombolas" title="Mapa Interativo"></div>
        </section>

        <section class="topico-inicial">
            <h2>Onde Estamos: A História e a Resistência Quilombola</h2>
            <p>Os quilombos são comunidades formadas por descendentes de africanos escravizados que fugiram do cativeiro
                e estabeleceram locais de resistência e liberdade. Essas comunidades se encontram em diversas regiões do
                Brasil, especialmente em áreas de difícil acesso, como matas, serras e regiões rurais, garantindo a
                preservação de sua cultura e identidade. Atualmente, existem milhares de comunidades quilombolas
                reconhecidas em todo o Brasil, distribuídas por diferentes estados, principalmente no Maranhão, Bahia,
                Pará, Minas Gerais e Goiás. Esses territórios são fundamentais para a manutenção da identidade
                quilombola e da continuidade de seus modos de vida tradicionais. Além das áreas rurais, algumas
                comunidades também se encontram próximas a centros urbanos, demonstrando a diversidade e adaptação dos
                quilombos ao longo do tempo.</p>
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
            <p>A palavra "quilombo" tem origem nas línguas bantu, faladas por diversos povos da África Central e
                Ocidental. Em idiomas como o quimbundo e o umbundo, os termos "kilombo" e "ochilombo" eram usados para
                designar acampamentos temporários ou locais fortificados, servindo de refúgio para grupos que precisavam
                de proteção.</p>
            <p>Com a chegada dos africanos escravizados ao Brasil, "quilombo" passou a definir os locais onde esses
                povos encontravam liberdade. O termo foi consolidado tanto pelo uso das próprias comunidades quanto pela
                legislação colonial portuguesa, que se referia a esses agrupamentos como forma de classificá-los
                juridicamente.</p>
        </section>

        <section class="a-vida">
            <h2 class="titulo02">A Vida nos Quilombos</h2>
            <p>Os quilombos eram muito mais do que simples esconderijos: eram espaços de resistência, organização social
                e preservação cultural.</p>
            <ul>
                <li>Autossuficiência: agricultura, pesca e criação de animais.</li>
                <li>Cultura viva: música, dança, culinária e religiosidade.</li>
                <li>Defesa e resistência: grupos armados para proteção.</li>
                <li>Preservação cultural: legado forte na cultura brasileira.</li>
            </ul>
        </section>
    </main>
@endsection

@section('page-js')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @vite(['resources/js/quilombola/mapa.js'])
@endsection


