<?php

namespace controllers;

use engine\controllers\Base,
    models\Publication;

class defaultController extends Base
{
    public function indexAction()
    {
        $this->view->render('index', [
            'publications' => Publication::findPublications(),
            'popular' => Publication::findPopularByCommented(),
        ]);
    }

    public function errorAction()
    {
        echo 'Error';
    }

}