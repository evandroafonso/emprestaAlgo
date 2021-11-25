<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Roboto+Mono:wght@100;400;700&family=Roboto:wght@100;300;400;500;700&family=Source+Sans+Pro:wght@200;300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <title>Empresta Algo - Main</title>
</head>

<body>
    <header>
        <li class="titulo-menu"><a href="../includes/main.php"><strong>EMPRESTA ALGO</strong></a></li>
        <ul class="menu">
            <li><a href="#"><strong>Como Funciona?</strong></a></li>
            <li><a href="#"><strong>Quem Somos?</strong></a></li>
            <li><a href="#"><strong>Contato</strong></a></li>
        </ul>
    </header>
    <section class="container-main">
        <div id="titulo-main">
            <h2>Empreste algo, agora!</h2>
            <p><strong>Clique no botão abaixo e faça parte desta comunidade e compartilhe algo também!</strong></p>
        </div>
        <form method="GET" action="../includes/empresta.php">
            <input type="submit" value="EMPRESTAR" id="botao-empresta">
        <form method="GET" action="../includes/devolve.php">
            <input type="submit" value="DEVOLVER" id="botao-devolve">
        </form>
    </section>




</body>

</html>