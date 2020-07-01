<?php

    require_once('../modelo/conexion.php');

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


?>