<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PaintingDepartment
{
    public function __construct(){}

    public function index(Request $request, Response $response, $args) {
        $response->getBody()->write("Calendar");
        return $response;
    }

    public function show(Request $request, Response $response, string $id) {
        $response->getBody()->write($id);
        return $response;
    }
}