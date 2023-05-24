<?php
include_once('../database/conexao.php');
session_start();
$livros = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome = $_POST['nome'];
$classificacao = $_POST['classificacao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

if (isset($livros['storeEbooks'])) {
    global $conn;
    $empty_input = false;

    $query = "SELECT * FROM livros WHERE nome='" . $nome . "'";
    $checkingProduct = $conn->prepare($query);
    $checkingProduct->execute();
    $rows = $checkingProduct->rowCount();

    if ($rows > 0) {
        echo ("<script type='text/javascript'>
        alert('Ops! Livro já cadastrado ');
        window.location.href='../views/CadastroLIvros.php';
        </script>");
    } else {

        $query = "INSERT INTO `livros`
        (`nome`, `classificacao`, `preco`, `quantidade`)
        VALUES
        ('$nome', '$classificacao', '$preco', '$quantidade')";

        $creatingProduct = $conn->prepare($query);
        $creatingProduct->execute();
        $product = $creatingProduct->rowCount();
        if ($product) {
            echo ("<script type='text/javascript'>
             alert('Livro Cadastrado com Sucesso!');
             window.location.href='../views/CadastroLIvros.php';
             </script>");

        }
    }
}



function getProductById($id_product)
{
    global $conn;
    $empty_input = false;
    $query = "SELECT * FROM livros WHERE id='" . $id_product . "'";
    $checkingProduct = $conn->prepare($query);
    $checkingProduct->execute();
    $rows = $checkingProduct->rowCount();
    if ($rows > 0) {
        return $rows;
    }
}
?>