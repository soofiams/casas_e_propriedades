<?php
require_once "required.php";


$acab = get_acabamentos();

$form = !empty($_GET["id"]);
if ($form) {
  $id = intval($_GET["id"]);
  $pes = get_projeto_especifico($id);
  $imoveis = get_todos_imoveis_id($id);
}
if ($form) {
  $id = intval($_GET["id"]);
  $acaba = get_acabamentos_especifico($id);
}
?>
<main class="container-fluid">

  <div class="row titulo-prédio">
    <div class="col-12">
      <h2>Projetos em Comercialização<br><?= $pes["nome"] ?></h2>
      <div class="linha-vermelha"></div>
    </div>
  </div>

  <div class="row justify-content-center" style="max-width:920px; margin:0 auto;">
    <?php foreach ($imoveis as $i): ?>
      <?php $imagem = json_decode($i["imagem"]); ?>

      <div class="col-md-6 col-12 p-0 position-relative" style="padding:0;">
        <img src="<?= $imagem[0] ?>" alt="<?= $imagem[0] ?>"
          style="width:100%; height:450px; object-fit:cover; display:block;">

        <div class="caixa-sobreposta"
          style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; height: 150px;">
          <div class="tipo-fogo"><?= $i["tipologia"] ?> <?= $i["nome"] ?></div>
          <div>
            <div class="linha-vermelha"></div>

          </div>
        </div>
        <a href="imovel.php?id=<?= $i["id"] ?>" class="d-block position-relative" style="display:block; position:relative;">
          <span class="btn-vermais"
            style="position:absolute; bottom:0; right:0; margin:6px; display:inline-block;">Ver Mais</span>
        </a>
      </div>
    <?php endforeach ?>
  </div>


  <section class="acabamentos" style=" background-image: url(imagens\ -\ cópia/imagem-de-fundo-acabamentos.jpg);padding:40px 0;">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12 text-center acabamentos">
          <h2 class="subtitulo">Acabamentos, Plantas e Preçários</h2>
        </div>
      </div>
      <div class="row justify-content-center" style="gap:40px; margin-top:25px;">
        <div class="col-auto ">
          <button class="botao-imagem">
            <a href="acabamentos.php?id=<?= $acaba["id"] ?>">
              <img src="imagens - cópia/svg/acabamentos-vermelho_1.svg" alt="acabamentos" class="normal" style="width:90px; height:auto;">
              <img src="imagens - cópia/svg/acabamentos-cinza.svg" alt="acabamentos" class="hover" style="width:90px; height:auto;">
            </a>
          </button>
        </div>
        <div class="col-auto ">
          <button class="botao-imagem">
            <a href="plantas.php?id=<?= $acaba["id"] ?>">
              <img src="imagens - cópia/svg/plantas-vermelho.svg" alt="plantas" class="normal" style="width:90px; height:auto;">
              <img src="imagens - cópia/svg/plantas-cinza.svg" alt="plantas" class="hover" style="width:90px; height:auto;">
            </a>
        </div>
      </div>
    </div>
  </section>
</main>