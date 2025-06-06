<?php

namespace Tourismusabgaben\Template;

use Tourismusabgaben\Controller\BeherbergungController;
use Tourismusabgaben\Controller\GemeindeController;
use Tourismusabgaben\Controller\HomeController;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;

class TourismusabgabenTemplate extends AbstractView
{

  public $title;


  public $content;



    public function getHtml()
    {

       // $html = <<<HTML
$html ='<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Tourismusabgaben - ' . $this->title . '</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="' . (new HomeController())->getUrl() . '">Tourismusabgaben</a>
      
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="' . (new BeherbergungController())->getUrl(). '">Beherbergungen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="' . (new GemeindeController())->getUrl(). '">Gemeinden</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">Gemeinden</a>
        </li>
        
  
    </div>
  </div>
</nav>
  
 
  
    <h1>' . $this->title . '</h1>
    <div>' . $this->content . '</div>
  </body>
</html>';
//HTML;
//    <a class="navbar-brand" href="' . NavigationDefinition::HOME . '">Tourismusabgaben</a>
//



        return $html;


    }

}

