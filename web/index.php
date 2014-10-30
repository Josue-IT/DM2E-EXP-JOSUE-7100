<?php 
	require 'php/conexion.php';
	include 'php/funciones.php';
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
				<select name="municipios" id="select-municipios">
					<option value='0'>Municipio...</option>
					<?php 
						$municipios = municipios(); // Solo Valladolid
						foreach ($municipios as $value) {
							echo "<option value='$value[id]'>$value[municipio]</option>";
						}
				 	?>
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
					<div id="precio">
						<input id="precio-desde" type="text" placeholder="Desde..."><i class="fa fa-euro"></i></input>
						<input id="precio-hasta" type="text" placeholder="Hasta..."><i class="fa fa-euro"></i></input>
					</div>
					<div id="dormitorios">
						<select name="dormitorios" id="select-dormitorios">
							<option value='0'>Dormitorios...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div id="baños">
						<select name="baños" id="select-baños">
							<option value='0'>Baños...</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
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