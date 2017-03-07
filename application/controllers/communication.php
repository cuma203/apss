<?php
class communication extends controller {
    private $_model;
    private $__config;
    private $__router;
    private $__params;

    public function __construct(array $params = Array())
    {
        parent::__construct($params);
        $this->_model   = new communicationmodel();
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

    public function getUserCommunicationAction(){
        echo json_encode($this->_model->getAllCommunicationsUser());
    }

    public function getCustomersFromCommUserAction(){
        $com = $this->_model->getCustomersFromUserCommuication();
        $arr = array();
        for($i=0;$i<count($com);$i++){
            $arr[$i]['customerNumber']  = $com[$i]['customerNumber'];
            $arr[$i]['customerName']    = $com[$i]['customerName'];
        }
        echo json_encode($arr);

    }

    public function saveNewCommunicationAction(){
        $params = $this->__params;
        $data = $this->_model->saveCommunication($params);
    }
}