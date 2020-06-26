<?php

    require_once('../modelo/conexion.php');

    $sql = "SELECT id_tipo_documentos, nombre_tipo_documentos FROM tipo_documentos;";


    $query = mysqli_query($con, $sql);




?>