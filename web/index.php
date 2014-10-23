<?php 
	require 'php/conexion.php';
	include 'php/funciones.php'
 ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
	<meta charset="UTF-8"></meta>
	<title> AlquilaMaps </title>
	<link rel="stylesheet" href="css/style.css"></link>
	<link rel="stylesheet" href="css/awsome/css/font-awesome.css"></link>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</head>
<body>
	<div id="contenedor">

		<div id="encabezado">
			<div id="logo">
				<img src="img/marker.png" alt="">
				<p>Alquila Maps</p>
			</div>
			<div id="direccion">
				<input type="text" id="direccion-caja" placeholder="Introduzca una direccion..."></input>
				<i class="fa fa-search"></i>
			</div>
			<div id="provincias">
				<select name="provincias" id="select-provincias">
					<option value='0'>Provincia...</option>
					<?php 
						$provincias = provincias();
						foreach ($provincias as $value) {
							echo "<option value='$value[id]'>$value[provincia]</option>";
						}
				 	?>
				</select>
			</div>
		</div>

		<div id="principal">

			<div id="izquierda">
				<div id="filtro-arriba">
					
				</div>
				<div id="mapa">
					
				</div>
			</div>

			<div id="derecha">
				<div id="filtros">
					<div id="fecha">
						<div id="fecha-desde"></div>
						<div id="fecha-hasta"></div>
					</div>
				</div>
			</div>

		</div>

		<div id="pie">
			
		</div>

	</div>
	<script src="js/jquery.js"></script>
	<script src="jquery_ui/jquery.ui.datepicker-es.js"></script>
	<script src="jquery_ui/jquery-ui.js"></script>
	<script src="js/maps.js"></script>
	<script src="js/js.js"></script>
</body>
</html>