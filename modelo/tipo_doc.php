<?php

    require_once('../modelo/conexion.php');

    $sql = "SELECT id, tipo_documento FROM tipo_doc;";


    $query = mysqli_query($con, $sql);




?>