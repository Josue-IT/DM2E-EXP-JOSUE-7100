// Variables
var map;
var madrid = new google.maps.LatLng(40.4378271,-3.6795366);

// Funcion para inicializar mapa
function initialize() {

	// Personalizacion mapa
	var mapOptions = {
		zoom: 8,
		center: madrid,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};

	// Creaccion mapa
	map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
}

//google.maps.event.addDomListener(window, 'load', initialize);

