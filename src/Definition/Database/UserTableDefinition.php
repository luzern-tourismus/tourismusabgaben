<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class UserTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'user';

    }

    const LOGIN = 'login';

    const PASSWORD = 'password';

}