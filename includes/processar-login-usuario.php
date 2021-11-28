<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

include("../conexaodatabase/conexaodatabase.php");

$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
$resposta = mysqli_query($conexao, $sql);

$qtdeRegistros = mysqli_num_rows($resposta);

if ($qtdeRegistros > 0) {

    session_start();

    $row = mysqli_fetch_assoc($resposta);
    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];

    header('Location: ../pages/principal.php');
} else {
    header('Location: ../pages/login-usuario.php?erro=1');
}
