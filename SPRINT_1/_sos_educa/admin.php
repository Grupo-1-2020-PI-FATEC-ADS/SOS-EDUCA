<div id="sair">
  <?php 
    session_start();
    if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
      header("location:login_area_restrita.php");
      exit;          
    }else{
      echo "<center><h2 class='alert-success'>Bem Vindo ".($_SESSION['nome_func'])."</h2></center><br><br>";
    }
    
  ?>
</div>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('cabecalho.php');?>
    <title>Login Administrador</title>

   

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
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cadastro de Produtos e Controlador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Controle de Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Controle de Vendas</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade in active" id="home">
        <section class="newsletter container bg-black">
          <h2 class="alert-info">Cadastro de Produtos da Loja</h2>
            <form action="cadastrar_produtos.php" class="form-group" method="post" enctype="multipart/form-data" name="upload_insere">
              <div class="col-md-12">
                <label class="col-md-12">Selecione o arquivo conteúdo para Upload</label>
                <div class="input-group col-md-6">
                  <span class="input-group-addon" id="sizing-addon2"><span class="fas fa fa-upload"> </span></span>
                  <input type="file" name="arquivo" class="form-control" aria-describedby="sizing-addon2" />
                </div>
              </div>
              <div class="col-md-12">
                <label class="col-md-12">Selecione a imagem para Upload</label>
                  <div class="input-group col-md-6">
                    <span class="input-group-addon" id="sizing-addon2"><span class="fa fa-picture-o"> </span></span>
                    <input type="file" name="imagem" class="form-control" aria-describedby="sizing-addon2" />
                  </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <h4>Selecione a Categoria do Produto</h4>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <select name="sel_cat" class="form-control">
                    <?php
                      $resultado=mysqli_query($conexao,"SELECT * FROM categorias");
                        while($linha=mysqli_fetch_assoc($resultado)){
                    ?>
                        <option value="<?php echo $linha['id_cat']; ?>">
                          <?php echo ($linha['nome_cat']);?>
                        </option>
                      <?php 
                      }?>
                  </select> 
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <input class="input-group form-control" type="text" name="nome_prod" placeholder="Digite o nome do produto" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <input class="input-group form-control" type="text" name="preco" placeholder="Digite o preço">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                    <textarea name="desc" class="form-control" placeholder="Realize uma descrição do produto"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                    <button class="btn btn-info "> Cadastrar </button>
                </div>
              </div>
            </form>
            <div id="tabs-2" class="text-center">
          <h1 class="alert-warning">Controlador de produtos</h1>
            <table class="table table-striped table-bordered table-condensed table-hover" >
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Quantidade</th> 
                  <th>Alterar</th> 
                  <th>Excluir</th>
                </tr>
              </thead>
              <?php
                $resultado=mysqli_query($conexao,  "SELECT * FROM produtos");
                  if($resultado){
                    while($row = mysqli_fetch_assoc($resultado)){
              ?>
                      <tbody>
                          <tr>
                            <td>
                              <?php echo "<p></p>".($row['nome_prod']);?>
                            </td>
                            <td>
                              <?php echo "<p></p>".($row['preco']);?>
                            </td>
                            <td>
                              <?php echo "<p></p>".($row['estoque']);?>
                            </td>
                            <td>
                              <a href="alterar.php?id=<?php echo $row['id_produto'];?>"><span class="fa fa-pencil"></span></a>
                            </td>
                            <td>
                              <a href="excluir.php?id=<?php echo $row['id_produto'];?>"><p><span class="fa fa-trash"></span></p></a>
                            </td>
                          </tr>
                      </tbody>
              <?php
                  }//fim do while
                }//fim do if
              ?>
            </table>
      </div>
      <div id="dialog" title="Janela de Dialogo">
        <p style="text-align:center">
          <button class="btn btn-danger"> 
            <a href="logout_area_restrita.php">Sair</a>
          </button>
        </p>
      </div>
    </div>
    <div class="tab-pane fade" id="profile">
      <?php include("admCliente.php") ?>
    </div>
    <div class="tab-pane fade" id="contact">
      <?php include("admVenda.php") ?>
    </div> 
    <br />
        </section>
      
    <?php 
      mysqli_close($conexao);//fecha conexão
      include('rodape.php');
    ?>
</body>
</html>