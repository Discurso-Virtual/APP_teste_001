
<?php

session_start();

include_once './common/cabeçalho.php';
include_once './common/connectDB.php';

try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM cliente " ;?>
    <table border=2>
    <tr>
        <th>
            #
        </th>
        <th>
            Nome
        </th>
        <th>
            Contacto
        </th>
        <th>
            Email
        </th>
    </tr>
    <?php
        foreach ($db->query($sql) as $row) {
            ?>
            <tr>
                <td><?php echo $row['codCliente'] ?></td>
                <td><?php echo $row['nomeCliente'] ?></td>
                <td><?php echo $row['contacCliente'] ?></td>
                <td><?php echo $row['emailCliente'] ?></td>
                <td><a href="./update/updateFormCliente.php?id=<?php echo $row['codCliente'] ?>">Editar</a></td>
                <td><a href="./delete/deleteCliente.php?id=<?php echo $row['codCliente'] ?>">Eliminar</a></td>
            </tr>
            <?php
    }
    ?>
    </table>
    <?php
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>

<a href="forms/formCliente.php"> Adicionar </a>
<a href="./home.php">Voltar</a>


<?php include_once './common/rodape.php'; ?>
</body>
</html>

