<?php

class SeasonEp {
    private $id;
    private $name;
    private $serie_name;
    private $episode;
    private $season;
    private $title;
    private $db;

    public function __construct() {
        $this->db = thronesDB::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSerie_name() {
        return $this->serie_name;
    }

    public function getEpisode() {
        return $this->episode;
    }

    public function getSeason() {
        return $this->season;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSerie_name($serie_name) {
        $this->serie_name = $serie_name;
    }

    public function setEpisode($episode) {
        $this->episode = $episode;
    }

    public function setSeason($season) {
        $this->season = $season;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getAll() {
        $sql = 'SELECT * FROM season_ep;';
        $season_ep = $this->db->query($sql);
        
        return $season_ep;
    }

    public function getEpisodes() {
        $sql = 'SELECT episode FROM season_ep GROUP BY episode;';
        $episodes = $this->db->query($sql);

        return $episodes;
    }

    public function getByEpisode() {
        $sql = 'SELECT * FROM season_ep WHERE episode = ' . $this->getEpisode();
        $actorsByEpisode = $this->db->query($sql);

        return $actorsByEpisode;
    }
}