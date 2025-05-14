<?php

namespace Tourismusabgaben\Core\Controller;

abstract class AbstractController
{

    protected $title;

    protected $url;

    abstract protected function loadController();


    public function __construct()
    {
        $this->loadController();
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getBaseUrl()
    {
        $url = $this->url;
        return $url;
    }


    public function getUrl()
    {
        $url = '/' . $this->url;
        return $url;
    }


    public function getPostUrl()
    {
        $url = $this->getUrl() . '/post';
        return $url;
    }


    public function getNwUrl()
    {
        $url = $this->getUrl() . '/new';
        return $url;
        //return $this->url.'/new';
    }


    abstract public function onView();


}