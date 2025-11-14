<?php
require_once "required.php";
$form = !empty($_POST["nome"]) && !empty($_POST["telefone"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"]);
if ($form) {


  $g_recaptcha_response = $_POST["g-recaptcha-response"];
  $chave_secreta = "6LfYgMYrAAAAADYxKPF_w2ZQ26Re1foNpV7lEXmm";
  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chave_secreta&response=$g_recaptcha_response");
  $google = json_decode($resposta);

  if ($google->success) {

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mensagem_final = "
      - Nome: $nome
      - Telefone: $telefone
      - E-mail: $email
      - Mensagem: $mensagem
    ";

    if (!empty($_POST["receber_copia"])) {
      mail($contactos["email_interno"] . "," . $email, "Contactos do Site Casas", $mensagem_final);
    } else {
      mail($contactos["email_interno"], "Contactos do Site Casas", $mensagem_final);
    }

    $sucesso = "SUCESSO!";
  } else {
    $tentenovamente = "Preencha o recaptcha";
  }
}
?>

<main>

  <div class="row">
    <div class="col-12 col-md-11 col-lg-9 px-0 m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-auto d-flex flex-column align-items-center align-items-md-start">
            <br><br>
            <h2>Contactos</h2>
            <div class="linha-vermelha mb-0"></div>
          </div>
          <div class="col ps-md-5 mt-5 mt-md-0 text-center text-md-start">
            <div>
              <br>
              <h5>Morada</h5>
              <div><?= $contactos["morada"] ?></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mt-4">
              <div>
                <h5>E-mail</h5>
                <div><?= $contactos["email"] ?></div>
              </div>
              <div class="mt-4 mt-md-0">
                <h5>Telefone</h5>
                <div><?= $contactos["telefone"] ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-11 m-auto">

      <h2>Marque sua visita</h2>
      <div class="linha-vermelha"></div>

      <form action="" id="formulario_contactos" class="mt-4" method="post">
        <input type="text" required placeholder="*Nome" name="nome">
        <br>
        <input type="number" required placeholder="*Telefone" name="telefone">
        <br>
        <input type="email" required placeholder="*E-mail" name="email">
        <br>
        <textarea name="mensagem" placeholder="*Mensagem" required></textarea>

        <div class="d-flex justify-content-between flex-column flex-md-row">

          <div>
            <div>*Campos de Preenchimento Obrigatório</div>
            <div class="d-flex align-items-center gap-2">
              <input type="checkbox" name="receber_copia">
              <div>Desejo receber uma cópia desta mensagem no meu e-mail</div>
            </div>
          </div>

          <div class="me-lg-5 mt-4 mt-md-0">
            <div class="g-recaptcha" data-sitekey="6LfYgMYrAAAAAOCnylD068BGJ-8pZ71fX08jx4a7"></div>
            <?php if (!empty($sucesso)): ?>
              <div class="text-success mt-2"><?= $sucesso ?></div>
            <?php elseif (!empty($tentenovamente)): ?>
              <div class="text-danger mt-2"><?= $tentenovamente ?></div>
            <?php endif; ?>
          </div>

        </div>
        <br>
        <div class="text-center">
          <input type="submit" value="Enviar">
        </div>
        <br><br>
      </form>

    </div>
  </div>

</main>