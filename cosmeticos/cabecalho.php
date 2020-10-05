<!DOCTYPE html>
<html>
<head>
	  <title>
Lenne cosmetics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #203864;
      padding: 25px;
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img  src="imagens/S.O.S (22).png" alt="placeholder+image" height="40px" width="80px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Início</a></li>
        <li><a href="cadastro_cliente.php">Cadastre-se</a></li>
       
        <li><a href="login_area_restrita.php">Login Usuário</a></li>
        <li><a href="contatos.php">Contatos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
      
        <li><a href="index_carrinho_cliente.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>