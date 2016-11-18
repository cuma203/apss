<?php

require_once 'application/library/shd_module/shd.php';
class homemodel
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

    public function getDataHome($type)
    {
        return  $this->__db->execute("SELECT ap.* FROM products ap left join files af on ap.id_file=af.id WHERE ap._type={$type}");
    }
        
    public function getTypesOfProducts()
    {
        return  $this->__db->execute("SELECT * FROM products_type");
    }
    
    public function saveFile($params){

        $types = $this->__db->execute("SELECT * FROM products_type");
        if(sizeof($types) > 0){

            foreach($types as $k=>$val){
                $name = $val['name'];
                $type = $val['type'];
                $data = array();
                $url2 = "http://www.promobaby.pl/kategoria-".$name.".html";
                $html = file_get_html($url2);
                foreach($html->find('.mini') as $key=> $element) { 
                    $data[$name]['url'][] = str_replace('/mini','',"http://www.promobaby.pl/".$element->getAttribute("data-original")); 
                    copy($data[$name]['url'][$key],"application/media/files/".$name."_".$key.".jpg");
                }
                $x=0;
                foreach($html->find('.list td') as $key=>$val2){
                    if(!empty($val2->innertext)){
                        if($x===1){
                            $data[$name]['art'][] = strip_tags($val2->innertext);
                        }
                        if($x===2){
                            $data[$name]['shop'][] = $val2->innertext;
                        }
                        if($x===4){
                            $data[$name]['price'][] = substr($val2->innertext,0,6);
                        }
                        if($x===5){
                            $data[$name]['date'][] = $val2->innertext;
                        }
                    }
                    if($x === 6){
                        $x=0;
                    }
                    $x++;
                }

                for($s=0;$s<count($html->find('.list'));$s++){
                    $query =    "INSERT INTO 
                                    files
                                    (name,type,url,error,size,data) 
                                VALUES(
                                    '".$name."_".$s.".jpg',
                                    'image/jpeg',
                                    'application/media/files/".$name."_".$s.".jpg',
                                    '0',
                                    'b/d',
                                    'b/d')";
                    $this->__db->execute($query);
                    $fileId=$this->__db->execute("SELECT max(id) as id from files");

                    $query2 = "INSERT INTO products(id_file, name, description, price2, shop, date, _type, url) VALUES(
                    {$fileId[0]['id']},
                        '{$data[$name]['art'][$s]}', 
                        '-----', 
                        '{$data[$name]['price'][$s]}',
                        '{$data[$name]['shop'][$s]}',
                        '{$data[$name]['date'][$s]}',
                        {$type},
                        'application/media/files/".$name."_".$s.".jpg')";

                    $this->__db->execute($query2);
                }
            }
        }
    }
}

?>