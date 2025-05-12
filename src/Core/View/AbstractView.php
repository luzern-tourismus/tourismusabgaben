<?php

namespace Tourismusabgaben\Core\View;


abstract class AbstractView
{

    abstract public function getHtml();

    public function render()
    {

        $html = $this->getHtml();
        echo $html;

    }


}



