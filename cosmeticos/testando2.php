<?php session_start(); ?>
<form method="post" action="">

<input type="text" name="login" value="<?php echo (isset($_SESSION["login"]) ? $_SESSION["login"] : ""); ?>">
<input type="password" name="senha" value="<?php echo (isset($_SESSION["senha"]) ? $_SESSION["senha"] : ""); ?>">

<input type="submit" value="enviar">
</form>

<!-- Gravação -->
<?php


$_SESSION["login"] = $_POST["login"];
$_SESSION['senha'] = $_POST['senha'];



?>