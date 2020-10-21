
<script type="text/javascript">
      function loginsuccessfully(){
        setTimeout("window.location='logout_carrinho.php'",5000);
      }
     function loginfailed() {
            setTimeout("window.location='login_clientes.php'",5000);
     }
</script>
<?php session_start();
 $conexao=mysqli_connect("localhost", "root", "","sos_educa");


if(!isset($_SESSION['carrinho_cliente'])){ 
	$_SESSION['carrinho_cliente'] = array();
}  
if(isset($_POST['acao'])){

   $id_cliente = $_SESSION['id_cliente'];
   $forma_pagamento =  $_SESSION['forma_pagamento'];
   //$forma_pagamento = "'".$forma_pagamento."'";
   $data_venda = date('Y-m-d');
   //$data_venda = "'".$data_venda."'";
   
   if($_POST['acao'] == 'add'){
     $id = intval($_POST['id']);
     $query_insert = "insert into vendas (id_venda,id_cliente ,total, data_venda, forma_pagamento) VALUES(null,'$id_cliente', '$total', '$data_venda', '$forma_pagamento')";
                                
      $query_preparada = mysqli_prepare($conexao, $query_insert);                                  
      mysqli_stmt_execute($query_preparada);
      $idVenda= mysqli_insert_id($conexao); 
   if(!isset($_SESSION['carrinho_cliente'][$id])){
     $_SESSION['carrinho_cliente'][$id] = 1; 
   }
   else{ $_SESSION['carrinho_cliente'][$id] += 1; } }
      if($_POST['acao'] == 'del'){ 
         $id = intval($_POST['id']); 
         $idVenda = intval($_POST['idVenda']); 
         if(isset($_SESSION['carrinho_cliente'][$id])){ 
            unset($_SESSION['carrinho_cliente'][$id]); 
         } 
      } 
      if($_POST['acao'] == 'up_c'){ 
         if(is_array(@$_POST['prod'])){
            foreach($_POST['prod'] as $id => $qtd){
               $id  = intval($id);
               $qtd = intval($qtd);
               if(!empty($qtd) || $qtd <> 0){
                  $_SESSION['carrinho_cliente'][$id] = $qtd;
               }
               else{
                  unset($_SESSION['carrinho_cliente'][$id]);
               }   
            }
         }
      }     
   }
