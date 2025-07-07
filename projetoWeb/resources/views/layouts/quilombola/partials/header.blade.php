<header class="py-3" style="background-color: #FD7E14;">
    <div class="container d-flex align-items-center justify-content-between flex-wrap">

        <div class="d-flex align-items-center border-end pe-4" style="border-color: #743B0B;">
            <a href="{{route('home')}}" class="text-decoration-none">
                <img src="imagem/logoprojeto.png" alt="Logo do projeto" width="100" class="img-fluid me-3">
            </a>
            <div>
                <h4 class="mb-0 fw-bold" style="color: #743B0B;"><a href="{{route('home')}}"
                                                                    class="text-decoration-none text-reset">Quilombo
                        Digital</a></h4>
                <small style="color: #743B0B;">Projeto de comunicação comunitária</small>
            </div>
        </div>

        <div class="flex-grow-1 ms-4">
            <hr class="my-1" style="border-top: 3px solid white;">
            <nav class="d-flex gap-4 mt-2 flex-wrap">
                <a href="{{route('home')}}" class="fw-bold text-dark text-decoration-none">Início</a>
                <a href="{{route('home')}}#sobre" class="fw-bold text-dark text-decoration-none">Sobre</a>
                <a href="{{route('home')}}#noticias" class="fw-bold text-dark text-decoration-none">Notícias</a>
                <a href="{{route('home')}}#estudo" class="fw-bold text-dark text-decoration-none">Estudo</a>
                <a href="{{route('home')}}#contato" class="fw-bold text-dark text-decoration-none">Contato</a>
                <a href="{{route('historia')}}" class="fw-bold text-dark text-decoration-none">História</a>
                <a href="https://pt.quizur.com/trivia/teste-quilombola-1pHjw"
                   class="fw-bold text-dark text-decoration-none">Venha testar o seu conhecimento!</a>
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
