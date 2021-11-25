<?php

class Equipo {
    private $jugadores;
    
    public function __construct($jugadores) {
        $this->jugadores = $jugadores;
    }
    
    function getJugadores() {
        return $this->jugadores;
    }

    public function addJug($jugador) {
        array_push($this->jugadores, $jugador);
    }
    
    public function getJug($numJugador) {
        $existe = false;
        
        foreach ($this->jugadores as $jugador) {
            if ($jugador->getNumeroJug() == $numJugador) {
                $existe = true;
                break;
            }
        }
            
        return $existe ? $jugador : "No existe el jugador número $numJugador";
    }
    
    public function getTotal() {
        $ptosTotales = 0;
        
        foreach ($this->jugadores as $jugador) {
            $ptosTotales += $jugador->getPtos();
        }
        
        return $ptosTotales;
    }
}