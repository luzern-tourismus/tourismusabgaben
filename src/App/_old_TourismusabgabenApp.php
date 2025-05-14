<?php

namespace Tourismusabgaben\App;


use Tourismusabgaben\Business\Beherbergung\BeherbergungBuilder;
use Tourismusabgaben\Controller\BeherbergungController;
use Tourismusabgaben\Controller\HomeController;
use Tourismusabgaben\Core\App\AbstractApp;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\BeherberungenItem;
use Tourismusabgaben\View\Form\BeherbergungForm;
use Tourismusabgaben\View\LoginView;
use Tourismusabgaben\View\Table\BeherberungenTable;


class _old_TourismusabgabenApp extends AbstractApp
{


    //public static $baseDir;


    protected function loadApp()
    {

        $this
            ->addController(new HomeController())
            ->addController(new BeherbergungController());


            //->addController(NavigationDefinition::HOME,HomeController::class );


    }



    public function start2()
    {


        //print_r($_SERVER);

        //[REQUEST_URI] => /
        //    [REQUEST_METHOD] => GET


        $url = $_SERVER['REQUEST_URI'];
        $urlList = explode('/', $url);

        $method = $_SERVER['REQUEST_METHOD'];

        print_r($urlList);

        //echo $url;

        if ($method == 'GET') {


            foreach ($this->controllerList as $controller) {

                if ('/'.$urlList[1] === $controller) {

                }

            }



            switch ('/'.$urlList[1]) {


                case NavigationDefinition::HOME:

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'Login';
                    $page->content = (new LoginView)->getHtml();
                    $page->render();

                    break;


                case NavigationDefinition::BEHERBERGUNG:

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'Beherbergungen';
                    $page->content = (new BeherberungenTable())->getHtml();
                    $page->render();

                    break;


                case NavigationDefinition::BEHERBERGUNG_VIEW:

                    $view = new BeherberungenItem();
                    $view->id = $urlList[2];  // substr($url, strlen(NavigationDefinition::BEHERBERGUNG_VIEW));

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'Beherbergungen';
                    $page->content = $view->getHtml();
                    $page->render();



                    break;



                //substr("abcdef", -3, 1)


                case NavigationDefinition::BEHERBERGUNG_NEW:

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'Beherbergungen';
                    $page->content = (new BeherbergungForm())->getHtml();
                    $page->render();

                    break;



                /*case '/about':

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'About';
                    $page->content = 'über diese Seite';
                    $page->render();

                    break;

                case '/news':

                    $this->loadView('news_form.php');

                    break;*/


                /*case '/login':


                    (new LoginView())->render();

                    break;*/


         /*       default:

                    http_response_code(404);
                    $this->loadView('404.php');

                    break;

            }




            /*
            if (substr($url, 0, strlen(NavigationDefinition::BEHERBERGUNG_VIEW)) == NavigationDefinition::BEHERBERGUNG_VIEW) {


                $view = new BeherberungenItem();
                $view->id = substr($url, strlen(NavigationDefinition::BEHERBERGUNG_VIEW));




                $page = new TourismusabgabenTemplate();
                $page->title = 'Beherbergungen';
                $page->content = $view->getHtml();
                $page->render();


            }*/



        }

        if ($method == 'POST') {


            $data = $_POST;

            switch ($url) {


                case NavigationDefinition::BEHERBERGUNG_POST:

                    $builder = new BeherbergungBuilder();
                    $builder->beherbergung = $data['beherbergung'];
                    $builder->create();

                    header('Location: ' . NavigationDefinition::BEHERBERGUNG);
                    exit;

                default:

                    http_response_code(404);
                    $this->loadView('404.php');

                    break;

            }


            /*print_r($_POST);


            $fname = 11;  // $_POST['fname'];
            $lname = $_POST['lname'];

            $dsn = "sqlite:" . (new TourismusabgabenApp())::$baseDir . 'db/ltag.sqlite';

            // create a PDO instance
            try {
                $pdo = new \PDO($dsn);


                $sql = 'INSERT INTO projects (project_id, project_name) VALUES (:c1,:c2)';

                $qry = $pdo->prepare($sql);
                $qry->bindValue(':c1', $fname);
                $qry->bindValue(':c2', $lname);
                $qry->execute();  // [$fname, $lname]);
                $pdo->exec($sql);
                //}
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }*/

        }

    }


}