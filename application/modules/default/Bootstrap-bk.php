<?php
/**
 *
 * @author Steve Rhoades
 * @see http://www.stephenrhoades.com
 */
class Default_Bootstrap extends Zend_Application_Module_Bootstrap
{
	public function _initModule()
	{
		printf("%s got called<br />", __CLASS__);
		
		$autoloader = new Zend_Application_Module_Autoloader(array(
			'namespace' => 'Default',
			'basePath' => APPLICATION_PATH . '/modules/default/',
			'resourceTypes' => array(
				'model' => array(
					'path' => 'models/',
					'namespace' => '',
				)
			),
        ));
        return $autoloader;
	}
		
	public function _initPlugins() {
//		$front = Zend_Controller_Front::getInstance();
//		$front->registerPlugin(new Default_Plugin_PluginOne());
		//--------------------------------------
		$bootstrap = $this->getApplication();
		$bootstrap->bootstrap('frontcontroller');
		$front = $bootstrap->getResource('frontcontroller');

		$front->registerPlugin(new Default_Plugin_PluginOne());
		$front->registerPlugin(new Default_Plugin_ModuleLoader());
	}
	
	protected function _initSidebar(){
//		$this->bootstrap('View');
//		$view = $this->getResource('View');
//		$view->placeholder('sidebar')
//			->setPrefix("<div class=\"sidebar\">\n    <div class=\"block\">\n")
//			->setSeparator("</div>\n    <div class=\"block\">\n")
//			->setPostfix("</div>\n</div>");
	}

}