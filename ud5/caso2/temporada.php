<?php

require_once 'jugador.php';
require_once 'equipo.php';

$equipo = new Equipo([]);

for ($i = 1; $i < 10; $i++) {
    $jugador = new Jugador($i, rand(20, 100));
    
    $equipo->addJug($jugador);
}

var_dump($equipo);
var_dump($equipo->getJug(5));
var_dump($equipo->getTotal());