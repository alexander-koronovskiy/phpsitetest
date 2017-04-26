<?php

// Font controller

//1.общие настройки

// показ ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

//2.подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//3.установление соединения

//4.вызов router
$router = new Router();
$router -> run(); //передача управления методу

?>