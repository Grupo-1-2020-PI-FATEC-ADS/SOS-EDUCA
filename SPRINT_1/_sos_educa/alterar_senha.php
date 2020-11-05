<?php
	include("conexao.php");
    $senha_nova=$_POST['senha_nova'];
    
    if($senha_nova==$confirmar_senha){
    $query = $conexao->prepare("UPDATE cliente SET senha = $senha_nova WHERE id_cliente = $_SESSION['id_cliente']");
		if($query->execute()){
            echo "<script language='javascript' type='text/javascript'>
			        alert('Senha alterada com sucesso!');window.location.href='cliente_senha.php';
                </script>";
        }
    }
		mysqli_close($conexao);
?>

