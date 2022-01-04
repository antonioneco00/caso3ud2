<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            input {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <form action="result.php" method="POST">
            <label for="pais">País</label><br>
            <input type="text" name="pais" required>
            <br>
            <label for="poblacion">Población</label><br>
            <input type="text" name="poblacion" required>
            <br>
            <label for="calle">Calle</label><br>
            <input type="text" name="calle" required>
            <br>
            <label for="numero">Número</label><br>
            <input type="text" name="numero" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>