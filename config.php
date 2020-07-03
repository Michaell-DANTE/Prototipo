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


    function sesion_exitosa()
    {

        $var_sesion = isset($_SESSION['nombre_ing']);

        if($var_sesion == '')
        {

            echo "Usted no esta autorizado";
            die();

        }

        return $var_sesion;

    }

?>