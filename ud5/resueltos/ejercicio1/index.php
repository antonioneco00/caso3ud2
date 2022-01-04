<?php

require_once 'Vehiculo.php';
require_once 'Cuatro_ruedas.php';

$vehiculo = new Vehiculo('Azul', 3000);
$cuatro_ruedas = new Cuatro_ruedas('Negro', 1000, 2);

var_dump($vehiculo);
var_dump($cuatro_ruedas);

$cuatro_ruedas->repintar('Rojo');

var_dump($cuatro_ruedas);