<?php

require_once 'models/titles.php';

class TitlesController {
    public function showAll() {
        $titles = new Titles();
        $datosSerie = $titles->getAll();
        
        require_once 'views/titulo.php';
    }
}