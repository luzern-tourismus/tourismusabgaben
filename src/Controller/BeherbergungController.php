<?php

namespace Tourismusabgaben\Controller;

use Tourismusabgaben\Core\Controller\AbstractController;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\Table\BeherberungenTable;

class BeherbergungController extends AbstractController
{


    public function loadController()
    {

        $this->url='beherbergungen';

    }


    public function onView() {

        $page = new TourismusabgabenTemplate();
        $page->title = 'Beherbergungen';
        $page->content = (new BeherberungenTable())->getHtml();
        $page->render();

    }



}