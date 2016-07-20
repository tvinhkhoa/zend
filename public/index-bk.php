<?php

// Define ROOT path off application
define('ROOT_PATH', realpath(dirname(__FILE__) .'/../'));

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', ROOT_PATH . '/application');

// Define path to the upload directory
defined('UPLOAD_PATH')
	|| define('UPLOAD_PATH', ROOT_PATH .'/upload');

// check for apc support
define('APC_SUPPORT', extension_loaded('apc') && ini_get('apc.enabled'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', 'development');

// Define name config system
define('APPLICATION_CONFIG', 'Configuration');

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    ROOT_PATH . '/library',
    get_include_path(),
)));

// Create a autoloader instance
require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();

// Put autoloader instance in registry to retrieve it in bootstrap
Zend_Registry::set('Autoloader', $autoloader);

$application = new Zend_Application(
	APPLICATION_ENV, array()
//    APPLICATION_PATH . '/configs/application.ini'
);

try{
	$options = array(
		'bootstrap' => array(
			'class' => 'Bootstrap',
			'path' => APPLICATION_PATH . '/Bootstrap.php',
		),
		'pluginPaths' => array(
			'Application_Resource' => APPLICATION_PATH . '/resources'
		),
		'resources' => array(
			'modules' => array(),
//			'FrontController' => array(
//				'defaultModule' => APPLICATION_PATH . '/modules/default',
//				'controllerDirectory' => APPLICATION_PATH . '/modules/default/controllers',
//				'moduleDirectory' => APPLICATION_PATH . '/modules',
//			),
		)
	);

	$application->setOptions($application->mergeOptions($application->getOptions(), $options));
	$application->bootstrap()->run();
} catch(Exception $exception) {
	
	echo '<html><body><center>'
	   . 'An exception occurred while bootstrapping the application.';

	if (defined('APPLICATION_ENV') && APPLICATION_ENV != 'production') {
		echo '<br /><br />' . nl2br($exception->getMessage()) . '<br />'
		   . '<div align="left">Stack Trace:'
		   . '<pre>' . $exception->getTraceAsString() . '</pre></div>';
	}
	echo '</center></body></html>';
	exit(1);
}
