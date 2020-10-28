<?php
	include("conexao.php");
	$id=$_POST['id_produto'];
	$nome=$_POST['nome_prod'];
	$preco=$_POST['preco'];
		mysqli_query($conexao, "UPDATE produtos SET nome_prod ='$nome' ,preco ='$preco' WHERE id_produto= '$id'");
		echo "<script language='javascript' type='text/javascript'>
			        alert('PRODUTO ALTERADO COM SUCESSO');window.location.href='admin.php';
			    </script>";
		mysqli_close($conexao);
?>