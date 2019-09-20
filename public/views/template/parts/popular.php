<?php

use \helpers\StringHelper;

/**
 * @param  array $popular
 */
?>

<div id="wrapper">
    <h2>Популярные посты:</h2>
    <ul id="vertical-ticker">
        <? foreach ($popular as $item): ?>
            <li>
                <a href="/blog/publication/<?=$item[0]?>"><?=StringHelper::pruningString($item[3], 20)?></a>
                <br>
                <span class="post"><?=StringHelper::pruningString($item[4], 50)."..."?></span>
            </li>
        <? endforeach ?>
    </ul>
    <p><a href="#" id="ticker-previous">Previous</a> / <a href="#" id="ticker-next">Next</a> / <a id="stop" href="#">Stop</a> / <a id="start" href="#">Start</a></p>
</div>