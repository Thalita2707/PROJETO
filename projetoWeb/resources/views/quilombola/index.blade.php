@extends('layouts.quilombola.base')

@section('content')
    <main>
        <section>
            <img src="imagem/capa.jpg" alt="Capa do site" width="1520" height="auto">
        </section>

        <section id="sobre" class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">

                    <img class="img-fluid" src="imagem/image1.jpg" alt="Image1">
                    <img class="img-fluid mt-3" src="imagem/image2.jpg" alt="Imagem 2">

                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">PARA QUE ESTAMOS AQUI?</h2>
                    <p>
                        O projeto Quilombos: Um Caminho para o Conhecimento Afro-brasileiro
                        tem como objetivo promover a valorização e a disseminação da rica e
                        significativa cultura afro-brasileira, essencial para compreender nossa
                        história e identidade. Neste site, você encontrará informações detalhadas
                        sobre fatos históricos pouco conhecidos, conteúdos relevantes, peças
                        históricas de grande valor, além de dados sobre a localização e a
                        realidade atual das populações quilombolas. Tudo foi elaborado para tornar
                        o aprendizado mais acessível e envolvente.
                        <strong><a href="{{route('sobre')}}" style="text-decoration:none; color: #000000;">Saiba mais e
                                descubra!</a></strong>
                    </p>
                </div>
            </div>
        </section>

        <section id="temas" class="container my-5">
            <div class="row text-center">
                <div class="col-md-2 d-flex flex-column align-items-center">
                    <a href="{{route('cultura')}}">
                        <img class="img-fluid" src="imagem/cultura.jpg" alt="Cultura">
                        <p class="mt-2">Cultura</p>
                    </a>
                </div>

                <div class="col-md-2 d-flex flex-column align-items-center">
                    <a href="{{route('lideres')}}">
                        <img class="img-fluid" src="imagem/lideres.jpg" alt="Líderes">
                        <p class="mt-2">Principais líderes</p>
                    </a>
                </div>

                <div class="col-md-2 d-flex flex-column align-items-center">
                    <a href="{{route('ondeestao')}}">
                        <img class="img-fluid" src="imagem/localicao.jpg" alt="Localização">
                        <p class="mt-2">Onde estão?</p>
                    </a>
                </div>

                <div class="col-md-2 d-flex flex-column align-items-center">
                    <a href="{{route('economia')}}">
                        <img class="img-fluid" src="imagem/economia.jpg" alt="Economia">
                        <p class="mt-2">Economia</p>
                    </a>
                </div>

                <div class="col-md-2 d-flex flex-column align-items-center">
                    <a href="{{route('lutasdireitos')}}">
                        <img class="img-fluid" src="imagem/direitos.jpg" alt="Direitos">
                        <p class="mt-2">Lutas e direitos</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="noticias" class="container my-5">
            <h3 class="fw-bold text-center">NOTÍCIAS E REPORTAGENS</h3>
            <p class="text-center text-muted">Fique por dentro das últimas notícias e eventos.</p>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="imagem/noticia1.jpg" alt="Notícia 1">
                    <h5 class="mt-2">Jovem de comunidade quilombola consegue bolsa de estudos de mais de R$ 2 milhões em
                        universidade dos EUA</h5>
                    <p>Jean Pereira dos Santos, de 19 anos, vai cursas educação e política social a partir de agosto.
                        Ele vai
                        estudar na Northwestern University.</p>
                    <p class="text-muted">Sábado, 10 de fevereiro de 2025 - 07:45</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="imagem/noticia2.jpg" alt="Notícia 2">
                    <h5 class="mt-2">Abertas inscrições para o processo seletivo quilombola UFPE 2025; 25 vagas em Santa
                        Maria
                        da Boa Vista</h5>
                    <p>As inscrições estão abertas até o dia 28 de janeiro e podem ser realizadas pela internet.</p>
                    <p class="text-muted">Segunda-feira, 12 de fevereiro de 2025 - 10:30</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="imagem/image3.jpg" alt="Notícia 3">
                    <h5 class="mt-2">Nota de pesar pelo falecimento de Dona Antônia, liderança histórica do Quilombo
                        Cangume.</h5>
                    <p>Antônia Gonçalves de Pontes tinha 91 anos e deixa um legado de compromisso e dedicação à luta
                        quilombola</p>
                    <p class="text-muted">Quarta-feira, 14 de fevereiro de 2025 - 15:20</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="imagem/noticia4.jpg" alt="Notícia 4">
                    <h5 class="mt-2">Comunicação indígena será decisiva para enfrentar mudanças climáticas em 2025</h5>
                    <p>Capazes de conectar saberes ancestrais e práticas decisivas para a preservação da floresta,
                        comunicadores
                        indígenas terão papel crucial nos espaços de decisão a respeito do clima</p>
                    <p class="text-muted">Sexta-feira, 16 de fevereiro de 2025 - 08:00</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="noticias.blade.php" class="btn btn-outline-primary">Saiba Mais</a>
            </div>
        </section>

        <section id="estudo">
            <h3 class="fw-bold text-center">Quer estudar mais sobre? De uma olhada aqui!</h3>
            <div class="container1">
                <div class="card"><a
                        href="https://www.amazon.com.br/Quilombos-Resist%C3%AAncia-Escravismo-Cl%C3%B3vis-Moura/dp/6558910012/ref=asc_df_6558910012?mcid=2ccf3e8343b5363ea1adee6185247fa0&tag=googleshopp00-20&linkCode=df0&hvadid=709857900429&hvpos=&hvnetw=g&hvrand=18135850585347487617&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031755&hvtargid=pla-1184582314260&psc=1&language=pt_BR&gad_source=1"><img
                            src="imagem/livro1.png" alt="">
                        <p>Quilombos Resistência</p></a></div>

                <div class="card"><a
                        href="https://www.estantevirtual.com.br/livro/palmares-a-guerra-dos-escravos-HYH-7590-000?campaign=ev&gad_source=4&gbraid=0AAAAADteek1Cl22m-vTnMTLRlNJYo_UUu&gclid=CjwKCAjwwqfABhBcEiwAZJjC3vnOH-Fn326FI5TbitaOx7tyOZz7s0HbxkrSWUT86mlGvQMgaMbWSRoC6PQQAvD_BwE"><img
                            src="imagem/Livro2.jpg" alt="">
                        <p>Palmares: A Guerra dos Escravos</p></a></div>

                <div class="card"><a
                        href="https://www.amazon.com.br/QUILOMBOS-REBELI%C3%83O-NEGRA-CL%C3%93VIS-MOURA/dp/6588586175"><img
                            src="imagem/Livro3.jpg" alt="">
                        <p>Os Quilombos e a Rebelião Negra</p></a></div>

                <div class="card"><a
                        href="https://www.amazon.com.br/Mulheres-quilombolas-territ%C3%B3rios-exist%C3%AAncias-femininas/dp/6587113184?source=ps-sl-shoppingads-lpcontext&ref_=fplfs&psc=1&smid=A1X6I9A8LS2X8V"><img
                            src="imagem/livro4.jpg" alt="">
                        <p>Mulheres Quilombolas: Luta por Direitos</p></a></div>

                <div class="card"><a
                        href="https://www.amazon.com.br/Educa%C3%A7%C3%A3o-quilombola-Territorialidades-saberes-direitos/dp/6587113745?source=ps-sl-shoppingads-lpcontext&ref_=fplfs&psc=1&smid=A1ZZFT5FULY4LN"><img
                            src="imagem/Livrro5.jpg" alt="">
                        <p>Educação Quilombola</p></a>
                </div>
            </div>
        </section>
    </main>
@endsection
