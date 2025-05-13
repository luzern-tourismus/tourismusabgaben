<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class AbrechnungTypTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'abrechnung_typ';

    }


    const ABRECHNUNG_TYP = 'abrechnung_typ';

    const PHP_CLASS = 'php_class';


}