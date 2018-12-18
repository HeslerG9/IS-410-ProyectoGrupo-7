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
              
    `);
    },
    error:function(error){
        console.log(error);
    }
});


$.ajax({
    url:"ajax/adicionAsignaturas.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#tabla-asignaturas").append(
                 `<div class="div-table-row div-table-row-list">
                 <div class="div-table-cell" style="width: 6%;">${respuesta[i].cod}</div>
                 <div class="div-table-cell" style="width: 14%;">${respuesta[i].Asignatura}</div>
                 <div class="div-table-cell" style="width: 8%;">${respuesta[i].seccion1}</div>
                 <div class="div-table-cell" style="width: 12%;">${respuesta[i].HoraInicial}</div>
                 <div class="div-table-cell" style="width: 8%;">${respuesta[i].HoraFinal}</div>
                 <div class="div-table-cell" style="width: 13%;">${respuesta[i].Dias}</div>
                 <div class="div-table-cell" style="width: 8%;">${respuesta[i].Edificio}</div>
                 <div class="div-table-cell" style="width: 10%;">${respuesta[i].HoraFinal}</div>
                 <div class="div-table-cell" style="width: 6%;">${respuesta[i].UV}</div>
                 <div class="div-table-cell" style="width: 8%;">${respuesta[i].Periodo}</div>
                 
             </div>
                        `
            );
        }

    },
    error:function(error){
        console.error(error);
    }
});