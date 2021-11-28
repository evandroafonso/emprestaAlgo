<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
?>


<div id="titulo-empresta">
    <h1>Lista de itens disponíveis para empréstimo</h1>
</div>

<?php
    include("../conexaodatabase/conexaodatabase.php");
echo "
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Situação</th>
        <th>Quantidade</th>
        <th>Emprestar</th>
    </tr>";

    $sql = ("SELECT id, nome, descricao, categoria, estoque, situacao FROM item ORDER BY 'id' DESC");

    $consulta = mysqli_query($conexao, $sql);
    while($row = mysqli_fetch_assoc($consulta)){

        if ($row['estoque'] >= 0){
            if ($row['situacao'] == 0){
                $status = 'disponível';
            }else{
                $status = 'indisponível';
            }
        }

        if ($row['estoque'] > 0){
?>
            <form method="POST" action="../includes/processar-empresta-item.php">
            <tr>
                <td><input type="hidden" name="subject" id="subject" value="<?php echo $row['id'] ?>"></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['descricao']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td><?php echo $row['estoque']; ?></td>
                <td><?php echo $status; ?></td>
                <td><input type="number" name="quantidade"></td>
                <td><input type="submit" <?php echo $row['id'] ?> value="EMPRESTAR" id="botao-emprestar" name="emprestar"><a href="../pages/empresta-item.php?id=<?php echo $value['id']; ?>"></td>
            </tr>
        </form>
        <?php } }?>