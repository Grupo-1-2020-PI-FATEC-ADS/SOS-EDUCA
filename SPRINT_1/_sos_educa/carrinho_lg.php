<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php include('cabecalho.php');?>
	<h1 align="center" class="h1">
<a href="index.php#compras" align='left'><img src="imagens/icone_carrinho.jpg" width="50px" height="50px"></a>
Carrinho de compras
</h1>
<?php 
session_start();

if(@$_POST['compra']=="Finalizar Compra"){
 echo "<script>window.location.href='finalizarcompra.php?produtos=".$_POST['produtos']."&valortotal=".$_POST['valorfinal']."'</script>";
}


unset($_SESSION['quantidade'.@$_GET['nome']]);

$con= mysqli_connect("localhost","root","","sos_educa");
$query= mysqli_query($con,"select estoque from produtos");
if(empty($_POST['atualizar'])){
while($linha= mysqli_fetch_array($query)){
	$nome= $linha['nome_prod'];
		if(@$_POST[$nome]!=""){
			$explode = explode("/", $_SESSION['produtos']);
			foreach ($explode as $key => $value) {
				if($value==$nome){
					$cadastrar="não";
				}
			}
			if(@$cadastrar!="não"){
			$_SESSION['produtos'] = $_SESSION['produtos']."/".$nome ;
		}
		}
}
if (@$cadastrar=="não") {
	$explode = explode("/", $_SESSION['produtos']);
			foreach ($explode as $key => $value) {
	@$quantidade = $_POST[$value];
	
	@$_SESSION['quantidade'.$value]=$_SESSION['quantidade'.$value]+$quantidade;

			}
}

}else{
	while($linha= mysqli_fetch_array($query)){
		$explode = explode("/", $_SESSION['produtos']);
			foreach ($explode as $key => $value) {
				$_SESSION['quantidade'.$value]=@$_POST[$value];
			
	}
}
}
?>
<form action="compra.php" method="POST">
<table class='table table-striped'>

<tr><th>Nome</th><th>Quantidade</th><th>Preço unitário</th><th>Subtotal</th><th>Excluir do carrinho</th>
<?php
$explode = explode("/", $_SESSION['produtos']);
$valorfinal=0;
$produtos="";
foreach ($explode as $key => $value) {
	@$quantidade = $_POST[$value];
	@$qtd = $_SESSION['quantidade'.$value];
	$max = mysqli_fetch_array(mysqli_query($con,"select * from produtos where nome_prod='".$value."'"));
	if($qtd!=0){
		$total = $qtd * $max['valor'];
	echo "<h2><tr><td>$value</td><td><input type='number' class='form-control' max='".$max['quantidade']."' name='$value' width='50' value='".$qtd."'></td><td>R$".number_format($max['valor'],2,",",".")."</td><td>R$".number_format($total,2,",",".")."</td><td><a href='compra.php?nome=".$value."'><div class='glyphicon glyphicon-remove' aria-hidden='true'></div></a></td>";
	$valorfinal = $valorfinal+ $total;
	$produtos = $produtos."-".$value;
	}
}
?>
<tr><td></td><td></td><td></td><th>Total:</th><td><?php echo "R$". number_format($valorfinal,2,",",".") ?> </td>
<input type="hidden" name="valorfinal" value="<?php echo $valorfinal; ?>">
<input type="hidden" name="produtos" value="<?php echo $produtos; ?>">
<tr><td><input class="btn btn-secondary" type="submit" name="atualizar" value="Atualizar"></td>
<td></td><td></td><td></td>
<td><input type='submit' class="btn btn-primary" name="compra" value="Finalizar Compra"></td>
</table>
</form>
</body>
</html>