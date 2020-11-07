<html lang="pt-br">
<head>
    <title>Editar Cadastro</title>
</head>
<body>
  <?php
    include("conexao.php"); 
  ?>
  <section class="newsletter container bg-black">
    <h2 class="alert-info">Alterar Dados de Cadastro </h2>
      <form class="form-horizontal" name="form_alterar" method="POST" action="alterar_3.php">
        <?php
          $id_cliente=$_SESSION['id_cliente'];
          $resultado=mysqli_query($conexao, "SELECT * FROM cliente where id_cliente = $id_cliente");
          if($resultado){
            while($row=mysqli_fetch_assoc($resultado)){
                ?>
              <input class="form-control" type="text" id="nome_cliente" name="nome_cliente" value="<?php echo $row['nome']; ?>" size="30"/>
              <br >
              <input class="form-control" type="text" id="cep" name="cep" value="<?php echo $row['cep']; ?>"/>
              <br >
              <input class="form-control" type="text" id="num_casa" name="num_casa" value="<?php echo $row['num_casa']; ?>" size="30" />
              <br >
              <input class="form-control" type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>" size="30" />
              <br >
              <input class="form-control" type="text" id="email" name="email" value="<?php echo $row['email']; ?>" size="30" />
              <br >
             
          <?php
            } //fim while
          }//fim if
          mysqli_close($conexao);
          ?>
        <p class="text-center">
            <input type="submit" value="Alterar" name="Alterar" class="btn btn-primary" >
        </p>
        
      </form>
  </section>

</body>
</html>

