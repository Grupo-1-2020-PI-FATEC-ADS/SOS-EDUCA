<?php
    include("conexao.php");
    include('cabecalho.php');

    $id = $_GET['id'];
    mysqli_query($conexao, ("DELETE FROM produtos WHERE id_produtos ='$id' "));
    echo '<meta charset=UTF-8>
    <script> alert("Produto excluído")</script>';
    echo "<script>
            window.location=\"admin.php\"
          </script>";
    include('rodape.php');
?>