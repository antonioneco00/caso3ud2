<?php

class Vehiculo {
    private $color;
    private $peso;
    
    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function getColor() {
        return $this->color;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
    
    public function circula() {
        
    }
    
    public function añadir_persona($peso_persona) {
        
    }
}