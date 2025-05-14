<?php

namespace Tourismusabgaben\Business\Gemeinde;

use Tourismusabgaben\Core\Builder\AbstractBuilder;
use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;
use Tourismusabgaben\Definition\Database\GemeindeTableDefinition;

class GemeindeBuilder extends AbstractBuilder
{

    public $bfsNr;

    public $gemeinde;

    public function create() {

        $definition = new GemeindeTableDefinition();

        $data = [];
        $data[$definition::ID] =$this->bfsNr;
        $data[$definition::GEMEINDE] =$this->gemeinde;

        (new DbConnection())->saveData($definition->tableName, $data);

    }

}