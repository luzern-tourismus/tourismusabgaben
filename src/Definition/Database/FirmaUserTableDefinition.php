<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class FirmaUserTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'firma_user';

    }

    const FIRMA_ID = 'firma_id';

    const USER_ID = 'user_id';

}