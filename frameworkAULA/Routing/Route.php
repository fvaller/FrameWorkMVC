<?php

namespace FrameworkAULA\Routing;

class Route extends \Klein\Klein {

    public function get($route, $call) {
        if(is_string($call)){
        	$explode = explode('@', $call);
        	$controller = 'App\\Controllers\\' . $explode[0] . 'Controller';
        	$action = $explode[1];
        	
        	$this->respond('GET', $route, function () use ($controller, $action) {
                $class = new $controller();
                return $class->$action();
            });

        } else {        	
        	$this->respond('GET', $route, $call);
        }
    }

    public function post() {
        
    }
}