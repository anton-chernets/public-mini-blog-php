<?php

namespace models;

use components\App;

class Comment
{
    /**
     * Запись в базу данных комментария к публикации
     *
     * @param string $publication_id
     * @param string $author_name
     * @param string $comment
     * @return mixed
     */
    public static function insetSQL($publication_id, $author_name, $comment)
    {
        $app = App::getInstance();

        return $app->db->setSql("INSERT INTO `comments` (`postid`, `name`, `post`) VALUES ('$publication_id', '$author_name','$comment')")
            ->exec();
    }

    /**
     * Метод представления комментариев публикации
     *
     * @param string $publication_id
     * @return mixed
     */
    public static function findComments($publication_id)
    {
        $app = App::getInstance();

        return $app->db->setSql("SELECT * FROM comments WHERE postid = ".$publication_id." ORDER BY id DESC")
            ->all();
    }

    /**
     * Функция количества комментариев у публикации
     *
     * @param integer $publication_id - публикации
     * @return integer $comments - колличество комментариев публикации
     */
    public static function countComments($publication_id)
    {
        return count(self::findComments($publication_id));
    }

}