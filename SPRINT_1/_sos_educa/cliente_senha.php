<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <?php include('cabecalho.php');?>
	<title>Login do cliente</title>
</head>
<body>
<?php include('conexao.php');?>
  <div class="container">
      <div class="page-header">
        <div class="alert alert-info" role="alert">
          <div style='text-align:center'>
            <h2 class="text-primary"> <b> Alterar Senha </b></h2>
            <br />
           </div>
        </div>
      </div>    
    <form  class="form-group" action="autenticando_clientes.php" method="POST" >
      <input  class="input-group" type="password" name="senha" <?= @$_SESSION['senha'] ? 'autofocus' : '' ?>  maxlength="8" placeholder="Digite sua senha atual" />
      <br />
      <input  class="input-group" type="password" name="senha" <?= @$_SESSION['senha'] ? 'autofocus' : '' ?>  maxlength="8" placeholder="Digite sua nova senha" />
      <br />
      <input  class="input-group" type="password" name="senha" <?= @$_SESSION['senha'] ? 'autofocus' : '' ?>  maxlength="8" placeholder="Confirme sua nova senha" />
      <br />
      <input type="submit" class="btn-success" value="Alterar" >
      
    </form>     
  </div>

</body>
</html>

