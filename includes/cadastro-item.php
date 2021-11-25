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
        <li><a href="../includes/main.php"><button>VOLTAR PARA TELA PRINCIPAL</button></a></li>
        <ul class="menu">
            <li><a href="#"><strong>Como Funciona?</strong></a></li>
            <li><a href="#"><strong>Quem Somos?</strong></a></li>
            <li><a href="#"><strong>Contato</strong></a></li>
        </ul>
    </header>

    <div id="corpo-cadastro">
        <h1>Cadastre um item</h1>
        <form method="POST" action="../database/processar-cadastro_empresta.php">
            <div id="campo-cadastro">
                <input type="text" name="nome" placeholder="Nome do item" require="required">
                <input type="text" name="descricao" placeholder="Descrição do item" required>
                <input type="text" name="categoria" placeholder="Categoria do item" required>
                <input type="number" name="estoque" placeholder="Quantidade disponível" required>
            </div>
            <input type="submit" value="FINALIZAR CADASTRO DO ITEM" id="botao-entrar"><a href="../includes/principal.php">
        </form>
    </div>

</body>

</html>