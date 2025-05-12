<?php

namespace Tourismusabgaben\Business\BeherbergungTyp;

use Tourismusabgaben\Business\Beherbergung\BeherbergungItem;
use Tourismusabgaben\Core\Business\AbstractReader;
use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;
use Tourismusabgaben\Definition\Database\BeherbergungTypTableDefinition;

class BeherberbungTypReader extends AbstractReader
{

    /**
     * @return BeherbergungTypItem[]
     */
    public function getData()
    {

        $list = [];
        $parameter=[];
        $definition = new BeherbergungTypTableDefinition();

        $sql = 'SELECT * FROM ' . (new BeherbergungTypTableDefinition())->tableName;

        $sql.= ' ORDER BY '.$definition::BEHERBERGUNG_TYP.';';  // DESC';

        //'SELECT * FROM ' . (new BeherbergungTableDefinition())->tableName . ' ORDER BY beherbergung;'

//print_r($parameter);

        foreach ((new DbConnection())->queryData($sql,$parameter) as $row) {

            $item = new BeherbergungTypItem();
            $item->id = $row[$definition::ID];
            $item->typ = $row[$definition::BEHERBERGUNG_TYP];

            $list[] = $item;

        }

        return $list;



    }




}