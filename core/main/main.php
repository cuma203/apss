<?php

class main
{
     public function __get($name)
     {
        $arr = explode("_", $name);
        $filename = $arr[0]."_".$arr[1].".php";
        $type = $arr[1];

        include_once($filename);

        if(!defined(strtoupper($arr[0])))
        {
            throw new Exception("Błąd wczytania pliku '{$filename}' !");
        }
     }

     static public function _templateLoader($controller, $template)
     {
        $config = registry::register("config");
        $templatefile = $config->view_path.$controller."/".$template.".php";

        if(file_exists($templatefile))
        {
            include_once($templatefile);
        }
        else
        {
            if(!file_exists($templatefile)){
                $templatefile = $config->view_path.$controller."/".$template.".tpl";
                include_once($templatefile);
              }else{
                $error = registry::register("sgException");
                $error->throwException("Widok ".$template.".php jest niedostępny w lokalizacji ".$config->view_path.$controller);
                  
              }
        }
     } 
}

?>