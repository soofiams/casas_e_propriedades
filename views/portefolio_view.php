<?php
require_once "required.php";

$form = !empty($_GET["id"]);
if ($form) {
  $id = intval($_GET["id"]);
  $por = get_portefolio_especifico($id);
  $imagens = get_portefolio_imagens($id);
}
$imagens = json_decode($por["imagens"], true);
?>

<script src="/casas_e_propriedades/helpers/portefolio.js"></script>

<main class="portfolio container-fluid">
  <div class="row m-auto">
    <div class="col-12">

      <div class="titulo-projeto">
        <h2>Portefólio</h2>
        <h3><?= $por["nome"] ?> <?= $por["localidade"] ?></h3>
        <div class="linha-vermelha"></div>
      </div>
      <div class="galeria-container">
        <?php if (!empty($imagens)): ?>
          <div class="imagem-principal">
            <img id="imagemPrincipal" src="<?= $imagens[0] ?>" alt="Imagem principal">
          </div>
        <?php endif ?>
        <div class="miniaturas-wrapper">
          <button class="seta seta-esquerda" id="botaoAnterior">
            <img src="imagens - cópia/svg/seta-portfolio-esquerda.svg" alt="Anterior">
          </button>

          <div class="miniaturas" id="caixaMiniaturas">
            <?php if (!empty($imagens)): ?>
              <?php foreach ($imagens as $index => $img): ?>
                <img src="<?= $img ?>" alt="Miniatura <?= $index + 1 ?>" <?= $index == 0 ? 'class="ativa"' : '' ?>>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <button class="seta seta-direita" id="botaoSeguinte">
            <img src="imagens - cópia/svg/seta-portfolio-direita.svg" alt="Seguinte">
          </button>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</main>