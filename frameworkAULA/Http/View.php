<?php
namespace FrameworkAULA\Http;

use Klein\ServiceProvider;

class View extends ServiceProvider {

    public function render($view, array $data = array()){
    	parent::render("app/views/".$view, $data);
    }
}