// Variables
var map;
var españa = new google.maps.LatLng(40.2085,-3.713);
var direccion = $('#direccion-caja').val();

// Funcion para inicializar mapa
function initialize() {

	// Personalizacion mapa
	var mapOptions = {
		zoom: 5,
		center: españa,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};

	// Creaccion mapa
	map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
}

// Busca direccion
function buscaDireccion(direccionVar){
    // Obtenemos la dirección y la asignamos a una variable
    var direccion = direccionVar+",España";
    // Creamos el Objeto Geocoder
    var geocoder = new google.maps.Geocoder();
    // Hacemos la petición indicando la dirección e invocamos la función
    // geocodeResult enviando todo el resultado obtenido
    geocoder.geocode({ 'address': direccion}, geocodeResult);
}

// Resultado busqueda y mapa
function geocodeResult(results, status) {
    // Verificamos el estatus
    if (status == 'OK') {
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto
        var mapOptions = {
            center: results[0].geometry.location,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#mapa").get(0), mapOptions);
        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicación del primer resultado obtenido
        var markerOptions = { position: results[0].geometry.location }
        var marker = new google.maps.Marker(markerOptions);
        marker.setMap(map);
    } else {
        // En caso de no haber resultados o que haya ocurrido un error
        // lanzamos un mensaje con el error
        $.alert("La direccion es incorrecta","ERROR");
    }
}