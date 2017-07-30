<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 27.07.2017
 * Time: 17:11
 */
namespace app\controllers;


class Main extends Controllers {

    public $layout = 'main';

    public function indexPub()
    {
        $this->layout = "default";
       // $this->layout = false;
        $this->view = "test";
        echo __CLASS__ . ' ';
        echo __METHOD__ . 'информация из индекс акта контроллера мэйн';
        $name = "Петя";
        $message = 'good morning';
        $this->setVariables(compact('name','message'));
    }

}