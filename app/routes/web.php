<?php

use App\Controllers\Home;
use App\Controllers\PaintingDepartment;

$app->get("/home", [Home::class, "index"]);
$app->get("/painting-department", [PaintingDepartment::class, "index"]);
$app->get("/painting-department/calendars/{id}", [PaintingDepartment::class, "show"]);