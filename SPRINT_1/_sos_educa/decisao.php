<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('cabecalho.php');?>
	<title>SOS Educa - Gerar boleto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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