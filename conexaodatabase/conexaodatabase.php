<?php

    $conexao = mysqli_connect('localhost', 'root', '3642', 'empresta_algo');

    if($conexao == false){
        die("ERRO: Não foi possível conextar ao banco de dados." . mysqli_connect_error());
    }