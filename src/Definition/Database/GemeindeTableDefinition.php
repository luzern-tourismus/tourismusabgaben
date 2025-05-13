<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class GemeindeTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'gemeinde';

    }


    const GEMEINDE = 'gemeinde';



}