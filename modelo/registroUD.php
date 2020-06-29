<?php

    require_once("../modelo/conexion.php");

    require_once("../config.php");

    $resultado = registrar_usuario($con, $bd_nombre, $bd_documento, $bd_curso, $bd_jornada, $bd_tipo_doc, $bd_rol, $bd_estado);

?>