<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plugin_Layout
 *
 * @author USER
 */
class Application_Plugin_Layout extends Zend_Controller_Plugin_Abstract {
	//put your code here
	public function routeStartup(Zend_Controller_Request_Abstract $request)
	{
		$this->getResponse()
			 ->appendBody("<p>routeStartup() called</p>\n");
	}

	public function routeShutdown(Zend_Controller_Request_Abstract $request)
	{
		$this->getResponse()
			 ->appendBody("<p>routeShutdown() called</p>\n");
	}

	public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
	{
		$this->getResponse()
			 ->appendBody("<p>dispatchLoopStartup() called</p>\n");
		
		if ('admin' != $request->getModuleName()) {
            // If not in this module, return early
            return;
        }

		// Change layout
//		Zend_Layout::getMvcInstance()->setLayoutPath($layoutPath);
	}

	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$this->getResponse()
			 ->appendBody("<p>preDispatch() called</p>\n");
		
		$layout = Zend_Layout::getMvcInstance();
//		$view = $layout->getView();
//		// Initialize view
//        if (null !== $this->getPluginResource('view')) {
//            $view = $this->getPluginResource('view')->getView();
//        } else {
//            $view = new Zend_View();
//        }
//        $view->docType('HTML5');
//        $view->headMeta()
//            ->appendHttpEquiv('Content-Type', 'text/html; Charset=UTF-8')
//            ->appendHttpEquiv('X-UA-Compatible', 'IE=Edge')
//            ->appendName('viewport', 'width=device-width, initial-scale=1')
//            ->appendName('Description', 'This is an in2it training demo application')
//            ->appendName('Keywords', 'in2it, training, demo, zend framework, zf, zf1');
//        $view->headTitle('Demo Application');
//        $view->headTitle()->setSeparator(' | ');
//        $view->headLink()
//            ->headLink(array (
//                'rel' => 'icon',
//                'href' => $view->baseUrl('/media/favicon.ico')
//            ))
//            ->appendStylesheet($view->baseUrl('/css/bootstrap.min.css'))
//            ->appendStylesheet($view->baseUrl('/css/bootstrap-theme.min.css'))
//            ->appendStylesheet($view->baseUrl('/css/style.css'));
//        $view->inlineScript()
//            ->appendFile($view->baseUrl('/js/jquery-1.11.0.min.js'))
//            ->appendFile($view->baseUrl('/js/bootstrap.min.js'));
	}

	public function postDispatch(Zend_Controller_Request_Abstract $request)
	{
		$this->getResponse()
			 ->appendBody("<p>postDispatch() called</p>\n");
	}

	public function dispatchLoopShutdown()
	{
		$this->getResponse()
			 ->appendBody("<p>dispatchLoopShutdown() called</p>\n");
	}
}
