<?php

class ClubBasket extends db {
    private $id;
    private $nombreJugador;
    private $posicion;
    private $numero;
    private $edad;
    private $conexion;
    
    function __construct($id, $nombreJugador, $posicion, $numero, $edad) {
        $this->id = $id;
        $this->nombreJugador = $nombreJugador;
        $this->posicion = $posicion;
        $this->numero = $numero;
        $this->edad = $edad;
        $this->conexion = parent::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getNombreJugador() {
        return $this->nombreJugador;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombreJugador($nombreJugador) {
        $this->nombreJugador = $nombreJugador;
    }

    public function setPosicion($posicion) {
        $this->posicion = $posicion;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function updateJugador() {
        $sql = "UPDATE club SET nombreJugador = '" . $this->getNombreJugador() . "', " .
               "posicion = '" . $this->getPosicion() . "', " .
               "numero = " . $this->getNumero() . ", " .
               "edad = " . $this->getEdad() . 
               " WHERE id = " . $this->getId();
        $mysql = $this->conexion->query($sql);
        
        return $mysql;
    }
}