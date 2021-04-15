<?php

namespace App\Controllers;

use App\Models\Model;

class HomeController extends Controller
{
    public function index($request = null)
    {
        $modeType = $request['modeType'] ?? "tenday";//"today";
        $lang = $request['lang'] ?? "ua";
        $cityCode = $request['cityCode'] ?? "fde527f4e0d1ea3a8dc3d8aeca0ea8f4a2838337f8f458b7db842ba8c6a68639";

        $this->setLanguage($lang);

        $mainTag = Model::getWeatherPage($modeType, $this->lang['name'], $cityCode);

        $data = [
            "lang" => $this->lang,
            "mainTag" => $mainTag,
            "cityCode" => $cityCode,
            "modeType" => $modeType
        ];

        //return $this->view("home.index", $data);
        return $this->view("tendays.index", $data);
    }

    public function indexToday($request = null)
    {
        var_dump($request);die();
        $this->setLanguage();

        $mainTag = Model::getWeatherPage("today", $this->lang, $cityCode);

        $data = [
            "lang" => $this->lang,
            "mainTag" => $mainTag,
            "cityCode" => $cityCode,
            "modeType" => $modeType
        ];

        $this->view("today", $data);
    }

    public function indexTenDays($request = null)
    {
        var_dump($request);die();
        $this->setLanguage();

        $mainTag = Model::getWeatherPage("tenday", $this->lang, $cityCode);
        var_dump($this->lang);die();

        $data = [
            "lang" => $this->lang,
            "mainTag" => $mainTag,
            "cityCode" => $cityCode,
            "modeType" => $modeType
        ];

        $this->view("ten.days", $data);
    }

}