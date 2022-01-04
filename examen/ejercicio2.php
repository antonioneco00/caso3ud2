<?php

$array = [];
$max = 0;

for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 20);
}

foreach ($array as $clave => $valor) {
    echo "Elemento $clave -> $valor <br>";

    if ($max <= $valor) {
        $max = $valor;
    }
}

// Con función max

echo '<hr> El numero maximo es ' . max($array);

// Con bucle for

echo '<hr> El numero maximo es ' . $max;