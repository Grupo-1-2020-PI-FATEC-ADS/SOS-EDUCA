<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <?php include('cabecalho.php');?>
	<title>Login do cliente</title>
</head>
<body>
  <?php include('navbar.php');?>
  <?php (include("progresso.php"))(1);?>
  <br />
  <div class="container">
      <div class="page-header">
        <div class="alert alert-info" role="alert">
          <div style='text-align:center'>
            <h2 class="text-primary"> <b> Login </b></h2>
            <br />
          </div>
        </div>
      </div>    
    <form  class="form-group" action="autenticando_clientes.php" method="POST" >
      <input class="input-group" type="text"  name="usuario" value="<?php echo @$_SESSION['usuario']?>"  placeholder="Digite seu Email"/><br>
      <input  class="input-group" type="password" name="senha" <?= @$_SESSION['senha'] ? 'autofocus' : '' ?>  maxlength="8" placeholder="Digite sua senha" />
      <br />
      <input type="submit" class="btn-success" value="Entrar" >
    </form>     
  </div>
  <?php include('rodape.php');?> 
</body>
</html>