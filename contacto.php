<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>DosPuntoClick Diseño y desarrollo web prepago - Trabaja con 2.C</title>
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

<section class="Contenedor-central">
	<?php include("includes/header.php"); ?>

	<section class="Mapa">
		<div class="Cont">
		    <div class="Formulario">
		        <form action="enviar.php" method="post">
		            <h2>CONTACTO</h2>
		            <input type="text" name="nombre" placeholder="Nombre" required>
  		            <input type="text" name="telefono" placeholder="Telefono" required>
		            <input type="text" name="email" placeholder="Email" required>
		            <textarea name="mensaje" placeholder="Escribir mensaje"></textarea>
		            <input type="submit" value="ENVIAR" id="boton">
		        </form>
		    </div> <!-- / Formulario -->

		    <div class="QueresUnSitio">
		    	<h2 class="QueresUnSitio-titulo">Queres un sitio web increible!!!</h2>
		    	<article class="QueresUnSitio-article">
		    		<p class="QueresUnSitio-texto">
		    			Estas a punto de tener un sitio web totalmente a medida, escalable y que se adaptan a todas las resoluciones y dispositivos moviles.
		    		</p>
		    	</article>
		    </div> <!-- / QueresUnSitio -->
		</div> <!-- / Cont --> 
		<h2 class="Paises">Contamos con clientes en Argentina, Brasil, Mexico y Uruguay</h2>
	</section> <!-- / Mapa -->
	<?php include("includes/footer.php"); ?>
</section> <!--/Contenedor-central-->

<script src="public/js/script.js"></script>
</body>
</html>