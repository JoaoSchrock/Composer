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
    <link rel="stylesheet" href="../styles/inicial.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair:wght@600&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Tela Inicial</title>
</head>
<body>
    <div class="container">
        <h1 id="Titulo">Biblioteca.com</h1>
        <div>
            <a href="../views/CadastroLIvros.php"><button id="Comprar" type="submit" class="btn">Cadastrar</button></a>
        </div>
        
    </div>
</body>
</html>