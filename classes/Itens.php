<?php

class Itens

{

    public function escolhe_itens($disponivel){

        global $pdo;

        include("../includes/empresta.php");

        $id = $_REQUEST['subject'];

        $consulta = $pdo->prepare("UPDATE empresta SET emprestados = ? WHERE id = '$id'");

        if ($consulta->execute([$disponivel])) {
            header("Location: ../includes/empresta.php");
        } else {
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }

    }
}
