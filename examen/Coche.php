<?php

class Coche {
    private $motor;
    private $puerta;
    private $volante;
    private $ruedas;
    private $velocidad = 0;
            
    public function __construct($motor, $puerta, $volante, $ruedas) {
        $this->motor = $motor;
        $this->puerta = $puerta;
        $this->volante = $volante;
        $this->ruedas = $ruedas;
    }

    public function getMotor() {
        return $this->motor;
    }

    public function getPuerta() {
        return $this->puerta;
    }

    public function getVolante() {
        return $this->volante;
    }

    public function getRuedas() {
        return $this->ruedas;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function setPuerta($puerta) {
        $this->puerta = $puerta;
    }

    public function setVolante($volante) {
        $this->volante = $volante;
    }

    public function setRuedas($ruedas) {
        $this->ruedas = $ruedas;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }
    
    public function acelerar($vel) {
        $this->velocidad += $vel;
    }
    
    public function frenar($vel) {
        $this->velocidad -= $vel;
    }
}