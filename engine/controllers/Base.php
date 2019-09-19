<?php

namespace engine\controllers;

use engine\view\Base as BaseView;

class Base
{
    public $defaultAction = 'index';
    
    public $view;
    
    public function __construct(BaseView $view)
    {
        $this->view = $view;
    }
}