<?php include("conexao.php");?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
  <?php include('cabecalho.php');?>
  <script src="js/vue.min.js"></script>
	<script src="js/vue-resource.min.js"></script>
  <title>SOS EDUCA - Início</title>

  <style>
    .text--black {
      color: black;
    }
  </style>
</head>

<body class="btn-success">
  <?php include('navbar.php') ?>
    <div  style="margin-top: 60px;" id="t" class="container"> 

    <script type="text/javascript">
        $(document).ready(function() {
          var cookie = document.cookie
          if (!cookie.includes('accept=true')) {
            $('#myModal').modal('show');
          } else {
            alert('tem cookie')
          }
          
        });

        function close() {
          $('#myModal').modal('hide');
        }

        function accept() {
          document.cookie = "accept=true";
          close();
        }
    </script>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text--black" id="myModalLabel">Melhore sua experiência</h4>
          </div>
          <div class="modal-body">
            <p class="text--black">Ao navegar neste site, você aceita os cookies que usamos para melhorar a sua experiência.</P>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" onclick="accept()"data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="accept()">Aceito</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/Português.png" class="img-responsive" class="rounded mx-auto d-block" style="width:75%" alt="Image"></div>
          <div class="panel-footer"><p class="text-danger">Resumo de Português</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
        </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-danger">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/Matemática (5).png" class="img-responsive" style="width:75%" alt="Image" ></div>
          <div class="panel-footer"><p class="text-danger">Resumo de Matemática</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
          </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-success">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/AOC (2).png" class="img-responsive" class="rounded mx-auto d-block" style="width:75%" alt="Image"></div>
          <div class="panel-footer"><p class="text-danger">Resumo Arquitetura e Organização</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/logicaProgramacao.jpeg" class="img-responsive" class="rounded mx-auto d-block" style="width:75%" alt="Image"></div>
          <div class="panel-footer"><p class="text-danger">Resumo de Lógica de Programação</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/Algoritimo.jpeg" class="img-responsive" class="rounded mx-auto d-block" style="width:75%" alt="Image"></div>
          <div class="panel-footer"><p class="text-danger">Resumo de Algoritmo</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Ofertas</div>
          <div class="panel-body"><img style="width: 100%;" src="imagens/ingles.jpeg" class="img-responsive" class="rounded mx-auto d-block" style="width:75%" alt="Image"></div>
          <div class="panel-footer"><p class="text-danger">Resumo de Inglês</p></div>
          <a style="margin-left:30%; font-size:30px" href="index_carrinho_cliente.php">Veja Mais</a>
        </div>
      </div>
    </div>
  </div>
  <br/><br/><br/>
  <?php include("rodape.php")?>
</body>
</html>
