@extends('layouts.quilombola.base')

@section('page-css')
    @vite('resources/css/quilombola/noticias.css')
@endsection

@section('content')

        <main>
            <div class="container my-5">
                <h3 class="fw-bold mb-4 text-center">NOTÍCIAS</h3>

                <section class="noticia-destaque mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-fluid rounded mb-3" src="{{ asset('images/noticia3.jpg') }}" alt="Notícia Principal">
                            <h2><a href="#" class="text-dark text-decoration-none">No Dia dos Povos Indígenas, celebridades se mobilizam pela demarcação de terras</a></h2>
                            <p class="text-muted mb-2">Segunda-feira, 12 de fevereiro de 2025 - 10:30</p>
                            <p>Campanha "Brasil Indígena, Terra Demarcada" destaca papel dos povos indígenas na preservação ambiental e defende direitos previstos na Constituição internet.</p>
                            <div class="mt-2">
                                <span class="badge bg-warning text-dark me-2">Destaque</span>
                                <span class="badge bg-info text-white me-2">Comunidade</span>
                            </div>
                            <p>Em ação pelo Dia dos Povos Indígenas, neste 19 de abril, a campanha "Brasil Indígena, Terra Demarcada" lança um vídeo mobilizador com participação de Anitta, Juliette, Glória Pires, Marcos Palmeira, Dira Paes, Klebber Toledo e Alejandro Claveaux. Todos os artistas cederam suas imagens gratuitamente.

                                A iniciativa — liderada pela Mídia Indígena, Articulação dos Povos Indígenas do Brasil (Apib), Articulação Nacional das Mulheres Indígenas Guerreiras da Ancestralidade (ANMIGA) e o Instituto Socioambiental (ISA) — reforça a importância da demarcação de Terras Indígenas como medida urgente para proteger o futuro do Brasil.

                                O vídeo ressalta o papel essencial dos povos indígenas na preservação ambiental, sobretudo na proteção de florestas e manutenção das chuvas que viabilizam as atividades agropecuárias. Também destaca que as Terras Indígenas apresentam os menores índices de desmatamento e armazenam quantidades significativas de carbono, sendo estratégicas no combate à crise climática.</p>
                        </div>
                    </div>
                </section>

                <section class="outras-noticias">
                    <h4 class="mb-3">Leia também</h4>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/noticia2.jpg" class="card-img-top') }}" alt="Notícia Mini 1">
                                <div class="card-body">
                                    <h6 class="card-title"><a href="#" class="text-dark text-decoration-none">Abertas inscrições para o processo seletivo quilombola UFPE 2025; 25 vagas em Santa Maria da Boa Vista</a></h6>
                                    <p class="card-text text-muted"><small>Segunda-feira, 12 de fevereiro de 2025 - 10:30</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/image3.jpg" class="card-img-top') }}" alt="Notícia Mini 2">
                                <div class="card-body">
                                    <h6 class="card-title"><a href="#" class="text-dark text-decoration-none">Nota de pesar pelo falecimento de Dona Antônia, liderança histórica do Quilombo Cangume</a></h6>
                                    <p class="card-text text-muted"><small>Quarta-feira, 14 de fevereiro de 2025 - 15:20</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/noticia2.jpg" class="card-img-top') }}" alt="Notícia Mini 3">
                                <div class="card-body">
                                    <h6 class="card-title"><a href="#" class="text-dark text-decoration-none">Abertas inscrições para o processo seletivo quilombola UFPE 2025; 25 vagas em Santa Maria da Boa Vista</a></h6>
                                    <p class="card-text text-muted"><small>Segunda-feira, 12 de fevereiro de 2025 - 10:30</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
@endsection
