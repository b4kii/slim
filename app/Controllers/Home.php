<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Home
{
    public function __construct(){}

    public function index(Request $request, Response $response, $args) {
        $response->getBody()->write("Home");
        return $response;
    }

    public function show()
    {

    }
}