<?php

namespace Tourismusabgaben\Setup;

use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Core\Db\TableBuilder;
use Tourismusabgaben\Definition\Database\AbrechnungTableDefinition;
use Tourismusabgaben\Definition\Database\AbrechnungTypTableDefinition;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;
use Tourismusabgaben\Definition\Database\BeherbergungTypTableDefinition;
use Tourismusabgaben\Definition\Database\FirmaTableDefinition;
use Tourismusabgaben\Definition\Database\FirmaUserTableDefinition;
use Tourismusabgaben\Definition\Database\GemeindeTableDefinition;
use Tourismusabgaben\Definition\Database\UserTableDefinition;

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

        $definition = new BeherbergungTypTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::BEHERBERGUNG_TYP);

        $definition = new GemeindeTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::GEMEINDE);

        $definition = new UserTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::LOGIN)
            ->addTextField($definition::PASSWORD);

        $definition = new FirmaTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::FIRMA)
            ->addTextField($definition::STRASSE);

        $definition = new FirmaUserTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::FIRMA_ID)
            ->addTextField($definition::USER_ID);

        $definition = new AbrechnungTypTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::ABRECHNUNG_TYP)
            ->addTextField($definition::PHP_CLASS);

        $definition = new AbrechnungTableDefinition();
        (new TableBuilder($definition->tableName))
            ->addTextField($definition::ABRECHNUNG_TYP_ID)
            ->addTextField($definition::ABRECHNUNG)
            ->addTextField($definition::BESCHREIBUNG);






        $this
            ->addBeherbergungTyp('Hotel')
            ->addBeherbergungTyp('Camping')
            ->addBeherbergungTyp('Ferienwohnung');


    }


    private function addBeherbergungTyp($typ)
    {

        $definition = new BeherbergungTypTableDefinition();

        $data = [];
        $data[BeherbergungTypTableDefinition::BEHERBERGUNG_TYP] = $typ;

        (new DbConnection())->saveData($definition->tableName, $data);

        return $this;

    }


}