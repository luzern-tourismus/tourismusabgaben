<?php

try {

    $conStr = "pgsql:host=localhost;port=5432;dbname=luv;user=postgres;password=123456";

    $pdo = new \PDO($conStr);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


    //$sql = "CREATE TABLE IF NOT EXISTS mytable2 (id integer, titel text);";

    $sql = "INSERT INTO embeddings (name, embedding) VALUES (:name, :embedding)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':embedding', $vectorString);
$stmt->execute();

    //$pdo->exec($sql);


    /*

    $sql = 'SELECT * FROM blog';

    foreach ($pdo->query($sql) as $row) {
        var_dump($row);
    }*/

} catch (PDOException $e) {
    echo $e->getMessage();
}





