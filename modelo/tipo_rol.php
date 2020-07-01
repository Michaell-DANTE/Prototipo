<?php

    require_once('../modelo/conexion.php');

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