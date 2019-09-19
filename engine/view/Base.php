<?php

namespace engine\view;


class Base
{
    public $basePath;
    
    public function __construct($path)
    {
        $this->basePath = $path;
    }

    public function render($path, $params = [])
    {
        extract($params);
        require_once $this->basePath.'/public/views/'.$path.'.php';
    }

}