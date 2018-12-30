<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

require __DIR__ . '/../config/config.php';

$container = new \Slim\Container($config);
$app = new \Slim\App($container);

require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/api.php';