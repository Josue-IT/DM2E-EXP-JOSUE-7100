<?php 
	require 'php/conexion.php';
	include 'php/funciones.php'
 ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
	<meta charset="UTF-8"></meta>
	<title> AlquilaMaps </title>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/style.css"></link>
	<link rel="stylesheet" href="css/awsome/css/font-awesome.css"></link>
	<link rel="stylesheet" href="jquery_ui/jquery-ui.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</head>
<body>
	<!--
	<div id="cargando">
		<img src="img/marker.png" alt="">
		<p>Cargando...</p>
	</div>
	-->
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
			<div id="municipios">
				<select name="" id="select-municipios">
					<option value="">Provincia1</option>
					<option value="">Provincia2</option>
					<option value="">Provincia3</option>
					<option value="">Provincia4</option>
					<option value="">Provincia5</option>
					<option value="">Provincia6</option>
					<option value="">Provincia7</option>
					<option value="">Provincia8</option>
					<option value="">Provincia9</option>
					<option value="">Provincia10</option>
				</select>
			</div>
			<div id="botones">
				<i class="fa fa-star boton"></i>
				<i class="fa fa-facebook boton"></i>
				<i class="fa fa-twitter boton"></i>
				<i class="fa fa-linkedin boton"></i>
				<i class="fa fa-google boton"></i>
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