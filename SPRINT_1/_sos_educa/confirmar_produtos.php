<?php session_start() ?>

<?php
  $forma_pagamento = $_POST['forma_pagamento'];
  $usuario = $_SESSION['usuario'];
  $senha = $_SESSION['senha'];
  $carrinho = $_SESSION['carrinho_cliente'];

  if (!$forma_pagamento) {
    header('Location: forma_pagamento.php');
  }
  
  $_SESSION['forma_pagamento'] = $forma_pagamento;

  if ($forma_pagamento === 'cartao') {
    $_SESSION['dados_cartao'] = [
      "numero" => $_POST['numero_cartao'],
      "cod_seg" => $_POST['cod_seguranca'],
      "parcelas" => $_POST['parcelas'],
      "validade" => $_POST['data_validade'],
      "titular" => $_POST['nome_titular'],
      "cupom" => $_POST['cupom_desconto']
    ];
  }
  
  if (!$usuario || !$senha) {
    header('Location: login_clientes.php');
  }

  $conexao = mysqli_connect("localhost", "root", "", "sos_educa");

  $produtos = [];
  $produtos_ids = [];

  if (sizeof($carrinho) > 0) {
    foreach ($carrinho as $key => $value) $produtos_ids[] = $key;

    $query = mysqli_query($conexao, "SELECT * from produtos WHERE id_produtos in (" . implode(',', array_map('intval', $produtos_ids)) . ")");
    $produtos = mysqli_fetch_all($query, MYSQLI_ASSOC);
  }
?>

<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <?php include("cabecalho.php") ?>
    <title>SOS Educa</title>
  </head>
  
  <body>
    <?php include("navbar.php") ?>
    <?php (include("progresso.php"))(3) ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 panel">
          <?php if (sizeof($produtos) === 0): ?>
            <span>Nenhum item foi adicionado a lista.</span>
          <?php else: ?>
            <table class="table">
              <tbody>
                <?php foreach ($produtos_ids as $i):
                  $produto = null;
                  foreach ($produtos as $prod) {
                    if (intval($prod['id_produtos']) === $i) {
                      $produto = $prod;
                    }
                  }
                ?>
                  <?php if ($produto):?>
                    <tr>
                      <td style="text-align:right">
                        <a href="arquivos/<?= $produto['arquivo'] ?>" download="">Baixar Arquivo</a>
                      </td>
                      <td>
                        <img src="imagens/<?= $produto['imagem'] ?>" style="width:120px;height:160px;float:left;margin-right:20px">
                        <h3 style="margin-top:0"><?= $produto['nome_prod'] ?></h3>

                        <div>
                          <strong>Quantidade:</strong>
                          <br>
                          <p><?= $carrinho[$i] ?></p>
                        </div>

                        <div>
                          <strong>Preço:</strong>
                          <br>
                          <p>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                        </div>
                      </td>
                    </tr>
                  <?php endif ?>
                <?php endforeach ?>
              </tbody>
              
              <tfoot>
                <tr>
                  <td></td>
                  <td class="active" style="font-size:16px">
                    <strong>Total: <span style="float:right">R$ <?= number_format(array_reduce($produtos, function($val, $produto) use ($carrinho) {
                      return $produto['preco'] * $carrinho[$produto['id_produtos']] + $val;
                    }, 0), 2, ',', '.') ?></span></strong>
                  </td>
                </tr>
              </tfoot>
            </table>
          <?php endif ?>
        </div>

        <div class="col-md-3">
          <?php if (sizeof($produtos) === 0): ?>
            <a href="index_carrinho_cliente.php" class="btn btn-primary btn-block">Ir até a loja</a>
          <?php else: ?>
            <a href="carrinho_cliente.php" class="btn">Voltar ao carrinho</a>
            <a href="logout_carrinho.php" class="btn btn-success btn-block">Finalizar compra</a>
          <?php endif ?>
        </div>
      </div>
    </div>
    
    <?php include("rodape.php") ?>
  </body>
</html>