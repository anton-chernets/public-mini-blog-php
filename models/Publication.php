<?php

namespace models;

use components\App;

class Publication
{
    /**
     * Запись и обновление в базу данных публикации
     *
     * @param string $title
     * @param string $author_name
     * @param string $text
     * @return mixed
     */
    public static function insetSQL($title, $author_name, $text)
    {
        $app = App::getInstance();

        return $app->db->setSql("INSERT INTO `publications` (`title`, `author`, `post`, `ctime`) VALUES ('".$title."', '".$author_name."', '".$text."', '".time()."') ON DUPLICATE KEY UPDATE `ctime`='time()'")
                ->exec();
    }
    /**
     * Запись увеличения счетчика комментариев в базу данных публикации
     *
     * @param string $publication_id
     * @param string $count
     * @return mixed
     */
    public static function updateCountComments($publication_id, $count)
    {
        $app = App::getInstance();

        return $app->db->setSql("UPDATE `publications` SET commentsCount=? WHERE id=?", $count, $publication_id)
            ->exec();
    }

    /**
     * Метод представления всех статей
     *
     * @return mixed
     */
    public static function findPublications()
    {
        $app = App::getInstance();

        return $app->db->setSql("SELECT * FROM publications ORDER BY ctime DESC")
            ->all();
    }

    /**
     * Метод представления публикации
     *
     * @param string $publication_id
     * @return mixed
     */
    public static function findPublication($publication_id)
    {
        $app = App::getInstance();

        return $app->db->setSql("SELECT * FROM publications WHERE id =".$publication_id)
            ->one();
    }

    /**
     * Функция отображения пяти самых комментируемых записей
     *
     * @return array $popular - популярных статей
     */
    public static function findPopularByCommented()
    {
        $app = App::getInstance();

        return $app->db->setSql("SELECT * FROM publications ORDER BY commentsCount DESC LIMIT 5")
            ->all();
    }

}