<?php


require_once "required.php";
$acab = get_acabamentos();
$form = !empty($_GET["id"]);

if ($form) {
  $id = intval($_GET["id"]);
  $pes = get_imoveis_especifico($id);
  $pp = get_projeto_especifico($pes["id_projeto"]);
  $imagem = json_decode($pes["imagem"], true);
  if (!$imagem) {
    $imagem = [];
  }
}
if ($form) {
  $id = intval($_GET["id"]);
  $acaba = get_acabamentos_especifico($id);
}
?>

<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-auto">
        <br><br>
        <h1 style="font-size: 50px;"><?= $pes["tipologia"] ?></h1>
        <div class="linha-vermelha"></div>
      </div>
      <div class="col-12 col-sm ps-sm-5 mt-4 mt-sm-0 pe-0 m-auto">
        <br><br><br>
        <h2 style="font-size: 30px;"><?= $pp["nome"] ?></h2>
      </div>
    </div>

    <?php
    ?>
    <div class="row">
      <div class="col-8 m-auto">

        <div id="carouselProjetos" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <?php foreach ($imagem as $i => $link): ?>

              <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                <img src="<?= $link ?>" class="d-block w-100" alt="<?= $i ?>">
              </div>

            <?php endforeach ?>
          </div>
        </div>
      </div>

      <br><br>
      <div class="paginacao-mobile">
        <button class="seta-btn" type="button" data-bs-target="#carouselProjetos" data-bs-slide="prev">
          <img src="imagens - cópia/svg/seta-tipo-de-fogo-esquerda-cinza.svg" alt="Anterior"
            class="seta-img">
        </button>
        <div class="carousel-indicators bolinha">
          <?php foreach ($imagem as $i => $link): ?>

            <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="<?= $i ?>" class="indicators <?= ($i == 0) ? "active" : "" ?>" aria-label="Slide <?= $i + 1 ?>"></button>

          <?php endforeach ?>


        </div>
        <button class="seta-btn" type="button" data-bs-target="#carouselProjetos" data-bs-slide="next">
          <img src="imagens - cópia/svg/seta-tipo-de-fogo-direita-cinza.svg" alt="Seguinte"
            class="seta-img">
        </button>
      </div>
    </div>
    <div class="row justify-content-center text-center my-4" style="gap:40px;">
      <div class="col-auto">
        <button class="botao-imagem">
          <a href="projetos.php?id=<?= $pp["id"] ?>">
            <img src="imagens - cópia/svg/voltar-a-galeria.svg" alt="Voltar à Galeria"
              class="normal" style="width:90px; height:auto; display:block; margin:0 auto;">
            <img src="imagens - cópia/svg/voltar-a-galeria-cinza.svg" alt="Voltar à Galeria"
              class="hover" style="width:90px; height:auto; display:block; margin:0 auto;">
          </a>
        </button>
      </div>

      <div class="col-auto">
        <button class="botao-imagem">
          <a href="contactos.php">
            <img src="imagens - cópia/svg/marque-a-sua-visita.svg" alt="Marque a sua visita"
              class="normal" style="width:90px; height:auto; display:block; margin:0 auto;">
            <img src="imagens - cópia/svg/marque-a-sua-visita-cinza.svg" alt="Marque a sua Visita"
              class="hover" style="width:90px; height:auto; display:block; margin:0 auto;">
          </a>
        </button>
      </div>

      <div class="col-auto">
        <button class="botao-imagem">
          <a href="https://www.facebook.com" target="_blank">
            <img src="imagens - cópia/svg/partilhar-no-facebook.svg" alt="partilhar-no-facebook"
              class="normal" style="width:90px; height:auto; display:block; margin:0 auto;">
            <img src="imagens - cópia/svg/partilhar-no-facebook-cinza.svg" alt="partilhar-no-facebook"
              class="hover" style="width:90px; height:auto; display:block; margin:0 auto;">
          </a>
        </button>
      </div>
    </div>
  </div>

  <section class="acabamentos" style=" background-image: url(imagens\ -\ cópia/imagem-de-fundo-acabamentos.jpg); padding:40px 0;">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12 text-center">
          <h2 class="subtitulo">Acabamentos, Plantas e Preçários</h2>
        </div>
      </div>
      <div class="row justify-content-center" style="gap:40px; margin-top:25px;">
        <div class="col-auto ">
          <button class="botao-imagem">
            <a href="acabamentos.php?id=<?= $acab["id"] = $pes["id_projeto"] ?>">
              <img src="imagens - cópia/svg/acabamentos-vermelho_1.svg" alt="acabamentos" class="normal" style="width:90px; height:auto;">
              <img src="imagens - cópia/svg/acabamentos-cinza.svg" alt="acabamentos" class="hover" style="width:90px; height:auto;">
            </a>
          </button>
        </div>
        <div class="col-auto ">
          <button class="botao-imagem">
            <a href="plantas.php?id=<?= $acab["id"] = $pes["id_projeto"] ?>">
              <img src="imagens - cópia/svg/plantas-vermelho.svg" alt="plantas" class="normal" style="width:90px; height:auto;">
              <img src="imagens - cópia/svg/plantas-cinza.svg" alt="plantas" class="hover" style="width:90px; height:auto;">
            </a>
          </button>
        </div>
      </div>
    </div>
  </section>
</main>