<?php

namespace Tourismusabgaben\Definition\Database;

use Tourismusabgaben\Core\Definition\AbstractTableDefinition;

class AbrechnungOrganisationTableDefinition extends AbstractTableDefinition
{

    protected function loadDefinition()
    {

        $this->tableName = 'organisation';

    }

    const ORGANISATION = 'organisation';



}