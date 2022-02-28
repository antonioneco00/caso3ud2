<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Mi tienda online</title>
    </head>
    <body>
        <div id="container">
            <h1>Mi tienda online</h1>

            <?php if (isset($_COOKIE) && !empty($_COOKIE)) :?>
                <table border="1">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php foreach($_COOKIE as $producto => $cantidad) :?>
                        <tr>
                            <td><?=$producto;?></td>
                            <td><?=$cantidad;?></td>
                            <td><a href="borrar.php?producto=<?=$producto?>">Borrar</a></td>
                        </tr>
                    <?php endforeach;?>
                </table>

                <a href="index.php">Añade más productos</a>
            <?php else :?>
                <p>No has añadido productos</p>

                <a href="index.php">Añade productos</a>
            <?php endif;?>
        </div>
    </body>
</html>