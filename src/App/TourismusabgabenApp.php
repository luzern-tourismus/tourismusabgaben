<?php

namespace Tourismusabgaben\App;


use Tourismusabgaben\Controller\BeherbergungController;
use Tourismusabgaben\Controller\BeherbergungNewController;
use Tourismusabgaben\Controller\BeherbergungPostController;
use Tourismusabgaben\Controller\GemeindeController;
use Tourismusabgaben\Controller\HomeController;
use Tourismusabgaben\Core\App\AbstractApp;


class TourismusabgabenApp extends AbstractApp
{


    //public static $baseDir;


    protected function loadApp()
    {

        $this
            ->addController(new HomeController())
            ->addController(new BeherbergungController())
            ->addController(new BeherbergungNewController())
            ->addController(new BeherbergungPostController())
            ->addController(new GemeindeController());


        //->addController(NavigationDefinition::HOME,HomeController::class );


    }


}