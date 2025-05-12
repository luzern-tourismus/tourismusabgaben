<?php

use Ltag\Setup\LtagSetup;

require_once(__DIR__ . "/../config.php");


(new LtagSetup)->startSetup();


/*

$dsn = "sqlite:".(new LtagApp())::$baseDir.'db/ltag.sqlite';

// create a PDO instance
try {
    $pdo = new \PDO($dsn);


$sql = 'CREATE TABLE IF NOT EXISTS projects (
    project_id   INTEGER PRIMARY KEY,
    project_name TEXT    NOT NULL
);';

    // create tables
    //foreach($statements as $statement){
        $pdo->exec($sql);
    //}
} catch(\PDOException $e) {
    echo $e->getMessage();
}

*/


