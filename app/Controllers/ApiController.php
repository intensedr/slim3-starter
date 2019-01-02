<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class ApiController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        return $response->withJson(['text' => 'Hello from app']);
    }
}