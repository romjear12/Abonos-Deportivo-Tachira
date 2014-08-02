<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Abonados Deportivo Táchira F.C.</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
	<?php include ("header.php"); ?>
	<?php include ("nav.php"); ?>
	<main>
		<section class="caja-izquierda">
			<h2>¡Contáctanos!</h2>
			<form action="" class="formulario margen-izquierdo" type="submit">
				<div class="inputs-formulario">
					<input type="text" placeholder="Nombres y apellidos" required>
				</div>
				<div class="inputs-formulario">
					<input type="text" placeholder="Correo electrónico" required>
				</div>
				<div class="inputs-formulario">
					<input type="text" placeholder="Teléfono">
				</div>
				<div class="inputs-formulario">
					<textarea col="60" rows="6" placeholder="Escriba aquí su mensaje..." required></textarea>
				</div>
				<div class="boton-formulario centrado">
					<input type="button" value="Enviar">
				</div>
			</form>
		</section>
		<section class="caja-derecha">
			<h3>Ubicación</h3>
			<div id="mapa-contacto">
				<iframe width="410" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=211752722911357287607.0004fefce4cc5b2856b3e&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=7.789362,-72.199616&amp;spn=0.012756,0.012875&amp;z=15&amp;output=embed"></iframe><br /><small>Ver <a href="https://www.google.com/maps/ms?msa=0&amp;msid=211752722911357287607.0004fefce4cc5b2856b3e&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=7.789362,-72.199616&amp;spn=0.012756,0.012875&amp;z=15&amp;source=embed" style="color:#0000FF;text-align:left">Cancha Alterna Deportivo Táchira F.C.</a> en un mapa más grande</small>
			</div>
			<p>Dirección: Avenida perimetral de la UNET, Cancha Alterna a 100 metros del Polideportivo de Pueblo Nuevo.</p>
			<p>Teléfono/Fax: (0276)3535703</p>
		</section>
	</main>
	<?php include ("footer.php"); ?>
</body>
</html>
