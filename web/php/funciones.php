<?php 
	// Provincias España
	function provincias(){
		global $conexion;

		$query = 'SELECT * FROM `provincias`';
		$result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysqli_error());
		
		while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
			$array[] = array('id'=>$line['id_provincia'],'provincia'=>$line['provincia']);
		}

		return $array;
	}

	// 
 ?>