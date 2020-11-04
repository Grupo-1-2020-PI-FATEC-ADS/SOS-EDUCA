<?php include("conexao.php");?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
  <?php include('cabecalho.php');?>
  <title>SOS EDUCA - Início</title>
</head>
<body class="btn-success">
  <?php include('navbar.php') ?>
  <div  style="margin-top: 60px;" class="container">    
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
