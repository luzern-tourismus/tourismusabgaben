<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class BeherbergungTypTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'beherbergung_typ';

    }


    const BEHERBERGUNG_TYP = 'beherbergung_typ';



}