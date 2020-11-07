<?php
	session_start();
	include("conexao.php");
	if (isset($_SESSION)){
		if(isset($_SESSION['id_cliente'])){
		  $idCliente = intval($_SESSION['id_cliente']);
		}else{
		  $idCliente = '';
		}
		$nome_cliente=$_POST['nome_cliente'];
		$cep=$_POST['cep'];
		$num_casa=$_POST['num_casa'];
		$telefone=$_POST['telefone'];
		$email=$_POST['email'];

		$result = "UPDATE cliente SET nome ='$nome_cliente' , cep ='$cep', num_casa = '$num_casa', telefone = '$telefone', email = '$email' WHERE id_cliente = '$idCliente'";
      
	
		$query = $conexao->prepare($result);
    	if($query->execute()){
               echo "<script language='javascript' type='text/javascript'>
                alert('Cadastro alterado com Sucesso!');window.location.href='clientes.php';
                  </script>";
          }else{
            echo "<script language='javascript' type='text/javascript'>
                    alert('Alteração inválida, tente novamente!!');window.location.href='alterar_senha.php';
                  </script>";
          }
	}
        mysqli_close($conexao);
?>