<?php

namespace Ltag\Setup;

use App\LtagApp;


class LtagSetup
{


    public function startSetup()
    {


        $conn = new \Nemundo\Db\Provider\SqLite\Connection\SqLiteConnection();
        $conn->filename = (new LtagApp())::$baseDir . 'db/ltag.sqlite';

        $tableName = 'blog';

        $table = new \Nemundo\Db\Provider\SqLite\Table\SqLiteTable($tableName);
        $table->connection = $conn;
        $table->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();
        //$table->addTextField('test1', 255, false);
        $table->addTextField('title')->addLargeTextField('description');
        $table->createTable();



    }



}