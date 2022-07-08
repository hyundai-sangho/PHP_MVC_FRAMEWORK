<?php

use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function () {
  return '헬로 월드';
});

$app->router->get('/contact', function () {
  return '콘택트';
});

$app->run();
