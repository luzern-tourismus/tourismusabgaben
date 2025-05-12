<?php

namespace Tourismusabgaben\Core\Definition;

abstract class AbstractTableDefinition
{

    public $tableName;

    abstract protected function loadDefinition();

    public function __construct()
    {

        $this->loadDefinition();

    }


    const ID = 'id';



}