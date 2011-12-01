<?php

require_once __DIR__ . '/../vendors/silex/silex.phar';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();


require __DIR__ . '/config.php';

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/../views',
    'twig.class_path' => __DIR__.'/../vendors/twig/lib',
));

$app->get('/', function (Request $request) use($app) {
    return $app['twig']->render('index.twig.html', array());
});

return $app;
