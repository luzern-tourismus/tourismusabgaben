<?php

namespace Tourismusabgaben\Core\Controller;

abstract class AbstractPostController extends AbstractController
{


   protected function onPost($data)
   {

   }


    public function onView()
    {

        //echo 'blabla';

        $method = $_SERVER['REQUEST_METHOD'];

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


        } else {
            echo 'invalid method';
        }


    }

}