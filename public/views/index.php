<?php

$title = 'Mini blog';

use \helpers\StringHelper;

/**
 * @param  array $publications
 */
?>

<?php include("template/parts/header.php") ?>

<div class="container">

    <?php include ("template/parts/popular.php") ?>

    <div class="container-fluid">
        <div class="container-weight">
            <div class="all_post">
                <? foreach ($publications as $item): ?>
                    <h2><a href="/blog/publication/<?=$item[0]?>"><?=$item[3]?></a></h2>
                    <div class="post"><?=StringHelper::pruningString($item[4], 100).''?><a href="/blog/publication/<?=$item[0]?>"> [...]</a></div>
                    <span class="name"><?=$item[1]?></span>
                    <span class="date"><?='&ensp;'.\helpers\DateTimeHelper::getDate($item[2])?></span>
                    <span class="comments">&ensp;Комментарии <span class="badge"><?= \models\Comment::countComments($item[0]) ?></span></span>
                    <p>&nbsp;</p>
                <? endforeach ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-weight">
            <ul class="pager">
                <li class="previous disabled"><a href="#">&larr; Старая</a></li>
                <li class="next"><a href="#">Новая &rarr;</a></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-weight">
            <div class="form_post">
                <form class="form-horizontal" name="forma" action="/blog/addPublication" method="post">
                    <label>Заголовок поста</label>
                    <input  type="text" class="input-xxlarge" name="title" value="<?=@$this->post['title']?>"  required/>
                    <label>Ваше имя</label>
                    <input type="text" class="input-xxlarge" name="name" value="<?=@$this->post['author']?>" required/>
                    <label>Текст</label>
                    <textarea name="post" class="input-xxlarge" required><?=@$this->post['post']?></textarea>
                    <br>
                    <br>
                    <button class="btn btn-primary" name="submit" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("template/parts/footer.php") ?>

