<?php

namespace Tourismusabgaben\Business\Beherbergung;

use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;

class BeherbergungReader
{


    private $id;


    public function filterById($id)
    {

        $this->id = $id;
        return $this;

    }


    /**
     * @return BeherbergungItem[]
     */
    public function getData()
    {

        $list = [];
        $parameter=[];

        $sql = 'SELECT * FROM ' . (new BeherbergungTableDefinition())->tableName;

        if ($this->id !==null) {
            $sql .= ' WHERE id = :id';
            $parameter['id'] = $this->id;

        }


        $sql.= ' ORDER BY beherbergung;';  // DESC';

            //'SELECT * FROM ' . (new BeherbergungTableDefinition())->tableName . ' ORDER BY beherbergung;'

//print_r($parameter);

        foreach ((new DbConnection())->queryData($sql,$parameter) as $row) {

            $item = new BeherbergungItem();
            $item->id = $row[BeherbergungTableDefinition::ID];
            $item->beherbergung = $row[BeherbergungTableDefinition::BEHERBERGUNG];

            $list[] = $item;

        }

        return $list;


    }


}