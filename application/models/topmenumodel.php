<?php
class topmenumodel
{
    private $__config;
    private $__router;
    private $__params;
    private $__db;

    public function __construct()
    {
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->__params = $this->__router->getParams();
        $this->__db = registry::register("db");
    }

    public function showTopMenu()
    {
        $SQL = "SELECT * FROM top_menu";
        $data = $this->__db->execute($SQL);
        return $data;
    }
}

?>