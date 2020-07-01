<?php

    require_once('../modelo/conexion.php');

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


?>