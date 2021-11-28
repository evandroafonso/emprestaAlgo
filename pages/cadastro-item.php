<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
include("../conexaodatabase/conexaodatabase.php");
?>

<div id="corpo-cadastro">
    <h1>Cadastre um item</h1>
    <form method="POST" action="../includes/processar-cadastro-item.php">
        <div id="campo-cadastro">
            <input type="text" name="nome" placeholder="Nome do item" require="required">
            <input type="text" name="descricao" placeholder="Descrição do item" required>
            <input type="text" name="categoria" placeholder="Categoria do item" required>
            <input type="number" name="estoque" placeholder="Quantidade disponível para empréstimo" required>
        </div>
        <input type="submit" value="FINALIZAR CADASTRO DO ITEM" id="botao-entrar"><a href="../pages/principal.php">
    </form>
</div>

</body>

</html>