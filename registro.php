<?php
if(isset($_POST["registrar"])){
    header('location: perfilcompra.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Abonados Deportivo Táchira</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
	<?php include ("header.php"); ?>
	<?php include ("nav.php"); ?>
	<main>
		<h3>Regístrate!</h3>
		<form action="" class="formulario-registro" type="submit" method="post">
		<section class="caja-registro">
			<div class="pasos-registro">
				<span class="viñeta">1.</span>
				<p>Datos personales necesarios para su registro en el sistema.</p>
			</div>
			<div class="inputs-formulario">
				<input type="text" placeholder="C.I. Ejm: V-12345678" required>
			</div>
			<div class="inputs-formulario">
				<input type="text" placeholder="Nombres" required>
			</div>
			<div class="inputs-formulario">
				<input type="text" placeholder="Apellidos" required>
			</div>
			<div class="inputs-formulario">
				<input type="text" placeholder="Teléfono" required>
			</div>
			<div class="radio-formulario">
				<input type="checkbox"><label class="etiquetas-input" for="">Hombre</label>
				<input type="checkbox"><label class="etiquetas-input" for="">Mujer</label>
			</div>
			<div class="inputs-formulario">
				<textarea class="direccion-formulario" name="" id="" cols="10" rows="5" placeholder="Dirección"></textarea>
			</div>
			<div class="inputs-formulario">
				<input type="date" placeholder="Fecha de nacimiento">
			</div>
		</section>
		<section class="caja-registro">
			<div class="pasos-registro">
				<span class="viñeta">2.</span>
				<p>Correo y contraseña para ingresar al sitio web.</p>
			</div>
			<div class="inputs-formulario">
				<input type="text" placeholder="Correo electrónico" required>
			</div>
			<div class="inputs-formulario">
				<input type="password" placeholder="Contraseña" required>
			</div>
			<div class="inputs-formulario">
				<input type="password" placeholder="Repetir contraseña" required>
			</div>
		</section>
		<section class="caja-registro">
			<div class="pasos-registro">
				<span class="viñeta">3.</span>
				<p>Ingresar captcha y aceptar los términos y condiciones.</p>
			</div>
			<div class="inputs-formulario">
				<input type="checkbox" required><label class="etiquetas-input" for="">Acepto los términos y condiciones del sitio web.</label>
			</div>
			<div class="boton-formulario">
				<input type="submit" name="registrar" value="Listo!">
			</div>
		</section>
		</form>
	</main>
	<?php include ("footer.php"); ?>
</body>
</html>