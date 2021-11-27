<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>

<div id="corpo-cadastro">
    <h1>Cadastre um item</h1>
    <form method="POST" action="../database/processar-cadastro_empresta.php">
        <div id="campo-cadastro">
            <input type="text" name="nome" placeholder="Nome do item" require="required">
            <input type="text" name="descricao" placeholder="Descrição do item" required>
            <input type="text" name="categoria" placeholder="Categoria do item" required>
            <input type="number" name="estoque" placeholder="Quantidade disponível" required>
        </div>
        <input type="submit" value="FINALIZAR CADASTRO DO ITEM" id="botao-entrar"><a href="../includes/principal.php">
    </form>
</div>

</body>

</html>