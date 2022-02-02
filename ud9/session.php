<?php
    if (isset($_POST['name'])) {
        session_start();

        $_SESSION['name'] = $_POST['name'];
    } else {
        header('Location: form.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sesión</title>
    </head>
    <body>
        <h1>Has introducido el nombre: <?=$_SESSION['name'];?></h1>
        <a href="form.php">Introduce otro nombre</a>
    </body>
</html>