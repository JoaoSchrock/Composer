<?php
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
<h1 id="Titulo">Cadastro De Livros</h1>
<div class="container">
       <form class="label" action="">
       <label><input type="text"  name="Nome" placeholder="Nome" required="name"/></label>
       <label><input type="text"  name="Classificacao" placeholder="Classificacao" required="name"/></label>
       <label><input type="num" name="Preço" placeholder="Preco" required=""  /></label>  
       <label><input type="num" name="Preço" placeholder="Preco"  required=""/></label>    
  
    </form>
    <button id="Comprar" type="submit" class="btn">Cadastrar</button>
    </div>
</body>
</html>