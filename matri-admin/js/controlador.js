$.ajax({
    url:"ajax/tweets.php?opcion=1",
    method:"GET",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i=0;i<respuesta.length;i++){
            $("#tweets").append(
                `<div class="row component text-left">
                    <div class="col-lg-2">  
                        <img src = "${respuesta[i].usuario.urlImagen}" class="img-fluid rounded-circle img-thumbnail">
                    </div>
                    <div class="col-lg-10">
                        <b>${respuesta[i].usuario.nombre}</b> ${respuesta[i].usuario.usuario}
                        <div class="tweet-content">
                            ${respuesta[i].tweet}
                            <div>
                                <small class="blue-text">${respuesta[i].hashtags}</small>
                            </div>
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

