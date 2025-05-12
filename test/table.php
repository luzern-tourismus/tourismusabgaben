<?php

require_once(__DIR__ . "/../config.php");


$sql = 'CREATE TABLE bla123;';


(new \Tourismusabgaben\Core\Db\DbConnection())->executeQuery($sql);
