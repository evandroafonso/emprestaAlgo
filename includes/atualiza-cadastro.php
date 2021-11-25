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
        <li><a href="../includes/login.php"><button>VOLTAR PARA O LOGIN</button></a></li>
        <ul class="menu">
            <li><a href="#"><strong>Como Funciona?</strong></a></li>
            <li><a href="#"><strong>Quem Somos?</strong></a></li>
            <li><a href="#"><strong>Contato</strong></a></li>
        </ul>
    </header>

    <div id="corpo-cadastro">
        <h1>Atualize seus dados</h1>
        <form method="POST" action="../database/processar-atualiza-cadastro.php">
            <div id="campo-cadastro">
                <input type="text" name="id" placeholder="Nome Completo" require="required">
                <input type="text" name="nome" placeholder="Nome Completo" require="required">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" id="password" required>
                <input type="password" name="confirmação-senha" placeholder="Confirme sua senha" id="confirm_password" required>
            </div>
            <input type="submit" value="ATUALIZAR CADASTRO" id="botao-entrar"><a href="../includes/principal.php">
        </form>
    </div>

</body>

</html>