<!-- Realiza la conexion a la base de datos. -->
<?php

    $BBD_LOCAL = "localhost";
    $BBD_USER = "root";
    $BBD_PASSWORD = "toor";
    $BBD_NOMBD = "prototipo";

    $con = mysqli_connect($BBD_LOCAL,$BBD_USER,$BBD_PASSWORD,$BBD_NOMBD);

    

?>   