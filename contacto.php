<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>DosPuntoClick Diseño y desarrollo web prepago - Contactate con 2.C</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans+Condensed:300|Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" href="public/css/normalize.css" />
	<link rel="stylesheet" href="public/css/main.css" />
</head>
<body>
<?php include_once("analyticstracking.php") ?>

<section class="Contenedor-central">
	<?php include("includes/header.php"); ?>

	<section class="Mapa">
		<div class="Cont">
		    <div class="Formulario">
		        <form action="enviar.php" method="post">
		            <input type="text" name="nombre" placeholder="Nombre" required>
  		            <input type="text" name="telefono" placeholder="Teléfono" required>
		            <input type="text" name="email" placeholder="Email" required>
		            <textarea name="mensaje" placeholder="Escribir mensaje"></textarea>
		            <input type="submit" value="ENVIAR" id="boton">
		        </form>
		    </div> <!-- / Formulario -->

		    <div class="ColumnaPresitio">
		    	<h2>Vos y tu empresa pueden tener un sitio web increíble!</h2>
		    	<p>
		    		Totalmente a medida, escalable y que se adapta a todas las resoluciones y dispositivos móviles.
		    	</p>	
		    	<p>
		    		Escribinos y dentro de las próximas 24hs. Te estaremos respondiendo, también podes conocer mas sobre nosotros y sobre nuestro servicio en las redes sociales.
		    	</p>
		    	<p>
		    		Vas a poder abonar con tarjeta y hasta en 12 cuotas sin interés.
		    	</p>
		    	<p>No dejes de consultar los términos y condiciones de nuestro servicio</p>
		    	<p>Ver políticas del sitio: <a href="terminos-y-condiciones.php">acá</a></p></p>
		    </div> <!-- / ColumnaPresitio -->

		</div> <!-- / Cont --> 
		<h2 class="Paises">Contactate a: <a href="mailto:contacto@dospuntoclick.com">contacto@dospuntoclick.com</a></h2>
		<h2 class="Paises">Contamos con clientes en Argentina, Brasil, México y Uruguay</h2>
	</section> <!-- / Mapa -->
	<?php include("includes/footer.php"); ?>
</section> <!--/Contenedor-central-->

<script src="public/js/script.js"></script>
</body>
</html>