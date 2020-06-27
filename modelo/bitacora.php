<?php

    require_once('../modelo/conexion.php');

    $sqlb = "SELECT nombre_usuario, documento, fecha, act_estado FROM bitacora_usuario;";


    $queryb = mysqli_query($con, $sqlb);




?>