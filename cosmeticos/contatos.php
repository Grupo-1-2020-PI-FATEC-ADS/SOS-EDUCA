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

  <h3 class="text-center">Contatos</h3>
  
  <div class="row">
    <div class="col-md-4">
      <p>Onde nos Encontrar?</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Fortaleza, CE</p>
      <p><span class="glyphicon glyphicon-phone"></span>Fone: +85 32236314</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: lennecosm@gmail.com</p>
    </div><!-- Add Google Maps -->
<div id="googleMap" class="container">Localização <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.012957861192!2d-38.524621785201575!3d-3.807278044644869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74e540b3d8f57%3A0xb7514ac6ecd252e3!2sArena+Castel%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1466189198681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  <div id="map_canvas" style="width:250px;height:250px,"></div>
  <?php include('rodape.php');?>
</body>
</html>