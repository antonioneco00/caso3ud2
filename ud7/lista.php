<?php

    require_once 'conexion.php';

    $sql = 'SELECT * FROM pais;';
    $query = mysqli_query($db, $sql);

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Pais</th>
        <th>Continente</th>
    </tr>

    <?php while ($pais = mysqli_fetch_assoc($query)) :?>
        <tr>
            <td><?=$pais['id'];?></td>
            <td><?=$pais['nombre'];?></td>
            <td><?=$pais['continente'];?></td>
        </tr>
    <?php endwhile;?>
</table>

<a href="index.php">Añadir más países</a>