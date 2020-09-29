<?php
include('cabecalho.php');
$conexao=mysqli_connect("localhost", "root", "","cosmeticos") or die(mysql_error()); ?>
<section class="newsletter container bg-black">
 <h2 class="alert-info">Alterar Informações dos Produtos! </h2>
<form  class="form-horizontal" name="form_alterar" method="POST" action="alterar_2.php">
<?php
  $idAlt=$_GET['id'];
 $resultado=mysqli_query($conexao, "SELECT * FROM produtos where id_produtos='$idAlt'");
 if($resultado){
    while($row=mysqli_fetch_assoc($resultado)){
    ?>	
  
    <input class="input-sm" readonly="true" type="hidden" id="id_prod" name="id_produtos" value="<?php echo $row['id_produtos']; ?>" />
 <br>
    
   <input class="input-sm" type="text"  id="nome_prod" name="nome_prod" value="<?php echo $row['nome_prod']; ?>" size="30" />
     <br>
   <input class="input-sm"  type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" size="25"/> <br>

    <input  cclass="input-sm"   type="number"  id="estoque" name="estoque" value="<?php echo $row['estoque'];?>" size="20"/> <br>
    <?php
    }
 }
?>
   <input type="submit" class="btn-danger"  name="alterar" value="Alterar" />
</form>
</section>
	

<?php
mysqli_close($conexao);
?>
<?php include('rodape.php');?>
</<body>
  
</html>