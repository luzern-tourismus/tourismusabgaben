<?php

namespace Tourismusabgaben\Setup;

use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Core\Db\TableBuilder;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;
use Tourismusabgaben\Definition\Database\BeherbergungTypTableDefinition;

class TourismusabgabenSetup
{

    public function start()
    {

        $definition = new BeherbergungTableDefinition();

        (new TableBuilder($definition->tableName))
            ->addBooleanField('active')
            ->addTextField($definition::BEHERBERGUNG)
            ->addTextField($definition::STRASSE)
            ->addNumberField($definition::PLZ)
            ->addTextField($definition::ORT)
            ->addLargeTextField($definition::BEMERKUNG);


        $definition= new BeherbergungTypTableDefinition();

        (new TableBuilder($definition->tableName))
            ->addTextField($definition::BEHERBERGUNG_TYP);




        $this
            ->addBeherbergungTyp('Hotel')
        ->addBeherbergungTyp('Camping')
            ->addBeherbergungTyp('Ferienwohnung');



    }


    private function addBeherbergungTyp($typ)
    {

        $definition = new BeherbergungTypTableDefinition();

        $data = [];
        $data[BeherbergungTypTableDefinition::BEHERBERGUNG_TYP]=$typ;

        (new DbConnection())->saveData($definition->tableName,$data);

return $this;

    }



}