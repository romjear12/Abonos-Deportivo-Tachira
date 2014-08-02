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
			<div class="titulo-adm">Precio de Entradas</div>
				<div class="cuerpo">
				<div class="contenedor-input">
					<label for="">Popular central</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<div class="contenedor-input">
					<label for="">Popular Sur</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<div class="contenedor-input">
					<label for="">Popular Inferior</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<div class="contenedor-input">
					<label for="">Principal Inferior</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<div class="contenedor-input">
					<label for="">Principal VIP</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<div class="contenedor-input">
					<label for="">Principal Superior</label>
					<input type="text"  placeholder="Costo Bsf">
				</div>
				<a class="boton-mediano-rojo" href="index-adm.php">Listo</a>
			</div>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>