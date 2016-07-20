<?php

class IndexController extends Zend_Controller_Action
{
//	public function preDispatch()
//    {
//        // Never auto render this controller's actions
//        $this->_helper->viewRenderer->setNoRender();
//		//$this->_helper->viewRenderer->setScriptAction('form');
//		//$this->view->render('index/_sidebar.phtml');
//    }
	
	public function indexAction()
	{
		//$this->_forward('list');
		
		$genre = $this->getParam('genre');
		echo '<br>'.$genre.'<br>';
		//echo Common::$name;
	}
	
	public function listAction() {
		
	}
	
	public function inputAction() {
//		$view = $this->_helper->viewRenderer->view;
//        $view->setEscape('htmlspecialchars');
		
		//Check Ajax
//		$this->getHeader('X_REQUESTED_WITH') == 'XMLHttpRequest'
	}
}