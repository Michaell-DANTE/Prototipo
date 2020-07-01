<?php
    $contenido = ("../vista/plantilla.phtml");

    require_once('../modelo/bitacora_salida.php');
    $querys = registros_salida($con);
    require_once('../vista/pestañas/registro_salida.phtml');
    require('../vista/plantilla.phtml');

?>