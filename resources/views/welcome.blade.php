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
</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">GNNoticias</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">ÚLTIMAS NOTÍCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">BBB 2024</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">NOTÍCIAS DA TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">AUDIÊNCIA DA TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">NOVELAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FAMOSOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""> STREAMING</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container my-5">
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm text-center border-white">
                    <div class="card-header text-center">
                        <div class="float-center">
                            Noticia Quente
                        </div>

                    </div>

                    <div class="card-body">
                        <img src="./img/events/" class="img-fluid w-100 h-auto" alt="" />
                        <h5 class="card-title"></h5>
                        <p class="card-date"></p>
                        <p class="card-text"></p>
                        <a href="/events/" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm text-center border-white">
                    <div class="card-header text-center">
                        <div class="float-center">
                            Noticia Quente
                        </div>

                    </div>

                    <div class="card-body">
                        <img src="./img/events/" class="img-fluid w-100 h-auto" alt="" />
                        <h5 class="card-title"></h5>
                        <p class="card-date"></p>
                        <p class="card-text"></p>
                        <a href="/events/" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm text-center border-white">
                    <div class="card-header text-center">
                        <div class="float-center">
                            Noticia Quente
                        </div>

                    </div>

                    <div class="card-body">
                        <img src="./img/events/" class="img-fluid w-100 h-auto" alt="" />
                        <h5 class="card-title"></h5>
                        <p class="card-date"></p>
                        <p class="card-text"></p>
                        <a href="/events/" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>

        </div>


    </div>

</body>

</html>