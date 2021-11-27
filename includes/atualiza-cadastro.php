<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>

<div id="corpo-cadastro">
    <h1>Atualize seus dados</h1>
    <form method="POST" action="../database/processar-atualiza-cadastro.php">
        <div id="campo-cadastro">
            <input type="text" name="id" placeholder="Nome Completo" require="required">
            <input type="text" name="nome" placeholder="Nome Completo" require="required">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" id="password" required>
            <input type="password" name="confirmação-senha" placeholder="Confirme sua senha" id="confirm_password" required>
        </div>
        <input type="submit" value="ATUALIZAR CADASTRO" id="botao-entrar"><a href="../includes/principal.php">
    </form>
</div>

</body>

</html>