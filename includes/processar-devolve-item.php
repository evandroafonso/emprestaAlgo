<?php

include("../conexaodatabase/conexaodatabase.php");
include("../pages/devolve-item.php");

$id = $_POST['id'];
$idSelect = $_POST['id'];
$estoque = $_POST['estoque'];
$devolver = $_POST['emprestados'];

if ($devolver > 0) {

    $quantidadeAtual = $devolver - 1;
    $estoque = $estoque + 1;

    $query = "UPDATE item SET
            estoque = '$estoque',
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
