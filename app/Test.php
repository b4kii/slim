<?php

namespace App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Test
{
    public function __construct(){}

    public function index(Request $request, Response $response, $args) {
        $response->getBody()->write("test2");
        return $response;
    }
}