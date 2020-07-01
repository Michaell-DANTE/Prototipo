<?php

    if( isset($_REQUEST['procesar']) )
    {


        require_once("../controlador/registro.php");
        require("../modelo/registroUD.php");   
        $resultado = registrar_usuario($con, $bd_nombre, $bd_documento, $bd_curso, $bd_jornada, $bd_tipo_doc, $bd_rol, $bd_estado);
        header('Location: ../controlador/tipo_doc.php');
        
    }
    
    
?>
