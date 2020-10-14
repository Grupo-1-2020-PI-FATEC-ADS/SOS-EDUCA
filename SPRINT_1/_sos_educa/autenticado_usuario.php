<?php
	include("conexao.php");
?>
<html>
	<head>
		<title>Autenticando Funcionário</title>
		<script type="text/javascript">
			function loginsuccessfully(){
				setTimeout("window.location='admin.php'",5000);
			}
		function loginfailed() { 	
				setTimeout("window.location='login_area_restrita.php'",5000);
		}
		</script>
		
		<?php include('cabecalho.php');
			$conexao=mysqli_connect("localhost", "root", "","sos_educa")
			or die(mysql_error()); 
		?>
	</head>
	<body>
		<div id="autenticando">
	<?php

		$login=$_POST['email'];
		$senha=$_POST['senha'];
		$query=mysqli_query($conexao, "SELECT * FROM admin WHERE login_func='$login' and senha_func='$senha'")or die(mysqli_error());
		@$row=mysqli_num_rows($query);

		if(filter_var($login, FILTER_VALIDATE_EMAIL)){
			
		}else{
				echo "<script language='javascript' type='text/javascript'>
				alert('E-MAIL INVÁLIDO!');window.location.href='login_area_restrita.php';
				</script>"; //onde esse script abre?
		
		} if ($row > 0) {
				session_start();
				$_SESSION['email']=$_POST['email'];
				$_SESSION['senha']=$_POST['senha'];
				$ass = mysqli_fetch_assoc($query);
				$_SESSION['id_func'] = $ass['id_func'];
				$_SESSION['nome_func'] = $ass['nome_func'];

				echo "<h1 class='alert-success'><i><center><b>Você foi autenticado com sucesso! Aguarde um instante.</b></center></i></h1>";
				echo "<script>loginsuccessfully()</script>";
				echo "<br><br><center><img src='imagens/ajax_load.gif'></center>";
		}else{
				echo "<center><h1 class='alert-danger'><b>Nome do usuário ou senha inválidos! Aguade um instante para tentar novamente.</h1></b></center>";
				echo "<script>loginfailed()</script>";
				echo "<br><br><center><img src='imagens/ajax_load.gif'></center>";
		}
	?>
		</div>
		<br><br><br><br>
	<?php include('rodape.php');?>
	</body>
</html>