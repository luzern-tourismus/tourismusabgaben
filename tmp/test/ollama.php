<?php

require(__DIR__ . "/../config.php");



// with default base URL
$client = \Ollama\Ollama::client();

// or with custom base URL
$client = \Ollama\Ollama::client('http://localhost:11434');

//$response = $client->models()->list();

/*
$completions = $client->completions()->create([
    'model' => 'llama2:latest',
    'prompt' => 'what color has the sky',
]);

$completions->response; // '...in a land far, far away...'

$completions->toArray(); 

var_dump($completions->response);
*/


//ollama pull nomic-embed-text

$poi = "Spielplatz Dallenwil";

$response = $client->embed()->create([
    'model' => 'nomic-embed-text',
    'input' => [
        $poi,
    ]
]);



$embedding = $response->embeddings[0];  // ->toArray(); // ['model' => 'llama3.1', 'embedding' => [0.1, 0.2, ...], ...]

//var_dump($embedding);

/*foreach ($embedding[0] as $number) {

    echo $number;
    //exit;

}*/

//exit;

$embeddingString = '[' . implode(', ', $embedding) . ']';


//exit;

try {

    $conStr = "pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=123456";

    $pdo = new \PDO($conStr);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


    //$sql = "CREATE TABLE IF NOT EXISTS mytable2 (id integer, titel text);";

    $sql = "INSERT INTO poi (poi, embedding) VALUES (:poi, :embedding)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':poi', $poi);
    $stmt->bindParam(':embedding', $embeddingString);
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


//var_dump($response->embeddings);


