    <?php
    error_reporting(-1);

    use vendor\core\Router;

    $query = $_SERVER["QUERY_STRING"]; //REQUEST_URI QUERY_STRING

    define('WWW',__DIR__);
    define('APP',dirname(__DIR__) . '/app');
    define('CORE',dirname(__DIR__) . '/vendor/core');
    define('LIBS',dirname(__DIR__) . '/vendor/libs');
    define('ROOT',dirname(__DIR__));
    define('LAYOUT','default');

    require LIBS . "/functions";

    spl_autoload_register(function ($class)
    {
        $file = ROOT . '/' . str_replace('\\','/',$class).'.php';
        if (is_file($file))
        {
            require_once $file;
        }
    });



    //my routes for typical pages with changing only central content
    Router::collectRoutes("^page/(?P<act>[a-z-]+)/(?P<alias>[a-z-]+)$", ['controller' => 'Page']);
    Router::collectRoutes("^page/(?P<alias>[a-z-]+)$", ['controller' => 'Page','act' => 'view']);

    //default routes
    Router::collectRoutes("^(?P<controller>[a-z-]+)/?(?P<act>[a-z-]+)?$");
    Router::collectRoutes("^$", ['controller' => 'Main']);
    Router::dispatch($query);



