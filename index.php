<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * 
 * Методы для подключения файлов 
 * @read http://php.net/manual/ru/function.require.php
 */
require(__DIR__ . '/bootstrap.php');
use components\App;

$application = new App(__DIR__);
exit($application->run());