<?php

use App\Controllers\Home;

$app->get("/home", [Home::class, "index"]);