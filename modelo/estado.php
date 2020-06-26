<?php

    require_once('../modelo/conexion.php');

    $sqle = "SELECT id, estados FROM estado;";


    $querye = mysqli_query($con, $sqle);



?>