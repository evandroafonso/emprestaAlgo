<?php

class Usuario
{

    public function login($email, $senha)
    {

        global $pdo;
        $consulta = ("SELECT * FROM cadastro WHERE email = :email AND senha = :senha");
        $consulta = $pdo->prepare($consulta);
        $consulta->bindValue("email", $email);
        $consulta->bindValue("senha", $senha);
        $consulta->execute();

        if ($consulta->rowCount() > 0) {
            $dado = $consulta->fetch();
            $_SESSION['idUsuario'] = $dado['id'];

            return true;
        } else {
            return false;
        }
    }

    public function cadastro($nome, $email, $senha)
    {

        global $pdo;
        $consulta = $pdo->prepare("INSERT INTO cadastro(nome, email, senha) VALUES (:nome, :email, :senha)");

        $consulta->bindParam(':nome', $nome);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':senha', $senha);

        if ($consulta->execute()) {
            header("Location: ../includes/login.php");
        } else {
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }
    }

    public function atualiza_cadastro($id, $nome, $email, $senha){

        global $pdo;
        $sessao = $_SESSION['id_usuario'];


        if (isset($_GET['id'])) {

            //Obtém valor enviado via GET
            $id = $_GET['id'];
            $consulta = ("SELECT * FROM cadastro WHERE id = $id");
        }

        $consulta = $pdo->prepare("UPDATE cadastro SET
                                    nome = '$nome',
                                    email = '$email',
                                    senha = '$senha',
                                    WHERE id = $id");

        echo "Nome: " . $_POST["nome"] . "<br>";
        echo "CPF: " . $_POST["email"] . "<br>";
        echo "Telefone: " . $_POST["senha"] . "<br>";
        echo "id: " . $_POST["id"] . "<br>";

        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':nome', $nome);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':senha', $senha);

        if ($consulta->execute()) {
            header("Location: ../includes/login.php");
        } else {
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }
    }
}
