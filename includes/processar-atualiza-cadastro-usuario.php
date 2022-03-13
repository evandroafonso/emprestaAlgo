<?php

include("../emprestaalgo/conexaodatabase/conexaodatabase.php");
include("../pages/atualiza-cadastro-usuario.php");

if (isset($_POST['update'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$query = "UPDATE cadastro SET
                nome = '$nome',
                email = '$email',
                senha = '$senha'
            WHERE
                id = '$id'";

$resposta = mysqli_query($conexao, $query);

//Se atualizou com sucesso
if ($resposta) {
} else {
    echo "ERRO AO ATUALIZAR!";
}
}