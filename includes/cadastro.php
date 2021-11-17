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
    <title>Empresta Algo</title>
</head>

<body>

    <div id="navbar">
        <ul>
            <li><a href="../includes/login.php">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Contact</a></li>
            <li style="float: right"><a class="active" href="#about">About</a></li>
        </ul>
    </div>

    <div id="corpo-cadastro">
        <h1>CADASTRE-SE</h1>
        <form method="POST" action="../processaDadosBanco/processar-cadastro.php">
            <div id="campo-cadastro">
                <input type="text" name="nome" placeholder="Nome Completo" require="required" >
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" id="password" required>
                <input type="password" name="confirmação-senha" placeholder="Confirme sua senha" id="confirm_password" required>
            </div>
            <input type="submit" value="FINALIZAR CADASTRO" id="botao-entrar" ><a href="../includes/principal.php">
            
        </form>
    </div>

</body> 

</html>