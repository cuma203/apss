<?php
class about extends controller{
        
    private $model;
    
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
        
        $this->model    = new homemodel();
        $types          = $this->model->getTypesOfProducts();
        $this->tpl->assign('types',$types);
        
        $i=1;
        foreach($types as $key=>$data){
            $arrData[$i] = $this->model->getDataHome($i);
            $i++;
        }
        $this->tpl->assign('data', $arrData);
        module_load('HEADER');
        $this->tpl->display('about/index.tpl' );
        module_load('FOOTER');

    }
}