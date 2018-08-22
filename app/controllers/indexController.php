<?php

namespace App\Controllers;

use FrameworkAULA\Http\Controller;

class IndexController extends Controller {
    
    public function index(){
    	//return "Página inicial";    	
    	$this->service->render('index.phtml');
    }    

    public function sobre(){
    	return "Página Sobre";    	    
    }    

    public function valler(){
    	return "Página Valler";
    }
}
