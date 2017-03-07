<?php
class login extends controller {
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

    public function authorizeUserAction(){
        $login = $this->_model->loginUser($this->__params);
        if($login){
            $_SESSION['username']  = $login[0]["username"];
            $_SESSION['logged'] = true;
            echo "OK";exit;
        }else{
            echo "Wprowadzono niepoprawny login lub hasło!";exit;
        }
    }
}