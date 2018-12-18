<?php
    session_start(); 
    $archivo = fopen("../../bd-Json/credencialesDocentes.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if (
            $_POST["NumDoc"]==$registro["NumDoc"] && 
            sha1($_POST["ContraDoc"])==sha1($registro["ContraDoc"])
        ){
            $registro["estatus"] = "1"; 
            $registro["mensaje"] = "Acceso autorizado";
            $_SESSION["NumDoc"] = $_POST["NumDoc"];
            $_SESSION["NumDoc"] = $registro["NumDoc"];

            echo json_encode($registro);
            exit;
        }
    }
    //No encontro el registro
    $registro = array();
    $registro["estatus"] = "0"; //Acceso no autorizado
    $registro["mensaje"] = "Acceso no autorizado";
    echo json_encode($registro);
?>