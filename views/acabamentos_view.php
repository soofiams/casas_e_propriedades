<?php
require_once "required.php";

$acab = get_acabamentos();

$form = !empty($_GET["id"]);
if ($form) {
    $id = intval($_GET["id"]);
    $acaba = get_acabamentos_especifico($id);
}
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Acabamentos (<?= $acaba["nome"] ?> )</h1>
                <div class="linha-vermelha mb-3"></div>
                <p> <?= $acaba["Acabamentos"] ?></p>
            </div>
        </div>
    </div>
    <br><br>
</main>