<?php


$imoveis = get_todos_imoveis_home();

$projetos = [];
foreach ($imoveis as $p) {
  $projetos[$p["id_projeto"]][] = $p;
}
?>

<main class="container-fluid">

  <?php foreach (array_values($projetos) as $projIndex => $lista_imoveis): ?>
    <?php
    $pes = get_projeto_especifico($lista_imoveis[0]["id_projeto"]);
    $id_projeto = $lista_imoveis[0]["id_projeto"];

    $todas_imagens = [];
    foreach ($lista_imoveis as $p) {
      $imagens = json_decode($p["imagem"]);
      foreach ($imagens as $img) {
        $todas_imagens[] = [
          "src" => $img,
          "tipo" => $p["tipologia"],
        ];
      }
    }

    $total_paginas = ceil(count($todas_imagens) / 4);
    ?>

    <div class="row">
      <div class="col-11 px-0 m-auto">
        <div class="titulo-prédio">
          <h2><?= $pes["nome"] ?></h2>
          <div class="linha-vermelha"></div>
        </div>
      </div>
    </div>

    <!-- CAROUSEL DESKTOP -->
    <div class="row">
      <div class="col-10 px-0 m-auto d-none d-md-block desktop">
        <div class="carousel">
          <div id="carousel-<?= $id_projeto ?>" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner text-center">
              <?php for ($j = 0; $j < $total_paginas; $j++): ?>
                <?php
                $slice = array_slice($todas_imagens, $j * 4, 4);
                $tipos_slide = array_unique(array_column($slice, "tipo"));
                $tipo_slide = implode(" | ", $tipos_slide);
                ?>
                <div class="carousel-item <?= ($j == 0) ? 'active' : '' ?>">
                  <div class="imagens-4">
                    <?php foreach ($slice as $foto): ?>
                      <img src="<?= $foto["src"] ?>" alt="Imagem" class="w-100">
                    <?php endforeach ?>
                  </div>
                  <div class="caixa-sobreposta">
                    <h3 class="titulo-caixa"><?= $pes["nome"] ?></h3>
                    <div class="linha-caixa"></div>
                    <p class="tipo-fogo"><?= $tipo_slide ?></p>

                    <div class="paginacao">
                      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $id_projeto ?>" data-bs-slide="prev">
                        <img src="imagens - cópia/svg/seta-esquerda-branca.svg" alt="Anterior" class="seta-img">
                      </button>

                      <div class="carousel-indicators bolinha">
                        <?php for ($k = 0; $k < $total_paginas; $k++): ?>
                          <button type="button" data-bs-target="#carousel-<?= $id_projeto ?>" data-bs-slide-to="<?= $k ?>" class="<?= ($k == 0) ? 'active' : '' ?>"></button>
                        <?php endfor ?>
                      </div>

                      <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $id_projeto ?>" data-bs-slide="next">
                        <img src="imagens - cópia/svg/seta-direita-branca.svg" alt="Seguinte" class="seta-img">
                      </button>
                    </div>

                    <a href="projetos.php?id=<?= $id_projeto ?>">
                      <button class="btn-vermais">Ver mais</button>
                    </a>
                  </div>
                </div>
              <?php endfor ?>
            </div>
          </div>
        </div>
      </div>

      <!-- CAROUSEL MOBILE -->
      <div class="col-11 px-0 m-auto d-block d-md-none mobile">
        <div class="carousel position-relative">
          <div id="carousel-mobile-<?= $id_projeto ?>" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
              <?php foreach ($todas_imagens as $k => $foto): ?>
                <div class="carousel-item <?= ($k == 0) ? 'active' : '' ?>">
                  <img src="<?= $foto["src"] ?>" class="d-block w-100 imagens-4 m-auto" alt="Imagem <?= $k ?>">
                  <div class="caixa-sobreposta-mobile">
                    <h3 class="titulo-caixa"><?= $pes["nome"] ?></h3>
                    <div class="linha-caixa"></div>
                    <p class="tipo-fogo"><?= $foto["tipo"] ?></p>
                  </div>
                </div>
              <?php endforeach ?>
            </div>

            <div class="paginacao-mobile">
              <button class="seta-btn" type="button" data-bs-target="#carousel-mobile-<?= $id_projeto ?>" data-bs-slide="prev">
                <img src="imagens - cópia/svg/seta-esquerda-branca.svg" alt="Anterior" class="seta-img">
              </button>

              <div class="carousel-indicators bolinha">
                <?php foreach ($todas_imagens as $k => $foto): ?>
                  <button type="button" data-bs-target="#carousel-mobile-<?= $id_projeto ?>" data-bs-slide-to="<?= $k ?>" class="<?= ($k == 0) ? 'active' : '' ?>"></button>
                <?php endforeach ?>
              </div>

              <button class="seta-btn" type="button" data-bs-target="#carousel-mobile-<?= $id_projeto ?>" data-bs-slide="next">
                <img src="imagens - cópia/svg/seta-direita-branca.svg" alt="Seguinte" class="seta-img">
              </button>
            </div>

            <a href="projetos.php?id=<?= $id_projeto ?>">
              <button class="btn-vermais">Ver mais</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php if ($projIndex < count($projetos) - 1): ?>
      <div class="row sombra mt-2 mb-5"></div>
    <?php endif ?>

  <?php endforeach ?>
  <br><br>
</main>