<!doctype html>
<html lang="ru-en">
<head>
	<meta charset="">
	<title>Академия Аддерли</title>
</head>
<body>
	<h1>ПРИВЕТ</h1>
    <?php
    error_reporting(-1);

    use vendor\core\Router;

    $query = rtrim($_SERVER["QUERY_STRING"],'/'); //REQUEST_URI QUERY_STRING
    define('WWW',__DIR__);
    define('APP',dirname(__DIR__) . '/app');
    define('CORE',dirname(__DIR__) . '/vendor/core');
    define('ROOT',dirname(__DIR__));

    require "../vendor/libs/functions";

    spl_autoload_register(function ($class)
    {
        $file = ROOT . '/' . str_replace('\\','/',$class).'.php';
        if (is_file($file))
        {
            require_once $file;
        }
    });

    //my routes
    Router::collectRoutes("^pages/?(?P<act>[a-z-]+)?$", ['controller' => 'Posts','act' => 'test-page']);

    //default routes
    Router::collectRoutes("^(?P<controller>[a-z-]+)/?(?P<act>[a-z-]+)?$");
    Router::collectRoutes("^$", ['controller' => 'Main']);
    debug(Router::getRoutes());
    Router::dispatch($query);


    ?>
</html>
