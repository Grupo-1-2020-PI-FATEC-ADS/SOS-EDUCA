<?php include ('cabecalho.php');?>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br>
<?php
    session_start();
    session_destroy();
    header("location:index_carrinho_cliente.php");
?>
<?php include ('rodape.php');?>