        <?php $got = $datosSerie->fetch_object();?>

        <p><?=$got->plot;?></p>
        Creators: <?=$got->creators;?><br>
        Season Start: <?=$got->season_start;?><br>
        Season End: <?=$got->season_end;?><br>
        Seasons: <?=$got->seasons;?><br>
        Generes: <?=$got->generes;?><br>

        <?php require_once 'views/layout/links.php';?>