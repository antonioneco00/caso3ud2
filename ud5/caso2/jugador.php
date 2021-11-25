<?php

class Jugador {
    private $numeroJug;
    private $ptos;
            
    public function __construct($numeroJug, $ptos) {
        $this->numeroJug = $numeroJug;
        $this->ptos = $ptos;
    }

    public function getNumeroJug() {
        return $this->numeroJug;
    }

    public function getPtos() {
        return $this->ptos;
    }

    public function addPtos($ptos) {
        if ($ptos > 0) {
            $this->ptos += $ptos;
        } else {
            return 'Se debe ingresar una cantidad mayor a 0';
        }
    }
}