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
			<div class="titulo-adm">Confirmar Solictud</div>
			<div class="CSSTableGenerator">
				<table>
					<tr>
						<td> Cédula </td>
						<td> Nombre </td>
						<td> Tribuna </td>
						<td> Fecha </td>
						<td> Eliminar </td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Gregori González </td>
						<td> Principal Superior </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Yenika Cardona </td>
						<td> Principal Superior </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Dayhana Nimo </td>
						<td> Popular Central </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Gregori González </td>
						<td> Principal Superior </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Yenika Cardona </td>
						<td> Principal Superior </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
					<tr>
						<td> 21218739 </td>
						<td> Dayhana Nimo </td>
						<td> Popular Central </td>
						<td> 15/07/14 </td>
						<td> <input type="checkbox"></td>
					</tr>
				</table>
			</div>
			<div id="contenido">
				<a class="boton-abonate-medio" href="index-adm.php">Listo</a>
			</div>

		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>
