<?php
session_start();
?>
<form method="post" value="Form.php">
<input type="text" name="nome" value="">
<br>
<input type="text" name="idade" value="<?php echo (isset($_SESSION["login"]) ? $_SESSION["login"] : ""); ?>">
<br>
<input type="submit" value="TESTAR">
</form>
<?php
$nome=$_POST['nome'];
$idade=$_POST['idade'];
if(empty($nome)||(empty($idade))){
	echo "<script>
	alert('Preencha todos os campos');

</script>";
}
?>