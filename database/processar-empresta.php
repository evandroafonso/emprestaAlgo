<?php

require_once("../database/conexaodatabase/databaseconnect.php");
require("../classes/Itens.php");

$itens = new Itens();

$disponivel = $_POST['emprestados'];

$itens->escolhe_itens($disponivel);