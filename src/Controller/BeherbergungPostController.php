<?php

namespace Tourismusabgaben\Controller;

use Tourismusabgaben\Business\Beherbergung\BeherbergungBuilder;
use Tourismusabgaben\Core\Controller\AbstractPostController;

class BeherbergungPostController extends AbstractPostController
{


    public function loadController()
    {

        $this->url = 'beherbergungen-post';

    }


    protected function onPost($data)
    {

        $builder = new BeherbergungBuilder();
        $builder->beherbergung = $data['beherbergung'];
        $builder->create();

//            header('Location: ' . NavigationDefinition::BEHERBERGUNG);
        header('Location: /' . (new BeherbergungController())->getUrl());


        exit;


    }


/*    public function onView()
    {

        echo 'blabla';

        $method = $_SERVER['REQUEST_METHOD'];



        if ($method == 'POST') {


            $data = $_POST;

            print_r($data);

            $builder = new BeherbergungBuilder();
            $builder->beherbergung = $data['beherbergung'];
            $builder->create();

//            header('Location: ' . NavigationDefinition::BEHERBERGUNG);
            header('Location: /' . (new BeherbergungController())->getUrl());


            exit;


        } else {
            echo 'invalid method';
        }


    }*/

}