<script type="text/javascript">
      function loginsuccessfully(){
        setTimeout("window.location='logout_carrinho.php'",5000);
      }
     function loginfailed() {
            setTimeout("window.location='login_clientes.php'",5000);
     }
  </script>
<?php session_start(); 
if(!isset($_SESSION['carrinho_cliente'])){ 
	$_SESSION['carrinho_cliente'] = array();
   }  if(isset($_GET['acao'])){
    if($_GET['acao'] == 'add'){
     $id = intval($_GET['id']); 
 if(!isset($_SESSION['carrinho_cliente'][$id])){
  $_SESSION['carrinho_cliente'][$id] = 1; 
}else{ $_SESSION['carrinho_cliente'][$id] += 1; } }
 if($_GET['acao'] == 'del'){ $id = intval($_GET['id']); 
 if(isset($_SESSION['carrinho_cliente'][$id])){ 
  unset($_SESSION['carrinho_cliente'][$id]); } } 
  if($_GET['acao'] == 'up_c'){ if(is_array(@$_POST['prod'])){
   foreach($_POST['prod'] as $id => $qtd){
                      $id  = intval($id);
                      $qtd = intval($qtd);
                         if(!empty($qtd) || $qtd <> 0){
                         $_SESSION['carrinho_cliente'][$id] = $qtd;
                      }else{
                         unset($_SESSION['carrinho_cliente'][$id]);
                      }
                     
                   }
                }
             }
           
          }
           
    ?>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

 
    <?php include("cabecalho.php");?>
    <?php include("conexao.php");?>
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Carrinho de compras</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>

    </head>
 
    <body>
  
     <h5>
<table class="table-responsive"  >
         
<caption class="text-center">Carrinho de Compras</caption>
 
 
<thead class="table-responsive">
 
<tr class="table-responsive">
                 
<th class="table-responsive">Produto</th>
 
 
<th class="table-responsive">Quantidade</th>
 
 
<th class="table-responsive" >Pre&ccedil;o</th>
 
 
<th  class="table-responsive" >SubTotal</th>
 
 
<th class="table-responsive" >Excluir</th>
 
              </tr>
 
        </thead>
 </h4>

<form  class="form-group" action="?acao=up_c" method="post">
 

<tfoot class="table-responsive">
                
<tr class="table-responsive">
                 
<p class="alert-warning"><td  class="table-responsive" ><input type="submit" value="Atualizar Carrinho" class="text-center" /></td></p>
 
<td class="table-responsive"><a href="index_carrinho_cliente.php">Continuar Comprando</a></td><br>
 <p class="btn-success"><td  class="table-responsive"><a href="decisao.php" ><input  class="input-group" type="submit" value="finalizar Compras" name="enviar"  onclick="<?php cadastrar()?>" /></a></td></p>
 
 </tr>
        </tfoot>
<tbody class="table-responsive">
                   <?php
                         if(count($_SESSION['carrinho_cliente']) == 0){
                            echo '
<tr>
<td colspan="5">Não há produto no carrinho</td>
</tr >
';
                         }else{
                  $conexao=mysqli_connect("localhost", "root", "","cosmeticos");
                             $total = 0;
                            foreach($_SESSION['carrinho_cliente'] as $id => $qtd){
                                  $sql   = "SELECT * FROM produtos WHERE id_produtos='$id' ";
                                  $qr    = mysqli_query($conexao, $sql) or die(mysqli_error());
                                  $ln    = mysqli_fetch_assoc($qr);
                                   
                                  $nome  = utf8_encode($ln['nome_prod']);
                                      $i  = $ln['id_categoria'];
                                  $preco = number_format($ln['preco'], 2, ',', '.');
                                  $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                               $data= date("d/m/Y");

                                  $total += $ln['preco'] * $qtd;
                          if(isset($_POST['enviar'])){

                            if($qtd<=0){
echo "<script language='javascript' type='text/javascript'>
    alert('Quantidade insuficiente para compra!');window.location.href='carrinho_cliente.php';
  </script>";  }else{
 $atualiza=mysqli_query($conexao, "update produtos set estoque=estoque - '$qtd' where id_produtos='$id' ");    
/*$inseri_vendas=mysqli_query($conexao, "insert into vendas VALUES('','','$total','$qtd')");*/
/*   $idVenda= mysqli_insert_id($conexao);

$SqlInserirItens =mysqli_query($conexao, "insert into itens_venda(id_venda,id,id_prod,nome_prod,qtd,id_cat,data_compra)VALUES('$idVenda' ,'','$id','$nome','$qtd','$i','$data') ");*/
echo "<script language='javascript' type='text/javascript'>
    alert('Para Comfimar dados da Compra!');window.location.href='decisao.php';
  </script>";

}}
$max = mysqli_fetch_array(mysqli_query($conexao,"select * from produtos where nome_prod='".$nome."'"));

                               echo '
<tr>                                          
<td class="alert-info">'.$nome.'</td>

<td class="alert-warning"><input type="number"  class="form-control" max="'.$max['estoque'].'"  name="prod['.$id.']" value="'.$qtd.'" /></td>
 
<td class="alert-warning">R$ '.$preco.'</td>
 
<td class="text-success">R$ '.$sub.'</td>
 
<p class="alert-danger"><td class="alert-warning"><a href="?acao=del&id='.$id.'">X</a></td></p>
                                  </tr> 
';
                            }
                               $total = number_format($total, 2, ',', '.');
                               echo '
<tr>                               
<td colspan="4" class="alert-danger">Total</td>
<td class="alert-danger">R$ '.$total.'</td>
 
                                  </tr>
';
                         }
    
                   ?>
         <?php  function cadastrar() {

if(isset($_POST['enviar'])){
   $SqlInserirVenda= mysqli_query($conexao, "insert into vendas(id ,total) VALUES('','$total') ");
   $idVenda= mysqli_insert_id();
   foreach($_SESSION['carrinho'] as $prod => $qtd):
           $SqlInserirItens =mysqli_query($conexao ,"insert into itens_venda(id_venda,id,id_prod,nome_prod,qtd)VALUES('$idVenda' ,'','$id'  ,'$prod','$qtd') ");
    endforeach;
   echo 'F';

}
 
   }
?>
</tbody>
 
            </form>

    </table></h5> 
 <?php include("rodape.php");?>
    </body>
    </html>