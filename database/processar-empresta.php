<?php

require_once("../database/conexaodatabase/databaseconnect.php");
require("../classes/Itens.php");

$itens = new Itens();

$disponivel = $_POST['quantidade_disponivel'];

$itens->escolhe_itens($disponivel);