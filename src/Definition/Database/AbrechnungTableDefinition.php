<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class AbrechnungTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'beherbergung_typ';

    }

    const ABRECHNUNG_TYP_ID = 'abrechnung_typ_id';

    const ABRECHNUNG = 'abrechnung';

    const BESCHREIBUNG = 'beschreibung';



}