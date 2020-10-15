<!DOCTYPE html>
<html>
<head>
  <?php include("cabecalho.php") ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SOS EDUCA - Contatos</title>
</head>
<body>
  <?php include("navbar.php") ?>

  <h3 class="text-center">Contatos</h3>
  
  <div class="row">
    <div class="col-md-4">
      <p>Onde nos Encontrar?</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>São José dos Campos, SP</p>
      <p><span class="glyphicon glyphicon-phone"></span>Fone: +12 000000000</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: sos_educa@gmail.com</p>
    </div><!-- Add Google Maps -->
<div id="googleMap" class="container">Localização <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.2193304192465!2d-45.79748818539412!3d-23.162193752856624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4c498567cf5d%3A0xf9cf22ea7d377dca!2sFATEC%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20Prof.%20Jessen%20Vidal!5e0!3m2!1spt-BR!2sbr!4v1602017374570!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <div id="map_canvas" style="width:250px;height:250px,"></div>
</div>
  <?php include('rodape.php');?>
</body>
</html>