<?php

require_once __DIR__ . '/../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__ . '/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    die($e);
}

require __DIR__ . '/../config/config.php';

$container = new \Slim\Container($config);
$app = new \Slim\App($container);

require_once __DIR__ . '/dependencies.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/api.php';