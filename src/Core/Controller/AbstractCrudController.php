<?php

namespace Tourismusabgaben\Core\Controller;

use Tourismusabgaben\Core\Url\UrlList;

abstract class AbstractCrudController extends AbstractController
{

    abstract protected function onIndex();

    abstract protected function onPost($data);

    abstract protected function onNew();

    abstract protected function onEdit();

    abstract protected function onItem($id);


    public function onView()
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $urlList = (new UrlList())->getUrlList();

        if ($method == 'GET') {

            if (!isset($urlList[1])) {

                $this->onIndex();

            } else {

                if ($urlList[1] == 'new') {
                    $this->onNew();
                }

                if ($urlList[1] == 'edit') {
                    $this->onEdit();
                }

            }

        }

        if ($method == 'POST') {

            $data = $_POST;
            $this->onPost($data);


            //print_r($data);

            /*
            $builder = new BeherbergungBuilder();
            $builder->beherbergung = $data['beherbergung'];
            $builder->create();*/

//            header('Location: ' . NavigationDefinition::BEHERBERGUNG);
            //header('Location: /' . (new BeherbergungController())->getUrl());


            exit;


        }

    }

}