<div id="wrapper">
    <h2>Популярные посты:</h2>
    <ul id="vertical-ticker">
        <? foreach ($popular as $item): ?>
            <li>
                <a href="/blog/publication/<?=$item[0]?>"><?=mb_substr($item[3], 0, 20)?></a>
                <br>
                <span class="post"><?=mb_substr($item[4], 0, 50)."..."?></span>
            </li>
        <? endforeach ?>
    </ul>
    <p><a href="#" id="ticker-previous">Previous</a> / <a href="#" id="ticker-next">Next</a> / <a id="stop" href="#">Stop</a> / <a id="start" href="#">Start</a></p>
</div>