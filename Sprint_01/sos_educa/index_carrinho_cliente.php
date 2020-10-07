<script type="text/javascript">
      function loginsuccessfully(){
        setTimeout("window.location='carrinho_cliente.php'",5000);
      }
     function loginfailed() {
            setTimeout("window.location='login_clientes.php'",5000);
     }
</script>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOS Educa - Carrinho</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <?php include("cabecalho.php");?>
</head>
<body>
    <?php $conexao=mysqli_connect("localhost", "root", "","sos_educa"); ?>
    
    <h3 style="margin-top: 60px;">Fitros de Pesquisa</h3>
    <form name="cons" method="post" action="index_carrinho_cliente.php">
    <h3>Escolha uma categoria</h3>
      <select name='sel_cat'>
        <?php 
          $resultado=mysqli_query($conexao,"SELECT * FROM categorias");
            while($linha=mysqli_fetch_assoc($resultado)){?>
              <option value="<?php echo $linha['id_cat']; ?>">
              <?php echo utf8_encode($linha['nome_cat']);?></option>
              <?php 
            }
          ?>
      </select> 
      <input type="submit" value="Consultar">
    </form>
  <?php
@$idcat=$_POST['sel_cat'];
$sql="SELECT * FROM produtos WHERE id_categoria='$idcat' ";
$querysql=mysqli_query($conexao,$sql);
while($linha=mysqli_fetch_array($querysql)){
    ?><table class="table table-striped table-bordered table-condensed table-hover" >

    <tr><main class="servicos container">
              <article class="servico bg-white radius">
              <thead>
              <tr>
               <th>Imagem</th>
              <th>Produto</th>
              <th>Preço</th>
              <th>Adcionar</th>
              </tr>
              </thead>
              <tbody>
                 <p class="text-center"><td class="table-responsive"><img class="img-responsive" src="imagens/<?php echo $linha['imagem'];?>"  width="100px"/></td>
                 <div class="inner">
    <td><?php echo '<h4>'.utf8_encode($linha['nome_prod']).'</h4>'?><br></td>
  
      <td><?php echo'<h2>Preço: '. number_format($linha['preco'], 2, ',', '.').'</h2>'?></td>
                <td> <a href="carrinho_cliente.php?acao=add&id='.$linha['id_produtos'].'"> <br>
                 <img class="img-responsive" src="imagens/icone_carrinho.jpg"  />
                 <?php echo '<a href="carrinho_cliente.php?acao=add&id='.$linha['id_produtos'].'"><br><h4><b><i>Comprar</i></b></h4></a>';?></br></a> </td>

       
   
 </tr>

              </tbody>

             
        </div>
            </article>
    </main></tr>
    </table>
 
           <?php
  }   ?>
  <div class="container">
  
  <div class="row">
    <div class="col-sm-6" style="background-color:#0099cc;">
   
    </div>
    <div class="col-sm-6" style="background-color:#0099cc;">
   
    </div>
  </div>
</div>
<?php

//Máximo de registros por páginas
$maximo=4;
//Declaração da pá gina inicial
@$pagina=$_GET['pagina'];
if($pagina==""){
  $pagina="1";
}
//Calculando o registro inicial
$inicio=$pagina - 1;
$inicio=$maximo * $inicio;
$query=mysqli_query($conexao, "SELECT * FROM produtos");
//Conta os resultados no total da query
$total=mysqli_num_rows($query);
########################################
// // INICIO DO CONTEÚDO
//Realizamos a query

$sql=mysqli_query($conexao, "SELECT * FROM produtos LIMIT $inicio,$maximo");
//Exibimos os query dos produtos e seus repectivos valores
while($linha=mysqli_fetch_object($sql)){
?>

<table class="table table-striped table-bordered table-condensed table-hover" >

    <tr><main class="servicos container">
              <article class="servico bg-white radius">
              <thead>
              <tr>
              <th>Imagem</th>
              <th>Produto</th>
              <th>Preço</th>
              <th>Adcionar</th>
              </tr>
              </thead>
              <tbody>

                <tr>
          <p class="text-center"><td class="table-responsive"><img src="imagens/<?php echo $linha->imagem;?>"  width="100px"/><?php echo "<br>"."Descrição"."<h4 class='text-info'>".$linha->descricao."</h1>"; ?></td></p>
          <div class="inner">
          <td><?php echo '<h4> '.utf8_encode($linha->nome_prod);'</h4>'?><br></td>
          <td><?php echo'<h2>Preço: '. number_format($linha->preco, 2, ',', '.').'</h2>'?></td>
                <td class="table-responsive"> <a href="carrinho_cliente.php?acao=add&id='.$linha->id_produtos.'"> <br> <img src="imagens/icone_carrinho.jpg"  /><?php echo '<a href="carrinho_cliente.php?acao=add&id='.$linha->id_produtos.'"><br><h4><b><i>Comprar</i></b></h4></a>';?></br></a> </td>

 </tr>
              </tbody>
        </div>
            </article>
    </main></tr>
    </table>
    <?php }//Fim do loço ?>

    <?php
    //Fim do CONTEÚDO
    ####################################
    $menos=$pagina - 1;
    $mais=$pagina + 1;
    $pgs=ceil($total / $maximo);
    if($pgs > 1){
          echo "<br />";
          //Exibição de página
          if($menos > 0){
            echo  "<a href=" . $_SERVER['PHP_SELF'] . "?pagina=$menos>anterior</a>";
          }//Listando as páginas
          for ($i=1; $i <=$pgs ; $i++) { 
            if($i != $pagina){
               echo "<a href=".$_SERVER['PHP_SELF']. "?pagina=" . ($i) .">$i</a>|";
            }else{
              echo "<strong> " .$i . "</strong>|";
            }//Fim For
            if($mais <= $pgs){
                     echo "<a href=". $_SERVER['PHP_SELF'] . "?pagina=$mais>próximo</a>";
                     }               
            }
           }
           
          
    ?>
  </article>
    </main></h1>
   

  <?php include("rodape.php");?>
 
    </body>
     </html>