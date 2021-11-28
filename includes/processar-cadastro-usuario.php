<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include("../conexaodatabase/conexaodatabase.php");

$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$resposta = mysqli_query($conexao, $sql);

header('Location: ../pages/login-usuario.php');
