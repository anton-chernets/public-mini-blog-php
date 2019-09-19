<?php

namespace components;


class MysqliConnector
{
    public $host;

    public $user;

    public $password;

    public $db_name;

    public $port;

    protected $db;
    
    private $_sql;

    public function __construct($host, $user, $password, $db_name, $port = 3306)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->port = $port;
        $this->db = new \mysqli($this->host, $this->user, $this->password, $this->db_name, $this->port);
    }

    public function setSql($str)
    {
        $this->_sql = $str;
        return $this;
    }
    
    public function one()
    {
        $result = $this->db->query($this->_sql);
        return $result->fetch_assoc();
    }
    
    public function all()
    {
        $result = $this->db->query($this->_sql);
        return $result->fetch_all();
    }

    /**
      * @deprecated
     */
    public function exec()
    {
        return $this->db->query($this->_sql);
    }

}