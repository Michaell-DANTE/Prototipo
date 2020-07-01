<?php

    require_once('../modelo/conexion.php');

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



?>