
        <h2>Listado de actores</h2>

        <table border="1">
            <tr>
                <th>id</th>
                <th>full_desc</th>
                <th>serie_name</th>
                <th>episodes</th>
                <th>season_start</th>
                <th>season_end</th>
                <th>title</th>
                <th>name</th>
            </tr>
            <?php while ($actor = $actors->fetch_object()) :?>
                <tr>
                    <td><?=$actor->id;?></td>
                    <td><?=$actor->full_desc;?></td>
                    <td><?=$actor->serie_name;?></td>
                    <td><?=$actor->episodes;?></td>
                    <td><?=$actor->season_start;?></td>
                    <td><?=$actor->season_end;?></td>
                    <td><?=$actor->title;?></td>
                    <td><?=$actor->name;?></td>
                </tr>
            <?php endwhile;?>
        </table>