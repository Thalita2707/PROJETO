@extends('layouts.quilombola.base')

@section('page-css')
    @vite('resources/css/quilombola/historia.css')
@endsection

@section('content')
    <main class="container mt-4 historia-quilombos-completa">
        <h2>A História Abrangente dos Quilombos no Brasil</h2>

        <section class="secao-historica">
            <h3>As Raízes da Resistência: Do Cativeiro à Fuga</h3>
            <img src="{{ asset('images/africa-brasil.jpg') }}" alt="Ilustração da travessia da África para o Brasil"
                 class="img-fluid imagem-historica">

            <p>A história dos quilombos está intrinsecamente ligada à brutalidade do sistema escravista imposto aos
                africanos trazidos à força para o Brasil. Arrancados de suas terras, famílias e culturas, eles foram
                submetidos a condições desumanas de trabalho e vida. Em meio a esse sofrimento, a resistência floresceu
                de diversas formas, desde a insubordinação individual até a organização de fugas em massa.</p>
            <p>A memória de sociedades africanas com estruturas políticas e sociais complexas, muitas vezes baseadas em
                comunidades autônomas, certamente influenciou a busca por liberdade e a criação de espaços alternativos
                no Brasil. A fuga para áreas remotas representava não apenas a busca por segurança, mas também a
                oportunidade de reconstruir laços comunitários e preservar elementos culturais africanos.</p>
        </section>

        <section class="secao-historica">
            <h3>O Surgimento e a Natureza dos Quilombos</h3>
            <img s      src="{{ asset('images/formacao-quilombo.webp') }}" alt="Ilustração da formação de um quilombo"
                 class="img-fluid imagem-historica">

            <p>Os primeiros quilombos surgiram nos primórdios da colonização, tornando-se mais numerosos e organizados
                com o aumento do tráfico negreiro e a expansão da lavoura. Inicialmente, podiam ser pequenos refúgios
                temporários, mas muitos evoluíram para comunidades estáveis e complexas, com organização social,
                política e econômica próprias.</p>
            <p>A composição dos quilombos era diversa. Predominantemente formados por africanos e seus descendentes,
                também acolhiam indígenas, que muitas vezes compartilhavam a resistência à opressão colonial, e até
                mesmo brancos marginalizados pela sociedade da época. Essa diversidade enriquecia as dinâmicas sociais e
                culturais dessas comunidades.</p>
            <p>A localização estratégica era crucial para a sobrevivência dos quilombos. Áreas de difícil acesso, como
                montanhas, florestas densas e pântanos, ofereciam proteção contra as incursões das autoridades coloniais
                e dos senhores de escravos.</p>
        </section>

        <section class="secao-historica">
            <h3>O Quilombo dos Palmares em Detalhe</h3>
            <img  src="{{ asset('images/palmares-detalhe.jpg') }}" alt="Mapa ou representação detalhada de Palmares"
                 class="img-fluid imagem-historica">

            <p>O Quilombo dos Palmares, localizado na então Capitania de Pernambuco (hoje Alagoas), é o exemplo mais
                emblemático da resistência quilombola. Sua existência por quase um século, de meados do século XVII até
                o final do século, desafiou o poder colonial e se tornou um símbolo de liberdade para os
                escravizados.</p>
            <p>Palmares era uma confederação de diversos mocambos (aldeias), cada um com sua liderança e organização
                interna, mas todos unidos sob uma liderança central. Ganga Zumba foi um dos primeiros líderes
                conhecidos, buscando inicialmente uma negociação com os portugueses. No entanto, a proposta de liberdade
                apenas para os nascidos em Palmares não foi aceita por todos, especialmente por Zumbi.</p>
            <p>Zumbi dos Palmares emergiu como um líder militar e político fundamental, defendendo a liberdade
                incondicional de todos os escravizados. Sob sua liderança, Palmares resistiu a inúmeras expedições
                militares, desenvolvendo táticas de guerrilha e construindo uma sociedade autônoma com agricultura
                diversificada, artesanato e comércio.</p>
            <p>A organização social de Palmares incluía a produção de alimentos, a defesa militar, a manutenção da ordem
                interna e a celebração de rituais e tradições africanas. A influência cultural africana era evidente na
                língua, na religião, na música e nas práticas sociais.</p>
        </section>

        <section class="secao-historica">
            <h3>Outros Quilombos e Suas Contribuições</h3>
            <img src="{{ asset('images/outros-quilombos.jpg') }}" alt="Representação de diversos quilombos"
                 class="img-fluid imagem-historica">
            <p>Além de Palmares, centenas de outros quilombos existiram por todo o Brasil, cada um com sua história e
                importância. Eles representavam focos de resistência, abrigavam fugitivos e preservavam a cultura
                afro-brasileira em diferentes contextos regionais.</p>
            <ul>
                <li><strong>Quilombo do Campo Grande (Minas Gerais):</strong> Destacou-se no século XVIII pela sua
                    organização e pela resistência à exploração do ouro.
                </li>
                <li><strong>Quilombo do Ambrósio (Minas Gerais):</strong> Ligado à figura lendária de Chico Rei, um
                    africano que teria comprado sua liberdade e a de seu povo.
                </li>
                <li><strong>Quilombo de Jaguaripe (Bahia):</strong> Conhecido por sua forte liderança e pela
                    participação ativa de mulheres na resistência.
                </li>
                <li><strong>Quilombo de Oriximiná (Pará):</strong> Importante comunidade na região amazônica,
                    demonstrando a presença da resistência em diversas partes do Brasil.
                </li>
                <li><strong>Quilombo de Ivaporunduva (São Paulo):</strong> Um dos quilombos mais antigos e que persiste
                    até hoje, lutando pelo reconhecimento de seus direitos.
                </li>
            </ul>
            <p>Cada um desses quilombos, com suas particularidades, contribuiu para a história da resistência negra e
                para a formação da diversidade cultural brasileira.</p>
        </section>

        <section class="secao-historica">
            <h3>A Repressão e a Destruição dos Quilombos</h3>
            <img src="{{ asset('images/repressao-quilombos.jpg') }}" alt="Ilustração da repressão aos quilombos"
                 class="img-fluid imagem-historica">
            <p>A existência dos quilombos representava uma ameaça direta ao sistema escravista e ao poder colonial. Por
                isso, foram alvo constante de expedições militares organizadas pelos senhores de escravos e pelas
                autoridades. A repressão era brutal, com o objetivo de capturar os fugitivos, desmantelar as comunidades
                e infligir punições exemplares para dissuadir novas fugas.</p>
            <p>A destruição de Palmares em 1694-1695, com a morte de Zumbi, marcou um golpe significativo na resistência
                organizada em grande escala. No entanto, a luta não cessou. Quilombos menores continuaram a existir e a
                surgir, demonstrando a persistência do desejo de liberdade.</p>
            <p>A violência utilizada contra os quilombolas era extrema, refletindo a desumanização dos escravizados pelo
                sistema. A captura muitas vezes significava tortura e morte, servindo como um aviso para outros que
                ousassem desafiar a ordem escravista.</p>
        </section>

        <section class="secao-historica">
            <h3>O Legado Duradouro dos Quilombos</h3>
            <img src="{{ asset('images/legado-quilombos.jpg') }}" alt="Imagem representando o legado dos quilombos"
                 class="img-fluid imagem-historica">
            <p>Apesar da repressão e da destruição de muitos quilombos, seu legado é profundo e duradouro na história e
                na cultura brasileira. Os quilombos foram espaços de resistência, de construção de liberdade e de
                preservação da identidade cultural afro-brasileira.</p>
            <p>Eles simbolizam a luta contra a opressão e a busca por autonomia, inspirando movimentos sociais e a luta
                por direitos até os dias atuais. A memória dos líderes quilombolas, como Ganga Zumba e Zumbi, é
                fundamental para a compreensão da história da resistência negra no Brasil.</p>
            <p>A influência cultural dos quilombos é visível na música, na dança, na culinária, nas religiões de matriz
                africana e nas formas de organização comunitária. As comunidades remanescentes de quilombos hoje lutam
                pelo reconhecimento de seus direitos territoriais e pela preservação de seu patrimônio cultural,
                mantendo viva essa importante parte da história do Brasil.</p>
        </section>

        <section class="secao-historica">
            <h3>Os Quilombos na Contemporaneidade</h3>
            <img src="{{ asset('images/quilombos-atuais.jpg') }}" alt="Imagem de uma comunidade quilombola atual"
                 class="img-fluid imagem-historica">
            <p>Na Constituição Federal de 1988, o Brasil reconheceu o direito à propriedade das terras ocupadas pelas
                comunidades remanescentes de quilombos. No entanto, a efetivação desse direito ainda enfrenta desafios
                burocráticos, políticos e sociais.</p>
            <p>As comunidades quilombolas contemporâneas são guardiãs de um rico patrimônio cultural e ambiental. Elas
                desenvolvem práticas sustentáveis de manejo dos recursos naturais e preservam conhecimentos ancestrais
                sobre a biodiversidade. Seu modo de vida comunitário e suas tradições representam uma importante
                contribuição para a diversidade cultural do país.</p>
            <p>A luta das comunidades quilombolas por reconhecimento e direitos continua sendo uma parte importante da
                luta por justiça social e igualdade racial no Brasil.</p>
        </section>
    </main>
@endsection
