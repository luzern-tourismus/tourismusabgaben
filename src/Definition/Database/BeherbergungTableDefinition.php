<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class BeherbergungTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'beherbergung';

    }

    const FIRMA_ID = 'firma_id';

    const BEHERBERGUNG = 'beherbergung';

    const STRASSE = 'strasse';

    const PLZ = 'plz';

    const ORT = 'ort';

    const BEMERKUNG = 'bemerkung';


    const GEMEINDE_ID = 'gemeinde_id';


}