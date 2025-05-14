<?php

namespace Tourismusabgaben\Core\App;


use Tourismusabgaben\Business\Beherbergung\BeherbergungBuilder;
use Tourismusabgaben\Core\Controller\AbstractController;
use Tourismusabgaben\Core\Url\UrlList;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;

abstract class AbstractApp
{

    public static $baseDir;

    /**
     * @var AbstractController[]
     */
    protected $controllerList = [];


    abstract protected function loadApp();


    public function __construct()
    {
        $this->loadApp();
    }

    public function start()
    {


        //$url = $_SERVER['REQUEST_URI'];
        //$urlList = explode('/', $url);

        $urlList = (new UrlList())->getUrlList();
        $method = $_SERVER['REQUEST_METHOD'];

        $foundView = false;

        foreach ($this->controllerList as $controller) {

            if ($urlList[0] === $controller->getBaseUrl()) {

                $controller->onView();
                $foundView = true;
            }

        }


        if (!$foundView) {
            http_response_code(404);
            $this->loadView('404.php');

        }

    }


    protected function addController(AbstractController $controller)
    {

        $this->controllerList[] = $controller;
        return $this;

    }


    protected function loadView($filename)
    {

        require(AbstractApp::$baseDir . 'view/' . $filename);

    }

}