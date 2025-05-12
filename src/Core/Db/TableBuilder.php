<?php

namespace Tourismusabgaben\Core\Db;

class TableBuilder
{


    public $tableName;


   /* public function setTableName($tableName)
    {

        $this->tableName=$tableName;
        return $this;

    }*/


    public function __construct($tableName)
    {

        $this->tableName = $tableName;
        $this->createTable();

    }



    public function addTextField($fieldName)
    {

        $this->addField($fieldName,'VARCHAR(255)');

        //$sql = 'ALTER TABLE '.$this->tableName.' ADD '.$fieldName.' VARCHAR(255)';

        //(new DbConnection())->executeQuery($sql);


        /*$field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'character varying(' . $length . ')';
        $field->allowNull = $allowNull;*/
        return $this;
    }

    public function addLargeTextField($fieldName, $allowNull = false)
    {

        $this->addField($fieldName,'text');


        /*$field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'text';
        $field->allowNull = $allowNull;*/
        return $this;
    }

    public function addBooleanField($fieldName, $allowNull = false)
    {
        $this->addField($fieldName,'boolean');
        return $this;
    }

    public function addDateField($fieldName, $allowNull = false)
    {
        $this->addField($fieldName,'date');
        return $this;
    }

    public function addTimeField($fieldName, $allowNull = false)
    {
        $this->addField($fieldName,'');
        return $this;
    }

    public function addDateTimeField($fieldName, $allowNull = false)
    {
        $this->addField($fieldName,'');
        return $this;
    }

    public function addNumberField($fieldName, $allowNull = false)
    {
        $this->addField($fieldName,'int');
        return $this;
    }





    private function addField($fieldName, $fieldType, $allowNull = false)
    {

        $sql = 'ALTER TABLE '.$this->tableName.' ADD COLUMN IF NOT EXISTS '.$fieldName.' '.$fieldType.';';   //VARCHAR(255)';

        (new DbConnection())->executeQuery($sql);


    }






    public function createTable()
    {

        //$this->tableName=$tableName;

        //$sql = 'CREATE TABLE '.$this->tableName;

        $sql = 'CREATE TABLE IF NOT EXISTS '.$this->tableName.' (
  id serial NOT NULL
);';

//$primaryIndexDataType = 'serial NOT NULL';


        (new \Tourismusabgaben\Core\Db\DbConnection())->executeQuery($sql);

        return $this;

    }







}