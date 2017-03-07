<?php

class componentsmodel
{
    private $__config;
    private $__router;
    private  $params;
    private $_db;
    private static $db;

    public function __construct()
    {
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->params = $this->__router->getParams();
        $this->_db  = registry::register("db");
    }

    public function getMenuData(){
        return $this->_db->execute("SELECT * FROM aplikacja.side_menu");
    }

    public function getTopMenuData(){
        return $this->_db->execute("SELECT * FROM aplikacja.top_menu order by id desc");
    }
}

?>