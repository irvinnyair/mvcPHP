<?php

chdir( dirname(__DIR__) );



///use Src\Router;

//require_once '../vendor/autoload.php';
//require_once '../config/database.php';


chdir(dirname(__DIR__));

define("CORE_PATH", "core/");
define("APP_PATH", "app/");

require_once CORE_PATH."Autoloader.php";




$app = new App();



