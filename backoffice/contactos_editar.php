<?php

require_once "../required.php";

verificar_logado();

$id = !empty($_GET["id"]) ? intval($_GET["id"]) : 0;
$ce = select_sql_unico("SELECT * FROM contactos");

$form = !empty($_POST["morada"]) && !empty($_POST["telefone"]) && !empty($_POST["email_interno"])&& !empty($_POST["email"]) && !empty($_POST["facebook"]);
if ($form) {
  $morada = $_POST["morada"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $facebook = $_POST["facebook"];
  $email_i = $_POST["email_interno"];

  idu_sql("UPDATE contactos SET morada='$morada',telefone='$telefone',facebook='$facebook',email='$email',email_interno='$email_i' WHERE id=$id");
  header("Location: contactos.php");
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
        <h2>Contactos <span class="desc">Edição de contactos.</span></h2>
        <hr>
        <a href="contactos.php">Fechar</a>

        <form action="" class="caixa form-login" method="post">
          <label for="morada">Morada: *</label>
          <input type="text" value="<?= $ce["morada"] ?>" name="morada" placeholder="Morada" required>
          <label for="telefone">Telefone: *</label>
          <input type="text" value="<?= $ce["telefone"] ?>" name="telefone" placeholder="Telefone" required>
          <label for="email">Email: *</label>
          <input type="email" value="<?= $ce["email"] ?>" name="email" placeholder="E-mail" required>
          <label for="email">Email de Formulário: *</label>
          <input type="email" value="<?= $ce["email_interno"] ?>" name="email_interno" placeholder="E-mail Formulário" required>
          <label for="facebook">Facebook: *</label>
          <input type="url" value="<?= $ce["facebook"] ?>" name="facebook" placeholder="Link Facebook" required>
          <a href="contactos.php">Fechar</a>
          <hr>
          <p>
            <a href="contactos.php"> <button type="button" class="sair-btn">Cancelar</button></a>
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