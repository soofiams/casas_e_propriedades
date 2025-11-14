<?php
require_once "required.php";

$empresas = get_empresas();

$form = !empty($_GET["id"]);
if ($form) {
    $id = intval($_GET["id"]);
    $empes = get_empresas_especifico($id);
}
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1><?= $empes["titulo"] ?></h1>
                <div class="linha-vermelha mb-3"></div>
                <p> <?= $empes["texto"] ?></p>
            </div>
        </div>
    </div>
    <br><br>
</main>