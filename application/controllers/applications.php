<?php
class applications extends controller{
        
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
        
        module_load('HEADER');
//        $this->tpl->display('applications/index2.tpl' );
        module_load('FOOTER');

    }
    
    public function verifyNipAction($nip)
    {
        var_dump($nip);exit;
        return applicationmodel::validateNip($nip);
    }
}