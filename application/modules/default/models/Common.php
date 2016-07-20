<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonModel
 *
 * @author USER
 */
class Model_Common {
	//put your code here
	var $itemCountPerPage = 20;
	public function paging($result, $currentPage=1, $total=0) {
		$paginator = Zend_Paginator::factory($result);
		$paginator->setItemCountPerPage($this->itemCountPerPage); // hiển thị 20 dòng dữ liệu
		$paginator->setCurrentPageNumber($currentPage);
		$paginator->setPageRange(3);
		return  $paginator;
		
//		$adapter = new Zend_Paginator_Adapter_DbSelect($db->select()->from('posts'));
//		$adapter->setRowCount(
//			$db->select()
//			   ->from(
//					'item_counts',
//					array(
//					   Zend_Paginator_Adapter_DbSelect::ROW_COUNT_COLUMN => 'post_count'
//					)
//				 )
//		);
//
//		$paginator = new Zend_Paginator($adapter);
	}
	
	protected function _initNavigation() {
		$this->bootstrap("layout");
		$layout = $this->getResource('layout');     
		$view = $layout->getView();

		$config = new Zend_Config_Xml(APPLICATION_PATH . '/configs/navigation.xml','nav');
		$navigation = new Zend_Navigation($config);

		$view->navigation($navigation);
	}
}
