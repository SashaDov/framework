<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 27.07.2017
 * Time: 17:11
 */
namespace app\controllers;

use vendor\core\base\Controller;

class Main extends Controller {

    public function indexPub()
    {
        echo __CLASS__ . ' ';
        echo __METHOD__;
    }

}