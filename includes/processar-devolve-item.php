<?php

include("../emprestaalgo/conexaodatabase/conexaodatabase.php");
include("../pages/devolve-item.php");

$id = $_POST['id'];
$idSelect = $_POST['id'];
$devolver = $_POST['emprestados'];

if ($devolver > 0) {

    $quantidadeAtual = $devolver - 1;

    $query = "UPDATE item SET
            emprestados = '$quantidadeAtual'
            WHERE
            id = '$id'";

    $resposta = mysqli_query($conexao, $query);
    if ($resposta) {
    } else {
        echo 'Erro ao atualizar';
    }
} else {
}
