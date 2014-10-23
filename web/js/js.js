/* Js.js */

jQuery(document).ready(function($) {
	//alert("Funciona");
	// Incializa GMaps
	initialize();

	// Calendarios
	$.datepicker.setDefaults($.datepicker.regional["es"]);

	$("#fecha-desde").datepicker({
		firstDay: 1,
		onSelect: function(date){
			alert(date)
		},
	});
	$("#fecha-hasta").datepicker({
		firstDay: 1,
		onSelect: function(date){
			alert(date)
		},
	});
/*
	$('#fecha-desde').onSelect(function(){
		alert(this.getDate());
	});*/
});

