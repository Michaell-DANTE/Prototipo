<?php

    require_once('../modelo/conexion.php');

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



?>