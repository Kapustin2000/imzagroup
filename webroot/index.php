<?php

define('DS', DIRECTORY_SEPARATOR);
define('Language',  str_replace(array('/en', '/ru','/az'), "", $_SERVER['REQUEST_URI']));


define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');
require_once(ROOT.DS.'lib'.DS.'init.php');
session_start();
App::run($_SERVER['REQUEST_URI']);