<?php

namespace Tourismusabgaben\Business\Beherbergung;

use Tourismusabgaben\Core\Db\DbConnection;
use Tourismusabgaben\Definition\Database\BeherbergungTableDefinition;

class BeherbergungBuilder
{

    public $beherbergung;

    public $strasse;

    public $plz;

    public $ort;

    public $gemeindeId;


    public function create()
    {

        $data = [];
        $data[BeherbergungTableDefinition::BEHERBERGUNG] =$this->beherbergung;
        $data[BeherbergungTableDefinition::STRASSE] =$this->strasse;
        $data[BeherbergungTableDefinition::PLZ] =$this->plz;
        $data[BeherbergungTableDefinition::ORT] =$this->ort;
//$data['description'] = 'Ort1';
        //$data['anzahl'] = 100;

        (new DbConnection())->saveData((new BeherbergungTableDefinition())->tableName, $data);






    }




}