<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
?>

<a href="../pages/principal.php" class="voltar-empresta-devolve">Voltar para a página principal</a>

<div id="titulo-empresta">
    <h1>Lista de itens a devolver</h1>
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
        <th>Quantidade Devolvida</th>
        <th>Quantidade à devolver</th>
        <th>Devolver</th>
    </tr>";

$sqlSelect = ("SELECT id, nome, descricao, categoria, estoque, situacao, emprestados FROM item ORDER BY 'id' DESC");

$consultaSelect = mysqli_query($conexao, $sqlSelect);
while ($rowSelect = mysqli_fetch_assoc($consultaSelect)) {

    $idSelect = $rowSelect['id'];
    $estoqueSelect = $rowSelect['estoque'];
    $statusSelect = $rowSelect['situacao'];
    $emprestadosSelect = $rowSelect['emprestados'];

    if ($estoqueSelect >= 0) {
        if ($statusSelect == 0) {
            $statusSelect = 'disponível';
        } else {
            $statusSelect = 'indisponível';
        }
    }

    if ($emprestadosSelect > 0) {

?>
        <form method="POST" action="../includes/processar-devolve-item.php">
            <tr>
                <td><input type="hidden" name="id" id="subject" value="<?php echo $rowSelect['id'] ?>"></td>
                <td><?php echo $rowSelect['nome']; ?></td>
                <td><?php echo $rowSelect['descricao']; ?></td>
                <td><?php echo $rowSelect['categoria']; ?></td>
                <td><input type="hidden" name="estoque" value="<?php echo $rowSelect['estoque']; ?>"><?php echo $estoqueSelect; ?></td>
                <td><input type="hidden" name="emprestados" value="<?php echo $rowSelect['emprestados']; ?>"><?php echo $emprestadosSelect; ?></td>
                <td><input type="submit" <?php echo $rowSelect['id'] ?> value="DEVOLVER" id="botao-emprestar" name="update"><a href="../pages/devolve-item.php"></td>
            </tr>
        </form>
<?php

    }
}
?>