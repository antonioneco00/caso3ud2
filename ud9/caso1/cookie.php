<?php

if (isset($_GET['producto']) && isset($_POST['numero'])) {
    $producto = $_GET['producto'];
    $numero = (int)$_POST['numero'];

    if (isset($_COOKIE[$producto])) {
        $numProductos = (int)$_COOKIE[$producto] + $numero;

        setcookie($producto, $numProductos, time() + (60 * 60 * 24));
    } else {
        setcookie($producto, $numero, time() + (60 * 60 * 24));
    }

    header('Location: carrito');
} else {
    header('Location: index.php');
}