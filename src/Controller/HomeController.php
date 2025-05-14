<?php

namespace Tourismusabgaben\Controller;

use Tourismusabgaben\Core\Controller\AbstractController;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\LoginView;

class HomeController extends AbstractController
{

    public function loadController()
    {

        $this->url = '';

    }


    public function onView()
    {

        $page = new TourismusabgabenTemplate();
        $page->title = 'Login';
        $page->content = (new LoginView)->getHtml();
        $page->render();

    }

}