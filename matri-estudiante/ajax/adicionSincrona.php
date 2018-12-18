<?php
    $archivo = fopen("../../bd-json/clasesSis.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if (
			$_POST["ClaseMatriculada"]==$registro["Asignatura"] 
        ){
            $registro["estatus"] = "1"; 
            $registro["mensaje"] = "Se publica la clase";
           

            echo json_encode($registro);
            exit;
        }
    }
    //No encontro el registro
    $registro = array();
    $registro["estatus"] = "0"; //No se publica la clase
    $registro["mensaje"] = "No se publica la clase";
    echo json_encode($registro);
?>