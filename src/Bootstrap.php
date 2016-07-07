<?php

namespace ThetaLab;

$config = include __DIR__.'/Config.php';

if ($config['environment'] !== 'production') {
    error_reporting(E_ALL);
}

/*
 * Cache checker
 */
if ($config['environment'] === 'production' && $config['cache_enabled']) {
    $cached_filename = $config['cache_path'].sha1($_SERVER['REQUEST_URI']);
    if (file_exists($cached_filename)) {
        echo file_get_contents($cached_filename);
        exit();
    }
}

require __DIR__.'/../vendor/autoload.php';

/*
 * Injector
 */
$injector = include __DIR__.'/Dependencies.php';

$request = $injector->make('Http\HttpRequest');
$response = $injector->make('Http\HttpResponse');

/*
 * Register the error handler
 */
if ($config['environment'] !== 'production') {
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
}

/*
 * Routes
 */
$routeDefinitionCallback = function (\FastRoute\RouteCollector $r) {
    $routes = include __DIR__.'/Routes.php';
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

foreach ($response->getHeaders() as $header) {
    header($header);
}

if ($config['environment'] === 'production') {
    $response->setContent(\gulch\GMinify::minifyHTML($response->getContent()));

    if ($config['cache_enabled'] && $response->getStatusCode() === 200) {
        file_put_contents($config['cache_path'].sha1($request->getPath()), $response->getContent());
    }
}

echo $response->getContent();
