
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Abonados Deportivo Táchira F.C.</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>
	<script>
	$(document).on('ready', function() {

	   	$("#o1").on('click', function() {
	        $(".slider-interno").css("left","0");
	        $("#o1").addClass("botones-activos");
	        $("#o2").removeClass("botones-activos");
	        $("#o3").removeClass("botones-activos");
	        $("#o4").removeClass("botones-activos");
    	});
    	$("#o2").on('click', function() {
	        $(".slider-interno").css("left","-650px");
	        $("#o2").addClass("botones-activos");
	        $("#o1").removeClass("botones-activos");
	        $("#o3").removeClass("botones-activos");
	        $("#o4").removeClass("botones-activos");
    	});
    	$("#o3").on('click', function() {
	        $(".slider-interno").css("left","-1300px");
	        $("#o3").addClass("botones-activos");
	        $("#o2").removeClass("botones-activos");
	        $("#o1").removeClass("botones-activos");
	        $("#o4").removeClass("botones-activos");
    	});
    	$("#o4").on('click', function() {
	        $(".slider-interno").css("left","-1950px");
	        $("#o4").addClass("botones-activos");
	        $("#o2").removeClass("botones-activos");
	        $("#o3").removeClass("botones-activos");
	        $("#o1").removeClass("botones-activos");
    	});
	});
	</script>
</head>
<body>
	<?php include ("header.php"); ?>
	<?php include ("nav.php"); ?>
	<main>
		<section id="bloque1">
			<div id="slider">
				<div class="container">
					<div class="slider-interno">
						<div id="img-slider1">
							<div class="texto-slider">
								<a href="registro.php">¿Que esperas para abonarte? Regístrate.</a>
							</div>
						</div>
						<div id="img-slider2">
							<div class="texto-slider">
								<a href="corporativo.php">Conoce la modalidad de Abono Corporativo</a>
							</div>
						</div>
						<div id="img-slider3">
							<div class="texto-slider">
								<a href="precios.php">Precios y promociones.</a>
							</div>
						</div>
						<div id="img-slider4">
							<div class="texto-slider">
								<a href="contacto.php">Siguenos en nuestras redes sociales.</a>
							</div>
						</div>
					</div>
				</div>
				<div id="option-slider">
					<a id="o1" class="botones-slider botones-activos">1</a>
					<a id="o2" class="botones-slider">2</a>
					<a id="o3" class="botones-slider">3</a>
					<a id="o4" class="botones-slider">4</a>
				</div>
			</div>
			<div id="clasificacion">
				<div class="tabla1">
					<strong>Top Abonados</strong>
					<ul>
						<li>
							<figure></figure>
							<div>
								<p>Romer Maldonado
								Abonado desde: Temporada: 07/08</p>
							</div>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Abonado desde: Temporada: 07/08</p>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Abonado desde: Temporada: 07/08</p>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Abonado desde: Temporada: 07/08</p>
						</li>
					</ul>
				</div>
				<div class="tabla2">
					<strong>Últimos abonados</strong>
					<ul>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Tribuna: Central</p>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Tribuna: Central</p>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Tribuna: Central</p>
						</li>
						<li>
							<figure></figure>
							<p>Romer Maldonado</p>
							<p>Tribuna: Central</p>
						</li>
					</ul>
				</div>
				<a id="boton-abonate-grande" href="registro.php">Abónate</a>
			</div>
		</section>
		<section id="bloque2">
			<div id="calendario">
				<h2>Calendario Temporada 2013/2014</h2>
				<div class="jornadas">
					<p>Fecha 1 - 10/08/2014 05:00 pm</p>
					<span>Deportivo Táchira vs Atlético Venezuela</span>
				</div>
				<div class="jornadas">
					<p>Fecha 2 - 17/08/2014 04:00 pm</p>
					<span>Llaneros vs Deportivo Táchira</span>
				</div>
				<div class="jornadas">
					<p>Fecha 3 - 24/08/2014 05:00 pm</p>
					<span>Deportivo Táchira vs Portuguesa</span>
				</div>
				<div class="jornadas">
					<p>Fecha 4 - 31/08/2014 03:30 pm</p>
					<span>Aragua vs Deportivo Táchira</span>
				</div>
				<div class="link-calendario">
					<a href="calendarioprincipal.php">Ver calendario completo</a>	
				</div>
			</div>
			<div id="timeline">
				<a class="twitter-timeline" width="368px" height="480px" href="https://twitter.com/DvoTachira" data-widget-id="478748655877234689">Tweets por @DvoTachira</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
			</div>
		</section>
		<section id="bloque3">
			<div id="entradas">
				<a href="precios.php" id="img-precios">Precios</a>
				<div id="precios">
					<ul>
						<li>Popular Norte  <span>Bs  500</span></li>
						<li>Popular Sur  <span>Bs  570</span></li>
						<li>Popular Central  <span>Bs  840</span></li>
						<li>Principal Superior  <span>Bs 1300</span></li>
						<li>Principal Inferior  <span>Bs 2200</span></li>
						<li>Principal VIP  <span>Bs 3500</span></li>
					</ul>
				</div>

			</div>
			<div id="noticias">
				<strong>Noticias</strong>
				<section>
					<article>
						<p>Exitosa segunda semana de venta de Abonos aurinegros</p>
						<a href="http://deportivotachira.com/exitosa-segunda-semana-de-venta-de-abonos-aurinegros/" target="_blank">Leer</a>
					</article>
					<article>
						<p>El Carrusel Aurinegro saca el máximo provecho de la gira por Argentina</p>
						<a href="http://deportivotachira.com/el-carrusel-aurinegro-saca-el-maximo-provecho-de-la-gira-por-argentina/" target="_blank">Leer</a>
					</article>	
					<article>
						<p>La venta de abonos no se detiene este 24 de julio</p>
						<a href="http://deportivotachira.com/la-venta-de-abonos-no-se-detiene-este-24-de-julio/" target="_blank">Leer</a>
					</article>
					<article>
						<p>Inicia la segunda semana de Abonos Aurinegros</p>
						<a href="http://deportivotachira.com/inicia-la-segunda-semana-de-abonos-aurinegros/" target="_blank">Leer</a>
					</article>
					<article>
						<p>Empresas tachirenses se la juegan en la tribuna con el Abono Corporativo</p>
						<a href="http://deportivotachira.com/empresas-tachirenses-se-la-juegan-en-la-tribuna-con-el-abono-corporativo/" target="_blank">Leer</a>
					</article>

				</section>
			</div>
		</section>
	</main>
	<?php include("footer.php"); ?>
</body>
</html>
