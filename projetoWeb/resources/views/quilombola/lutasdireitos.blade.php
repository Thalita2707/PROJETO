@extends('layouts.quilombola.base')

@section('page-css')
    @vite('resources/css/quilombola/lutasdireitos.css')
@endsection

@section('content')

    <main class="container my-4">
        <section class="topico-principal mb-4">
            <h2>Lutas e Direitos: a resistência quilombola que constrói o Brasil</h2>
            <p>As comunidades quilombolas constituem uma parte essencial da base cultural, social e histórica do Brasil. Formadas majoritariamente por descendentes de africanos escravizados que resistiram à opressão e buscaram liberdade, essas comunidades representam um legado vivo de luta, resiliência e identidade coletiva. Seus modos de vida, saberes ancestrais, práticas espirituais, culinárias, formas de organização social e relação com a terra são expressões autênticas de uma herança africana que, apesar das adversidades, permanece viva e pulsante no território brasileiro.
            Essas comunidades não apenas preservam tradições seculares, mas também contribuem ativamente para a diversidade cultural do país. Através de suas festas, danças, músicas, religiões e formas próprias de organização, os quilombolas mantêm viva uma memória histórica muitas vezes silenciada pelos discursos oficiais.
            Apesar dos avanços legais e institucionais no reconhecimento de seus direitos – como a titulação das terras tradicionais e o acesso a políticas públicas específicas –, os desafios ainda são muitos. A exclusão social, o racismo estrutural, a violência no campo e a dificuldade de acesso a serviços básicos, como saúde, educação e infraestrutura, continuam sendo obstáculos significativos para a garantia plena da cidadania quilombola.
            Assim, reconhecer e valorizar as comunidades quilombolas não é apenas um ato de justiça histórica, mas também uma forma de fortalecer a democracia, a diversidade e o compromisso com um país mais inclusivo e equitativo..</p>
        </section>

        <section class="Lutaterra">
            <h2 class="titulo01">A Luta pela Terra</h2>
            <div class="card-horizontal">
                <img src="imagem/a1.jpg" alt="Imagem Ganga">
                <p class="card-text">
                    A posse e a regularização das terras quilombolas são direitos garantidos pela Constituição Federal de 1988, que reconhece a importância histórica e cultural dessas comunidades na formação do Brasil. Além disso, a Lei nº 4.887/2003 regulamenta o procedimento de identificação, reconhecimento, delimitação, demarcação e titulação das terras ocupadas por remanescentes das comunidades dos quilombos, assegurando o direito à propriedade coletiva dessas áreas.
                    Apesar desse amparo legal, o processo de titulação enfrenta diversos obstáculos. A burocracia estatal, marcada por trâmites lentos e falta de estrutura técnica, dificulta o avanço dos processos. Soma-se a isso a crescente especulação imobiliária e os interesses do agronegócio, que frequentemente pressionam pela ocupação e exploração econômica dessas terras, muitas vezes em detrimento dos direitos das comunidades tradicionais.
                    Como consequência, muitas comunidades quilombolas vivem sob constante ameaça de despejo, violência e insegurança jurídica. Essas populações, que há gerações ocupam e cuidam desses territórios, enfrentam desafios diários para garantir sua permanência e preservar seus modos de vida, culturas e tradições.
                    Se você deseja entender mais sobre essa importante questão, pode acessar o texto completo da Lei nº 4.887/2003 no site do Planalto. Além disso, é possível acompanhar as ações do INCRA (Instituto Nacional de Colonização e Reforma Agrária), órgão responsável pela condução dos processos de titulação e pela promoção da justiça fundiária para os quilombolas.
                </p>
            </div>
        </section>

        <section class="Desafisocial">
            <h2 class="titulo02">Desafios Sociais e Resistência</h2>
            <div class="card-horizontal">
                <img src="imagem/a2.jpeg" alt="Imagem representando Zumbi">
                <p class="card-text">
                    Além da histórica luta pela posse e regularização de suas terras, as comunidades quilombolas enfrentam diversos desafios no cotidiano, especialmente no acesso a direitos básicos como educação, saúde, saneamento e infraestrutura. Muitas dessas comunidades vivem em áreas remotas ou negligenciadas pelo poder público, enfrentando condições precárias de moradia e exclusão de políticas que considerem suas especificidades culturais e territoriais.
                    Apesar de todos esses obstáculos, a resistência quilombola continua firme e inspiradora. O movimento quilombola tem acumulado conquistas significativas, especialmente no campo da valorização cultural e da educação. Iniciativas como a implementação de escolas com currículo afrocentrado têm buscado garantir uma educação que respeite e fortaleça a história, os saberes e a identidade das comunidades, rompendo com modelos eurocêntricos que historicamente invisibilizaram essas populações.
                    Além disso, práticas como a agroecologia e o turismo de base comunitária vêm se consolidando como alternativas sustentáveis de geração de renda, preservação ambiental e fortalecimento da autonomia quilombola. Esses modelos de desenvolvimento respeitam os modos de vida tradicionais, promovem o protagonismo comunitário e oferecem novas possibilidades para a construção de um futuro mais justo e solidário.
                    As comunidades quilombolas, com sua força coletiva e organização, continuam sendo símbolo de resistência e de esperança na construção de um Brasil mais igualitário, plural e comprometido com a justiça social.
                </p>
            </div>
        </section>

        <section class="Apoio">
            <h2 class="titulo03">Como Apoiar e se Informar</h2>
            <div class="card-horizontal">
                <img src="imagem/a3.jpg" alt="Imagem Ganga">
                <div class="card-text">
                    <p>Se você deseja se aprofundar na luta quilombola e contribuir com essa causa tão importante, há diversas iniciativas e organizações que podem te orientar e apoiar:</p> <ul> <li><strong>CONAQ</strong> — Coordenação Nacional de Articulação das Comunidades Negras Rurais Quilombolas. Acesse: <a href="https://conaq.org.br/" target="_blank">www.conaq.org.br</a></li> <li><strong>Observatório Quilombola</strong> — Portal dedicado à divulgação de dados, análises e informações relevantes sobre as comunidades quilombolas no Brasil.</li> <li><strong>Petições online</strong> — Plataformas como a Change.org frequentemente reúnem campanhas em defesa dos direitos dos quilombolas. Assinar e divulgar é uma forma de apoio.</li> <li><strong>Redes sociais</strong> — Acompanhe ativistas, pesquisadores e coletivos negros que dão visibilidade à causa quilombola e compartilham informações atualizadas.</li> </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
