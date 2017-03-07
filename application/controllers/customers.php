<?php
class customers extends controller{

    private $_model;

    public function __construct(array $params = Array())
    {
        parent::__construct($params);
        $this->_model = new customersmodel();
    }

    public function __call($method, $args){
        if(!  is_callable($method)){
            $this->sgException->errorPage(404);
        }
    }
    
    public function main() { }
    
    public function index() {

    }
    public function getAllCustomersAction(){
        $cust = $this->_model->getAllCustomers();
        $arr = array();
        for($i=0;$i<count($cust);$i++){
            $arr[$i]['customerNumber']  = $cust[$i]['customerNumber'];
            $arr[$i]['customerName']    = $cust[$i]['customerName'];
        }
        echo json_encode($arr);
    }
}