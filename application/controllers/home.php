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

//        mail('konrado11111@wp.pl', 'jakis temat', 'wiadomość testowa tralalalalala');
//        module_load('SHD');
        $this->model = new homemodel();

        $data = $this->model->getCustomers();
//         $data = $this->getCustomerAction();
//        var_dump($data);exit;
        $count = $data['count'];
        $count = $count[0]['count']/10;
        $count = ceil($count);


        $this->tpl->assign("data", $data['all']);
        $this->tpl->assign("count", $count);


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
                
//        var_dump($cust['all']);exit;
        echo json_encode($cust['all'],true);
    }
   
}