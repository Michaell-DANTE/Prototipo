<?php

    if( isset($_REQUEST['procesar']) )
    {


        require_once("../controlador/registro.php");
        require("../modelo/registroUD.php");   
        header('Location: ../controlador/tipo_doc.php');
        
    }
    
    
?>
