/* Js.js */

jQuery(document).ready(function($) {
	//alert("Funciona");
	// Incializa GMaps
	initialize();

	// Alerts personalizados
	$.extend({ alert: function (message, title) {
	  $("<div></div>").dialog( {
	    buttons: { "Aceptar": function () { $(this).dialog("close"); } },
	    close: function (event, ui) { $(this).remove(); },
	    resizable: false,
	    title: title,
	    modal: true
	  }).text(message);
	}
	});

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

	// Busqueda direccion
	$('.fa-search').click(function() {
		buscaDireccion($('#direccion-caja').val());
	});

	$('#direccion-caja').keydown(function(event) {
		if (event.which===13) {
			buscaDireccion($('#direccion-caja').val());
		};
	});

	$('#select-provincias').change(function() {
		var municipios = $('#select-municipios').children('option');
		var codigoProvincia = 0;
		//alert(municipios[50].value)
		if ($('#select-provincias option:selected').text()!='Provincia...')
		{
			buscaDireccion($('#select-provincias option:selected').text())
			// Filtro por provincia
			codigoProvincia = $('#select-provincias option:selected').val()
			$.each(municipios,function() {
				//alert(value)
				if (codigoProvincia!=$(this).val()) {
					$(this).hide();
				}else{
					$(this).show();
				};
			});
			$('#select-municipios').prepend('<option value="0" selected="selected">Municipio...</option>');
		};
	});

	$('#select-municipios').change(function() {
		if ($('#select-municipios option:selected').text()!='Municipio...') {
			buscaDireccion($('#select-municipios option:selected').text());
		};
	});

/*
	$('#fecha-desde').onSelect(function(){
		alert(this.getDate());
	});*/
	
	// Animacion cargando
	/*
	$('#cargando').hide();
	$('#contenedor').show();
	*/
});