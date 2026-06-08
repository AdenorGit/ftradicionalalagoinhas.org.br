<?php

use Pecee\SimpleRouter\SimpleRouter;
use Src\controllers\WebController;

SimpleRouter::setDefaultNamespace('\src\controllers');

// SimpleRouter::get('/', function() {
//     return 'Olá mundo!';
// });

SimpleRouter::get('/', [WebController::class, 'start']);
SimpleRouter::get('/galeria', [WebController::class, 'galeria']);
SimpleRouter::get('/informes', [WebController::class, 'informes']);
SimpleRouter::get('/sobre', [WebController::class, 'sobre']);
SimpleRouter::get('/institucional', [WebController::class, 'institucional']);

SimpleRouter::error(function(){
    SimpleRouter::response()->redirect('/');
    exit();
});

SimpleRouter::start();