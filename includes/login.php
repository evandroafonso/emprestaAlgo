<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>x

<section class="container">
    <div id="quadro-apresentacao">
        <h1>E ai, bora Emprestar Algo?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            voluptas alias. Nam deserunt in voluptatem. Amet eum debitis
            animi consequuntur numquam ea odit et omnis! Ipsam ratione earum magni!</p>
    </div>

    <div id="corpo-formulario">
        <h1>LOGIN</h1>
        <form method="POST" action="../database/processar-login.php">
            <div class="campo">
                <input type="email" name="email" placeholder="E-mail" required="">
                <input type="password" name="senha" placeholder="Senha" required="">
            </div>

            <input type="checkbox" checked="checked" class="checkbox">
            <label id="lembrar-me">Lembrar-me</label><br>
            <input type="submit" value="ENTRAR" id="botao-entrar">
            <?php
            if (isset($_GET['erro'])) {
                echo '<p style="text-align:center;color:red"><br>Usuário e/ou senha incorreto(s), tente novamente.</p>';
            } ?>
            <p id="cadastro">Não possui cadastro?</p>
            <a href="cadastro.php" class="link-formulario"><strong> Cadastre-se aqui</strong></a>
        </form>
    </div>
</section>
</body>

</html>