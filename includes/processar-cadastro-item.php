<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];
$idUsuario = $_POST['idUsuario'];

include("../conexaodatabase/conexaodatabase.php");

$sql = "INSERT INTO item (nome, descricao, categoria, idUsuario, estoque) VALUES ('$nome', '$descricao', '$categoria', '$idUsuario', '$estoque')";

$resposta = mysqli_query($conexao, $sql);

if($resposta){
    header('Location: ../pages/principal.php');
}
else{

}
