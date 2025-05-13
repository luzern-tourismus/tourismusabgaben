<?php

namespace Tourismusabgaben\Business\AbrechnungTyp;

use Tourismusabgaben\Business\BeherbergungTyp\BeherbergungTypItem;
use Tourismusabgaben\Core\Business\AbstractReader;
use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\AbrechnungTypTableDefinition;
use Tourismusabgaben\Definition\Database\BeherbergungTypTableDefinition;

class AbrechnungTypReader extends AbstractReader
{


    /**
     * @return AbrechnungTypItem[]
     */
    public function getData()
    {

        $list = [];
        $parameter=[];
        $definition = new AbrechnungTypTableDefinition();

        $sql = 'SELECT * FROM ' . $definition->tableName;   // (new BeherbergungTypTableDefinition())->tableName;

        //$sql.= ' ORDER BY '.$definition::BEHERBERGUNG_TYP.';';  // DESC';

        //'SELECT * FROM ' . (new BeherbergungTableDefinition())->tableName . ' ORDER BY beherbergung;'

//print_r($parameter);

        foreach ((new DbConnection())->queryData($sql,$parameter) as $row) {

            $item = new AbrechnungTypItem();  // new BeherbergungTypItem();
            $item->id = $row[$definition::ID];
            $item->abrechnungTyp = $row[$definition::ABRECHNUNG_TYP];

            $list[] = $item;

        }

        return $list;



    }



}