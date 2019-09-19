<?php

$title = 'Publication ' . $publication['id'];

/**
 * @param  array $publication
 * @param  array $comments
 */
?>

<?php include ("parts/header.php") ?>

<?php include ("parts/popular.php") ?>

<br>
<div class="container-fluid">
    <div class="container-weight">
        <div class="one_post">
            <h2><?=$publication['title']?></h2>
            <div class="post"><?=$publication['post'];?></div>
            <span class="name"><?=$publication['author']?></span>
            <span class="date"><?='&ensp;'.\helpers\DateTimeHelper::getDate($publication['ctime'])?></span>
            <span class="comments">&ensp;Комментарии
                <span class="badge">
                    <?=\models\Comment::countComments($publication['id']);?>
                </span>
            </span>
        </div>
    </div>
</div>

<hr>
<div class="container-fluid">
    <div class="container-weight">
        <div class="comments">
            <h4>Комментарии:</h4>
            <? foreach ($comments as $comment): ?>
                <p class="comment">
                    <b><?=$comment[2]?></b>: <?=$comment[3]?>
                </p>
            <? endforeach; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container-weight">
        <h4>Добавить комментарий</h4>
        <form action="/blog/addComment/<?=$publication['id']?>" method="post" class="form-inline well">
            <label>Имя: </label> <input type="text" name="a-name" value=""  required>
            <label>Комментарий: </label> <input type="text" name="comment"  required>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>

<?php include ("parts/footer.php") ?>
