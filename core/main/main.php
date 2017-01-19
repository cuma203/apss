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

    /**
     * @param $controller
     * @param $template
     */
    static public function _templateLoader($controller, $template)
    {

        $pos = strrpos($template, "Action");

        if ($pos === false) {

            $config = registry::register("config");
            $templatefile   = $config->view_path.$controller."/".$template;
            if(!isset($_SESSION['login']) && !isset($_SESSION['logged'])){
                $mainTemplate   = $config->view_path.'main/LoginPanel/login_panel.html';
            }else{
                $mainTemplate   = $config->view_path.'main/index.html';
            }

            if(file_exists($mainTemplate)){
                include_once($mainTemplate);
                exit;
            }
            switch($templatefile){
                case file_exists($templatefile.'.html'):
                    include_once($templatefile.'.html');
                    break;
                case file_exists($templatefile.'.tpl'):
                    include_once($templatefile.'.tpl');
                    break;
                case file_exists($templatefile.'.php'):
                    include_once($templatefile.'.php');
                    break;
                default:
                    $error = registry::register("sgException");
                    $error->throwException("Widok ".$template.".php jest niedostępny w lokalizacji ".$config->view_path.$controller);
                    break;
            }
        }
    }
}

?>