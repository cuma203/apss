<?php

Abstract class controller
{
    public $params;
    public $post;
    public $template;
    public $_ActionHooks = Array();

    abstract public function main();

    public function __construct($params = Array()) 
    {
        $this->params = $params;
        $this->tpl      = new Smarty;
        $smarty_path = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR;
        $this->tpl->setTemplateDir('application/views');
        $this->tpl->setCompileDir($smarty_path.'templates_c');
        $this->tpl->setCacheDir($smarty_path.'cache');
        $this->tpl->setConfigDir($smarty_path.'configs');
    }

    public function __get($var)
    {
        if($var == "params")
        {
            return $this->params;
        }
        else
        {
            return registry::register($var);
        }
    }

    public function addSubpage($view, $subpage)
    {
        if(isset($this->params[0]))
        {
            if($this->params[0] == $subpage)
            {
                $templatefile = $view."_".$this->params[0];
                $this->view->setTemplate($templatefile);
                $this->model->$templatefile;
            }
        }
    }

    public function setParams($params)
    {
      $this->params[] = $params;
    }

    public function setPostParams($post)
    {
      $this->post = $post;
    }

    public function setView($view)
    {
      $this->template = $view;
    }

    public function addHook($callbackFunc)
    {
      $this->_ActionHooks[$callbackFunc] = $callbackFunc;
    }

    public function getActionHooks()
    {
      return $this->_ActionHooks;
    }
}

?>