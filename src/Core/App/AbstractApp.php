<?php

namespace Tourismusabgaben\Core\App;


abstract class AbstractApp
{

    public static $baseDir;

    abstract protected function loadApp();


    abstract public function start();







    protected function loadView($filename)
    {

        require(AbstractApp::$baseDir . 'view/' . $filename);



    }




}