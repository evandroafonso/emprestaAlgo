<?php
include("../conexaodatabase/conexaodatabase.php");
require("../includes/autentica-usuario.php");
include("../includes/topo.php");

$id = $_SESSION['id'];

$sql = "SELECT * FROM cadastro WHERE id = '$id'";

$resposta = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($resposta);

$nome = $row['nome'];
$email = $row['email'];
$senha = $row['senha'];

echo "$nome, $email, $senha";

?>

<div id="corpo-cadastro">
    <h1>Atualize seus dados</h1>
    <form method="POST" action="../includes/processar-atualiza-cadastro-usuario.php">
        <div id="campo-cadastro">
            <input type="text" name="nome" value=<?php echo $nome; ?>>
            <input type="email" name="email"  value=<?php echo $email; ?>>
            <input type="password" name="senha"  value=<?php echo $senha; ?>>
        </div>
        <input type="submit" value="ATUALIZAR CADASTRO" id="botao-entrar"><a href="../includes/principal.php">
    </form>
</div>

</body>

</html>