<?php

$db = mysqli_connect('localhost', 'root', '', 'paises');

if (mysqli_connect_errno()) {
    echo 'La conexion con la base de datos ha fallado: ' . mysqli_connect_error();
} else {
    echo 'Conexion realizada correctamente<br>';
}

mysqli_query($db, "SET NAMES 'utf8'");