<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class FirmaTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'firma';

    }

    const FIRMA = 'FIRMA';

    const STRASSE = 'strasse';

    const PLZ = 'plz';

    const ORT = 'ort';

}