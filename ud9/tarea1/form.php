<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <h1>Introduce tu nombre</h1>

        <form action="session.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" name="name" required>

            <input type="submit" value="Enviar">
        </form>

        <?php if (isset($_SESSION['name'])) :?>
            <h3>El último nombre introducido es: <?=$_SESSION['name'];?></h3>
        <?php else :?>
            <h3>Aún no se ha introducido ningún nombre</h3>
        <?php endif;?>
    </body>
</html>