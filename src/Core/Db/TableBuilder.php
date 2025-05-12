<?php

namespace Tourismusabgaben\Core\Db;

class TableBuilder
{


    public $tableName;



    public function addTextField($fieldName)
    {
        /*$field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'character varying(' . $length . ')';
        $field->allowNull = $allowNull;*/
        return $this;
    }

    public function addLargeTextField($fieldName, $allowNull = false)
    {
        /*$field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'text';
        $field->allowNull = $allowNull;*/
        return $this;
    }

   /* public function addYesNoField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'bool';
        $field->allowNull = $allowNull;
        return $this;
    }

    public function addDateField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'date';
        $field->allowNull = $allowNull;
        return $this;
    }

    public function addTimeField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'time';
        $field->allowNull = $allowNull;
        return $this;
    }

    public function addDateTimeField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'datetime';
        $field->allowNull = $allowNull;
        return $this;
    }

    public function addNumberField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'int';
        $field->allowNull = $allowNull;
        return $this;
    }

    public function addLargeNumberField($fieldName, $allowNull = false)
    {
        $field = new MySqlField($this);
        $field->fieldName = $fieldName;
        $field->fieldType = 'bigint';
        $field->allowNull = $allowNull;
        return $this;
    }*/






    public function createTable()
    {

        $sql = 'CREATE TABLE '.$this->tableName;
        
        
        
        
    }







}