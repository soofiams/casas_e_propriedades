<?php

require_once "../required.php";

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if ($form) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if (fazer_login($login, $senha)) {
        header("Location: home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--CSS LOCAL-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container-fluid">
    <header>
        <div>
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Recuperar Senha</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col-auto">
                <br><br>
                <h2>Fazer Login <span class="desc">É necessário fazer login para ter acesso ao sistema.</span></h2>
                <hr>
                <form action="" class="caixa form-login" method="post">
                    <?php if ($form): ?>

                        <p class="bg-danger text-light">Não foi possível fazer o login, tente novamente.</p>
                    <?php endif ?>

                    <label for="login">LOGIN: *</label>
                    <input type="text" name="login" placeholder="Login" required autofocus>
                    <label for="password">PASSWORD: *</label>
                    <input type="password" name="senha" placeholder="Palavra-passe" required>
                    <label for="idioma">IDIOMA: *</label>
                    <select id="idioma" name="idioma">
                        <option>Português</option>
                        <option>Inglês</option>
                    </select>
                    <div class="extra-link">
                        <a href="#">recuperar senha</a>
                    </div>
                    <hr>
                    <button type="submit" class="entrar-btn">Entrar</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <hr>
        <p>
            <b>© 2025 Grupo MediaMaster</b> - Todos os direitos reservados
        </p>
    </footer>
</body>

</html>