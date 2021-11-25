<?php

class Dado {
    private $minNumDado;
    private $maxNumDado;
    
    public function __construct($minNumDado, $maxNumDado) {
        $this->minNumDado = $minNumDado;
        $this->maxNumDado = $maxNumDado;
    }
    
    public function getMinNumDado() {
        return $this->minNumDado;
    }

    public function getMaxNumDado() {
        return $this->maxNumDado;
    }

    public function setMinNumDado($minNumDado) {
        $this->minNumDado = $minNumDado;
    }

    public function setMaxNumDado($maxNumDado) {
        $this->maxNumDado = $maxNumDado;
    }

    public function tirarDado() {
        return rand($this->minNumDado, $this->maxNumDado);
    }
}