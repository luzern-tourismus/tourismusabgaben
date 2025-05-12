<?php

require_once(__DIR__ . "/../config.php");

(new \Tourismusabgaben\Setup\TourismusabgabenSetup())->start();


for ($n = 0; $n <= 5; $n++) {

    $builder = new \Tourismusabgaben\Business\Beherbergung\BeherbergungBuilder();
    $builder->beherbergung = 'Beherbergung' . $n;
    $builder->create();
}


