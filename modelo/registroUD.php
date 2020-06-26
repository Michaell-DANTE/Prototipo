<?php

    require_once("../modelo/conexion.php");

    $sqlU = "INSERT INTO usuarios(nombre, documento, curso, jornada, id_tipo_doc, id_rol, id_estado)";

    $sqlU .=" VALUES('$bd_nombre', '$bd_documento', '$bd_curso', '$bd_jornada', '$bd_tipo_doc', '$bd_rol', '$bd_estado');";

    $resultado = $con -> query("$sqlU");


    mysqli_close($con); 

    

?>