<?php

namespace FrameworkAULA;

//Gerenciar nosso $_GET URL
class System  {

	private $_url;
	private $_controller;
	private $_action;
    
    public function __construct(){
    	$this->setUrl($_GET);
    	$this->setController();
    	$this->setAction();
        
    }

    public function getUrl() {
        return $this->_url;
    }

    public function setUrl($_url){
        $this->_url = $_url;
        return $this;
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function setController(){
        //$this->_controller = empty($_controller) ? 'Index' : $_controller;
        $this->_controller = empty($this->_url['controller']) ? 'index' : $this->_url['controller'];
        return $this;
    }

    public function getAction()
    {
        return $this->_action;
    }

    public function setAction(){        
        $this->_action = empty($this->_url['action']) ? 'index' : $this->_url['action'];
        return $this;
    }

    public function run(){

        // forma o namespace
    	$controller = 'App\\Controllers\\' . $this->_controller . 'Controller';
    	$action = $this->_action;

    	$instance = new $controller();
    	$instance->$action();    	
    }
}
