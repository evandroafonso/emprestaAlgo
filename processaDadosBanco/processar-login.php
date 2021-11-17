<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require("../conexaoBancoDados/databaseconnect.php");
    require("../classes/Usuario.php");

    $usuario = new Usuario();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($usuario->login($email, $senha) == true){
        if(isset($_SESSION['idUsuario'])){
            header('Location: ../includes/principal.php');
        }else{
            header('Location: ../includes/login.php');
        }
    }else{
        header('Location: ../includes/login.php');
    }
}else{
    header('Location: ../includes/login.php');
}
 
?>
