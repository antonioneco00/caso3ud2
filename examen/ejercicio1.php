<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <title>Ejercicio 1</title>
        <style>
            table {
                text-align: center;
            }
            
            td {
                padding: 5px
            }
        </style>
    </head>
    <body>
        <table border="1">
            <?php 
                $suma = 0;
                
                for ($i = 1; $i <= 100; $i++) :
                    $suma += $i;
            ?>
                <?php if (($i - 1) % 10 == 0) :?>
                    <tr>
                <?php endif;?>
                        <td><?=$i;?></td>
                <?php if ($i % 10 == 0) :?>
                    <tr>
                <?php endif;?>
            <?php endfor;?>
        </table>
        
        <p>La suma de todos los numeros es <?=$suma;?></p>
    </body>
</html>