
<?php
session_start();
include_once '../common/cabeçalho.php';
?>
<body>
    <form action="../inserts/insertCliente.php" method="POST">
        <label for="nomeC">Nome Cliente</label>
        <input type="text" id="nomeC" name="nomeC"><br>

        <label for="contactoC">Contacto Cliente</label>
        <input type="text" id="contactoC" name="contactoC"><br>
        
        <label for="emailC">Email Cliente</label>
        <input type="text" id="emailC" name="emailC"><br>
        
        <input type="submit" value="Submeter">
    </form>

    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>