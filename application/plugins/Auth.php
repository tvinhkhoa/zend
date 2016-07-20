<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author USER
 */
class Application_Plugin_Auth  extends Zend_Controller_Plugin_Abstract {
	//put your code here
	
	public function preDispatch(Zend_Controller_Request_Abstract $request){

		/*
		 * Kiem tra xem co phai dang truy cap phan Admin hay khong
		 */
		$controllerName = $request->getControllerName();
		$flagAdmin = false;
		if($controllerName == 'admin'){
			$flagAdmin = true;
		}else{
			$tmp = explode('-', $controllerName);              
			if(current($tmp) == 'admin'){
				$flagAdmin = true;
			}
		}
        
    
		if( $flagAdmin ) {
			$request->setModuleName('admin');
			$request->setControllerName('login');
			$request->setActionName('index');
		}
	}
}
