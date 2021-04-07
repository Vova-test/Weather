<?php

namespace App\Viewers;

trait Viewer
{
    protected $lang;

    public function view($template, $data = [])
    {
        if (extract($data, EXTR_OVERWRITE)) {
            unset($data);
        }

        require TEMPLATE_FOLDER_PATH . "/" . $template . ".php";
    }

    public function setLanguage($lang = 'ua')
    {
        $this->lang = include(LANGUAGE_FOLDER_PATH . "/" . $lang . ".php");
    }
}