<?php

require_once "../required.php";

verificar_logado();

$projetos = get_projetos();

if (!empty($_POST)) {
    $nome = $_POST["nome"];
    $subtitulo = $_POST["subtitulo"];
    $conteudo = $_POST["conteudo"];
    $acabamentos = $_POST["Acabamentos"];
    $plantas = $_POST["plantas"];
    $posicao = intval($_POST["posicao"])?? 1;
    $mostrar = intval($_POST["mostrar"]?? 1);

    idu_sql("INSERT INTO projetos_comercializacao (nome, subtitulo, conteudo, Acabamentos, plantas, posicao, mostrar) 
           VALUES ('$nome', '$subtitulo', '$conteudo', '$acabamentos', '$plantas', $posicao,  $mostrar )");
    header("Location: projetos.php");
}



?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- LOCAL CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- TINYMCE -->
  <script src="../public/js/tinymce/tinymce.min.js"></script>
  <script src="../public/js/difere.js"></script>

    <!-- LOCAL JS -->
    <script src="../public/js/funcoes.js"></script>

</head>

<body class="container-fluid">
    <header>

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="carrossel.php">
                                    Cabeçalho
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="empresas.php">
                                    Empresas
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown">
                                    Projetos

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="projetos.php">Projetos em Comercialização</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="tipos.php">Tipos de Fogo</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="destaques.php">Destaques (home)</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portefolio.php">
                                    Portefólio
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Configuração
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contactos.php">Contactos</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item" href="senha.php">Alterar a palavra-passe</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item" href="extras.php">Extras</a>
                                    </li>
                            </li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gestor.php">
                                Gestor de Ficheiros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                        </li>
                        </ul>
                    </div>

            </nav>
    </header>


    <main>
        <div class="row">
            <div class="col-4">
                <br><br>
                <h2>Projetos <span class="desc">Inserir novo Projeto.</span></h2>
                <hr>
                <a href="projetos.php">Fechar</a>

                <form method="post" class="caixa form-login">

                    <label for="titulo">Título:</label>
                    <input type="text"  name="nome">

                    <label for="subtitulo">Subtítulo:</label>
                    <input type="text" name="subtitulo">

                    <label for="texto">Conteúdo:</label>
                    <input type="text" name="conteudo">

                    <label for="posicao">Posição:</label>
                    <input type="number"  name="posicao" min="1" required>

                    <label for="ativo">Ativo:</label>
                    <select name="mostrar">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                    <label for="texto">Acabamentos:</label>
                    <textarea type="text" name="Acabamentos"></textarea>

                    <label for="texto">Plantas:</label>
                    <textarea type="text" name="plantas"></textarea>
                    <hr>
                    <p>
                        <a href="projetos.php"> <button type="button" class="sair-btn">Cancelar</button></a>
                        <button type="submit" class="entrar-btn">Guardar</button>
                    </p>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="row">
            <div class="col-12">
                <hr>
                <p>
                    <b>© 2025 Grupo MediaMaster</b> - Todos os direitos reservados
                </p>
            </div>
        </div>
    </footer>
</body>

</html>