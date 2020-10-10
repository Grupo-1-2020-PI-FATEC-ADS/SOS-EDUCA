<?php 
$conexao=mysqli_connect("localhost", "root", "","sos_educa") or die (mysql_error()); 
?>
<?php

$fild_nome=$_POST['nome_prod'];
$preco=$_POST['preco'];
$estoque=$_POST['estoque'];
$idcat=$_POST['sel_cat'];
$desc=$_POST['desc'];
$arq=$_POST['arquivo'];

$_arq['pasta'] = 'arquivos/';

$_arq['tamanho'] = 1024 * 1024 * 1024 * 1024 * 1000; // 2Mb

$_arq['extensoes'] = array('jpg', 'png', 'gif' ,'txt','docx','xlsx','mp3','mp4','pdf');

$_arq['renomeia'] = false;

$_arq['erros'][0] = 'Não houve erro';
$_arq['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_arq['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_arq['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_arq['erros'][4] = 'Não foi feito o upload do arquivo';

if (@$_FILES['arquivo']['error'] != 0) {	
  die("Não foi possível fazer o upload, erro:" . $_arq['erros'][$_FILES['arquivo']['error']]);
  exit;
}

@$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_arq['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, xlsx, docx, txt, mp3 ou mp4";
  exit;
}

if (@$_arq['tamanho'] < @$_FILES['arquivo']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 1000Mb.";
  exit;
}

if ($_arq['renomeia'] == true) {
  
  $arq = time().'.pdf';
} else {
 
  $arq = $_FILES['arquivo']['name'];
}
  
if ((move_uploaded_file(@$_FILES['arquivo']['tmp_name'], $_arq['pasta'] . $arq)) && (isset($_POST['nome_prod']))){
	

//Enviar uma query


$cadastraimg=mysqli_query($conexao,"INSERT INTO produtos (id_produtos,nome_prod,preco,estoque,imagem,descricao,id_categoria,arquivo)  VALUES ('','$fild_nome','$preco','$estoque','$nome_final','$desc','$idcat','$arq')");

mysqli_close($conexao);

echo "<script language='javascript' type='text/javascript'>
 	  alert('PRODUTO CADASTRADO COM SUCESSO');window.location.href='admin.php';
 	</script>";
	
  echo "Cadastro efetuado com sucesso!";

} else {
  
  echo "Não foi possível enviar o arquivo, tente novamente";
}?>
