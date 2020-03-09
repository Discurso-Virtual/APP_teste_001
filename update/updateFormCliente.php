
<?php
session_start();
include_once '../common/cabeçalho.php';


    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from cliente where codCliente =". $id ;

?>
    <form action="./updateCliente.php" method="POST">
        <?php
            foreach ($db->query($sql) as $row) {
        ?>
            <label for="codC">Código Cliente</label>
            <input type="text" id="codC" name="codC" value="<?php echo $row['codCliente'] ?>"><br>

            <label for="nomeC">Nome Cliente</label>
            <input type="text" id="nomeC" name="nomeC" value="<?php echo $row['nomeCliente'] ?>"><br>

            <label for="contactoC">Contacto Cliente</label>
            <input type="text" id="contactoC" name="contactoC"  value="<?php echo $row['contacCliente'] ?>"><br>

            <label for="emailC">Email Cliente</label>
            <input type="text" id="emailC" name="emailC"  value="<?php echo $row['emailCliente'] ?>"><br>
    
            <input type="submit" value="Alterar">
    </form>
    
        



    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
    
</body>
</html>