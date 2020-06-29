<?php

    //---------------------------------------Configuracion_De_Base_Datos----------------------------------------------- 
    /**
     * conectar
     * Ejecuta la conexion de de la base de datos.
     * @return $con
     */  

    function conectar()
    {

        $BBD_LOCAL = "localhost";
        $BBD_USER = "root";
        $BBD_PASSWORD = "toor";
        $BBD_NOMBD = "prototipo";

        $con = mysqli_connect($BBD_LOCAL,$BBD_USER,$BBD_PASSWORD,$BBD_NOMBD);

        return $con;

    }


    //---------------------------------------Configuracion_Del_Registro_Entrada----------------------------------------
    /**
     * registro_entrada
     * Permite ver el regitro de entrada.
     * @param  mixed $con
     * @return $queryb
     */

    function registro_entrada($con)
    {

        $sqlb = "SELECT nombre_usuario, documento, fecha, act_estado FROM bitacora_usuario;";

        $queryb = mysqli_query($con, $sqlb);

        return $queryb;

    }


    //---------------------------------------Configuracion_Del_Registro_Salida-----------------------------------------
    /**
     * registros_salida
     * Permite ver el regitro de salida.
     * @param  mixed $con
     * @return $querys
     */

    function registros_salida($con)
    {

        $sqls = "SELECT nombre_usuario, documento, fecha, act_estado FROM bitacora_salida;";

        $querys = mysqli_query($con, $sqls);

        return $querys;

    }


    //---------------------------------------Configuracion_De_Estado---------------------------------------------------
    /**
     * mostrar_estado
     * Permite ver el los estados.
     * @param  mixed $con
     * @return $querye
     */

    function mostrar_estado($con)
    {

        $sqle = "SELECT id, estados FROM estado;";

        $querye = mysqli_query($con, $sqle);

        return $querye;

    }


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


    //---------------------------------------Configuracion_De_Tipo_Doc-------------------------------------------------
    /**
     * mostrar_tipo_doc
     * Permite ver el los tipos de documento.
     * @param  mixed $con
     * @return $query
     */

    function mostrar_tipo_doc($con)
    {

        $sql = "SELECT id, tipo_documento FROM tipo_doc;";

        $query = mysqli_query($con, $sql);

        return $query;

    }


    //---------------------------------------Configuracion_De_Rol------------------------------------------------------
    /**
     * mostrar_rol
     * Permite ver el los roles asignados.
     * @param  mixed $con
     * @return $queryr
     */

    function mostrar_rol($con)
    {

        $sqlr = "SELECT id, nombre_rol FROM roles;";

        $queryr = mysqli_query($con, $sqlr);

        return $queryr;

    }

?>