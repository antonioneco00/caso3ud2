<?php

class Titles {
    private $id;
    private $title;
    private $plot;
    private $creators;
    private $season_start;
    private $season_end;
    private $seasons;
    private $generes;
    private $db;

    public function __construct() {
        $this->db = thronesDB::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPlot() {
        return $this->plot;
    }

    public function getCreators() {
        return $this->creators;
    }

    public function getSeason_start() {
        return $this->season_start;
    }

    public function getSeason_end() {
        return $this->season_end;
    }

    public function getSeasons() {
        return $this->seasons;
    }

    public function getGeneres() {
        return $this->generes;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPlot($plot) {
        $this->plot = $plot;
    }

    public function setCreators($creators) {
        $this->creators = $creators;
    }

    public function setSeason_start($season_start) {
        $this->season_start = $season_start;
    }

    public function setSeason_end($season_end) {
        $this->season_end = $season_end;
    }

    public function setSeasons($seasons) {
        $this->seasons = $seasons;
    }

    public function setGeneres($generes) {
        $this->generes = $generes;
    }
    
    public function getAll() {
        $sql = 'SELECT * FROM titles;';
        $titles = $this->db->query($sql);
        
        return $titles;
    }
}