<?php

class Cuatro_ruedas extends Vehiculo {
    private $numero_puertas;
    
    function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    function getNumero_puertas() {
        return $this->numero_puertas;
    }

    function setNumero_puertas($numero_puertas): void {
        $this->numero_puertas = $numero_puertas;
    }

    public function repintar($color) {
        parent::setColor($color);
    }
}