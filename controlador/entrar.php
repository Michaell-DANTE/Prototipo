<?php

    $contenido = ("../vista/inicio.phtml");

    if( isset($_REQUEST['enviar']) )
    {


        require_once("../controlador/ingreso.php");
        require("../modelo/ingreso.php");




        if( $lectura != 0 )
        {
    
            header("location: ../vista/sub_inicio.phtml");
    
    
        }else{
    
    
        }


    }

    
    require_once("../vista/inicio.phtml"); 

 

?>