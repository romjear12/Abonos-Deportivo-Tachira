<?php
session_start();
 
// obtener resultados para una consulta cualquiera
// el parámetro ARRAY_N indica que wpdb debe retornar los resultados
// como un array con índices numéricos
$entries = array(
	array(';',';','Sistema',';','Abonados',';','Deportivo','Tachira','FC'),
	array(';',';',';','Departamento','de','Ventas'),
	array(''),
	array(''),
	array(';',';',';','Reporte','Abonado','Personal'),
	array(''),
	array(''),
	array(''),
	array('')
);

$ains = array(
	array(';','Abonado','#',';','A00001'),
	array(';','Romer',';','Maldonado'),
	array(';'),'C.I:',';','20608546'
	array(';','0414-7312345'),
	array(''),
	array(''),
	array('')
);

$temporadas = array(
	array(';','Temporada','2008/2009'),
	array(';','Tribuna',';','Fecha compra',';','Codigo','abono'),
	array(';','Principal','Superior','12/07/2008','PS0426'),
	array(''),
	array(''),
	array(''),
);
$pie = array(
	array(';','Generado','por','el','Departameto','de','Ventas'),
	array(';','Fecha','de','impresion',':',''.date("d/m/Y").''),
);
 
if ( $entries ) {
 	
	// abrir un archivo, en este caso un archivo temporal de hasta 12MB
	// (si es más grande, lo escribe a un archivo)
	$fp = fopen( 'ficheros.csv', 'w' );
	foreach ( $entries as $row ) {
		fputcsv( $fp, $row,' ','"');
	}

	foreach ( $ains as $row ) {
		fputcsv( $fp, $row,' ','"');
	}

	foreach ( $temporadas as $row ) {
		fputcsv( $fp, $row,' ','"');
	}

	foreach ( $pie as $row ) {
		fputcsv( $fp, $row,' ','"');
	}
 
	// be kind, rewind (devolver la posición del puntero del archivo)
	rewind( $fp );
 
	// obtener contenido del archivo como un string
	$output = stream_get_contents( $fp );
 
	// cerrar archivo
	fclose( $fp );
 
 
	// cabeceras HTTP:
	// tipo de archivo y codificación
	header('Content-Type: text/csv; charset=utf-8');
 
	// forzar descarga del archivo con un nombre de archivo determinado
	header('Content-Disposition: attachment; filename=Reportepersonal.csv' );
 
	// indicar tamaño del archivo
	header('Content-Length: '. strlen($output) );
 
	// enviar archivo
	echo $output;
 
	exit;
}