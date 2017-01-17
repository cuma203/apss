<?php
class _loadComponent
{
    private $_nameComp;
    private $_typeComp;
    private $_componentPath;

    public  function __construct($ComponentType,$name){
        $this->_nameComp        = $name;
        $this->_typeComp        = $ComponentType;
        $this->setComponentPath();
    }

    private function setComponentPath(){
        switch($this->_typeComp){
            case 'Angular':
                $this->_componentPath = 'application/Components/'.$this->_typeComp.'/'.$this->_nameComp;
            break;
            default:
                echo "Komponent nie został znaleziony w systemie!!!";die;
                break;
        }
    }
    public function loadScripts(){
        $filePath = $this->_componentPath.'/'.$this->_nameComp;
        echo add_javascript($filePath.'.js');
    }
}