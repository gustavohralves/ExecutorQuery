<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Executor de Querys</title>
    <link rel="shortcut icon" href="img/logo-icon-orangeWhite.png" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!--JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <!-- <h3 class="float-md-start mb-0">Executor de Query</h3> -->
                <a href="index.php"><img class="float-md-start mb-0" src="img/logo-icon-orangeWhite.png" alt="Executa"
                        id="icon-page"></a>
                <nav class="nav nav-masthead justify-content-center float-md-end">

                    <!-- DarkMode -->
                    <div class="form-check form-switch nav fw-bold px-3 py-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                    <!--JS DarkMode-->
                    <script src="js/index.js"></script>

                    <a class="nav-link fw-bold py-1 px-0" href="index.php">Executor</a>
                    <!-- <a class="nav-link fw-bold py-1 px-0" href="#">Login</a> -->
                    <!-- <a class="nav-link fw-bold py-1 px-0" href="#">Contato</a> -->
                    <!-- <a class="nav-link fw-bold py-1 px-0" href="#">Contato</a> -->
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="sobre.php">Sobre</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Executor de Querys</h1>
            <br>
            <!-- <form class="d-flex" role="search">
                <textarea name="campo-query" class="form-control" placeholder="Digite ou cole sua query aqui..." id="floatingTextarea2"
                    style="height: 150px"></textarea>
            </form> -->
            <br>

            <p class="lead">O executor de querys foi desenvolvido pelo time de desenvolvimento da Seguralta, com
                objetivo de facilitar o acesso aos dados da empresa. </p>
            <!-- <p class="lead">
                <a href="#" name="executa" id="btn-color" class="btn btn-outline-light btn-lg">Executar</a>
                <a href="#" name="gerar-planilha" id="btn-color" class="btn btn-outline-light btn-lg">Gerar Planilha</a>
            </p> -->
        </main>

        <footer class="mt-auto text-white-50">
            <p><a type="button" id="equipe-dev" data-bs-toggle="modal" data-bs-target="#exampleModal">Equipe de
                    Desenvolvimento - Seguralta.</a></p>
            <!-- <p>© Copyright Seguralta<a href="#" class="text-white"></a>, by <a
                    href="#" class="text-white">@Devs Seguralta</a>.</p> -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: rgb(51, 51, 51);">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #fafafa;">Contato</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="color: #fafafa;">
                            <h5>Para mais informações entre em contato com:</h5>
                            raul.dev@seguralta.com.br<br>gustavo.alves@seguralta.com.br<br>joao.dev@seguralta.com.br
                        </div>
                        <div class="modal-footer">
                            <br>
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>