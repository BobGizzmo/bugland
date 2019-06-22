<?php
$basePath = dirname(__dir__) . DIRECTORY_SEPARATOR;

require_once $basePath . 'vendor/autoload.php';

$app = App\App::getInstance();
$app->setStartTime();
$app::load();

//$app->getRouter($basePath)
    //->get('/', 'Controller#Method', 'UrlName')
    //->get('/category/[*:slug]-[i:id]', 'Controller#Method', 'UrlName')
    //->run();