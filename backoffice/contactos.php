<?php

require_once "../required.php";

verificar_logado();

$contactos = [get_contactos()];

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
  <main class="container my-5">

    <div class="row">
      <div class="col-6">
        <h2>Extras do Site <span class="desc">Listagem de todos os extras</span></h2>
        <hr>
      </div>

      <div class="row mt-5">
        <div class="col-12">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>MORADA</th>
                <th>TELEFONE</th>
                <th>EMAIL</th>
                <th>FACEBOOK</th>
                <th>EMAIL INTERNO</th>
                <th>AÇÕES</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($contactos as $c): ?>

                <tr>
                  <td><?= $c["id"] ?></td>
                  <td><?= $c["morada"] ?></td>
                  <td><?= $c["telefone"] ?></td>
                  <td><?= $c["email"] ?></td>
                  <td><?= $c["facebook"] ?></td>
                  <td><?= $c["email_interno"] ?></td>
                  <td>
                    <div class="d-flex gap-3 w-100 h-100 justify-content-center">
                      <a href="contactos_editar.php?id=<?= $c["id"] ?>">Editar</a>
                    </div>
                  </td>
                </tr>

              <?php endforeach ?>
            </tbody>
          </table>

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