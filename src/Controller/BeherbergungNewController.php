<?php

namespace Tourismusabgaben\Controller;

use Tourismusabgaben\Core\Controller\AbstractController;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\Form\BeherbergungForm;

class BeherbergungNewController extends AbstractController
{


    public function loadController()
    {

        $this->url='beherbergungen-new';

    }


    public function onView() {

        $page = new TourismusabgabenTemplate();
        $page->title = 'Beherbergungen';
        $page->content = (new BeherbergungForm())->getHtml();
        $page->render();
    }



}