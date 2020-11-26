<?php


    session_start(); 
    include("conexao.php");
    include('cabecalho.php');

    $id = $_GET['nome_cat'];
    mysqli_query($conexao, ("DELETE FROM categorias WHERE nome_cat ='$nome_cat' "));
    echo '<meta charset=UTF-8>
    <script> alert("Produto excluído")</script>';
    echo "<script>
            window.location=\"admin_produto.php\"
          </script>";
    mysqli_close($conexao);
    
?>