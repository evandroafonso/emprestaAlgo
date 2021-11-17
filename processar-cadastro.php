<?php

require_once("database/databaseconnect.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = $pdo->prepare("INSERT INTO cadastro(nome, email, senha) VALUES (:nome, :email, :senha)");

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':email', $email);
$consulta->bindParam(':senha', $senha);

if($consulta->execute()){
    echo "Dados armazenados com sucesso";
}else{
    echo "Operacao não realizada.";
}