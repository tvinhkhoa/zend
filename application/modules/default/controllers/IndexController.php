<?php

class IndexController extends Zend_Controller_Action
{
	public function indexAction()
	{
		$common = new Model_Common();
		$result = array(1, 2, 2, 4, 5);
		$this->view->paginator = $common->paging($result);
	}
}