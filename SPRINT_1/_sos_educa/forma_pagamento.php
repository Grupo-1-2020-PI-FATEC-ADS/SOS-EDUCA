<?php session_start() ?>

<?php

  $usuario = $_SESSION['usuario'];
  $senha = $_SESSION['senha'];

  //$carrinho = $_SESSION['carrinho_cliente'];
  
  if (isset($_POST['idVenda'])){
    $_SESSION['idVenda'] = $_POST['idVenda'];
  }
  $idVenda = $_SESSION['idVenda'];
  if (!$usuario || !$senha) {
    header('Location: login_clientes.php');
  }

  include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include("cabecalho.php") ?>
  <title>SOS Educa</title>
</head>
<body>
  <?php include("navbar.php") ?>
  <?php (include("progresso.php"))(2) ?>

  <div class="container">
    <div class="row">
      <h3>Selecione a forma de pagamento</h3>
      <div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#cartao" aria-controls="cartao" role="tab" data-toggle="tab">Cartão</a></li>
          <li role="presentation"><a href="#boleto" aria-controls="boleto" role="tab" data-toggle="tab">Boleto</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="cartao">
   
            <iframe src="cartao.php" height="800" width="1400" title="Iframe Example"></iframe>
            <form method="post" action="confirmar_produtos.php">
            <div class="col-md-3 ml-md-auto" style="margin: 2% 55% 2% 55%"> 
            <button type="submit" class="btn btn-primary btn-lg btn-center" href="confirmar_produtos.php">Continuar</button>
            </div>
          </form>
          <br>
          <br>
            </div>
          
          <div role="tabpanel" class="tab-pane" id="boleto">
            <div class="panel" style="padding-top:20px">
              <form method="post" action="confirmar_produtos.php">
                <input type="hidden" name="forma_pagamento" value="boleto">
                <input type="hidden" name="idVenda" value="<?=$idVenda?>" />
                <button type="submit" class="btn btn-primary">Continuar com boleto</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php include("rodape.php") ?>
  <script>
    $('.nav-tabs').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
  </script>
</body>
</html>