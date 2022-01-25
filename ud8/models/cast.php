<?php

class Cast {
    private $id;
    private $full_desc;
    private $serie_name;
    private $episodes;
    private $season_start;
    private $season_end;
    private $title;
    private $name;
    private $db;


    public function __construct() {
        $this->db = thronesDB::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getFull_desc() {
        return $this->full_desc;
    }

    public function getSerie_name() {
        return $this->serie_name;
    }

    public function getEpisodes() {
        return $this->episodes;
    }

    public function getSeason_start() {
        return $this->season_start;
    }

    public function getSeason_end() {
        return $this->season_end;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFull_desc($full_desc) {
        $this->full_desc = $full_desc;
    }

    public function setSerie_name($serie_name) {
        $this->serie_name = $serie_name;
    }

    public function setEpisodes($episodes) {
        $this->episodes = $episodes;
    }

    public function setSeason_start($season_start) {
        $this->season_start = $season_start;
    }

    public function setSeason_end($season_end) {
        $this->season_end = $season_end;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getAll() {
        $sql = 'SELECT * FROM cast;';
        $cast = $this->db->query($sql);
        
        return $cast;
    }
}