<?php
require_once("../database/conexaodatabase/databaseconnect.php");
include("../includes/topo.php")
?>
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