<?php

$injector = new \Auryn\Provider;

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpResponse');

$injector->alias('ThetaLab\Template\Renderer', 'ThetaLab\Template\TwigRenderer');

$injector->define('Twig_Environment', [
    ':loader' => new Twig_Loader_Filesystem(__DIR__ . '/Views') /*,
    ':options' => ['cache' => __DIR__.'/Cache'] */
]);

$injector->define('ThetaLab\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/Views',
]);
$injector->alias('ThetaLab\Page\PageReader', 'ThetaLab\Page\FilePageReader');
$injector->share('ThetaLab\Page\FilePageReader');

$injector->define('jnmorse\DataUri\DataUri' ,[]);

return $injector;