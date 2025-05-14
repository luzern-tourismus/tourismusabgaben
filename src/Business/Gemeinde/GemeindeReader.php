<?php

namespace Tourismusabgaben\Business\Gemeinde;

use Tourismusabgaben\Business\Beherbergung\BeherbergungItem;
use Tourismusabgaben\Core\Business\AbstractReader;
use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;
use Tourismusabgaben\Definition\Database\GemeindeTableDefinition;

class GemeindeReader extends AbstractReader
{

    protected $id;

    /**
     * @return GemeindeItem[]
     */
    public function getData()
    {


        $list = [];
        $parameter=[];

        $definition = new GemeindeTableDefinition();

        $sql = 'SELECT * FROM ' . $definition->tableName;

        if ($this->id !==null) {
            $sql .= ' WHERE id = :id';
            $parameter['id'] = $this->id;

        }


        $sql.= ' ORDER BY gemeinde;';  // DESC';

        foreach ((new DbConnection())->queryData($sql,$parameter) as $row) {

            $item = new GemeindeItem();
            $item->bfsNr = $row[$definition::ID];
            $item->gemeinde = $row[$definition::GEMEINDE];

            $list[] = $item;

        }

        return $list;


    }

}