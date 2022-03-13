<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Roboto+Mono:wght@100;400;700&family=Roboto:wght@100;300;400;500;700&family=Source+Sans+Pro:wght@200;300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../frontend/css/style.css">
    <title>Empresta Algo</title>
</head>

<body>

    <?php
    if (isset($_GET['autentica'])) {
        echo '<p style="text-align:center;color:red">Você não tem permissão de acesso para a página desejada.</p>';
    }

    ?>
    <br />
    <h1>
        <background-color:></background-color:>
        <a id="botao-entrar" href="../pages/login-usuario.php"> Clique aqui e faça seu login</a>
    </h1>


</body>

</html>