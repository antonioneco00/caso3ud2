<?php

$array = [];

for ($i = 0; $i <= 100; $i++) {
    $array[] = rand(0, 100);
}

var_dump($array);
echo max($array);