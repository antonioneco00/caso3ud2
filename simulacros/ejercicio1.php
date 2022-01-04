<?php
    $estadios_futbol = array(
        'Barcelona' => 'Camp Nou',
        'Real Madrid' => 'Santiago Bernabeu',
        'Valencia' => 'Mestalla',
        'Real Sociedad' => 'Anoeta'
    );
?>

<table border='1'>
    <tr>
        <th>Club</th>
        <th>Estadio</th>
    </tr>
    
    <?php foreach ($estadios_futbol as $club => $estadio) :?>
        <tr>
            <td><?=$club?></td>
            <td><?=$estadio?></td>
        </tr>
    <?php endforeach;?>
</table>

<hr>

<?php
    unset($estadios_futbol['Real Madrid']);
?>

<table border='1'>
    <tr>
        <th>Club</th>
        <th>Estadio</th>
    </tr>
    
    <?php foreach ($estadios_futbol as $club => $estadio) :?>
        <tr>
            <td><?=$club?></td>
            <td><?=$estadio?></td>
        </tr>
    <?php endforeach;?>
</table>