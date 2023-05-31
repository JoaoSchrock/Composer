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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../styles/cadastroL.css">
    <title>Tela de Cadastro</title>
</head>
<body>
<a href="../views/telaDeRelatorios.php"><button type="submit" value="Cadastrar" name="storeEbooks"><img id="voltar" src="../img/voltar.png" alt=""></button></a>
<h1 id="Titulo">Cadastro De Livros</h1>
<div class="container">
       <form class="label" method="POST"  action="../controllers/ebooksControllers.php">
       <input type="text" name="nome" class="input" placeholder="Nome" required>
        <input type="text" name="classificacao" class="input" placeholder="Classificacao" required>
        <input type="number" name="preco" class="input" placeholder="Preço" required>
        <input type="number" name="quantidade" class="input" placeholder="Quantidade" required>

        <button class="botao" type="submit" value="Cadastrar" name="storeEbooks">Cadastrar</button>
    </form>

    </div>
</body>
</html>