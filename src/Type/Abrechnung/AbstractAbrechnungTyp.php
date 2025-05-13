<?php

namespace Tourismusabgaben\Type\Abrechnung;

abstract class AbstractAbrechnungTyp
{

    public $typ;



    abstract protected function loadTyp();

    public function __construct()
    {
        $this->loadTyp();
    }

}