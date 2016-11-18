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

        module_load('SHD');
        $this->model = new homemodel();
        $data = $this->model->getDataHome(3);
//        var_dump($data);exit;
        $this->tpl->assign("data", $data);
        module_load('HEADER');
        $this->tpl->display('home/index.tpl' );
        module_load('FOOTER');

    }
    
    public function save(){
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $this->__db = registry::register("db");
        $this->model = new homemodel();
        $this->model->saveFile($this->__params);
    }
   
}