?>
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <?php include("conexao.php");?>
      <?php include("cabecalho.php");?>
      <title>Carrinho de compras</title>
      <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
   </head>
 
   <body>
      <?php include("navbar.php");?>
      <?php (include("progresso.php"))(0);?>
      <h5>
         <table style="margin-left: 20%;" class="table-responsive">
            <div class="page-header">
                  <div class="alert alert-info" role="alert">
                     <div style='text-align:center'>
                     <h2 class="text-primary"> <b> Carrinho de Compras </b></h2>
                     <br>
                     </div>
                  </div>
            </div>
            <thead  class="table-responsive">
               <tr class="table-responsive">             
                  <th class="table-responsive">Produto</th>
                  <th class="table-responsive">Quantidade</th>
                  <th class="table-responsive" >Pre&ccedil;o</th>
                  <th class="table-responsive" >SubTotal</th>
                  <th class="table-responsive" >Excluir</th>
               </tr>
            </thead>
      <!-- <form  class="form-group" action="?acao=up_c" method="post"> -->
         <tfoot class="table-responsive">         
            <tr class="table-responsive">     
               <p class="alert-warning">
                  <td  class="table-responsive" >
                     <input type="submit" value="Atualizar Carrinho" class="text-center" />
                  </td>
               </p>
               <td class="table-responsive">
                  <a href="index_carrinho_cliente.php">Continuar Comprando</a>
               </td>
               <br>
               <p class="btn-success">
                  <td  class="table-responsive">
                     <a href="decisao.php" >Finalizar Compra</a>
                  </td>
               </p>
            </tr>
         </tfoot>
         <tbody class="table-responsive">
            <?php
               if(count($_SESSION['carrinho_cliente']) == 0){
                  echo '<tr><td colspan="5">Não há produto no carrinho</td></tr >';      
               }else{
                  $conexao=mysqli_connect("localhost", "root", "","sos_educa");
                 
                     $total = 0;
                     
                        foreach($_SESSION['carrinho_cliente'] as $id => $qtd){         
                           $sql   = "SELECT * FROM produtos WHERE id_produtos='$id' ";
                           
                           $qr    = mysqli_query($conexao, $sql) or die(mysqli_error());
                          
                           $ln    = mysqli_fetch_assoc($qr);
                           $nome  = ($ln['nome_prod']);
                           $i  = $ln['id_categoria'];
                           $preco = number_format($ln['preco'], 2, ',', '.');
                           $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                           $preco_sql =  number_format($ln['preco'], 2, '.', ',');
                           $data= date("d/m/Y");
                           $total += $ln['preco'] * $qtd;
                          
                           if(isset($_POST['enviar'])){
                              
                              /*if($qtd<=0){
                                 
                                 echo "<script language='javascript' type='text/javascript'>
                                          alert('Quantidade insuficiente para compra!');window.location.href='carrinho_cliente.php';
                                       </script>";  
                              }else{*/
                                 $atualiza=mysqli_query($conexao, "update produtos set estoque=estoque - '$qtd' where id_produtos='$id' ");    
                                 $query_Item = "insert into itens_venda(id_venda,id_produto,qtd_item,valor_unitario)VALUES('$idVenda','$id','$qtd','$preco_sql') ";
                                 $SqlInserirItens =mysqli_query($conexao, $query_Item);
                                 //print($query_Item);
                                // $query_preparada = mysqli_prepare($conexao, $SqlInserirItens);                                  
                                 //mysqli_stmt_execute($query_preparada);
                                 // echo "<script language='javascript' type='text/javascript'>
                                 //          alert('Para Confimar dados da Compra!');window.location.href='decisao.php';
                                 //       </script>";
                              //}
                           }
                           $max = mysqli_fetch_array(mysqli_query($conexao,"select * from produtos where nome_prod='".$nome."'"));
                              echo '<tr>                                          
                                       <td class="alert-info">'.$nome.'</td>
                                       <td class="alert-warning">
                                          <input type="number"  class="form-control" name="prod['.$id.']" value="'.$qtd.'" />
                                       </td>
                                       <td class="alert-warning">R$ '.$preco.'</td>
                                       <td class="text-success">R$ '.$sub.'</td>
                                       <p class="alert-danger">
                                          <td class="alert-warning">
                                          <form action="carrinho_cliente.php" method="POST">
                                          <input type="hidden" name="acao" value="del"/>
                                          <input type="hidden" name="id" value="'.$id.'" />
                                          <input type="hidden" name="idVenda" value="'.$idVenda.'" />
                                          
                                             <button type="submit">X</a>
                                             </form>
                                          </td>
                                       </p>
                                    </tr>';
                        }
                        $atualizaVenda=mysqli_query($conexao, "update vendas set total= '$total' where id_venda='$idVenda' ");   
            $total = number_format($total, 2, ',', '.');
               echo '<tr>                               
                        <td colspan="4" class="alert-danger">Total</td>
                        <td class="alert-danger">R$ '.$total.'</td>
                     </tr>';
            }
         ?>
         <?php  function cadastrar() {
            if(isset($_POST['enviar'])){
                  $SqlInserirVenda= mysqli_query($conexao, "insert into vendas(id_venda, id_cliente ,total, data_venda, forma_pagamento) VALUES('$id_venda', '$id_cliente', '$total', '$data_venda', '$forma_pagamento') ");
                  $idVenda= mysqli_insert_id($link);
                  foreach($_SESSION['carrinho'] as $prod => $qtd):
                  $SqlInserirItens =mysqli_query($conexao ,"insert into itens_venda(id_venda,id,id_prod,nome_prod,qtd)VALUES('$idVenda' ,'','$id'  ,'$prod','$qtd') ");
                  endforeach;
                  echo 'F';
               }
            }
         ?>
      </tbody>
      <!-- </form> -->
    </table>
   </h5> 
   <?php include ("rodape.php");?>
   </body>
</html>