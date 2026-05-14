<?php

use Pecee\SimpleRouter\SimpleRouter;
use Src\controllers\WebController;

SimpleRouter::setDefaultNamespace('\src\controllers');

// SimpleRouter::get('/', function() {
//     return 'Olá mundo!';
// });

SimpleRouter::get('/', [WebController::class, 'start']);

SimpleRouter::start();