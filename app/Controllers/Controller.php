<?php

namespace App\Controllers;

use App\Viewers\Viewer;

class Controller
{
    use Viewer;

    protected function redirect($path)
    {
        header("Location: /" . $path);
        die;
    }

}