<?php

if (isset($_GET['producto'])) {
    $producto = $_GET['producto'];

    if (isset($_COOKIE[$producto])) {
        unset($_COOKIE[$producto]);
        setcookie($producto, '', time() - 1);

        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}