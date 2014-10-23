<?php
	// Variables
	$servidor='localhost';
	$usuario='root';
	$contrasena='toor';
	$base_de_datos='alquilamaps';

	// Conexion a la base de datos
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$base_de_datos)or die('No se pudo conectar: ' . mysqli_error());
	//echo 'Conexion Satisfactoria';

	// Includes

	// Liberar resultados
	

	// Cerrar la conexión
	//mysqli_close($conexion); // SI LO PONGO NO FUNCIONA!!
?>
