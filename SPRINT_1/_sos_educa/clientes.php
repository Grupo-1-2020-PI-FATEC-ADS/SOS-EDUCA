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
    <link href="css/estilo_form2.css" rel="stylesheet">

    <script src="js/jquery/jquery-ui.js"></script>
    <link href="js/jquery/jquery-ui.css" rel="stylesheet">
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
        <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Alterar Dados Cadastrais</a>
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

    
             echo 'saldo de créditos:'.$credito.' créditos';
        ?>
        
        <br>
      

        <p>
        <?php

            $restante = 5 - $credito;

            echo 'Faltam '.$restante.' ponto(s) para o próximo desconto';

            if($restante<=0){
                $desconto = uniqid();
            } else{
                $desconto = "";
            }  
        
        ?>
        <br>
        <?php

                echo 'Cupom de desconto: '.$desconto;

        ?>
            
      
      <div id="dialog" title="Janela de Dialogo">
        <p style="text-align:center">
          <button class="btn btn-danger"> 
            <a href="logout_area_restrita.php">Sair</a>
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
    <br />
        </section>
      
    <?php 
      mysqli_close($conexao);//fecha conexão
      include('rodape.php');
    ?>
</body>
</html>