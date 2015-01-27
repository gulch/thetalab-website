<?php

namespace ThetaLab;

error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

$config = include(__DIR__.'/Config.php');

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run;
if ($config['environment'] !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
}
$whoops->register();

/**
 * Injector
 */
$injector = include(__DIR__.'/Dependencies.php');

$request = $injector->make('Http\HttpRequest');
$response = $injector->make('Http\HttpResponse');

/**
 * Routes
 */
$routeDefinitionCallback = function (\FastRoute\RouteCollector $r) {
    $routes = include(__DIR__.'/Routes.php');
    foreach ($routes as $route) {
        $r->addRoute($route[0], $route[1], $route[2]);
    }
};

$dispatcher = \FastRoute\simpleDispatcher($routeDefinitionCallback);

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPath());
switch ($routeInfo[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        $injector->make('\ThetaLab\Controllers\Page')->show404();
        break;
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $injector->make('\ThetaLab\Controllers\Page')->showErrorPage();
        break;
    case \FastRoute\Dispatcher::FOUND:
        $className = $routeInfo[1][0];
        $method = $routeInfo[1][1];
        $vars = $routeInfo[2];

        $class = $injector->make($className);
        $class->$method($vars);
        break;
}

foreach($response->getHeaders() as $header){
    header($header);
}

if($config['environment'] === 'production')
{
    $response->setContent(\ThetaLab\Lib\Minify::minifyHTML($response->getContent()));
}

echo $response->getContent();