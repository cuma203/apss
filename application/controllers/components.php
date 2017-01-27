<?php

class components extends controller{

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
    }

    public function getSideMenuAction(){
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $menu = new componentsmodel();
        $m = $menu->getMenuData();
        echo json_encode($m,true);
    }
}