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
	array(';',';',';','Lista','Abonados','Morosos'),
	array(''),
	array('')
);

$ains = array(
	array(';','Temporada:',';','2013/2014'),
	array(''),
	array(''),
	array('')
);

$temporadas = array(
	array(';','Codigo',';','Nombres','y',';','apellidos',';','Tribuna',';','Vence',';','Monto'),
	array(''),
	array(';','1',';','Gregori',';','Gonzalez',';','P.','Superior',';','12/12/2015',';','150,00'),
	array(';','2',';','Yenika',';','Cardona',';','P.','Superior',';','12/12/2015',';','150,00'),
	array(';','3',';','Dahyana',';','Nimo',';','P.','Central',';','12/12/2015',';','250,00'),
	array(';','4',';','Gregori',';','Gonzalez',';','P.','Superior',';','12/12/2015',';','150,00'),
	array(';','5',';','Yenika',';','Cardona',';','P.','Superior',';','12/12/2015',';','150,00'),
	array(';','6',';','Dahyana',';','Nimo',';','P.','Central',';','12/12/2015',';','250,00'),
	array(';','7',';','Josmar',';','Torres',';','P.','Norte',';','19/06/2014',';','200,00'),
);
$pie = array(
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(''),
	array(';','Impreso','por','el','Departameto','de','Ventas','Deportivo','Tachira','FC'),
	array(';','Fecha','de','impresion',':',''.date("d/m/Y").''),
	array(';',';',';',';',';',';',';','Pag','1/4')
);
 
if ( $entries ) {
 	
	// abrir un archivo, en este caso un archivo temporal de hasta 12MB
	// (si es más grande, lo escribe a un archivo)
	$fp = fopen( 'fichero-lista.csv', 'w+a' );
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
	header('Content-Disposition: attachment; filename=Listado Morosos.csv' );
 
	// indicar tamaño del archivo
	header('Content-Length: '. strlen($output) );
 
	// enviar archivo
	echo $output;
 
	exit;
}