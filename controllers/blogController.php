<?php

namespace controllers;

use engine\controllers\Base,
    components\App,
    models\Publication,
    models\Comment;

class blogController extends Base
{
    /**
     * Действие публикации новой публикации
     *
     */
    public function addPublicationAction() {

        $app = App::getInstance();

        if ($app->request->isPost) {
            Publication::insetSQL($_POST['title'], $_POST['name'], $_POST['post']);
        }

        $this->view->render('/');
    }

    /**
     * Действие отображения публикации на отдельной странице
     *
     * @param integer $id - публикации
     */
    public function publicationAction($id) {

        $publications = Publication::findPublication($id);

        $comments = Comment::findComments($id);

        $this->view->render('template/publication', [
            'publication' => $publications,
            'comments' => $comments,
            'popular' => Publication::findPopularByCommented(),
        ]);
    }

    /**
     * Действие добавления коментария к указанной публикацие
     *
     * @param integer $publication_id - идентификатор выбранной публикации
     */
    public function addCommentAction($publication_id) {
        $app = App::getInstance();

        if ($app->request->isPost) {
            Comment::insetSQL($publication_id, $_POST['a-name'], htmlspecialchars($_POST['comment']));
            Publication::updateCountComments($publication_id, Comment::countComments($publication_id));
        }

        $this->publicationAction($publication_id);
    }

}