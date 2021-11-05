<?php

    $tablas = [
        'primera' => 5,
        'segunda' => 13,
        'tercera' => 11
    ];

?>

<table border="1">
    <tr>
        <th>Primera tabla</th>
        <th>Segunda tabla</th>
        <th>Tercera tabla</th>
    </tr>
    <?php for ($i=1; $i <= 10; $i++) :?>
        <tr>
            <?php foreach ($tablas as $valor) :?>
                <?="<td>$valor x $i = " . $valor * $i . '</td>';?>
            <?php endforeach;?>
        </tr>
    <?php endfor;?>
</table>