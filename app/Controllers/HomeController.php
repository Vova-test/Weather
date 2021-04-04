<?php

namespace App\Controllers;

use App\Models\Model;

class HomeController extends Controller
{
    public function index()
    {

        $mainTag = Model::getWeatherPage("today", "uk-UA", "874007233ad152f9a0541234e94fc0722a06a81db728ad9e08be04b58fbe18fa");

        $data = ["mainTag" => $mainTag];

        $this->view("home.index", $data);
    }

}