<?php

class Usuario{

    public function login($email, $senha){

        global $pdo;
        $consulta= ("SELECT * FROM cadastro WHERE email = :email AND senha = :senha");
        $consulta = $pdo->prepare($consulta);
        $consulta->bindValue("email", $email);
        $consulta->bindValue("senha", $senha);
        $consulta->execute();

        if($consulta->rowCount() > 0){
            $dado = $consulta->fetch();
            $_SESSION['idUsuario'] = $dado['id'];
            return true;
        }else{
            return false;
        }
    }

    public function cadastro($nome, $email, $senha){

        global $pdo;
        $consulta = $pdo->prepare("INSERT INTO cadastro(nome, email, senha) VALUES (:nome, :email, :senha)");

        $consulta->bindParam(':nome', $nome);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':senha', $senha);
        
        if($consulta->execute()){
            header("Location: ../includes/login.php");
        }else{
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }
    }

}
