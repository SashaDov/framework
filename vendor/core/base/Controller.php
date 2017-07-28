<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 28.07.2017
 * Time: 14:50
 */

namespace vendor\core\base;


class Controller
{

    public $route = [];

    public function __construct($mas_route)
    {
        $this->route = $mas_route;
    }
}