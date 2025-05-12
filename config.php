<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__."/vendor/autoload.php");

\Tourismusabgaben\App\TourismusabgabenApp::$baseDir = __DIR__.  DIRECTORY_SEPARATOR;

//(new \Tourismusabgaben\Core\Db\DbConnection());