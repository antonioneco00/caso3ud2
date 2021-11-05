<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Del 1 al 10</title>
        <style>
            table, th, td {
                border: 1px solid #000;
            }

            table {
                border-collapse: collapse;
            }

            th {
                background-color: #ccc;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
                $i = 0;
                while ($i <= 10) : 
            ?>
                <tr>
                    <?php
                        switch ($i) :
                            case 1:
                                echo "<td>$i</td><td>Primero</td>";
                                break;
                            case 2:
                                echo "<td>$i</td><td>Segundo</td>";
                                break;
                            case 3:
                                echo "<td>$i</td><td>Tercero</td>";
                                break;
                            case 4:
                                echo "<td>$i</td><td>Cuarto</td>";
                                break;
                            case 5:
                                echo "<td>$i</td><td>Quinto</td>";
                                break;
                            case 6:
                                echo "<td>$i</td><td>Sexto</td>";
                                break;
                            case 7:
                                echo "<td>$i</td><td>Séptimo</td>";
                                break;
                            case 8:
                                echo "<td>$i</td><td>Octavo</td>";
                                break;
                            case 9:
                                echo "<td>$i</td><td>Noveno</td>";
                                break;
                            case 10:
                                echo "<td>$i</td><td>Décimo</td>";
                                break;
                            default:
                                echo "<th>Cardinal</th><th>Ordinal</th>";
                                break;
                        endswitch;
                    ?>
                </tr>
            <?php 
                $i++;
                endwhile;
            ?>
        </table>
    </body>
</html>