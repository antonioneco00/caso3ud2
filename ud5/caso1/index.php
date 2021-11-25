<?php

require_once 'Dado.php';

$dado = new Dado(0, 12);

for ($i = 0; $i < $dado->getMaxNumDado(); $i++) {
    echo $dado->tirarDado() . '<br>';
}