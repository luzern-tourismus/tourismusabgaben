<?php

require_once(__DIR__ . "/../config.php");


(new \Tourismusabgaben\Core\Db\TableBuilder())
    ->createTable('poi')
    ->addTextField('title')
    ->addTextField('description')
    ->addNumberField('anzahl');


/*INSERT INTO cars (brand, model, year)
VALUES ('Ford', 'Mustang', 1964);*/

$data = [];
$data['title'] = 'Hotel1';
//$data['description'] = 'Ort1';
$data['anzahl'] = 100;

(new \Tourismusabgaben\Core\Db\DbConnection())->saveData('poi', $data);



$data = (new \Tourismusabgaben\Core\Db\DbConnection())->queryData('SELECT * FROM poi');  // saveData('poi', $data);

print_r($data);