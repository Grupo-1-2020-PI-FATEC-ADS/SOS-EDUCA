<html>
<head>
<meta charset="utf-8">
	<title>Login do cliente</title>
	
<!-- Bibliotecas CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  

  <!-- Bibliotecas JS -->
  <script src="bootstrap/bootstrap.min.js"></script>
	</head>
<body>
<?php include('cabecalho.php');?>
      <br>
    <div class="container">
      
      
           <h2 class="text-primary">Login</h2>
           
           <form  class="form-group" action="autenticando_clientes.php" method="POST" >
                            <input class="input-group" type="text"  name="usuario" value="<?php echo @$_SESSION['usuario']?>"  placeholder="Digite seu Email"/><br>
                            <input  class="input-group" type="password" name="senha"  value="<?php echo @$_SESSION['senha']?>"   maxlength="8" placeholder="Digite sua senha" />
         <br>
                
              <input type="submit" class="btn-success" value="Entrar" >
           </form>
      
        </div>
  	  <?php include('rodape.php');?>
      
</body>
</html>