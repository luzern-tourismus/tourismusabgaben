<?php

namespace Tourismusabgaben\Core\Url;

class UrlList
{


    public function getUrlList()
    {

        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url, '/');
        $urlList = explode('/', $url);

        return $urlList;

    }


}