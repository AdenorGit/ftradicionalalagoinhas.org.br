<?php

namespace Src\controllers;

class WebController
{
    public function start()
    {
        $title = "HOME";
        include "./src/view/web/home.php";
    }

    public function galeria()
    {
        $title = "GALERIA";
        include "./src/view/web/galeria.php";
    }
}