$.ajax({
    url:"ajax/matricula.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-table-carrera").append(
                 `
                             <option id="DepartamentoMatriculado" >${respuesta[i].nombreCarrera}</option>
                        `
            );
        }

    },
    error:function(error){
        console.error(error);
    }
});
$.ajax({
    url:"ajax/matricula.php?opcion=2",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-table-asignatura").append(
                 `
                             <option id="ClaseMatriculada" >${respuesta[i].Asignatura}</option>
                        `
            );
            $("#div-table-seccion").append(
                 `
                             <option id="SeccionMatriculada" >${respuesta[i].seccion1}</option>
                        `
            );
        }

    },
    error:function(error){
        console.error(error);
    }
});


$("#btn-matricularClase").click(function(){
	$("#btn-matricularClase").trigger("reset");
	var parametros=
				"DepartamentoMatriculado="+$("#DepartamentoMatriculado").val()+"&"+
				"ClaseMatriculada="+$("#ClaseMatriculada").val()+"&"+
				"SeccionMatriculada="+$("#SeccionMatriculada").val();
	alert("parametros a enviar " + parametros);
	alert("Se ha matriculado su clase con exito");
   console.log(parametros)
   $.ajax({
	url:"ajax/infoMatricula.php",
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

$.ajax({
    url:"ajax/EstudianteActual.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        $("#slc-usuario").append(`<option value=""></option>`);
        for(var i=0; i<respuesta.length;i++)
            $("#forma03").append(`
            <div><span>Nombre:</span> <small>${respuesta[i].NombreAlumno} ${respuesta[i].ApellidoAlumno}</small></div>
            <div><span>Cuenta:</span> <small>${respuesta[i].NumCta}</small></div>   
            <div><span>Carrera:</span> <small>${respuesta[i].Carrera}</small></div>   
    `);
    },
    error:function(error){
        console.log(error);
    }
});

$("#forma03").change(function(){
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.
	console.log("Usuario seleccionado: " + $("#forma02").val());
	$.ajax({
		url:"ajax/EstudianteActual.php?opcion=2&usuario="+$("#forma03").val(),
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
		
			$("#forma03").html(respuesta);
	

		},
		error:function(error){
			console.log(error);
		}
	});
});