<?php

    session_start(); 

    $var_sesion = isset($_SESSION['nombre_ing']);

    if($var_sesion == '')
    {

        echo "Usted no esta autorizado";
        die();

    }else{

        $contenido = ("../vista/plantilla.phtml");
        require_once('../modelo/bitacora.php');
        $queryb = registro_entrada($con);
        require_once('../vista/pestañas/registro_ingreso.phtml');
        require('../vista/plantilla.phtml');

    }


?>