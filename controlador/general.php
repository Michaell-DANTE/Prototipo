<?php

    

    if( isset($_REQUEST['procesar']) )
    {

        //Se ejecuta la siguiente ruta.
        require_once("../controlador/registro.php");

        require("../modelo/registroUD.php");
            
        header('Location: ../controlador/tipo_doc.php');
        
    }
    
    
?>
