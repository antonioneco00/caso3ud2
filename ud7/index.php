<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Países</title>
    </head>
    <body>
        <form action="insercion.php" method="post">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" required>
            <br>
            <label for="continente">Continente</label><br>
            <input type="text" name="continente" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>