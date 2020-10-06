<?php include ('cabecalho.php');
	   date_default_timezone_set('America/fortaleza');
?>


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
   <!DOCTYPE html>
   <html>
   <head>
   	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<title></title>
   	<style>
@media print {
    html, body {
        margin: 0;
        padding: 0;
        border: 0;
    }
    #printable {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 14px;
    }
    #printable ~ * {
        display: none;
    }
}</style>
   	<script>
   	function printBy(selector){
    var $print = $(selector)
        .clone()
        .addClass('print')
        .prependTo('body');

    // Stop JS execution
    window.print();

    // Remove div once printed
    $print.remove();
}
   	</script>
   	<script>
function cont(){
var conteudo = document.getElementById('print').innerHTML,
tela_impressao = window.open('about:blank');
tela_impressao.document.write(conteudo);
tela_impressao.window.print();
tela_impressao.window.close();

}
</script>
   </head>
   <body>
      <div id="print" class="conteudo">
          <div class="container text-center">
      <text><img  src="imagens/logo6.png" alt="placeholder+image" height="40px" width="80px">
     <h4>
<table class="table-responsive"  >
         
<caption class="text-center">Dados da Venda</caption>
 
 
<thead class="table-responsive">

<tr class="table-responsive">
  
<th class="table-responsive">Produtos</th>

<th class="table-responsive">Quantidade</th>

<th class="table-responsive" >Pre&ccedil;o</th>

<th  class="table-responsive" >SubTotal</th>
              </tr>

        </thead>
 </h3>
<tfoot class="table-responsive">
<div class="container">    
<tr class="table-responsive">
               <h1 class="text-info">Nota Fiscal de Venda</h1> 
    
 </tr>
        </tfoot>
<?php 

   if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
      
   }else{

   }
?><?php
	   $data= date("d/m/Y");
	   $hora=date("H:i:s");
@$nome_cli=$_POST['nome_cli'];
	    
	   echo "<b>"." CNPJ "."</b>"."00.000.000/0000-00"."<br>";
	   echo "<b>"."Endereço: "."</b>"."Avenida Cesare Monsueto Giulio Lattes"." - " ."Nº "."1350"." - "."Eugênio de Melo"."<br>";
	    echo "Data: " .$data;
	   echo "  Hora: ".$hora."<br>";
	echo   "<div class='container'>
  
  <div class='row'>
    <div class='col-sm-12' style='background-color:#0099cc;'>
   
    </div>
    <div class='col-sm-12' style='background-color:#0099cc;'>
   
    </div>
  </div>
</div>";

	     echo "<br>"."Nome do Comprador:"."<h2 class='text-danger'>".utf8_encode(@$_SESSION['nome_cliente'])."</h2>";
	     echo @$nome_cli;
	     ?>
	   
<tbody class="table-responsive">
  
                   <?php
                         if(count($_SESSION['carrinho_cliente']) == 0){
                            echo '
<tr>
<td colspan="5">Não há produto no carrinho</td>
</tr >

 
';
                         }else{
                  $conexao=mysqli_connect("localhost", "root", "","sos_educa");
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

                               echo '
<center>
<tr class="text-center">       
 
<td class="alert-info">'.$nome.'</td>


<td class="alert-warning"><input type="text" readonly="true" class="form-control"  name="prod['.$id.']" value="'.$qtd.'" /></td>
 
 
<td class="alert-warning">R$ '.$preco.'</td>
 
 
<td class="text-success">R$ '.$sub.'</td>
 

 
                                  </tr>
';
                            }
                               $total = number_format($total, 2, ',', '.');
                               echo '
<tr>
                                         
<td colspan="3" class="danger">Valor Total da Compra</td>
 
 <td class="danger">R$ '.$total.'</td>

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
   
    </table></h3>
  <img src="imagens/cod_barra3.jpg" alt="codigo_de_barra" class="img-responsive"  >
  <br><br>
  <br>
 
</div>
</div>
</div>
<div class="text-center"><input type="button" onclick="cont();" class="btn-success btn"  value="Imprimir"> <a href="session_d.php"><button class="btn-danger" >Voltar ao Carrinho</button></a></div>  <br><br>
  <br>

  </body>
  </html>