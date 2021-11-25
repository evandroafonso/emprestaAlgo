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

    <header>
        <li class="titulo-menu"><a href="../includes/login.php"><strong>EMPRESTA ALGO</strong></a></li>
        <ul class="menu">
            <li><a href="#"><strong>Como Funciona?</strong></a></li>
            <li><a href="#"><strong>Quem Somos?</strong></a></li>
            <li><a href="#"><strong>Contato</strong></a></li>
        </ul>
    </header>

    <section class="container">
        <div id="quadro-apresentacao">
            <h1>E ai, bora Emprestar Algo?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                voluptas alias. Nam deserunt in voluptatem. Amet eum debitis
                animi consequuntur numquam ea odit et omnis! Ipsam ratione earum magni!</p>
        </div>

        <div id="corpo-formulario">
            <h1>LOGIN</h1>
            <form method="POST" action="../database/processar-login.php">
                <div class="campo">
                    <input type="email" name="email" placeholder="E-mail" required="">
                    <input type="password" name="senha" placeholder="Senha" required="">
                </div>

                <input type="checkbox" checked="checked" class="checkbox">
                <label id="lembrar-me">Lembrar-me</label><br>
                <input type="submit" value="ENTRAR" id="botao-entrar">
                <?php
                if(isset($_GET['erro'])){
                    echo '<p style="text-align:center;color:red"><br>Usuário e/ou senha incorreto(s), tente novamente.</p>';
                }?>
                <p id="cadastro">Não possui cadastro?</p>
                <a href="cadastro.php" class="link-formulario"><strong> Cadastre-se aqui</strong></a>
            </form>
        </div>
    </section>
</body>

</html>