<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 30.07.2017
 * Time: 19:26
 */

namespace vendor\core;


class Db
{

    /**
     * keep connection object PDO from config/config_db_pdo.php
     * @var $config array
     */
    protected $pdo;

    /**
     * SINGLETON pattern - keep __construct of connection to database
     * in order not to connect every time
     * @var object
     */
    protected static $instance;

    protected function __construct()
    {
        $config = require_once ROOT . '/config/config_db_pdo.php';
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];
        $this->pdo = new \PDO($config['dsn'],$config['user'],$config['password'],$options);
    }

    public static function getInstance ()
    {
        if (self::$instance === null)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * f_execAdd with prepare: delete, insert one, update, create
     */
    public function execAdd ($sql)
    {
        $statement = $this->pdo->prepare($sql);
        return $statement->execute();
    }

    /**
     * f_querySelect with prepare: select
     * @param $sql
     */
    public function querySelect ($sql)
    {
        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute();
        if ($result !== false)
        {
            return $statement->fetchAll();
        }
        return [];
    }

}












