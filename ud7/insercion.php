<?php

    require_once 'conexion.php';

    if (isset($_POST['nombre']) && isset($_POST['continente'])) {
        $nombre = $_POST['nombre'];
        $continente = $_POST['continente'];
        $sql = "INSERT INTO pais VALUES(null, '$nombre', '$continente');";
        $insert = mysqli_query($db, $sql);

        if ($insert) {
            echo 'Datos insertados correctamente<br>';
        } else {
            echo 'Ha habido un error en la consulta: ' . mysqli_error($db) . '<br>';
        }
    } else {
        header('Location: index.php');
    }

?>

<a href="lista.php">Ver lista de países</a><br>
<a href="index.php">Añadir otro país</a>