<?php

    require_once('../modelo/conexion.php');

    //---------------------------------------Configuracion_Ingreso_Admin-------------------------------------------
    /**
     * ingreso_admin
     * Permite ingresar a un admin al sistema.
     * @param  mixed $con
     * @param  mixed $nombre
     * @param  mixed $pass
     * @return $lectura
     */
    
    function ingreso_admin($con, $nombre, $pass)
    {

        $sql = "SELECT * FROM clientes WHERE nombre_admin = '".$nombre."' AND contraseña_admin = '".$pass."'";

        $query = mysqli_query($con, $sql);
    
        $lectura = mysqli_num_rows($query);

        return $lectura;
    
        mysqli_close($con); 

    }



?>