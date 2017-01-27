<?php
class customers extends controller{
        
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
//
//        module_load('HEADER');
//        $this->tpl->display('contact/index.tpl' );
//        module_load('FOOTER');

    }
    public function getDataAction(){
        $m = new contactmodel();
        $data = $m->getCustomers();
//        var_dump($data['all']);
        echo json_encode($data['all']);
    }
}