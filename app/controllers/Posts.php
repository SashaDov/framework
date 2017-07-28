<?php

/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 27.07.2017
 * Time: 17:15
 */
namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends Controller
{

    public function indexPub()
    {
        echo __CLASS__ . ' ';
        echo __METHOD__;
    }

    public function test()
    {
        echo __CLASS__ . ' ';
        echo __METHOD__;
    }

    public function testPagePub()
    {
        debug($this->route);
        echo __CLASS__ . ' ';
        echo __METHOD__;
    }



}
