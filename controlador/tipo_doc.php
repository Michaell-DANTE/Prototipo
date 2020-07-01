<?php

    $contenido = ("../vista/plantilla.phtml");

    require_once('../modelo/tipo_doc.php');
    $query = mostrar_tipo_doc($con);
    require_once('../modelo/tipo_rol.php');
    $queryr = mostrar_rol($con);
    require_once('../modelo/estado.php');
    $querye = mostrar_estado($con);
    require_once('../vista/pestañas/ingreso.phtml');
    require('../vista/plantilla.phtml');

?>