<?php
class logout extends controller {
    private $_model;
    private $__config;
    private $__router;
    private $__params;

    public function __construct(array $params = Array())
    {
        parent::__construct($params);
        $this->_model   = new homemodel();
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
    }
    public function __call($method, $args){
        if(!  is_callable($method)){
            $this->sgException->errorPage(404);
        }
    }

    public function main() { }

    public function index() {
    }
    public function logoutUserAction(){
        unset($_SESSION['username']);
        unset($_SESSION['logged']);
    }
}