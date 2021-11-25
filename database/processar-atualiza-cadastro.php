<?php

require_once("../database/conexaodatabase/databaseconnect.php");
require("../classes/Usuario.php");

$usuario = new Usuario();

$_SESSION['id'] = $id['id'];
$_SESSION['usuario'] = $nome;
$_SESSION['senha'] = $senha;

$usuario->atualiza_cadastro($id, $nome, $email, $senha);
