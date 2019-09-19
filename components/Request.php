<?php

namespace components;


class Request
{
    protected $_method;

    protected $_queryURI;

    protected $_class = [];

    /**
     * флаги метода запроса
    */
    public $isGet = false;
    
    public $isPost = false;
    
    public $isDelete = false;
    
    public $isPut = false;

    public function __construct()
    {
        $this->_method = $_SERVER['REQUEST_METHOD'];
        $this->_queryURI = $_SERVER['REQUEST_URI'];
        
        $this->parseMethod();
    }
    
    protected function parseMethod()
    {
        switch ($this->_method){
            case "GET" : $this->isGet = true; 
                break;
            case "POST" : $this->isPost = true; 
                break;
            case "PUT" : $this->isPut = true;
                break;
            case "DELETE" : $this->isDelete = true; 
                break;
            default: break;
        }
    }

    /**
     * @return string
    */
    public function getControllerNamespace()
    {
        $url = substr($this->_queryURI, 1);
        if(!empty($url)){
            $arr = explode('/', $url);
            $controllerName = strtolower($arr[0]);            
            return '\\controllers\\'.$controllerName.'Controller';
        }
        return null;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        $url = substr($this->_queryURI, 1);
        if(!empty($url)){
            $arr = explode('/', $url);
            if(isset($arr[1])){
                $action = strtolower($arr[1]);
                return $action;
            }
        }
        return null;
    }

    /**
     * @return string
     */
    public function getParam()
    {
        $url = substr($this->_queryURI, 1);
        if(!empty($url)){
            $arr = explode('/', $url);
            if(isset($arr[2])){
                $param = strtolower($arr[2]);
                return $param;
            }
        }
        return null;
    }

    /**
     * @param string $url
    */
    public function redirectTo($url)
    {
        header("Location: ".$url);
    }

}
