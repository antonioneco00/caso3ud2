<?php

require_once 'models/seasonEp.php';

class SeasonEpController {
    public function showAll() {
        $seasonEp = new SeasonEp();
        $actorsSeason = $seasonEp->getAll();
        
        require_once 'views/actoresTemp.php';
    }

    public function showForm() {
        $seasonEp = new SeasonEp();
        $allEpisodes = $seasonEp->getEpisodes();
        
        require_once 'views/actoresForm.php';
    }

    public function showByEpisode() {
        if (isset($_POST['episode'])) {
            $episode = $_POST['episode'];
            $seasonEp = new SeasonEp();
            $seasonEp->setEpisode($episode);
            $actorsEpisode = $seasonEp->getByEpisode();

            require_once 'views/actoresEpisode.php';
        } else {
            header('Location: index.php?controller=seasonEp&action=showForm');
        }
    }
}