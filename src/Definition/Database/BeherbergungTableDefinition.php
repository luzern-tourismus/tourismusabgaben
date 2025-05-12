<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class BeherbergungTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'beherbergung';

    }


    const BEHERBERGUNG = 'beherbergung';

    const STRASSE = 'strasse';

    const PLZ = 'plz';

    const ORT = 'ort';

    const BEMERKUNG = 'bemerkung';


}