<?php
//Folders routes
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH',    ROOT . 'app' 		   . DS);
define('CONFIG_PATH', ROOT . 'config'      . DS);
define('CORE_PATH',   ROOT . 'core'        . DS);
define('VENDOR_PATH', ROOT . 'vendor'      . DS);
define('PUBLIC_PATH', ROOT . 'public_html' . DS);
//Application routes
define('CONTROLLERS', APP_PATH . 'controllers' . DS);
define('MODELS',      APP_PATH . 'models'      . DS);
define('VIEWS',       APP_PATH . 'views'       . DS);
//Config routes
define('ENV', CONFIG_PATH . 'environments' . DS);
//Core routes
define('BASE', 		CORE_PATH . 'base' 		. DS);
define('FUNCTIONS', CORE_PATH . 'functions' . DS);
//Templates routes
define('TEMPLATES', PUBLIC_PATH . 'templates' . DS);
//Url routes
define('BASE_URL', 'http://deployapp.no-ip.org');
define('TEMPLATE_ASSETS', BASE_URL . '/templates/');
require_once CONFIG_PATH . 'init.php';
