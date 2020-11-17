<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('cabecalho.php');?>
	<title>SOS Educa - login</title>
	


</head>

<body>

<?php include('navbar.php');?>
	
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login Clientes</h3>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seu Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Sua Senha *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="btnForgetPwd">Esqueceu a Senha?</a>
                        </div>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="images/sos.gif" alt=""/>
                    </div>
                    <h3>Login Administrador</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seu Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Sua Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="btnForgetPwd" value="Login">Esqueceu a Senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include ("rodape.php");?>

    </body>
</html>