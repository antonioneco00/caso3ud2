<?php

require_once 'models/cast.php';

class CastController {
    public function showAll() {
        $cast = new Cast();
        $actors = $cast->getAll();
        
        require_once 'views/actores.php';
    }
}