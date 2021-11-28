<?php

include("../conexaodatabase/conexaodatabase.php");

$sql = "UPDATE cadastro SET
                nome = '$nome',
                email = '$email',
                senha = '$senha'
            WHERE
                id = '$id'";

$resposta = mysqli_query($conexao, $sql);

//Se atualizou com sucesso
if ($resposta) {

    header("Location: ../pages/atualiza-cadastro-usuario.php");
} else {
    echo "ERRO AO ATUALIZAR!";
}
