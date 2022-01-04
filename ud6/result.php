<?php

if (isset($_POST['pais']) && isset($_POST['poblacion']) && isset($_POST['calle']) && isset($_POST['numero'])) {
    $pais = $_POST['pais'];
    $poblacion = $_POST['poblacion'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];

    echo "<h1>Pais: $pais</h1>";
    echo "<h1>Poblacion: $poblacion</h1>";
    echo "<h1>Calle: $calle</h1>";
    echo "<h1>Numero: $numero</h1>";

    var_dump($_POST);
} else {
    header('Location: index.php');
}