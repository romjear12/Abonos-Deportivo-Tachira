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
	<section>
		
		<div id="menu-adm">
			<div id="usuario-adm">
				<div id="rol"> Bienvenido Administrador</div>
			</div>
			<?php include("menu-admin.php"); ?>
		</div>
		<div id="contenido">
			<div class="titulo-adm">Nuevo Abonado</div>
				<div class="cuerpo">
				<div class="contenedor-input">
					<label for="">Cédula Identidad</label>
					<input type="text"  placeholder="C.I EJM. V-12345678">
				</div>
				<div class="contenedor-input">
					<label for="">Télefono</label>
					<input type="text"  placeholder="Télefono">
				</div>
				
				<div class="contenedor-input">
					<label for="">Nombre</label>
					<input type="text"  placeholder="Nombre">
				</div>
				<div class="contenedor-input">
					<label for="">Correo</label>
					<input type="text"  placeholder="ejemplo@gmail.com">
				</div>
				<div class="contenedor-input">
					<label for="">Apellido</label>
					<input type="text"  placeholder="Apellido">
				</div>
				<div class="contenedor-input">
					<label for="">Contraseña</label>
					<input type="password"  placeholder="Contraseña">
				</div>
				<div class="contenedor-input">
					<label for="">Hombre</label>
					<input type="checkbox">
					<label for="">Mujer</label>
					<input type="checkbox">
				</div>
				
				<div class="contenedor-input">
					<label for="">Repita contraseña</label>
					<input type="password"  placeholder="Contraseña">
				</div>
				
				<a class="boton-mediano-rojo" href="index-adm.php">Listo</a>
			</div>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>