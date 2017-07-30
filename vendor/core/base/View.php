<?php
/**
 * Created by PhpStorm.
 * User: Галина
 * Date: 29.07.2017
 * Time: 15:52
 */

namespace vendor\core\base;


class View
{

    /**
     * current route
     * @var array
     */
    public $route = [];

    /**
     * current view
     * @var string
     */
    public $view;

    /**
     * current pattern
     * @var string
     */
    public $layout;

    public function __construct($route, $layout = "", $view = "")
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render ()
    {
        $file_view = APP . "/views/" . $this->route['controller'] ."/". $this->view .".php";
        if (is_file($file_view))
        {
            require_once $file_view;
        }
        else
        {
            echo "не найден файл $file_view";
        }

    }



















}