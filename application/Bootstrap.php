<?php
/**
 * This class is responsible for setting up the Zend environment and making sure all the default skeleton is set up properly
 * see the constructor for the steps it takes.  
 * 
 * @author Steve Rhoades 
 * @see http://www.stephenrhoades.com
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
	 * NAME SPACE
	 * init name space off app
	 */
	protected $_appNamespace = 'Application';

	/**
     * configuration variable
     *
     * @var Zend_Config_Ini
     */
    protected $_configuration;

    /**
     * frontcontroller variable
     *
     * @var Zend_Controller_Front
     */
    protected $_frontController;	
	
    public function _initTimezone ()
    {
		//date_default_timezone_set('America/Los_Angeles');
		date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
	
	/**
	 * CONFIGURATION
	 *
	 * @return Zend_Config_Ini
	 */
	protected function _initConfig() {
		// Read config and store configuration in registry
		// If cache configuration in APC cache, check and get cache
		if (Zend_Registry::isRegistered(APPLICATION_CONFIG)) {
			$this->_configuration = Zend_Registry::get(APPLICATION_CONFIG);
		} else {
			$configuration = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
			Zend_Registry::set(APPLICATION_CONFIG, $configuration);
			$this->_configuration = $configuration;
		}
		return $this->_configuration;
	}
	
	protected function _initFronController() {
		$this->bootstrap('FrontController');
		$this->_frontController = $this->getResource('FrontController');
		$this->_frontController->setControllerDirectory(APPLICATION_PATH . '/controllers/');
	}
	
	protected function _initAutoLoadModules() {
		
//		$this->bootstrap('FrontController');
//		$frontController = $this->getResource('FrontController');
		$frontController =& $this->_frontController;
		
		$frontController->setParam('useDefaultControllerAlways', true);
		$frontController->setParam('prefixDefaultModule', false);
		$frontController->setDefaultModule('default');
		$frontController->addModuleDirectory(APPLICATION_PATH . '/modules');		
		$frontController->setControllerDirectory(
			array (
				'default' => APPLICATION_PATH . '/modules/default/controllers',
				'admin' => APPLICATION_PATH . '/modules/admin/controllers',
				'users' => APPLICATION_PATH . '/modules/users/controllers'
			)
		);

		return $frontController;
	}
	
	/**
	 * Initialize Route Url path
	 */
	protected function _initRoute() {
		
//		$this->bootstrap('FrontController');
//		$frontController = $this->getResource('FrontController');
		$frontController =& $this->_frontController;
		$router = $frontController->getRouter();

		$router->addRoute(	'admin',
							new Zend_Controller_Router_Route(	'/quan-ly/:controller/:action', 
								array( 'module' => 'admin', 'controller' => 'index' , 'action' => 'index'  )) );
		$router->addRoute(	'genre',
							new Zend_Controller_Router_Route(	'/san-pham/:genre',
								array( 'module' => 'default', 'controller' => 'index' , 'action' => 'index'  )) );
	}
	
	/**
	 * PLUGIN
	 */
	protected function _initPlugins()
	{
		//$this->bootstrap('frontController');
		//$front = $this->getResource('frontController');
		$frontController =& $this->_frontController;
		$frontController->registerPlugin(new Application_Plugin_Layout());
		
//		$loader=$this->getPluginLoader();
//		$loader->addPrefixPath('Xyz_Resource','Xyz/Resource/');
//		$r = $this->getPluginResource('xyzlog');
//		if (!is_object($r)) die ('Not an object!!'); = pluginPaths.Xyz_Resource='Xyz/Resource/'
//		http://stackoverflow.com/questions/7614783/developing-using-a-custom-resource-plugin-in-zend-framework?rq=1
	}
	
	protected function _initAuth() {
//        $this->bootstrap('session');
//        $auth = Zend_Auth::getInstance();
//        if ($auth->hasIdentity()) {
//            $view = $this->getResource('view');
//            $view->user = $auth->getIdentity();
//        }
//
//        return $auth;
		
		$frontController =& $this->_frontController;
		$frontController->registerPlugin(new Application_Plugin_Auth());
		return $frontController;
    }
}