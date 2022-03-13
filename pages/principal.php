<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
include("../emprestaAlgo/conexaodatabase/conexaodatabase.php");
?>
<section class="container-main">

    <div class="titulo-main">
        <h2>Seja bem-vindo, <?php echo $_SESSION['nome']; ?></h2>
        <h2>Empreste algo, agora!</h2>

        <p><strong>Clique no botão abaixo e faça parte desta comunidade e compartilhe algo também!</strong></p>
    </div>
    <a href="../pages/atualiza-cadastro-usuario.php?=id=<?php echo $_SESSION['id']; ?>" class="atualiza-cadastro-item">Atualize seu cadastro aqui</a>
    <a href="../pages/cadastro-item.php?=id=<?php echo $_SESSION['id']; ?>" class="atualiza-cadastro-item">Clique aqui e cadastre algo para emprestar</a>
</section>

<div>
    <a href="../pages/empresta-item.php"><button id="botao-empresta">EMPRESTAR</button></a>
    <a href="../pages/devolve-item.php"><button id="botao-devolve">DEVOLVER</button></a>
</div>
<div class="titulo-main"><h3>Estoque de itens disponíveis:</h3></div>

<?php

include("../emprestaAlgo/conexaodatabase/conexaodatabase.php");
echo "
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Situação</th>
    </tr>";

$sql = ("SELECT id, nome, descricao, categoria, estoque, situacao FROM item ORDER BY 'id' DESC");

$consulta = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($consulta)) {

    if ($row['estoque'] >= 0) {
        if ($row['situacao'] == 0) {
            $status = 'disponível';
        } else {
            $status = 'indisponível';
        }
    }

    echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['nome'] . "</td>
        <td>" . $row['descricao'] . "</td>
        <td>" . $row['categoria'] . "</td>
        <td>" . $row['estoque'] . "</td>
        <td>" . $status . "</td>
    </tr>";
} ?>