<?php

namespace components;

class App
{
    protected static $instance = null;

    protected $isDebug = false;

    public $request;

    public $basePath;

    public $db;

    public function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->request  = new Request();
        $this->db = new MysqliConnector('localhost', 'test', '', 'test_blog');

        self::$instance = $this;
    }

    /**
     * @return App
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return int
     */
    public function run()
    {

        $namespace = $this->request->getControllerNamespace();
        if(empty($namespace)){
            $controller = $this->getController('\controllers\defaultController');
            $this->runAction($controller, $controller->defaultAction);
        }elseif(class_exists($namespace)){
            $controller = $this->getController($namespace);
            $this->runAction($controller, $this->request->getAction(), $this->request->getParam());
        }else{
            $controller = $this->getController('\controllers\defaultController');
            $this->runAction($controller, 'error');
        }

        return $this->end(0);
    }

    /**
     * @param string $name
     * @return \controllers\DefaultController
     */
    protected function getController($name)
    {
        if(empty($name))
            return null;
        $view = new View($this->basePath);
        return new $name($view);
    }

    /**
     * @param \controllers\DefaultController $controller
     * @param string $action
     * @param string $param
     */
    protected function runAction($controller, $action, $param = '')
    {
        if(empty($action)){
            $controller->{$controller->defaultAction.'Action'}();
        }elseif(method_exists($controller, $action.'Action')){
            $controller->{$action.'Action'}($param);
        }else{
            $controller = $this->getController('\controllers\defaultController');
            $this->runAction($controller, 'error');
        }

    }

    /**
     * @param int $code
     * @return int
     */
    protected function end($code)
    {
        return $code;
    }
}