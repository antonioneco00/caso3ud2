
        <h2>Actores por episodio</h2>

        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>serie_name</th>
                <th>episode</th>
                <th>season</th>
                <th>title</th>
            </tr>
            <?php while ($actorSeason = $actorsSeason->fetch_object()) :?>
                <tr>
                    <td><?=$actorSeason->id;?></td>
                    <td><?=$actorSeason->name;?></td>
                    <td><?=$actorSeason->serie_name;?></td>
                    <td><?=$actorSeason->episode;?></td>
                    <td><?=$actorSeason->season;?></td>
                    <td><?=$actorSeason->title;?></td>
                </tr>
            <?php endwhile;?>
        </table>