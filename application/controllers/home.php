<?php

class home extends controller{
        
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
        $this->main->directory_helper;
//        unset($_SESSION['login']);
//        unset($_SESSION['logged']);
    }

    public function save(){
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $this->__db = registry::register("db");
        $this->model = new homemodel();
        $this->model->saveFile($this->__params);
    }
    
    public function saveCustomerAction(){
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        
        if($this->__params){
            homemodel::editCustomer($this->__params);
        }else{
            echo 'Błąd!!';
        }
        echo 'OK';
    }
    
    public function getCustomerAction(){
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $hm = new homemodel();
        $cust = $hm->getCustomers($this->__params['POST']['page']);
                
        echo json_encode($cust['all'],true);
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
            header('home');
        }else{
            unset($_SESSION['login']);
            unset($_SESSION['logged']);
//            echo "Niepoprawne dane!!!";
//            return false;
        }
    }
}