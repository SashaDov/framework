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

    /**
     * current pattern
     * @var string
     */
    public $layout;


    public function __construct($mas_route)
    {
        $this->route = $mas_route;
        $this->view = $mas_route['act'];

    }

    public function getView ()
    {
        $viewObj = new View($this->route,$this->layout,$this->view);
        $viewObj->render();
    }
}