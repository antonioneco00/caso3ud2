
        <h2>Actores que aparecen en el episodio <?=$episode;?></h2>

        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>serie_name</th>
                <th>episode</th>
                <th>season</th>
                <th>title</th>
            </tr>
            <?php while ($actorEpisode = $actorsEpisode->fetch_object()) :?>
                <tr>
                    <td><?=$actorEpisode->id;?></td>
                    <td><?=$actorEpisode->name;?></td>
                    <td><?=$actorEpisode->serie_name;?></td>
                    <td><?=$actorEpisode->episode;?></td>
                    <td><?=$actorEpisode->season;?></td>
                    <td><?=$actorEpisode->title;?></td>
                </tr>
            <?php endwhile;?>
        </table>