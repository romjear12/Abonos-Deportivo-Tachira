<?php
if(isset($_POST["entrar"])){
    if($_POST["correo"]=="admin"){
        header('location: index-adm.php');
    }
    else
        header('location: perfilcompra.php');
}
?>
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
            <h3 class="texto-imagen">¿No te has abonado?</h3>
            <h3 class="texto-imagen">¿Que esperas?</h3>
            <div class="contenedor-boton">
                <a class="boton-mediano-rojo" href="registro.php">Registrate!</a>
            </div>
            <div id="fondo-iniciosesion">
                <figure></figure>
            </div>
        </section>
        <section class="caja-derecha">
            <h3>Iniciar sesión</h3>
            <form class="formulario" action="" type="submit" method="post">
                <div class="inputs-formulario">
                    <input type="text" placeholder="Correo electrónico" name="correo" required>
                </div>
                <div class="inputs-formulario">
                    <input type="password" placeholder="Contraseña" name="contraseña" required>
                </div>
                <div class="boton-formulario">
                    <input type="submit" value="Entrar" name="entrar">
                </div>
            </form>
            <a class="link-formulario" href="recordarcontrasena.php">Recordar contraseña</a>
        </section>
	</main>
	<?php include ("footer.php"); ?>
</body>
</html>
