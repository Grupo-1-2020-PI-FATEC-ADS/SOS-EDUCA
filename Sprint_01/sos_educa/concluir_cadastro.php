<html>
<head><title>Efetuando Cadastro</title>
<?php session_start();?>
<script type="text/javascript">
	    function loginsuccessfully(){
	    	setTimeout("window.location='index.php'",2000);
	    }
	   function loginfailed() {
            setTimeout("window.location='cadastro_cliente.php'",2000);
	   }
	</script>

<?php
$conexao=mysqli_connect("localhost", "root", "","sos_educa") or die(mysql_error()); 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estados = $_POST['estado'];
$num = $_POST['num_casa'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep=$_POST['cep'];

$_SESSION['nome'] = $nome;
$_SESSION['cpf'] = $cpf;
$_SESSION['cep'] = $cep;

$_SESSION['senha'] = $senha;

$_SESSION['rua'] = $rua;
$_SESSION['bairro'] = $bairro;
$_SESSION['cidade'] = $cidade;
$_SESSION['estado'] = $estados;
$_SESSION['num_casa'] = $num;
$_SESSION['telefone'] = $telefone;
$_SESSION['email'] = $email;


@$query1 = mysqli_query($conexao,"SELECT usuario FROM cliente");
@$array1=mysqli_fetch_array($query1);
@$logarray_usuario = $array1['usuario'];

@$query2 = mysqli_query($conexao,"SELECT email FROM cliente");
@$array2=mysqli_fetch_array($query2);
@$logarray_email = $array2['email'];

@$query3 = mysqli_query($conexao,"SELECT cpf FROM cliente");
@$array3=mysqli_fetch_array($query3);
@$logarray_cpf = $array3['cpf'];

 if ($rua == "" || $bairro == "" || $cidade == "") {
         echo "<center><h1><b>Digite o seu  CEP</b></h1></center>";
    ?> <script>setTimeout("window.location='cadastro_cliente.php'",2000);</script> <?php

} else if ($cpf == "000.000.000-00") {

    echo "<center><h1><i>CPF invalido</i></h1></center>";
    ?> <script>setTimeout("window.location='cadastro_cliente.php'",2000);</script> <?php
} else if ($email == $logarray_email) {
         echo "<center><h1><i>Email invalido</i></h1></center>";
  ?><script>setTimeout("window.location='cadastro_cliente.php'",2000);</script><?php

} else if ($cpf == $logarray_cpf) {
   echo "<center><h1><i>CPF invalido</i></h1></center>";
 ?><script>setTimeout("window.location='cadastro_cliente.php'",2000);</script><?php


}else{
$insert = "INSERT INTO cliente VALUES ('','$nome','$cpf','$senha','$cep','$rua','$bairro','$cidade','$estados','$num','$telefone','$email')";

mysqli_query($conexao,$insert);

     echo "<center><h1><i>Cadastrado com sucesso</i></h1></center>";
     ?><script>setTimeout("window.location='index.php'",2000);</script><?php
     session_destroy();
    }  
?>