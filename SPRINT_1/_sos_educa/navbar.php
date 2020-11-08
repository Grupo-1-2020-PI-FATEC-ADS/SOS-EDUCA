<nav style="background-color: #2F528F; color:#fff; " >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img  src="imagens/logo6.png" alt="placeholder+image" style="margin-top:-12px"height="45px" width="45px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a style="color:#fff" href="index.php"><span class="glyphicon glyphicon-asterisk"></span> Início</a></li>
        <li><a style="color:#fff" href="cadastro_cliente.php"><span class="glyphicon glyphicon-plus"></span> Cadastre-se</a></li>
        <li><a style="color:#fff" href="login_area_restrita.php"><span class="glyphicon glyphicon-user"></span> Login ADM</a></li>
        <li><a style="color:#fff" href="login_cliente_geral.php"><span class="glyphicon glyphicon-plus"></span> Login Clientes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li><a  style="color:#fff"href="index_carrinho_cliente.php"><span class="glyphicon glyphicon-book"></span> Produtos</a></li>
        <li><a  style="color:#fff"href="carrinho_cliente.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        <li><a style="color:#fff" href="contatos.php"><span class="glyphicon glyphicon-phone-alt"></span> Contatos</a></li>
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