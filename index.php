<?php
require_once './vendor/autoload.php';
USE PDO;

$bd = new PDO ('mysql:host=localhost;dbname=giraffa', 'root', '');

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
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
</tr>
<?php  foreach($generos as $g): ?>
    <tr>
        <td> <? $g['Id'] ?> </td>
        <td> <? $g['Nome'] ?></td>
        <tr>
            <?php endforeach ?>
</table>

</body>
</html>