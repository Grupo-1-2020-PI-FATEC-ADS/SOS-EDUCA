<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('cabecalho.php');?>
	<title>SOS Educa - Gerar boleto</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php include('navbar.php');?>
	<?php (include("progresso.php"))(1);?>
	<div class="page-header">
		<div class="alert alert-info" role="alert">
			<div style='text-align:center'>
			  <h2 class="text-primary"> <b> Insira seu Login ou Crie uma Nova Conta </b></h2>
			  <br/>
		  </div>
	  </div>
		<br />
		<br />
    <div class="text-center">
      <p class="col-md-12">
        <a href="login_clientes.php">
          <button type="buttom" class="btn btn-primary btn-lg">
            <span class="glyphicon glyphicon-user">  Login   </span>
          </button>
        </a>
      </p>
    </div>
    <div class="text-center">
      <p class="col-md-12"><a href="form_compra.php"><button type="buttom" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-shopping-cart">Cadastrar</span></button></a></p>
    </div>
	</div>
  <br /><br /><br /><br /><br />
	<?php include('rodape.php');?>
</body>
</html>