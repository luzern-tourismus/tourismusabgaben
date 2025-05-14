<?php

namespace Tourismusabgaben\Controller;

use Tourismusabgaben\Business\Gemeinde\GemeindeBuilder;
use Tourismusabgaben\Core\Controller\AbstractController;
use Tourismusabgaben\Core\Controller\AbstractCrudController;
use Tourismusabgaben\Core\Url\UrlList;
use Tourismusabgaben\Definition\Database\GemeindeTableDefinition;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\Form\GemeindeForm;
use Tourismusabgaben\View\Table\GemeindeTable;

class GemeindeController extends AbstractCrudController
{


    public function loadController()
    {

        $this->url = 'gemeinde';

    }


    protected function onIndex()
    {

        $page = new TourismusabgabenTemplate();
        $page->title = 'Gemeinden';
        $page->content = (new GemeindeTable())->getHtml();
        $page->render();

    }


    protected function onNew()
    {

        $page = new TourismusabgabenTemplate();
        $page->title = 'Gemeinden';
        $page->content = (new GemeindeForm())->getHtml();
        $page->render();

    }


    protected function onEdit()
    {

    }


    protected function onItem($id)
    {

    }


    protected function onPost($data)
    {

        $defintion = new GemeindeTableDefinition();

        $builder = new GemeindeBuilder();
        $builder->gemeinde = $data['gemeinde'];


    }


    /*    public function onView() {

            print_r((new UrlList())->getUrlList());

            $page = new TourismusabgabenTemplate();
            $page->title = 'Gemeinden';
            $page->content = (new GemeindeTable())->getHtml();
            $page->render();

        }*/


}