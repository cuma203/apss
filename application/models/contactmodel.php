<?php

class contactmodel
{
    private $__config;
    private $__router;
    private $__params;
    private $__db;
    private static $db;
    
    public function __construct()
    {
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $this->__db = registry::register("db");
    }

    public function getDataHome($type)
    {
        return  $this->__db->execute("SELECT ap.* FROM products ap left join files af on ap.id_file=af.id WHERE ap._type={$type}");
    }
        
    public function getTypesOfProducts()
    {
        return  $this->__db->execute("SELECT * FROM products_type");
    }
    
    public function getCustomers($page=null)
    {
        
        $SQL = "SELECT customerName as Klient,
                contactLastName as Nazwisko, 
                contactFirstName as Imie, 
                phone as Telefon, 
                city as Miasto, 
                country as Kraj
                FROM aplikacja.customers 
                ORDER BY customerNumber DESC LIMIT ".($page?$page.'0':0).",10";
        
        $SQL2 = "SELECT count(*) AS count FROM aplikacja.customers ";
        
        $data['all']    =  $this->__db->execute($SQL);
        $data['count']  =  $this->__db->execute($SQL2);
        return $data;
    }
}

?>