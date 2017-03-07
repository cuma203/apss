<?php
/**
 * Created by PhpStorm.
 * User: Konrad
 * Date: 2017-01-28
 * Time: 20:19
 */
class usermodel
{
    private $__config;
    private $__router;
    private  $params;
    private $_db;
    private static $db;
    public function __construct()
    {
        $this->__config = registry::register("config");
        $this->__router = registry::register("router");
        $this->params = $this->__router->getParams();
        $this->_db  = registry::register("db");
        self::$db = registry::register("db");
    }

    public static function getUserId(){
        $res = self::$db->execute("SELECT id FROM aplikacja.users WHERE username='".$_SESSION['username']."'");
        return $res[0]['id'];
    }

    public function getUserInfo(){
        return $this->_db->execute("SELECT 
                                      au.fullname,
                                      au.username,
                                      au.birthdate,
                                      au.mail,
                                      au.phone
                                    FROM 
                                      aplikacja.users au 
                                    WHERE 
                                      au.id=".self::getUserId());
    }

    public function getUserAddress(){
        $SQL = "SELECT 
                                      ua.*
                                    FROM 
                                      aplikacja.user_addresess ua
                                    WHERE 
                                      ua.user_id=".self::getUserId();
        return $this->_db->execute($SQL);
    }
}

?>