<?php

require_once 'Coche.php';

$coche = new Coche('150CV', 2, 'Volante', 4);
$coche->acelerar(50);
$coche->frenar(5);

var_dump($coche);

foreach ($coche as $atributo => $valor) {
    echo "$atributo - $valor";

    var_dump($atributo);
}