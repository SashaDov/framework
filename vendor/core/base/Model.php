<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 30.07.2017
 * Time: 19:26
 */

namespace vendor\core\base;


use vendor\core\Db;

abstract class Model
{

    protected $pdo;

    /**
     * a table from DB with witch a definite model works
     * @var
     */
    protected $table;

    /**
     * make a new class Db of connection to database
     * and afford to use functions of this class without EXTENDing to class Model
     * Model constructor.
     */
    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    /**
     * the wrap for execAdd/Db.php
     * @param $sql
     */
    public function execAddModel ($sql)
    {
        return $this->pdo->execAdd($sql);
    }

    public function findAll ()
    {
        $sql = "SELECT * FROM ". $this->table;
        return $this->pdo->querySelect($sql);
    }
}















