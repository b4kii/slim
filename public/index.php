<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Test;
use App\Controllers\Home;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require_once "../app/routes/web.php";

$app->run();