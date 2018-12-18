<?php
             
            $archivo = fopen("../../bd-json/ClasesMatriculadas.json","a+"); 
            $arreglo = array();
            $arreglo["DepartamentoMatriculado"]=$_POST["DepartamentoMatriculado"];
            $arreglo["ClaseMatriculada"]=$_POST["ClaseMatriculada"];
            $arreglo["SeccionMatriculada"]=$_POST["SeccionMatriculada"];

            fwrite($archivo, json_encode($arreglo)."\n");
            fclose($archivo);
            echo json_encode($arreglo);

            ?>