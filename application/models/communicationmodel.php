<?php
/**
 * Created by PhpStorm.
 * User: Konrad
 * Date: 2017-01-28
 * Time: 20:19
 */
class communicationmodel
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

    public function getAllCommunicationsUser($customerId=null){
        $user   = new usermodel();
        $userId = $customerId?:$user::getUserId();
        return self::$db->execute("SELECT * 
                                      FROM aplikacja.communications_user_view2 
                                      WHERE user_id={$userId}
                                      OR forwarder_id={$userId}
                                      order by date_entered desc");
    }

    public function getCustomersFromUserCommuication(){
        $data = new usermodel();
        $userLogged = $data::getUserId();

        $SQL = "SELECT DISTINCT ac.customerNumber, ac.customerName 
                FROM aplikacja.customers ac
                LEFT JOIN aplikacja.communication ac2
                ON ac.customerNumber=ac2.forwarder_id
                OR ac.customerNumber=ac2.user_id
                WHERE ac2.user_id={$userLogged}
                OR ac2.user_id={$userLogged}";

        return self::$db->execute($SQL);

    }

    public function saveCommunication($params){
        $userId = usermodel::getUserId();
        $SQL = "INSERT INTO 
                  aplikacja.communication
                VALUES(
                        ".$userId.",
                        ".$params['forwarder_id'].",
                        ".$params['title'].",
                        ".$params['content'].",
                        ".date('Y-m-d H:i:s').",
                        
                        1,
                        1,
                        ".$params['fullname'].",
                        ".$params['class']."
                        )
                ";
        return self::$db->execute($SQL);
    }
}

?>