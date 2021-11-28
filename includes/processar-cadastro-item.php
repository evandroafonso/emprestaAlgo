<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];

include("../conexaodatabase/conexaodatabase.php");

$sql = "INSERT INTO item (nome, descricao, categoria, estoque) VALUES ('$nome', '$descricao', '$categoria', '$estoque')";

$resposta = mysqli_query($conexao, $sql);



if($resposta){
    header('Location: ../pages/principal.php');
}
else{

}
