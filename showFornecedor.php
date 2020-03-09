<?php
session_start();
include_once './common/cabeçalho.php';
include_once './common/connectDB.php';


try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM fornecedor " ;?>
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
                <td><?php echo $row['codForne'] ?></td>
                <td><?php echo $row['nomeForne'] ?></td>
                <td><?php echo $row['contacForne'] ?></td>
                <td><?php echo $row['emailForne'] ?></td>
                <td><a href="./update/updateFormFornecedor.php?id=<?php echo $row['codForne'] ?>">Editar</a></td>
                <td><a href="./delete/deleteFornecedor.php?id=<?php echo $row['codForne'] ?>">Eliminar</a></td>
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
    <a href="forms/formFornecedor.php"> Adicionar </a>
    <a href="./home.php">Voltar</a>

    <?php include_once './common/rodape.php'; ?>
</body>
</html>