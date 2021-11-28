<?php
include("../includes/topo.php");
require("../includes/autentica-usuario.php");
include("../conexaodatabase/conexaodatabase.php");
?>
<section class="container-main">
    <div id="titulo-main">
        <h2>Seja bem-vindo, <?php echo $_SESSION['nome']; ?></h2>
        <h2>Empreste algo, agora!</h2>
        <a href="../pages/atualiza-cadastro-usuario.php?=id= <?php echo $_SESSION['id']; ?>">Atualize seu cadastro aqui</a>
        <p><strong>Clique no botão abaixo e faça parte desta comunidade e compartilhe algo também!</strong></p>
    </div>
</section>

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
        <th>Emprestar</th>
        <th>Devolver</th>
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

        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['nome'] . "</td>
        <td>" . $row['descricao'] . "</td>
        <td>" . $row['categoria'] . "</td>
        <td>" . $row['estoque'] . "</td>
        <td>" . $status . "</td>
        <td><a href='empresta-item.php?id=" . $row['id'] . "'><button>EMPRESTAR</button></a></td>
        <td><a href='devolve-item.php?id=" . $row['id'] . "'><button>DEVOLVER</button></a></td>
    </tr>";
    } ?>