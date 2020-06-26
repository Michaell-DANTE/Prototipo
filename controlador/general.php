<?php

    $contenido = ("../vista/plantilla.phtml");

    if( isset($_REQUEST['procesar']) )
    {

        //Se ejecuta la siguiente ruta.
        require_once("../controlador/registro.php");

        require("../modelo/registroUD.php");
            


    }

    require('../vista/plantilla.phtml');
?>
