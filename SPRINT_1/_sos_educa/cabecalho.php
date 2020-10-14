<!DOCTYPE html>
<html>
  <head>
      <title>SOS Educa</title>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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

    <nav style="background-color: #2F528F; color:#fff; " >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="http://localhost/Projeto_PI/SOS-EDUCA/SPRINT%201/_sos_educa/index.php"><img  src="imagens/logo6.png" alt="placeholder+image" height="80px" width="80px"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a style="color:#fff" href="index.php">Início</a></li>
            <li><a style="color:#fff" href="cadastro_cliente.php">Cadastre-se</a></li>
          
            <li><a style="color:#fff" href="login_area_restrita.php">Login ADM</a></li>
            <li><a style="color:#fff" href="contatos.php">Contatos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-left">
          
            <li><a  style="color:#fff"href="index_carrinho_cliente.php"><span class="glyphicon glyphicon-shopping-cart"></span> Produtos</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
    </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>


  </body>
</html>