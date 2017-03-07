<?php
class user extends controller{

    private $_model;

    public function __construct(array $params = Array())
    {
        parent::__construct($params);
        $this->_model = new usermodel();
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
    }

    public function __call($method, $args){
        if(!is_callable($method)){
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

    public function getUserInfoAction(){
        $res =  $this->_model->getUserInfo();
        echo json_encode($res);

    }
    public function getUserInfoAddressAction(){
        $res =  $this->_model->getUserAddress();
        echo json_encode($res);
    }

    public static function getUserIdAction(){
        return usermodel::getUserId();
    }

}