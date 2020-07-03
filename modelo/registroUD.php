<?php

    require_once("../modelo/conexion.php");

    //---------------------------------------Configuracion_Registro_Personas-------------------------------------------
    /**
     * registrar_usuario
     * Permite registrar los datos de un usuario.
     * @param  mixed $con
     * @param  mixed $bd_nombre
     * @param  mixed $bd_documento
     * @param  mixed $bd_curso
     * @param  mixed $bd_jornada
     * @param  mixed $bd_tipo_doc
     * @param  mixed $bd_rol
     * @param  mixed $bd_estado
     * @return $resultado
     */
    
    function registrar_usuario($con, $bd_nombre, $bd_documento, $bd_curso, $bd_jornada, $bd_tipo_doc, $bd_rol, $bd_estado)
    {

        $sqlU = "INSERT INTO usuarios(nombre, documento, curso, jornada, id_tipo_doc, id_rol, id_estado)";

        $sqlU .=" VALUES('$bd_nombre', '$bd_documento', '$bd_curso', '$bd_jornada', '$bd_tipo_doc', '$bd_rol', '$bd_estado');";
    
        $resultado = $con -> query("$sqlU");
    
        return $resultado;

        mysqli_close($con); 
    
    }


?>