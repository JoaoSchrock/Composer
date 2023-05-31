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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/tabela.css">
    <title>Tela de Relatorios</title>
</head>
<body>
    <div class="container">
    <a href="../views/CadastroLIvros.php"><img id="voltar" src="../img/voltar.png" alt=""></a>
    <table class="table">
        <h1 id="titulo">LIVROS</h1>
    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preco</th>
                        <th>Classificacao</th>
                        <th>Quantidade</th>
                        <th>Comprar Produto</th>
                    </tr>
                </thead>
        
        <tbody>
        
        <?php
            foreach($rowTable as $linha){
                echo '<tr>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['preco'].'</td>';
                echo '<td>'.'<h1></h1>'.$linha['classificacao'].'</td>';
                echo '<td>'.'<h1></h1>'.$linha['quantidade'].'</td>';
                echo '<td><a href=../controllers/deleteControllers.php?mensagem=' . $linha['id'] . ' class="btn compras">Comprar</a></td>';
            }
            
        ?>
    </tbody>
    </table>
    
</body>
</html>