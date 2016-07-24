<?php

class IndexController extends Zend_Controller_Action
{
	public function indexAction()
	{
		$common = new Model_Common();
		$result = array(1, 2, 2, 4, 5);
		$this->view->paginator = $common->paging($result);
		
//		$db =	Zend_Db::factory(
//					'ORACLE', 
//					array(	
//						'host' => 'localhost',
//						'username' => 'system',
//						'password' => '123456',
//						'dbname'   => 'db11g',
//						'port' => '1521'
//					)
//				);
//		
//		if( $db->getConnection() ){
//			echo '<br /><strong>Kết nối Oracle bằng Oci thành công</strong><br />';
//			$db->closeConnection();
//		}else{
//			echo 'Kết nối thất bại';
//		}
		
		$pdo_oci = Zend_Db::factory(
					'PDO_OCI', 
					array(	
						'host' => 'localhost',
						'username' => 'system',
						'password' => '123456',
						'dbname'   => 'db11g',
						'port' => '1521'
					)
				);
		
		if( $pdo_oci->getConnection() ){
			echo '<br /><strong>Kết nối Oracle bằng Pdo_oci thành công</strong><br />';
			$pdo_oci->closeConnection();
		}else{
			echo 'Kết nối thất bại';
		}
	}
}