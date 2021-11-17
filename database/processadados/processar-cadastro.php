<?php

require_once("../conexaodatabase/databaseconnect.php");
require("../classes/Usuario.php");

$usuario = new Usuario();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario->cadastro($nome, $email, $senha);

