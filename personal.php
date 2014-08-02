<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Abonados Deportivo Táchira F.C.</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen">
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
			<div class="titulo-adm"><h1>Deportivo Táchira F.C</h1></div>
			<div class="titulo-adm"><h2>Sistema de Abonados<h2></div>
			<div class="titulo-adm"><h2>Reporte Personal</h2></div>
			<div class="pegado1">
			<div class="icono"></div>
			<div class="pegado">
				<div >Gregori Gonzalez</div>
				<div >C.I 21.218.739</div>
				<div >0414-7542489</div>
				<div >Codigo Personal 001</div>
			</div>
			</div>
			<div class="titulo-adm">Temporada 2010/2011</div>
				<div class="CSSTableGenerator">
				<table>
					<tr>
						<td> Tribuna </td>
						<td> Fecha Compra</td>
						<td> codigo Abono </td>
					</tr>
					<tr>
						<td> Principal Superior </td>
						<td> 15/08/10 </td>
						<td> Gf1234 </td>
					</tr>
				</table>
			</div>

			<div class="titulo-adm">Temporada 2011/2012</div>
				<div class="CSSTableGenerator">
				<table>
					<tr>
						<td> Tribuna </td>
						<td> Fecha Compra</td>
						<td> codigo Abono </td>
					</tr>
					<tr>
						<td> Principal Superior </td>
						<td> 15/08/10 </td>
						<td> Gf1234 </td>
					</tr>
				</table>
			</div>
			<div class="oculto">
				<p>Impreso por el Dpto. ventas Dvo Táchira</p>
				<p>Fecha: 16/05/14		2:33pm</p>
			</div>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>