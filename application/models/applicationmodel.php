<?php
class applicationmodel
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
    
    public static function validateNip($nip) 
    {
        $nip_bez_kresek = preg_replace("/-/","",$nip);
        $reg = '/^[0-9]{10}$/';
        
        if(preg_match($reg, $nip_bez_kresek)==false)
            return false;
        else
        {
            $dig = str_split($nip_bez_kresek);
            $kontrola = (   6*intval($dig[0]) + 5*intval($dig[1]) + 7*intval($dig[2]) + 2*intval($dig[3]) + 
                            3*intval($dig[4]) + 4*intval($dig[5]) + 5*intval($dig[6]) + 6*intval($dig[7]) + 7*intval($dig[8]))%11;
            if(intval($dig[9]) == $kontrola){
    var_dump(intval($dig[9]));exit;
                return intval($dig[9]);
            }
            else
                return false;
        }
    }
}