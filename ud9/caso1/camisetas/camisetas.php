<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Mi tienda online</title>
    </head>
    <body>
        <div id="container">
            <h1>Mi tienda online</h1>

            <div id="formulario">
                <h3>Comprar camisetas</h3>

                <form action="../cookie.php?producto=camisetas" method="POST">
                    <label for="cantidad">Cantidad:</label><br>
                    <input type="number" name="numero" value="1" min="1" required>
                    <br>
                    <input type="submit" value="Confirmar">
                </form>

                <a href="../index.php">Volver al inicio</a>
            </div>
        </div>
    </body>
</html>