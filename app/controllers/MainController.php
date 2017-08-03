<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 27.07.2017
 * Time: 17:11
 */
namespace app\controllers;


use app\models\Main;

class MainController extends Controllers {

    public $layout = 'main';

    public function indexPub()
    {
        $this->layout = "default";
       // $this->layout = false;
        $this->view = "test";

       // echo __CLASS__ . ' ';
        //echo __METHOD__ . 'информация из индекс акта контроллера мэйн';

        //$name = "Петя";
        //$message = 'good morning';

        $model = new Main;
        $field1 = "thema";
        $field3 = "published_data";
        $f1 = "five thema";
        $f3 = "12-04-17 22:14:09";
        $sql = "INSERT posts ($field1, $field3) VALUES (:$field1, :$field3)";
        $res = $model->findBySql($sql,[$field1 => $f1,$field3 => $f3],'no');
        var_dump($res);

        //$sql = "SELECT * FROM $model->table WHERE $field1 LIKE :$field1 AND $field3=:$field3";

        //$res = $model->findBySql($sql,[$field1 => $f1,$field3 => $f3]); //$field1 => 'second article',
        //debug($res);

        //$articles = $model->findAll();
        //$this->setVariables(compact('articles'));
        //debug($articles);

        //$article = $model->findOne('second article');
        //debug($article);

    }



















}