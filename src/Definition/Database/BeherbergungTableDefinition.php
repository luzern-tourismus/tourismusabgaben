<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class BeherbergungTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'behergergung';

    }


    const BEHERBERGUNG = 'behergergung';

    const STRASSE = 'strasse';

    const PLZ = 'plz';

    const ORT = 'ort';


}