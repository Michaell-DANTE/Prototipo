<?php




    $contenido = ("../vista/inicio.phtml");

    

    if( isset($_REQUEST['enviar']) )
    {

        session_start();

        require_once("../controlador/ingreso.php");
        
        $_SESSION['nombre_ing'] = $nombre;

        require("../modelo/ingreso.php");

        
        $lectura = ingreso_admin($con, $nombre, $pass);

        if( $lectura != 0 )
        {
    
            header("location: control_admin.php");

    
        }else{
    
    
        }


    }

    

    
    require_once("../vista/inicio.phtml"); 

 

?>