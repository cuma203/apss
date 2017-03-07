<?php

class customersmodel
{
    private $__config;
    private $__router;
    private  $params;
    private $_db;

    public function __construct()
    {
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->params = $this->__router->getParams();
        $this->_db  = registry::register("db");
    }

    public function getAllCustomers(){
        return $this->_db->execute("SELECT * FROM aplikacja.customers");
    }

    public function getCustomerName($customerId){
        return $this->_db->execute("SELECT customerName FROM aplikacja.customers WHERE customerNumber='".$customerId."'");
    }

}

?>