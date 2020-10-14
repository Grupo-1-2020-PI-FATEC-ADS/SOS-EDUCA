<?php include ('cabecalho.php');?>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br>
<?php
    session_start();
    session_destroy();
    header("location:login_area_restrita.php");
?>
<?php include ('rodape.php');?>