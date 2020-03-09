<?php
session_start();
include_once './common/cabeçalho.php';

include_once './common/connectDB.php';

try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM produto " ;?>
    <table border=2>
    <tr>
        <th>
            Referência
        </th>
        <th>
            Descrição
        </th>
        <th>
            Unidade
        </th>
        <th>
            Familia
        </th>
        <th>
            Preço1
        </th>
        <th>
            Preço2
        </th>
        <th>
            Preço3
        </th>
    </tr>
    <?php
    foreach ($db->query($sql) as $row) {
        ?>
        <tr>
            <td><?php echo $row['refProduto'] ?></td>
            <td><?php echo $row['descProduto'] ?></td>
            <td><?php echo $row['unidadeProduto'] ?></td>
            <td><?php echo $row['familiaProduto'] ?></td>
            <td><?php echo $row['preco1Produto'] ?></td>
            <td><?php echo $row['preco2Produto'] ?></td>
            <td><?php echo $row['preco3Produto'] ?></td>
            <td><a href="./update/updateFormProduto.php?id=<?php echo $row['refProduto'] ?>">Editar</a></td>
            <td><a href="./delete/deleteProduto.php?id=<?php echo $row['refProduto'] ?>">Eliminar</a></td>

        </tr>
        <?php
    }?>
    </table>
    <?php
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>
<a href="forms/formProduto.php"> Adicionar </a>
<a href="./home.php">Voltar</a>

<?php include_once './common/rodape.php'; ?>
</body>
</html>