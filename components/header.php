<?php
require_once "required.php";

$contactos = get_contactos();
$variasempresas = get_empresas_nav();
$osprojetos = get_projetos_nav();
$oportefolio = get_portefolio_nav();
$carrossel = get_carousel();

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas & Propriedades</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--FONTES-->
    <link rel="stylesheet" href="public/fontes/fontes.css">
    <!--CSS LOCAL-->
    <link rel="stylesheet" href="public/css/style.css">
    <!--JS LOCAL-->
    <script src="public/js/funcoes.js"></script>
    <script>
        var menu_atual = "<?= $menu_atual ?>";
    </script>
    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header class="container-fluid">
        <div class="row my-3">
            <div class="col-12 px-0 text-center d-flex justify-content-center gap-3" id="inicio">
                <img class="logo" src="imagens - cópia/logo.svg">
                <nav class="navbar  navbar-dark d-block d-md-none" id="nav_mobile">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 p-0 mb-md-0 w-100 justify-content-center text-start">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "home") ? "active" : "" ?>" href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= ($menu_atual == "empresas" || $menu_atual == "historial" || $menu_atual == "filosofia") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown">
                                        Empresas

                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($variasempresas as $e): ?>
                                            <li><a class="dropdown-item" href="empresas.php?id=<?= $e["id"] ?>"><?= $e["titulo"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= ($menu_atual == "projetos" || $menu_atual == "terraço_almada" || $menu_atual == "jardim_braga") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown">
                                        Projetos em Comercialização

                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($osprojetos as $p): ?>
                                            <li><a class="dropdown-item" href="projetos.php?id=<?= $p["id"] ?>"><?= $p["nome"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= ($menu_atual == "portefolio" || $menu_atual == "portefolio_almada" || $menu_atual == "potefolio_sesimbra" || $menu_atual == "potefolio_braga" || $menu_atual == "potefolio_lisboa" || $menu_atual == "potefolio_porto") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown">
                                        Portefólio

                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($oportefolio as $por): ?>
                                            <li><a class="dropdown-item" href="portefolio.php?id=<?= $por["id"] ?>"><?= $por["nome"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "contactos") ? "active" : "" ?>" href="contactos.php">
                                        Contactos

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Desktop Navbar -->
        <div class="row d-none d-md-block" id="nav-header">
            <div class="col-8 px-0 m-auto">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <div class="container-fluid justify-content-between">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContentDesktop" aria-controls="navbarSupportedContentDesktop"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContentDesktop">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0 w-100 justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "home") ? "active" : "" ?>" href="index.php">
                                        HOME
                                        <span class="linha-vermelha-link"></span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="menu_empresas" class="nav-link dropdown-toggle <?= ($menu_atual == "empresas" || $menu_atual == "historial" || $menu_atual == "filosofia") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown" data-dropdown="empresas">
                                        EMPRESAS
                                        <span class="linha-vermelha-link"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($variasempresas as $e): ?>
                                            <li><a class="dropdown-item" href="empresas.php?id=<?= $e["id"] ?>"><?= $e["titulo"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="menu_projetos" class="nav-link dropdown-toggle <?= ($menu_atual == "projetos" || $menu_atual == "terraço_almada" || $menu_atual == "jardim_braga") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown" data-dropdown="projetos">
                                        PROJETOS EM COMERCIALIZAÇÃO
                                        <span class="linha-vermelha-link"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($osprojetos as $p): ?>
                                            <li><a class="dropdown-item" href="projetos.php?id=<?= $p["id"] ?>"><?= $p["nome"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="menu_portefolio" class="nav-link dropdown-toggle <?= ($menu_atual == "portefolio" || $menu_atual == "portefolio_almada" || $menu_atual == "potefolio_sesimbra" || $menu_atual == "potefolio_braga" || $menu_atual == "potefolio_lisboa" || $menu_atual == "potefolio_porto") ? "active" : "" ?>" href="#" data-bs-toggle="dropdown" data-dropdown="portefolio">
                                        PORTEFÓLIO
                                        <span class="linha-vermelha-link"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($oportefolio as $por): ?>
                                            <li><a class="dropdown-item" href="portefolio.php?id=<?= $por["id"] ?>"><?= $por["nome"] ?> <?= $por["localidade"] ?></a></li>
                                            <hr style="margin: 0px; padding:0px; color:white">
                                        <?php endforeach ?>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "contactos") ? "active" : "" ?>" href="contactos.php">
                                        CONTACTOS
                                        <span class="linha-vermelha-link"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div id="home" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($carrossel as $i => $c): ?>
                            <div class="carousel-item <?= ($i == 0) ? 'active' : '' ?>">
                                <img src="<?= $c["imagens"] ?>" class="d-block w-100" alt="Banner <?= $i + 1 ?>">
                                <div class="carousel-caption text-end">
                                    <h1 class="titulo1"><?= $c["titulo"] ?></h1>
                                    <div class="linha-vermelha-titulo"></div>
                                    <h2 class="texto"><?= $c["texto"] ?></h2>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </header>