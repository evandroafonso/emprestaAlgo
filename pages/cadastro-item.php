<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
include("../emprestaalgo/conexaodatabase/conexaodatabase.php");
?>

<a href="../pages/principal.php" class="voltar-empresta-devolve">Voltar para a página principal</a>

<div id="corpo-cadastro">
    <h1>Cadastre algo e empreste!</h1>
    <form method="POST" action="../includes/processar-cadastro-item.php">
        <div id="campo-cadastro">
            <input type="text" name="nome" placeholder="Nome do item" require="required">
            <input type="text" name="descricao" placeholder="Descrição do item" required>
            <input type="text" name="categoria" placeholder="Categoria do item" required>
            <input type="number" name="estoque" placeholder="Quantidade disponível para empréstimo" required>
            <input type="text" name="idUsuario" value="<?php echo $_SESSION['nome']; ?>" require="required">
        </div>
        <input type="submit" value="FINALIZAR CADASTRO DO ITEM" id="botao-entrar"><a href="../pages/principal.php">
    </form>
</div>

</body>

</html>