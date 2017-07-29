<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 28.07.2017
 * Time: 14:50
 */

namespace vendor\core\base;


abstract class Controller
{

    public $route = [];
    public $view;

    public function __construct($mas_route)
    {
        $this->route = $mas_route;
        //$this->view = $mas_route['act'];
        //require_once APP . "/views/".$mas_route['controller']."/{$this->view}.php";
    }
}