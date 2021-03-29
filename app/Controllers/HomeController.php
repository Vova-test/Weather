<?php

namespace App\Controllers;

use App\Models\Model;

class HomeController extends Controller
{
    public function index()
    {

        //$this->view("test");
        $mainTag = Model::getWeatherPage("today", "uk-UA", "4ba28384e2da53b2861f5b5c70b7332e4ba1dc83e75b948e6fbd2aaceeeceae3");

        $data = ["mainTag" => $mainTag];

        $this->view("home.index", $data);
    }

}