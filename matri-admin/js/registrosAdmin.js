$("#btn-registrarCarrera").click(function(){
	$("#btn-registrarCarrera").trigger("reset");
	var parametros=
				"codigoCarrera="+$("#codigoCarrera").val()+"&"+
				"codigoCE="+$("#codigoCE").val()+"&"+
				"nombreCarrera="+$("#nombreCarrera").val()+"&"+
				"codigoFacultad="+$("#codigoFacultad").val()+"&"+
				"codigoDepartamento="+$("#codigoDepartamento").val()+"&"+
				"cantidadAsignaturas="+$("#cantidadAsignaturas").val()+"&"+
				"cantidadUv="+$("#cantidadUv").val()+"&"+
				"grado="+$("#grado").val();
	alert("parametros a enviar " + parametros);
	alert("Se ha guardado con Exito la nueva carrera");
   console.log(parametros)
   $.ajax({
	url:"ajax/procesar-registroCarrera.php?accion=1",
	data:parametros,
	method:"POST",
	dataType:"json",
	success:function(respuesta){
		console.log(respuesta);
		//alert("Codigo: " + respuesta.codigo_resultado);
		//alert("Mensaje: " + respuesta.mensaje);
		/* if (respuesta.codigo_resultado==0)
			$("#resultado").html('<div class="bg-danger"> '+respuesta.mensaje+"</div>");
		if (respuesta.codigo_resultado==1)
			$("#resultado").html('<div class="bg-success"> '+respuesta.mensaje+"</div>");
		$("#btn-registrar").button("reset"); */
		
	}
});
});

$("#btn-registrarAsignatura").click(function(){
	$("#btn-registrarAsignatura").trigger("reset");
	$("#modalClases")[0].reset();
	var parametros=
				"seccion="+$("#seccion").val()+"&"+
				"HoraInicio="+$("#HoraInicio").val()+"&"+
				"HoraFinal="+$("#HoraFinal").val()+"&"+
				"Dias="+$("#Dias").val()+"&"+
				"Cupos="+$("#Cupos").val()+"&"+
				"Aula="+$("#Aula").val()+"&"+
				"Asignatura="+$("#Asignatura").val()+"&"+
				"Maestro="+$("#Maestro").val();
	alert("parametros a enviar " + parametros);

   console.log(parametros)
   $.ajax({
	url:"ajax/procesar-registroAsignatura.php?accion=1",
	data:parametros,
	method:"POST",
	dataType:"json",
	success:function(respuesta){
		console.log(respuesta);
	
	}
});
});
