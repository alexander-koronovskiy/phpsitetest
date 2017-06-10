<?php
// FRONT COTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// начало работы
session_start();

// установка пути к корневой папке проекта
define('ROOT', dirname(__FILE__));

// Подключение компонентов, контролеров и моделей(БД) с помощью функции автозагрузки
require_once(ROOT.'/components/Autoload.php');

// 4. Вызор Router
$router = new Router();
$router->run();