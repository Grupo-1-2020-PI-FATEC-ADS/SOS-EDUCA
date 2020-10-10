
<html>
   <head>
	   <title>Aréa Restrita</title>
	
	</head>
   <body>
      <?php include('cabecalho.php');?>
         <br><br>

         <br>
    
            <section class="newsletter container bg-black">
               <h2 class="text-primary">ÁREA RESTRITA</h2>
                  <h3 class="text-danger">  Login </h3>
                     <form class="form-inline" action="autenticado_usuario.php" method="POST" >
                        <input class="form-control" type="email" name="email" style="min-width:100%;" placeholder="Login" value="<?php echo @$_SESSION['email']?>" ><br>
                        <br/>
                        <input class="form-control" type="password" name="senha" style="min-width:100%;" placeholder="Sua senha" value="<?php echo @$_SESSION['senha']?>" ><br>
                        <br/>
                        <button class="btn-success btn-block btn-lg"> Entrar </button>
                     </form>
            </section>
	      <br>
	   <?php include('rodape.php');?>

   </body>
</html>