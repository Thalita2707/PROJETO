@extends('layouts.quilombola.base')

@section('page-css')
    @vite('resources/css/quilombola/lideres.css')
@endsection

@section('content')
    <main>
        <section class="topico-inicial">
            <h2>PRINCIPAIS LIDERES</h2>
            <div class="d-flex align-items-start gap-3">
                <img src="{{ asset('images/prinlid.jpg') }}" alt="Imagem primaria" class="img-fluid" style="max-width: 300px;">
                <div>
                    <p>Desde os primórdios da colonização do Brasil, a resistência à escravidão se manifestou de diversas formas, sendo uma das mais notáveis a formação de quilombos. Essas comunidades eram formadas por pessoas escravizadas que fugiam das fazendas e engenhos e buscavam construir uma sociedade livre, baseada em valores de solidariedade e autonomia. Os quilombos não apenas representavam uma forma de resistência, mas também preservavam e transmitiam culturas africanas, estabelecendo modos de vida </p>
                    <p>independentes e sustentáveis. A história dos quilombos é marcada por grandes líderes que lutaram bravamente contra a opressão do sistema colonial. Esses homens e mulheres foram fundamentais para a organização e sobrevivência dessas comunidades, enfrentando desafios imensos para garantir a liberdade de seus povos. Alguns deles são lembrados até hoje como símbolos da resistência negra e da luta pela justiça. A seguir, conheça alguns dos principais líderes quilombolas que marcaram a história do Brasil:</p>
                </div>
            </div>
        </section>

        <section class="Ganga">
            <h2 class="titulo01">Ganga Zumba (1630-1678)</h2>
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('images/ganga.jpg') }}" alt="Imagem Ganga" class="img-fluid" style="max-width: 200px;">
                <p class="card-text">Ganga Zumba foi o primeiro grande líder do Quilombo dos Palmares. Acredita-se que tenha sido filho de africanos escravizados trazidos ao Brasil e que tenha escapado ainda jovem, tornando-se um dos principais organizadores da comunidade. Como líder, conseguiu reunir milhares de pessoas e governar Palmares com estrutura própria, garantindo segurança e organização interna.
                    Ele tentou negociar com as autoridades coloniais um tratado que garantiria a liberdade dos habitantes de Palmares em troca da submissão ao governo português. No entanto, essa proposta foi rejeitada por parte da comunidade, principalmente por Zumbi, que não aceitava um acordo que não beneficiasse todos os negros escravizados. Ganga Zumba acabou sendo envenenado por opositores dentro do próprio quilombo em 1678.</p>
            </div>
        </section>

        <section class="Zumbi">
            <h2 class="titulo02">Zumbi dos Palmares (1655-1695)</h2>
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('images/zumbi.jpg') }}" alt="Imagem representando Zumbi" class="img-fluid" style="max-width: 200px;">
                <p>Zumbi dos Palmares é o mais conhecido dos líderes quilombolas. Nascido no Quilombo dos Palmares, foi capturado ainda criança e entregue a um padre missionário, que o batizou e o educou dentro dos costumes europeus. No entanto, ao tomar consciência de sua origem e do sofrimento do seu povo, fugiu aos 15 anos e retornou a Palmares. Com o tempo, tornou-se um grande guerreiro e líder militar, sendo fundamental para a resistência do quilombo contra as investidas das tropas coloniais.
                    Após a morte de Ganga Zumba, Zumbi assumiu o comando de Palmares e se recusou a aceitar qualquer tratado de paz que não garantisse a liberdade de todos os negros escravizados. Lutou por muitos anos, mas foi traído e capturado em 1695. Foi brutalmente assassinado e teve sua cabeça exposta em praça pública para servir de exemplo e tentar desmotivar outros resistentes.</p>
            </div>
        </section>

        <section class="Dandara">
            <h2 class="titulo03">Dandara dos Palmares (1654-1694)</h2>
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('images/dandara.jpg') }}" alt="Imagem Dandara" class="img-fluid" style="max-width: 200px;">
                <p>Dandara foi uma guerreira e líder do Quilombo dos Palmares, reconhecida por sua bravura e inteligência estratégica. Acredita-se que tenha se tornado líder devido à sua coragem e habilidades em combate, participando ativamente da defesa do quilombo contra os ataques das tropas portuguesas. Além de lutar no campo de batalha, Dandara também ajudava na organização da comunidade, incentivando a produção agrícola e promovendo a unidade entre os quilombolas.
                    Quando Palmares foi destruído em 1694, Dandara foi capturada. Recusando-se a voltar à escravidão, preferiu tirar a própria vida, tornando-se um símbolo de resistência e determinação.</p>
            </div>
        </section>

        <section class="O Legado dos Líderes Quilombolas">
            <h2 class="titulo04">O Legado dos Líderes Quilombolas</h2>
            <p>Esses líderes quilombolas representam a força e a coragem de milhares de afro-brasileiros que lutaram contra a escravidão e pela dignidade de seu povo. Seus legados continuam vivos na memória e na cultura brasileira, inspirando a luta por igualdade e justiça social até os dias de hoje. No entanto, eles foram apenas alguns dos muitos líderes quilombolas que marcaram a história do Brasil. Inúmeras outras lideranças surgiram em diferentes partes do país, contribuindo para a resistência e a formação de comunidades livres.
                A preservação da memória dessas figuras históricas é essencial para compreender a luta do povo negro no Brasil e reforçar a importância da resistência contra a opressão. Honrar sua bravura é também reforçar a necessidade de continuar batalhando por uma sociedade mais justa e igualitária.</p>
        </section>
    </main>
@endsection
