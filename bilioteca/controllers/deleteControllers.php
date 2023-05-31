<?php
require('../database/conexao.php');

   if( isset($_GET['mensagem'])){
        $id = $_GET['mensagem'];
   }
   $del_prod = $conn->prepare('DELETE FROM livros WHERE id= :id');
   $del_prod->execute(array(':id'=>$id));  

   echo "<script>
   alert('Obrigado Pela Compra!');
   window.location.href='../views/telaDeRelatorios.php';
   </script>";

?>
