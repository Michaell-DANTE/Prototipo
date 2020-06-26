<?php

    require_once("../modelo/conexion.php");

    $sqlU = "INSERT INTO usuarios(id_usuarios, nombre_usuarios, documento)";

    $sqlU .=" VALUES(1,'$bd_nombre', '$bd_documento');";

    $resultado = $con -> query("$sqlU");


    mysqli_close($con); 

    

?>