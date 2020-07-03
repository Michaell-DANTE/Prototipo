<?php

    session_start(); 
        
    $var_sesion = isset($_SESSION['nombre_ing']);

    if($var_sesion == '')
    {

        echo "Usted no esta autorizado";
        die();

    }else{
        $contenido = ("../vista/plantilla.phtml");
        require_once('../modelo/bitacora_salida.php');
        $querys = registros_salida($con);
        require_once('../vista/pestañas/registro_salida.phtml');
        require('../vista/plantilla.phtml');
    }
?>