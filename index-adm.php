<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Abonados Deportivo Táchira F.C.</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print">
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
			<div class="titulo-adm">Lista de Abonados Morosos</div>
			<div class="CSSTableGenerator">
				<table>
					<tr>
						<td> Codigo </td>
						<td> Nombre </td>
						<td> Tribuna </td>
						<td> Vence </td>
						<td> Monto </td>
					</tr>
					<tr>
						<td> 001 </td>
						<td> Gregori González </td>
						<td> Principal Superior </td>
						<td> 12/12/15</td>
						<td> 150 </td>
					</tr>
					<tr>
						<td> 002 </td>
						<td> Yenika Cardona </td>
						<td> Principal Superior </td>
						<td> 12/12/15</td>
						<td> 150 </td>
					</tr>
					<tr>
						<td> 003 </td>
						<td> Dayhana Nimo </td>
						<td> Popular Central </td>
						<td> 12/12/15</td>
						<td> 250 </td>
					</tr>
					<tr>
						<td> 004 </td>
						<td> Gregori González </td>
						<td> Principal Superior </td>
						<td> 12/12/15</td>
						<td> 150 </td>
					</tr>
					<tr>
						<td> 005 </td>
						<td> Yenika Cardona </td>
						<td> Principal Superior </td>
						<td> 12/12/15</td>
						<td> 150 </td>
					</tr>
					<tr>
						<td> 006 </td>
						<td> Dayhana Nimo </td>
						<td> Popular Central </td>
						<td> 12/12/15</td>
						<td> 250 </td>
					</tr>
				</table>
			</div>
			
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>