<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>

<div id="corpo-cadastro">
    <h1>CADASTRE-SE</h1>
    <form method="POST" action="../database/processar-cadastro.php">
        <div id="campo-cadastro">
            <input type="text" name="nome" placeholder="Nome Completo" require="required">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" id="password" required>
            <input type="password" name="confirmação-senha" placeholder="Confirme sua senha" id="confirm_password" required>
        </div>
        <input type="submit" value="FINALIZAR CADASTRO" id="botao-entrar"><a href="../includes/principal.php">
    </form>
</div>

</body>

</html>