<?php
	$conexao=mysqli_connect("localhost", "root", "","sos_educa") or die(mysql_error()); 
	$id=$_POST['id_produtos'];
	$nome=$_POST['nome_prod'];
	$preco=$_POST['preco'];
	$estoque=$_POST['estoque'];
		mysqli_query($conexao, "UPDATE produtos SET nome_prod ='$nome' , estoque ='$estoque' ,preco ='$preco' WHERE id_produtos= '$id'");
		echo "<script language='javascript' type='text/javascript'>
			alert('PRODUTO ALTERADO COM SUCESSO');window.location.href='admin.php';
			</script>";
		mysqli_close($conexao);

?>