<?php

namespace Tourismusabgaben\App;


use Tourismusabgaben\Core\App\AbstractApp;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;
use Tourismusabgaben\Template\TourismusabgabenTemplate;
use Tourismusabgaben\View\BeherberungenView;
use Tourismusabgaben\View\LoginView;


class TourismusabgabenApp extends AbstractApp
{


    public static $baseDir;



    public function start()
    {


        //print_r($_SERVER);

        //[REQUEST_URI] => /
        //    [REQUEST_METHOD] => GET


        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        //echo $url;

        if ($method == 'GET') {

            switch ($url) {


                case NavigationDefinition::HOME:

                    $page = new TourismusabgabenTemplate();
                    $page->title = 'Login';
                    $page->content = (new LoginView)->getHtml();
                    $page->render();

                    break;


                    case NavigationDefinition::BEHERBERGUNGEN:

                        $page = new TourismusabgabenTemplate();
                        $page->title = 'Beherbergungen';
                        $page->content = (new BeherberungenView())->getHtml();
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


                default:

                    http_response_code(404);
                    $this->loadView('404.php');

                    break;

            }

        }

        if ($method == 'POST') {

            print_r($_POST);


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
            }

        }

    }








}