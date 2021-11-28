<?php

include("../conexaodatabase/conexaodatabase.php");
include("../pages/empresta-item.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $idSelect = $_POST['id'];
    $estoque = $_POST['estoque'];
    $status = $_POST['status'];
    $emprestados = $_POST['emprestados'];

    if ($estoque > 0) {
        $quantidadeAtual = $emprestados + 1;
        $estoque = $estoque - 1;

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
}
