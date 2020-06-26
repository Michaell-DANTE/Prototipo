<?php

    require_once('../modelo/conexion.php');

    $sqlr = "SELECT id, nombre_rol FROM roles;";


    $queryr = mysqli_query($con, $sqlr);


?>