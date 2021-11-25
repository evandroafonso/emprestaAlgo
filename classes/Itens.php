<?php

class Itens

{

    // POST cadastro de itens
    public function empresta($nome, $descricao, $categoria, $estoque)
    {

        global $pdo;
        $consulta = $pdo->prepare("INSERT INTO empresta(nome, descricao, categoria, estoque) VALUES (:nome, :descricao, :categoria, :estoque)");

        $consulta->bindParam(':nome', $nome);
        $consulta->bindParam(':descricao', $descricao);
        $consulta->bindParam(':categoria', $categoria);
        $consulta->bindParam(':estoque', $estoque);


        if ($consulta->execute()) {
            header("Location: ../includes/main.php");
        } else {
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }
    }

    public function escolhe_itens($disponivel){
        
        global $pdo;
        
        include("../includes/empresta.php");

        $id = $_REQUEST['subject'];

        $consulta = $pdo->prepare("UPDATE empresta SET quantidade_disponivel = ? WHERE id = '$id'");

        if ($consulta->execute([$disponivel])) {
            header("Location: ../includes/empresta.php");
        } else {
            echo "Erro de conexão com o banco de dados, por favor, tente novamente.";
        }
        
    }
}
