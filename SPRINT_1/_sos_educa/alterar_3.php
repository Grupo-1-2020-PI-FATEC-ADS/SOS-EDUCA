<?php
	include("conexao.php");
	$id=$_SESSION['id_cliente'];
	$nome_cliente=$_POST['nome'];
    $cep=$_POST['cep'];
    $num_casa=$_POST['num_casa'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    
		mysqli_query($conexao, "UPDATE cliente SET nome ='$nome_cliente' , cep ='$cep', num_casa = '$num_casa', telefone = '$telefone', email = '$email' WHERE id_cliente = '$id'");
		echo "<script language='javascript' type='text/javascript'>
			        alert('Cadastro alterado com Sucesso');window.location.href='admin.php';
			    </script>";
        mysqli_close($conexao);
?>