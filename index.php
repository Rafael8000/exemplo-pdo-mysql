<?php
require_once './vendor/autoload.php';
USE ExemploPDOMySQL\MySQLConnection;

$bd = new MySQLConnection ();

$comando = $bd ->prepare('SELECT * FROM generos ');
$comando -> execute();
$generos = $comando ->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giraffa</title>
</head>
<body>
    <a href = "insert.php"> Novo Gênero </a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
</tr>
<?php  foreach($generos as $g): ?>
    <tr>
        <td> <?= $g['id'] ?> </td>
        <td> <?= $g['nome'] ?></td>
        <tr>
            <?php endforeach ?>
</table>

</body>
</html>