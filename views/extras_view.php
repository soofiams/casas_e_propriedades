<?php
require_once "required.php";

$extras_ = get_extras();

$form = !empty($_GET["id"]);
if ($form) {
    $id = intval($_GET["id"]);
    $extras = get_extras_especifico($id);
}
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1><?= $extras["titulo"] ?></h1>
                <div class="linha-vermelha mb-3"></div>
                <p> <?= $extras["texto"] ?></p>
            </div>
        </div>
    </div>
    <br><br>
</main>