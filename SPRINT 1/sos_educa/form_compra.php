<?php include ('cabecalho.php');?>

<?php 
session_start(); 
if(!isset($_SESSION['carrinho_cliente'])){ 
	$_SESSION['carrinho_cliente'] = array();
   }  if(isset($_GET['acao'])){
    if($_GET['acao'] == 'add'){
     $id = intval($_GET['id']); 
 if(!isset($_SESSION['carrinho_cliente'][$id])){
  $_SESSION['carrinho_cliente'][$id] = 1; 
}else{ $_SESSION['carrinho_cliente'][$id] += 1; } }
 if($_GET['acao'] == 'del'){ $id = intval($_GET['id']); 
 if(isset($_SESSION['carrinho_cliente'][$id])){ 
  unset($_SESSION['carrinho_cliente'][$id]); } } 
  if($_GET['acao'] == 'up_c'){ if(is_array(@$_POST['prod'])){
   foreach($_POST['prod'] as $id => $qtd){
                      $id  = intval($id);
                      $qtd = intval($qtd);
                         if(!empty($qtd) || $qtd <> 0){
                         $_SESSION['carrinho_cliente'][$id] = $qtd;
                      }else{
                         unset($_SESSION['carrinho_cliente'][$id]);
                      }
                     
                   }
                }
             }
           
          }
           
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
	<script src="js/vue.min.js"></script>
	<script src="js/vue-resource.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	 <script> 
        function Mascara(objeto){
           if(objeto.value.length==0)
              objeto.value='(' +objeto.value;

              	if(objeto.value.length==3)
              		objeto.value= objeto.value +')';
                   
                   if(objeto.value.length==9)
                       objeto.value=objeto.value +'-';     
        }	 
       </script>

              <script> 
        function Mascara_cpf(objeto){

           if(objeto.value.length==0)
              objeto.value='' +objeto.value;

              	if(objeto.value.length==3)
              		objeto.value= objeto.value +'.';

                   if(objeto.value.length==7)
              		objeto.value= objeto.value +'.';
                    

                   if(objeto.value.length==11)
                       objeto.value=objeto.value +'-';     
        }	 
       </script>
       <script>
function Mascara_cpf(objeto){

           if(objeto.value.length==0)
              objeto.value='' +objeto.value;

              	if(objeto.value.length==3)
              		objeto.value= objeto.value +'.';
                   if(objeto.value.length==7)
              		objeto.value= objeto.value +'.';
                    

                   if(objeto.value.length==11)
                       objeto.value=objeto.value +'-';     
        }	 
       </script>
       

<script>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if ((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

<script type="text/javascript">
       function Mascara_cep(objeto){
 
           if(objeto.value.length==0)
              objeto.value='' +objeto.value;


                   if(objeto.value.length==5)
                       objeto.value=objeto.value +'-';     
        }	 
       </script>
</head>
<body>
<div class="jumbotron">
	<form  class="form-horizontal" action="logout_carrinho.php" method="post">
<div class="text-center"><div class="text-info"><h1>Formulário de Compra</h1></div></div>
<label class="control-label">Digite seu nome:</label> <input type="text" name="nome_cli" class="form-control" value="<?php echo @$_SESSION['nome']?>" required><br>
<label class="control-label">CPF</label> <input type="text" name="cpf" class="form-control" value="<?php echo @$_SESSION['cpf'];?>" onKeypress="Mascara_cpf(this); return SomenteNumero(event);" maxlength="14" placeholder="xxx.xxx.xxx-xx" required><br>
                <label>CEP</label>
                	
					<input type="text" v-model="cep" id="cep" class="form-control" placeholder="Digite seu CEP" 
					 onKeypress = "Mascara_cep(this); return SomenteNumero(event);" maxlength="9" required><br>
						<p v-show="erro" class="help-block">Não encontrado!</p>
					
					
						<button class="btn btn-success" @click="send($event)">Buscar</<button></button>
						<br>
					
			
					
						<label >Rua</label>
						<input type="text" name="rua" v-model="resultado.logradouro" id="lougradouro" class="form-control" value="<?php echo @$_SESSION['rua']?>"  required><br>
                                                                <label>Nº da casa</label>
					    <input type="number" name="num" class="form-control" value="<?php echo @$_SESSION['num']?>" 
					      onKeypress='return SomenteNumero(event)' placeholder="número da casa" required><br>					
					
						<label>Bairro</label>
						<input type="text" name="bairro" v-model="resultado.bairro" id="bairro" class="form-control" value="<?php echo @$_SESSION['bairro']?>"  required><br>

              <label>Contato</label>
              <input type="text" name="tel" class="form-control" maxlength="14" onKeypress="Mascara(this); return SomenteNumero(event);" placeholder="(xx)xxxxx-xxxx" value="<?php echo @$_SESSION['tel']?>" required><br>

              
          
			</div>
<p class="text-center"><input type="submit" class="btn-close btn" value="Enviar"></p></div>
     <?php include('rodape.php');?>
</body>
</html>