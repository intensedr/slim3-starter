<?php

use App\Controllers\ApiController;

$app->get('/api/v1', ApiController::class . ':index');