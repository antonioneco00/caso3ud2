
        <h2>Selecciona un episodio para ver los actores que aparecen en él</h2>

        <form action="index.php?controller=seasonEp&action=showByEpisode" method="POST">
            <select name="episode">
                <?php while ($episode = $allEpisodes->fetch_object()) :?>
                    <option value="<?=$episode->episode;?>"><?=$episode->episode;?></option>
                <?php endwhile;?>
            </select>

            <input type="submit" value="Enviar">
        </form>
        
        <p>También puedes ver la tabla completa <a href="index.php?controller=seasonEp&action=showAll">aquí</a></p>