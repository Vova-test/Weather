<?php

namespace App\Controllers;

use App\Viewers\Viewer;

class Controller
{
    use Viewer;

    protected function redirect($controller, $action)
    {
        header("Location: /" . $controller . "/" . $action . "/");
        die;
    }

}