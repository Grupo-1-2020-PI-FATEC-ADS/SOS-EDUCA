<?php 
  session_start();
  include("conexao.php");
  if (isset($_SESSION)){
    if(isset($_SESSION['idVenda'])){
      $idVenda = intval($_SESSION['idVenda']);
    }else{
      $idVenda = '';
    }
  if (isset($_POST)){
    if(isset($_POST['acao'])){
      $fase = $_POST['acao'];
    }else{
      $fase = '';
    }
    //$idVenda = intval($_POST['idVenda']);
    if(!isset($_SESSION['carrinho_cliente'])){ 
      $_SESSION['carrinho_cliente'] = array();
    } 
    switch ($fase){
      case "add":
        $idProduto = $_POST['idProduto'];
        if(!isset($_SESSION['carrinho_cliente'][$idProduto])){
          $_SESSION['carrinho_cliente'][$idProduto] = 1; 
        }
        if (isset($_SESSION['idVenda']) && (int)$_SESSION['idVenda'] > 0 ){
          //echo "<br>Venda já aberta";
        } else {
          //echo "<br>Preciso criar venda";
  
          $id_cliente = 0;
          $forma_pagamento =  '';
          $total = 0;
          $data_venda = date('Y-m-d');
  
          $query_insert = "insert into vendas (id_venda,id_cliente ,total, data_venda, forma_pagamento) VALUES(null,'$id_cliente', '$total', '$data_venda', '$forma_pagamento')";  
          //echo $query_insert;
          $query_preparada = mysqli_prepare($conexao, $query_insert);                                  
          mysqli_stmt_execute($query_preparada);
          $idVenda= mysqli_insert_id($conexao); 
          $_SESSION['idVenda'] = $idVenda;
        }
      break;
      case 'del':
        $idProduto = intval($_POST['idProduto']); 
        $idVenda = intval($_POST['idVenda']); 
        $idItem = intval($_POST['idItem']);
        if(isset($_SESSION['carrinho_cliente'][$idProduto])){ 
           unset($_SESSION['carrinho_cliente'][$idProduto]); 
        }        
        // $query_delete = "delete from itens_venda where id_itensvenda='$idItem' ";
        // echo $query_delete;
        // mysqli_query($conexao, $query_delete);   
      break;
      case 'finalizar':
        $valorAcumulado=0;
        $quantidadeAcumulada=0;
        foreach($_SESSION['carrinho_cliente'] as $idProduto => $qtd){         
          $queryProduto   = "SELECT * FROM produtos WHERE id_produto='$idProduto' ";
          $resultadoProduto = mysqli_query($conexao, $queryProduto);
          $registroProduto = mysqli_fetch_assoc($resultadoProduto);
          $precoProduto = $registroProduto['preco'];
          mysqli_query($conexao, "update produtos set estoque=estoque - '$qtd' where id_produto='$idProduto' ");    
          $query_Item = "insert into itens_venda(id_venda,id_produto,qtd_item,valor_unitario)VALUES('$idVenda','$idProduto','$qtd','$precoProduto') ";
          $SqlInserirItens =mysqli_query($conexao, $query_Item);
          $valorAcumulado += (int)$qtd * (float)$precoProduto;
          $quantidadeAcumulada += (int)$qtd;
        }
        mysqli_query($conexao, "update vendas set total='$valorAcumulado', qtd_itens='$quantidadeAcumulada' where id_venda='$idVenda' ");    
        unset($_SESSION['carrinho_cliente']);
        //unset($_SESSION['idVenda']);
        header("location:decisao.php");
      break;
      default:
         // echo "Ação não configurada!";
    } 
  }
}
?>
<script type="text/javascript">
   function loginsuccessfully(){
      setTimeout("window.location='logout_carrinho.php'",2000);
   }
   function loginfailed() {
      setTimeout("window.location='login_clientes.php'",2000);
   }
</script>
<!DOCTYPE html">
<html lang="pt-br">
<head>
   <?php include("cabecalho.php");?>
   <?php include("conexao.php");?>
   <title>Carrinho de compras</title>
  
</head>
<body>
  <?php include("navbar.php");?>
  <?php (include("progresso.php"))(0);?>
    <table style="margin: 2% 35% 2% 35%;"class="table-responsive">
      <div class="page-header">
        <div class="alert alert-info" role="alert">
          <div style='text-align:center'>
            <h2 class="text-primary"><b>Carrinho de Compras</b></h2>
            <br/>
          </div>
        </div>
      </div>
        <tr class="table-responsive">             
          <th class="table-responsive">Produto</th>
         
          <th class="table-responsive" >Pre&ccedil;o</th>
         
          <th class="table-responsive" >Excluir</th>
        </tr>
      </thead>
      <tfoot class="table-responsive">         
        <tr class="table-responsive">     

          <td class="table-responsive">
            <a href="index_carrinho_cliente.php">Continuar Comprando</a>
          </td>
          <br/>
          <p class="btn-success">
            <td  class="table-responsive">
              <form action="carrinho_cliente.php" method="POST">
                <input type="hidden" name="acao" value="finalizar"/>
                <input type="hidden" name="idVenda" value="<?=$idVenda?>" />
                <?php              
                 if (count($_SESSION['carrinho_cliente']) == 0){
                  echo "<button type='submit' disabled>Finalizar Compra</button>";
                 }else{
                   echo "<button type='submit' >Finalizar Compra</button>";
                 }           
                ?>    
              </form>  
            </td>
          </p>
        </tr>
      </tfoot>
      <tbody class="table-responsive">
        <?php
          if(count($_SESSION['carrinho_cliente']) == 0){
            echo '<tr><td colspan="5">Não há produto no carrinho</td></tr >';      
          }
          else {
            include("conexao.php");                
              $total = 0; 
                foreach($_SESSION['carrinho_cliente'] as $id => $qtd){         
                  $sql   = "SELECT * FROM produtos WHERE id_produto='$id' ";
                  $qr = mysqli_query($conexao, $sql);
                  $ln = mysqli_fetch_assoc($qr);
                  $nome  = ($ln['nome_prod']);
                  $i = $ln['id_categoria'];
                  $preco = number_format($ln['preco'], 2, ',', '.');
                 // $sub = number_format($ln['preco'] * $qtd, 2, ',', '.');
                  $preco_sql =  number_format($ln['preco'], 2, '.', ',');
                  $data = date("d/m/Y");
                  $total += $ln['preco'] * $qtd;
                  $max = mysqli_fetch_array(mysqli_query($conexao,"select * from produtos where nome_prod='".$nome."'"));
                    echo '<tr>                                          
                              <td class="alert-info">'.$nome.'</td>
                              
                              <td class="alert-warning">R$ '.$preco.'</td>
                              
                              <p class="alert-danger">
                                <td class="alert-warning">
                                  <form action="carrinho_cliente.php" method="POST">
                                    <input type="hidden" name="acao" value="del"/>
                                    <input type="hidden" name="idItem" value="'.$id.'" />
                                    <input type="hidden" name="idProduto" value="'.$id.'" />
                                    <input type="hidden" name="idVenda" value="'.$idVenda.'" />
                                    <button type="submit">X</a>
                                  </form>
                                </td>
                              </p>
                          </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                  echo '<tr>                               
                          <td colspan="2" class="alert-danger">Total</td>
                          <td class="alert-danger">R$ '.$total.'</td>
                        </tr>';
          }
        ?>
      </tbody>
  <!-- </form> -->
    </table>
  <?php include ("rodape.php");?>
</body>
</html>