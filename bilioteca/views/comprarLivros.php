<?php
include('../database/conexao.php');

$viewsLivros = $conn->prepare('SELECT * FROM livros');
$viewsLivros->execute();
$rowTable = $viewsLivros ->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Compras</title>
</head>
<body>
    <a href="../views/telaDeRelatorios.php"></a>
</body>
</html>