<?php

namespace App\Viewers;

trait Viewer
{
    public function view($template, $data)
    {
        require TEMPLATE_FOLDER_PATH . "/" . template . ".php";
    }
}