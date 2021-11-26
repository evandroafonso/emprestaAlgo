<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Roboto+Mono:wght@100;400;700&family=Roboto:wght@100;300;400;500;700&family=Source+Sans+Pro:wght@200;300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <title>EMPRESTAR</title>
</head>

<body>

    <header>
        <li class="titulo-menu"><a href="../includes/empresta.php"><strong>EMPRESTA ALGO</strong></a></li>
        <ul class="menu">
            <li><a href="#"><strong>Como Funciona?</strong></a></li>
            <li><a href="#"><strong>Quem Somos?</strong></a></li>
            <li><a href="#"><strong>Contato</strong></a></li>
        </ul>
    </header>

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
                    <td><input type="submit" onclick="inserir_registo('<?php echo $row['id']?>')" value="EMPRESTAR" id="botao-emprestar" name="emprestar"><a href="../includes/empresta.php?id=<?php echo $value['id']; ?>"></td>
                </tr>";
            </form>

        <?php } ?>
    </table>;

</body>

</html>