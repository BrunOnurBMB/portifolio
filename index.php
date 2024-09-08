<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Portifólio</title>
</head>

<body>
    <main class="container-fluid">
        <header class=" row align-itens-center mb-lg-5 mb-md-5 mb-sm-5">
            <nav class="navbar navbar-dark bg-dark fixed-top mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a aria-label="Acessa o inicio da pagina" class="nav-link active"
                                        aria-current="page" href="#imgPerfil">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-label="Acessa a sessão sobre" class="nav-link" href="#sobre">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-label="Acessa a sessão projetos" class="nav-link"
                                        href="#projetos">Projetos</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-label="Acessa a sessão contato" class="nav-link" href="#contato">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-label="Acessa o blog" class="nav-link" href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div aria-hidden="true" id="imgPerfil"
                class=" d-flex justify-content-lg-end justify-content-md-end justify-content-sm-center col-lg-4 col-md-4 col-sm-12 mt-lg-5 pt-lg-3 mt-md-5 pt-md-5 mt-sm-5 pt-sm-5">
                <img class="img-fluid mt-5" src="./Assets/profile-pic.webp"
                    alt="Homem jovem de cabelos castanhos clastos, branco, com barba e de moleton azul.">
            </div>
            <article id="home"
                class="col-lg-7 col-md-7 col-sm-12 mt-lg-5 pt-lg-5 mt-md-5 pt-md-5 mt-sm-5 pt-sm-5">
                <div class="mt-3 ">
                    <h2 class="mt-5">Olá!!</h2>
                    <p class="mt-3">
                        Sou Bruno e estou me candidatando a desenvolvedor de software
                    </p>
                    <p>
                        Seja Bem vindo!!
                    </p>
                </div>
            </article>
        </header>
        <aside class="row d-flex align-items-center">
            <div class="listaContatosAsideTOP col-lg-5 col-md-5 col-sm-12">
                <ul class="d-flex ">
                    <li class="mt-5 ">
                        <a aria-label="começa uma conversa com o Bruno, propretario deste site"
                            href="https://web.whatsapp.com/send?phone=553511910184807" target="_blank">
                            <img class="wpp img-fluid" src="./Assets/wpp.webp" alt="imagem referente ao whats app">
                        </a>
                    </li>
                    <li class="mt-5 pr-3 ml-3 ">
                        <a aria-label="Acessa a sessão do linkedin do Bruno"
                            href="https://www.linkedin.com/in/bruno-silveira-496705293/" target="_blank">
                            <img class="linkedin img-fluid" src="./Assets/Linkedin.webp"
                                alt="imagem referente ao linkedin">
                        </a>
                    </li>
                    <li class="mt-5">
                        <a aria-label="Acessa a sessão do GitHub do Bruno" href="https://github.com/BrunOnurBMB"
                            target="_blank">
                            <img class="github img-fluid" src="./Assets/GitHub.webp" alt="imagem referente ao GitHub">
                        </a>
                    </li>
                </ul>
            </div>
            <div aria-hidden="true" class="col-lg-7 col-md-7 col-sm-12 d-flex align-items-center">
                <img class="animandoImagem img-fluid d-flex align-items-end" src="./Assets/maozinha.webp"
                    alt="uma imagem de um abte braço com formas geometricas para ilistração da pagina. ">
            </div>
        </aside>
        <section aria-labelledby="sectionSobre" class="sectionSobre row">
            <div id="sobre"
                class="animandoTexto d-flex flex-column justify-content-center text-center col-lg-8 col-md-8 col-sm-12">
                <h1 id="sectionSobre" class="mb-5 text-uppercase">
                    Um pouco da minha jornada para me tornar desenvolvedor de software
                </h1>
                <p>
                    Estou me graduando na Fatec de São Roque no curso tecnologo de desenvolvimento de sistemas para web.
                </p>
                <p>
                    Ingressei nesse curso após um periodo me aventurando no ramo da gastronomia e depois de algumas
                    experiencias resolvi migrar para programação.
                </p>
                <p>
                    Comecei a estudar em 2020, matando algumas curiosidades com html e css. A vida foi acontecendo...
                </p>
                <p>
                    Em 2023 ingressei no curso da Fatec e comecei realmente a me desenvolver como programador.
                </p>
                <p>
                    Esse curso me capacita a desenvolver sites, aplicativos e softwares para empresas com conhecimentos
                    de DevOps, engenharia de software, paginas dinamicas e acessiveis.
                </p>
                <p>
                    Tenho uma base de PHP. Conhecimento em HTML5 para produzir paginas semânticas e acessiveis. CSS e
                    Botstrap para design responsivo. JS para deixar dinâmico
                </p>
                <p>
                    Estudo SQL server, Java, Google Cloud, dentre outros assuntos.
                </p>
                <p>
                    Tenho muito o que estudar ainda e sei que não havera pausa nos estudo seguindo essa carreira, isso é
                    um dos motivos para seguir essa carreira.
                </p>
                <p>
                    Sinto hoje que eu estou capacitado a me candidatar para as vagas na área, então, a você que leu até
                    aqui, te garanto que de minha parte será entregue o meu melhor.
                </p>
                <p>
                    Hoje busco uma oportunidade para ingressar no mercado.
                </p>
            </div>
            <aside aria-hidden="true" class="asideSobre col-lg-4 col-md-4 col-sm-12">
                <img class="img-fluid" src="./Assets/sobre.webp"
                    alt="imagem em 3D onde um homem boneco representando um ser humano esta em cima de um notbook, da para entender que ele está mexendo em configurações. Ao lado do boneco e do notbook tem uma xicara de café.">
            </aside>
        </section>
        <section aria-labelledby="Projetos-h1" id="projetos" class="row mt-5 pt-5">">
            <div class="d-flex justify-content-center col-12">
                <h2 id="Projetos-h1" class="mb-5 ">Projetos:</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex text-center">
                <div class="card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="" >
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <button tabindex="0" id="btnAtivar">
                    Ver Mais
                </button>
            </div>
            <div role="tabpanel" id="conteudoProjetosDois" class="col-12 d-flex text-center">
                <div id="card1" class="cardAnimacao card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
                <div id="card2" class="cardAnimacao card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
                <div id="card3" class="cardAnimacao card">
                    <img class="img-fluid" src="https://placehold.co/256x150" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Projeto X</h5>
                        <p class="car-text m-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btnAcessar btn btn-primary">Veja mais</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="row mt-5 pt-5">
            <div aria-hidden="true" class="col-lg-4 col-md-4 col-sm-12">
                <img class="img-fluid" src="./Assets/contato01.webp"
                    alt="imagem em 3D onde um homem de camiseta vermelha, calça azul e tênis vermelhos está sentado em uma cadeira azul trabalhando no computador. Acima da tela do computador é possivel cer alguns balões representando linguagens de programação, estilo e de marcação de hiper texto. ">
            </div>
            <div id="contato" class="col-le-4 col-md-4 col-sm-12 text-center">
                <h2>Bora trabalhar juntos</h2>
                <div class="boratrabalharJuntos">
                    <ul>
                        <li>
                            <a class="githubDois" href="https://github.com/BrunOnurBMB" target="_blank">
                                <img src="./Assets/github_logo.webp" alt="imagem referente ao GitHub">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/bruno-silveira-496705293/" target="_blank">
                                <img src="./Assets/Linkedin.webp" alt="Imagem referente ao Linkedin">
                            </a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/send?phone=553511910184807" target="_blank">
                                <img src="./Assets/wpp.webp" alt="Imagem referente ao Whats app">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div aria-hidden="true" class="col-lg-4 col-md-4 col-sm-12">
                <img class="img-fluid" src="./Assets/contato02.webp"
                    alt="Homem de cabelos castanhos, branco, com uma barba bem feita de camiseta branca e sorrindo.">
            </div>
            <div class="footer col-12 p-3">
                <p class="conteudoRodaPe">
                    &copy; Bruno Silveria Mello Bifano.
                </p>
            </div>
        </footer>
    </main>
    <?php

    ?>
    <script src="./script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>