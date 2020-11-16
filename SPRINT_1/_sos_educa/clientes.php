<div id="sair">
  <?php 
    session_start();
    if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])){
      header("location:login_cliente_geral.php");
      exit;          
    }else{
      echo "<center><h2 class='alert-success'>Bem Vindo ".($_SESSION['nome_cliente'])."</h2></center><br><br>";
    }
    
  ?>
</div>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('cabecalho.php');?>
    <title>Login Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="js/jquery/jquery-ui.js"></script>
    <script>
      $(function() {
        $( "#tabs" ).tabs();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('.dica + span')
          .css({display:'none',
                border: '1px solid #336600',
                padding:'2px 4px',
                background:'#999966',
                marginLeft:'10px'   });
          $('.dica').focus(function() {
            $(this).next().fadeIn(1500);    	 	
          })
          .blur(function(){
            $(this).next().fadeOut(1500);
          });
      });
    </script>

    <?php include('conexao.php');?>
  </head>
  <body>
    <?php include('navbar.php');?>
    <br /><br /><br />
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item active">
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Saldo de Créditos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Histórico Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Alterar Senha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="configuration-tab" data-toggle="tab" href="#configuration" role="tab" aria-controls="configuration" aria-selected="false">Alterar Dados Cadastrais</a>
      </li> 
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade in active" id="home">
        <section class="newsletter container bg-black">
        <?php
        $pesquisa = $_SESSION['id_cliente'];
        $resultado=mysqli_query($conexao,  "SELECT vd.* from vendas as vd  WHERE vd.id_cliente=$pesquisa" );
   
    
            if($resultado){
                $credito = 0;
                while($row = mysqli_fetch_assoc($resultado)){
                $idVenda = $row['id_venda'];
                $itensVendidos=mysqli_query($conexao,  "SELECT it.*,pr.* from itens_venda as it, produtos as pr  WHERE (it.id_produto=pr.id_produto) AND (it.id_venda='$idVenda')" );
                $total = $row['total'];
  
            if($total>20){
                $credito = $credito + 1;
            }else{
                $credito = $credito;
            }
  
   
                }//fim do while
            }//fim do if
            ?>


                   
        <br>
      

        <p>
        <?php

            $restante = 5 - $credito;

            if($restante<=0){
                $desconto = uniqid();
            } else{
                $desconto = "";
            }  
        
        ?>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <div class="card text-white bg-info mb-3" style="height: 18rem;">
              <div class="card-body">
                <?php
 
                  echo "<center><h4 class='card-title'><br><br> Saldo de créditos: </h4></center><br>";
                  echo "<center><h2 class='card-text'>".$credito." créditos </h2></center><br><br>";
                
                ?>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-white bg-warning mb-3" style="height: 18rem;">
              <div class="card-body">
                <?php

                  echo "<center><h4 class='card-title'><br><br> Faltam: </h4></center>";
                  echo "<center><h2 class='card-text'>".$restante." </h2></center>";
                  echo "<center><h4 class='card-text'> ponto(s) para o próximo desconto </h4></center><br><br>";

                ?>
              </div>
            </div>
          </div> 
          <div class="col-sm-4">
            <div class="card text-white bg-success mb-3" style="height: 18rem;">
              <div class="card-body">
                <?php

                  echo "<center><h4 class='card-title'><br><br> Cupom de desconto: </h4></center><br>";
                  echo "<center><h2 class='card-text'>".$desconto." </h2></center><br><br>";

                ?>
              </div>
            </div>
          </div>
        </div> 
         <br>
         <br>
         <br>
         <br>
      <div id="dialog" title="Janela de Dialogo">
        <p style="text-align:center">
          <button class="btn btn-danger"> 
            <a href="logout_clientes.php">Sair</a>
          </button>
        </p>
        </div>
    </div>
    <div class="tab-pane fade" id="profile">
      <?php include("cliente_historico.php") ?>
    </div>
    <div class="tab-pane fade" id="contact">
      <?php include("cliente_senha.php") ?>
    </div> 
    <div class="tab-pane fade" id="configuration">
      <?php include("cliente_cadastro_mudanca.php") ?>
    </div> 
    <br />
        </section>
      
    <?php 
      
      include('rodape.php');
    ?>
</body>
</html>