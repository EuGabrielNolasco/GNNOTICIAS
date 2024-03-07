<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GNNoticias</title>

    <link rel="icon" href="img/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6i9PqKVYL9SUnD0p3ie5YTVIl5rbo" crossorigin="anonymous">

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        /* Estilo para o navbar */
        .navbar {
            background-color: #E3E3E3;
            /* Azul mais claro */
        }

        /* Estilo para as li do navbar */
        .navbar-nav .nav-item {
            margin-right: 5px;
            /* Adiciona espaço entre as li */
        }

        .navbar-nav .nav-item .nav-link {
            color: #DC143C;
            /* Vermelho mais escuro */
            font-weight: bold;
            /* Define a fonte como mais grossa */
        }

        .custom-navbar {
            background-color: #555;
            /* Cinza */
        }

        .custom-navbar-nav {
            text-align: right;
            /* Centralizar texto no centro */
        }

        .custom-nav-link {
            color: #fff;
            /* Branco */
        }

        .card-body {
            position: relative;
            overflow: hidden;
            /* Impede que o texto ultrapasse a imagem */
        }

        .card-body:hover .img-link {
            filter: brightness(70%);
            transform: scale(1.1);
            /* Ajuste o valor conforme necessário */
            transition: filter 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .card-body:hover .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            transition: background-color 0.3s ease-in-out;
        }

        .card-body .text-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            max-width: 80vw;
            /* Limita a largura do texto */
            padding: 10px;
            box-sizing: border-box;
            /* Garante que o padding não aumente a largura total */
        }

        .card-body .text-container h5,
        .card-body .text-container p {
            margin: 0;
            color: #fff;
            transition: color 0.3s ease-in-out;
        }



        .card-body:hover .text-container h5,
        .card-body:hover .text-container p {
            color: #000;
            transition: color 0.3s ease-in-out;
        }
    </style>
</head>

<body class="antialiased">

    <nav class="custom-navbar navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="d-flex align-items-right justify-content-between" id="custom-navbarNav">
                <div class="custom-navbar-nav">
                    <a class="custom-nav-link nav-link" target="_blank" href="https://github.com/EUGABRIELNOLASCO">GitHub</a>
                </div>
                <a href="https://github.com/EUGABRIELNOLASCO" target="_blank" class="custom-github-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>


            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center my-3">
        <a href="/">
            <x-application-logo class="custom-logo fill-current text-gray-1000" />
        </a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            ÚLTIMAS NOTÍCIAS
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            BBB <?php echo date("Y"); ?>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            NOTÍCIAS DA TV
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AUDIÊNCIA DA TV
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="nav-link dropdown-item" href="#">ESPORTES NA TV</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNovelas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NOVELAS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownNovelas">
                            <li><a class="nav-link dropdown-item" href="#">ELAS POR ELAS</a></li>
                            <li><a class="nav-link dropdown-item" href="#">FUZÚE</a></li>
                            <li><a class="nav-link dropdown-item" href="#">TERRA E PAIXÃO</a></li>
                            <li><a class="nav-link dropdown-item" href="#">MULHERES DA AREIA</a></li>
                            <li><a class="nav-link dropdown-item" href="#">PECADO MORTAL</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            FAMOSOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="nav-link dropdown-item" href="#">MUNDO SERTANEJO</a></li>
                            <li><a class="nav-link dropdown-item" href="#">INFLUENCERS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            STREAMING
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            QUEM SOMOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="nav-link dropdown-item" href="#">CONTATO</a></li>
                            <li><a class="nav-link dropdown-item" href="#">POLÍTICA DE PRIVACIDADE</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm text-center border-white position-relative">
                    <div class="card-body">
                        <a href="/events/" class="position-relative d-inline-block img-link">
                            <img src="./img/card-banner/Ultimas-Noticias/2.jpg" class="img-fluid w-100 h-auto" alt="" />
                            <div class="overlay"></div>
                            <div class="position-absolute bottom-0 start-0 p-3 text-container">
                                <h5 class="mb-0 text-white bg-danger d-inline-block">Vem Mais Temporadas?</h5>
                                <p class="mb-0 text-black bg-white d-inline-block">Filho do gaustão relata e expõe como ficou sua saude depois de varias cirurgias </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ... (outros cards) ... -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm text-center border-white position-relative">
                    <div class="card-body">
                        <a href="/events/" class="position-relative d-inline-block img-link">
                            <img src="./img/card-banner/Ultimas-Noticias/2.jpg" class="img-fluid w-100 h-auto" alt="" />
                            <div class="overlay"></div>
                            <div class="position-absolute bottom-0 start-0 p-3 text-container">
                                <h5 class="mb-0 text-white bg-danger d-inline-block">Vem Mais Temporadas?</h5>
                                <p class="mb-0 text-black bg-white d-inline-block">Filho do gaustão relata e expõe como ficou sua saude depois de varias cirurgias </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>