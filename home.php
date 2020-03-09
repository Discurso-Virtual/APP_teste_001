<!DOCTYPE html>

<?php 

    session_start();
?>

<?php
include_once './common/cabeçalho.php';
?>
<body>
    
    <a href="showCliente.php">Clientes</a>
    <a href="showFornecedor.php">Fornecedores</a>
    <a href="showProduto.php">Produtos</a><br>


    <a href="logout.php">Sair</a>

    <?php include_once './common/rodape.php'; ?>
</body>
</html>

    