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
            <div class="panel" style="padding-top:20px">
              <form class="form" method="post" action="confirmar_produtos.php">
                <input type="hidden" name="forma_pagamento" value="cartao">
                <input type="hidden" name="idVenda" value="<?=$idVenda?>" />
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="numero_cartao">Número do Cartão</label>
                      <input type="text" class="form-control" id="numero_cartao" name="numero_cartao">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cod_seguranca">Código de Segurança</label>
                      <input type="text" class="form-control" id="cod_seguranca" name="cod_seguranca">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="parcelas">Parcelas</label>
                      <input type="text" class="form-control" id="parcelas" name="parcelas">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="data_validade">Data de Validade</label>
                      <input type="text" class="form-control" id="data_validade" name="data_validade">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="nome_titular">Nome completo do titular</label>
                      <input type="text" class="form-control" id="nome_titular" name="nome_titular">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cupom_desconto">Cupom de Desconto</label>
                      <input type="text" class="form-control" id="cupom_desconto" name="cupom_desconto">
                    </div>
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    <strong>Lembrar deste cartão</strong>
                  </label>
                </div>
                <button type="submit" class="btn btn-primary btn-center">Continuar</button>
              </form>
            </div>
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