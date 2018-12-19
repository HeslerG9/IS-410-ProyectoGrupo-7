$.ajax({
    url:"ajax/ListaEstudiantes.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-table-student").append(
                 ` <div class="div-table-row div-table-row-list">
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].NumCta}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].Carrera}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].NombreAlumno}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].ApellidoAlumno}</div>
                <div class="div-table-cell" style="width: 15%;">${respuesta[i].CentroEstudio}</div>
                <div class="form-group mx-sm-3">
    <label style="width: 30%; for="inputPassword2" class="sr-only">Password</label>
    <input  style="width: 60%; type="text" class="form-control" id="NotaFinal" placeholder="Nota final">
  </div>
</form>`
            );
            $("#div-table-lista-estudiante").append(
                 ` <div class="div-table-row div-table-row-list">
                 <div class="div-table-cell" style="width: 5%;">${respuesta[i].NumCta}</div>
                 <div class="div-table-cell" style="width: 12%;">${respuesta[i].Carrera}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].NombreAlumno}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].ApellidoAlumno}</div>
                 <div class="div-table-cell" style="width: 11%;">${respuesta[i].CorreoAlumno}</div>
                 <div class="div-table-cell" style="width: 9%;">${respuesta[i].TelAlumno}</div>
                 <div class="div-table-cell" style="width: 11%;">${respuesta[i].FechaNac}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].CentroEstudio}</div>`
            );
        }

    },
    error:function(error){
        console.error(error);
        $("#tweets").append(error.responseText);
    }
});


$("#boton-notas").click(function(){
	/* $("#btn-registrarCarrera").trigger("reset");
	var parametros=
				"codigoCarrera="+$("#codigoCarrera").val()+"&"+
				"codigoCE="+$("#codigoCE").val()+"&"+
				"nombreCarrera="+$("#nombreCarrera").val()+"&"+
				"codigoFacultad="+$("#codigoFacultad").val()+"&"+
				"codigoDepartamento="+$("#codigoDepartamento").val()+"&"+
				"cantidadAsignaturas="+$("#cantidadAsignaturas").val()+"&"+
				"cantidadUv="+$("#cantidadUv").val()+"&"+
				"grado="+$("#grado").val();
	alert("parametros a enviar " + parametros); */
	alert("Se ha guardado la nota del estudiante");
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