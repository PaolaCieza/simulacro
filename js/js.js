function guardar() {
	var paqueteDeDatos = new FormData();
	paqueteDeDatos.append("imagen", $("#imagen")[0].files[0]);
	paqueteDeDatos.append("facultad", $("#txtfacultad").prop("value"));
	paqueteDeDatos.append("escuela", $("#txtescuela").prop("value"));
	paqueteDeDatos.append("universidad", $("#txtuniversidad").prop("value"));
	paqueteDeDatos.append("codigo", $("#txtcodigo").prop("value"));
	paqueteDeDatos.append("nombres", $("#txtnombre").prop("value"));
	paqueteDeDatos.append("apepaterno", $("#txtapellidopaterno").prop("value"));
	paqueteDeDatos.append("apematerno", $("#txtapellidomaterno").prop("value"));

	//Insert
	$.ajax({
		url: "php/guardar.php",
		type: "post",
		contentType: false,
		data: paqueteDeDatos,
		processData: false,
		cache: false,

		success: function(data) {
			console.log(data);
			if (data == 1) {
				window.location.replace(
					"http://localhost/simulacro_practica3/html/pedir_pdf.html"
				);
			} else {
				alert("No se pudo registrar");
			}
		},
		error: function(jqXhr, textStatus, errorThrown) {
			console.log(errorThrown);
		}
	});
}
