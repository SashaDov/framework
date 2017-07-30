<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 28.07.2017
 * Time: 15:42
 */

namespace app\controllers;


use vendor\core\base\Controller;

class Page extends Controller
{
    public function viewPub ()
    {
        debug($this->route);
        debug($_POST);
        echo $_GET['f'];
        echo " pageView";
    }
}