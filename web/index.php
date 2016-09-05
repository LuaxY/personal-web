<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fr_FR');

define('WEBROOT', dirname(__FILE__)); 
define('ROOT', dirname(WEBROOT)); 
define('DS', DIRECTORY_SEPARATOR);

define('CORE', ROOT.DS.'lib');
define('APP', ROOT.DS.'app');

define('BASE_URL', str_replace("\\", "", dirname(dirname($_SERVER['SCRIPT_NAME']))));

require CORE.DS.'includes.php'; 
new Dispatcher(); 

?>
