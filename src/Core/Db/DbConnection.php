<?php

namespace Tourismusabgaben\Core\Db;


use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Log\LogMessage;
use Nemundo\Db\DbConfig;
use Nemundo\Db\Sql\Parameter\SqlStatement;
use Tourismusabgaben\App\TourismusabgabenApp;

class DbConnection
{


    /**
     * @var \PDO
     */
    private static $pdo = null;

    /**
     * @var bool
     */
    protected $connected = false;


    //abstract protected function connect();


    public function __construct()
    {
        //$this->loadConnection();
    }

    protected function connect()
    {

        //if (!$this->connected) {

        if (DbConnection::$pdo == null) {

            $filename = TourismusabgabenApp::$baseDir . 'config.ini';

            $iniList = parse_ini_file($filename, true, INI_SCANNER_RAW);

            //print_r($iniList);

            $host = $iniList['db_host'];
            $port = $iniList['db_port'];
            $user = $iniList['db_user'];
            $password = $iniList['db_password'];
            $database = $iniList['db_database'];

            //$property = [];
            $dataSourceName = 'pgsql:host=' . $host . ';port=' . $port . ';dbname=' . $database;


            try {
                DbConnection::$pdo = new \PDO($dataSourceName, $user, $password);
                DbConnection::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->connected = true;
            } catch (\PDOException $e) {
                $errorMessage = 'Connect Error: ' . $e->getMessage();

                echo $errorMessage;

                //(new LogMessage())->writeError($errorMessage);
                exit;
            }


        }


    }


    //private function prepareQuery(SqlStatement $sqlParameterList)
    public function executeQuery($sql, $parameterList = [])
    {

        $this->connect();

        /*$showErrorMessage = false;

        if (DbConfig::$sqlDebug) {
            (new Debug())->write($sqlParameterList->sql);
            (new Debug())->write($sqlParameterList->getParameterList());

        }*/

        //if ($this->connected) {

        $query = null;
        try {

            $query = DbConnection::$pdo->prepare($sql);

            foreach ($parameterList as $key => $value) {

                if (is_bool($value)) {
                    $query->bindValue(':' . $key, $value, \PDO::PARAM_BOOL);
                } else {
                    $query->bindValue(':' . $key, $value);
                }

            }

            $query->execute();

        } catch (\PDOException $error) {

            $showErrorMessage = true;

            /*if (strpos($error->getMessage(), 'SQLSTATE[42S21]: Column already exists: 1060 Duplicate column name', 0) === 0) {
                $showErrorMessage = false;
            }

            if (strpos($error->getMessage(), 'SQLSTATE[42000]: Syntax error or access violation: 1061 Duplicate key name', 0) === 0) {
                $showErrorMessage = false;
            }*/

            //if ($showErrorMessage) {
            $errorMessage = 'Query Error: ' . $error->getMessage();  // . 'Sql: ' . $sqlParameterList->sql;
            echo $errorMessage;
            // (new LogMessage())->writeError($errorMessage);
            // (new Debug())->write($sqlParameterList->getParameterList());

            //exit;


            //}
            //}



        }
        return $query;
        //return $showErrorMessage;

    }




    public function saveData($tableName, $data)
    {

        $field = implode(',',array_keys($data));
        $value = implode(',:',array_keys($data));


        $sql = 'INSERT INTO '.$tableName.' ('.$field.') VALUES (:'.$value.');';


        $this->executeQuery($sql,$data);


        return $this;

        //echo $sql;
        
        
        
    }
    


    public function queryData($sql, $parameterList = [])
    {

        $query = $this->executeQuery($sql, $parameterList);

         $result = $query->fetchAll();

return $result;

    }


    


}