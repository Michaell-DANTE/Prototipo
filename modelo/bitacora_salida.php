<?php

    require_once('../modelo/conexion.php');

    $sqls = "SELECT nombre_usuario, documento, fecha, act_estado FROM bitacora_salida;";


    $querys = mysqli_query($con, $sqls);


?>