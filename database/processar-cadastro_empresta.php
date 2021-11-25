<?php

require_once("../database/conexaodatabase/databaseconnect.php");
require("../classes/Itens.php");

$itens = new Itens();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];

$usuario->empresta($nome, $descricao, $categoria, $estoque);