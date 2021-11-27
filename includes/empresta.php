<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>

<div id="titulo-empresta">
    <h1>Lista de itens disponíveis para empréstimo</h1>
</div>

<?php
require_once("../database/conexaodatabase/databaseconnect.php");
$consulta = ("SELECT id, nome, descricao, categoria, estoque, emprestados FROM empresta ORDER BY 'id' DESC");
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Emprestados</th>
        <th>Disponível</th>
        <th>Emprestar</th>
    </tr>
    <?php foreach ($pdo->query($consulta) as $row) { ?>

        <form method="POST" action="../database/processar-empresta.php">
            <tr>
                <td><input type='hidden' name="subject" id="subject" value="<?php echo $row['id'] ?>"></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['descricao']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td><?php echo $row['estoque']; ?></td>
                <td><?php echo $row['emprestados']; ?></td>
                <td><input type="number" name="emprestados"></td>
                <td><input type="submit" <?php echo $row['id'] ?> value="EMPRESTAR" id="botao-emprestar" name="emprestar"><a href="../includes/empresta.php?id=<?php echo $value['id']; ?>"></td>
            </tr>";
        </form>
    <?php } ?>
</table>;

</body>

</html>