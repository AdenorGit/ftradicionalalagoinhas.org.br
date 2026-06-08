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

    public function informes()
    {
        $title = "INFORMES";
        include "./src/view/web/informes.php";
    }

    public function sobre()
    {
        $title = "SOBRE NÓS";
        include "./src/view/web/sobre.php";
    }

    public function institucional()
    {
        $title = "INSTITUCIONAL";
        include "./src/view/web/institucional.php";
    }
}