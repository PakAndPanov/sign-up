<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 30.10.2016
 * Time: 13:30
 */


ini_set('display_errors',1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
require_once(ROOT.'/classes/Autoload.php');

session_start();

$router = new Router();
$router->run();