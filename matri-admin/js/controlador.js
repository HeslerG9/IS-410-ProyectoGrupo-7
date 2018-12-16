$.ajax({
    url:"ajax/estudiantes.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#div-table-student").append(
                ` <div class="div-table-row div-table-row-list">
                <div class="div-table-cell" style="width: 5%;">${respuesta[i].NumCta}</div>
                <div class="div-table-cell" style="width: 12%;">${respuesta[i].Carrera}</div>
                <div class="div-table-cell" style="width: 10%;">${respuesta[i].NombreAlumno}</div>
                <div class="div-table-cell" style="width: 10%;">${respuesta[i].ApellidoAlumno}</div>
                <div class="div-table-cell" style="width: 11%;">${respuesta[i].CorreoAlumno}</div>
                <div class="div-table-cell" style="width: 9%;">${respuesta[i].TelAlumno}</div>
                <div class="div-table-cell" style="width: 11%;">${respuesta[i].FechaNac}</div>
                <div class="div-table-cell" style="width: 10%;">${respuesta[i].CentroEstudio}</div>
                <div class="div-table-cell" style="width: 6%;">
                    <button class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></button>
                </div>
                <div class="div-table-cell" style="width: 6%;">
                    <button class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                    </div>
                </div>`
            );
        }

    },
    error:function(error){
        console.error(error);
        $("#tweets").append(error.responseText);
    }
});



$("#search").on("keyup", function() {
    var value = $(this).val();

    $("div-table-row").each(function(index) {
        if (index != 0) {

            $row = $(this);

            var id = $row.find("div-table-cell:first").text();

            if (id.indexOf(value) != 0) {
                $(this).hide();
            }
            else {
                $(this).show();
            }
        }
    });
});
