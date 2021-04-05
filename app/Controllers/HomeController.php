<?php

namespace App\Controllers;

use App\Models\Model;

class HomeController extends Controller
{
    public function index()
    {

        $mainTag = Model::getWeatherPage("tenday", "uk-UA", "fde527f4e0d1ea3a8dc3d8aeca0ea8f4a2838337f8f458b7db842ba8c6a68639");

        $data = ["mainTag" => $mainTag];

        $this->view("home.index", $data);
    }

}