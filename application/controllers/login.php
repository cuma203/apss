<?php
class login extends controller {
    private $model;
    private $__config;
    private $__router;
    private $__params;
    private $__db;

    public function __call($method, $args){
        if(!  is_callable($method)){
            $this->sgException->errorPage(404);
        }
    }

    public function main() { }

    public function index() {
        $this->main->metatags_helper;
        $this->main->head_helper;
        $this->main->loader_helper;
        $this->main->module_helper;
        $this->main->model_helper;

    }
    public function authorizeUserAction(){
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $h = new homemodel();
        $login = $h->loginUser($this->__params);

        if($login){
            $_SESSION['login']  = $login;
            $_SESSION['logged'] = true;

        }
    }

    public function logoutAction(){
        unset($_SESSION['login']);
        unset($_SESSION['logged']);
    }
}