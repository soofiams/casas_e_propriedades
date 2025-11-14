<footer class="container-fluid">
    <div class="row d-none d-md-block m-auto ">
        <div class=" col-12 ">
            <nav class="menu-bar">
                <ul class="menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a <?= ($menu_atual == "home") ? "active" : "" ?> href="#" onclick="abrir_menu_delay1()">EMPRESA</a></li>
                    <li><a <?= ($menu_atual == "projetos" || $menu_atual == "terraço_almada" || $menu_atual == "jardim_braga") ? "active" : "" ?> href="#" onclick="abrir_menu_delay2()">PROJETOS DE COMERCIALIZAÇÃO</a></li>
                    <li><a <?= ($menu_atual == "portefolio" || $menu_atual == "portefolio_almada" || $menu_atual == "potefolio_sesimbra" || $menu_atual == "potefolio_braga" || $menu_atual == "potefolio_lisboa" || $menu_atual == "potefolio_porto") ? "active" : "" ?> href="#" onclick="abrir_menu_delay3()">PORTEFÓLIO</a></li>
                    <li><a <?= ($menu_atual == "contactos") ? "active" : "" ?> href="contactos.php">CONTACTOS<a></li>
                    <li><a href="#"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Contactos -->
    <div class="row contactos text-center text-md-start">
        <div class=" offset-1 col mb-3">
            <h1 class="titulo ">Contactos</h1>
        </div>
    </div>

    <div class="row dados-contacto  text-center text-md-start">
        <div class=" col-12 col-md offset-md-1">
            <h3>Morada</h3>
            <p><?= $contactos["morada"] ?></p>
        </div>
        <div class="col-12 col-md">
            <h3>Telefone</h3>
            <p><?= $contactos["telefone"] ?></p>
        </div>
        <div class="col-12 col-md ">
            <h3>E-mail</h3>
            <p><?= $contactos["email"] ?></p>
        </div>
    </div>
    </div>
    <div class="linha-vermelha-2"></div>


    <div class="row icones justify-content-center">
        <div class="col-auto">
            <button class="botao-imagem botao-facebook">
                <a href="<?= $contactos["facebook"] ?> " target="_blank">
                    <img src="imagens - cópia/svg/facebook-branco.svg" alt="Facebook" class="normal">
                    <img src="imagens - cópia/svg/facebook-vermelho.svg" alt="Facebook" class="hover">
                </a>
            </button>
        </div>
        <div class="col-auto">
            <div class="botao-imagem botao-ralc">
                <a href="extras.php?id=<?= $extras["id"] = 1 ?>">
                    <img src="imagens - cópia/svg/ralc.svg" alt="Resolução Alternativa de Litígios de Consumo">
                </a>
            </div>
        </div>
    </div>


    <div class="copyright">
        <a style="text-decoration: none; color: white; cursor:default;" href="extras.php?id=<?= $extras["id"] = 2 ?>">
            <p>Política de Cookies</p>
        </a>
        <p>Copyright © Grupo MediaMaster. Todos os direitos reservados.</p>
    </div>

</footer>
</body>

</html>