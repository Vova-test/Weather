<?php

namespace App\Controllers;

use App\Models\TodayModel;
use App\Models\TenDayModel;

class HomeController extends Controller
{
    private $modeTypes = ['today', 'tenday'];
    private $modelUrl;

    public function index($request = null)
    {
        $request = $this->getBaseParams();

        if ($request['modeType'] == $this->modeTypes[0])
        {
            $path = "today/index";
        } else {
            $path = "tenday/index";
        }

        $this->redirect($path);
    }

    public function indexToday($request = null)
    {
        if (!$request) {
            $request = $this->getBaseParams();
        }

        $request['modeType'] = $this->modeTypes[0];

        $this->setCookies( $request);

        $modeType = $request['modeType'];
        $lang = $request['lang'];
        $cityCode = $request['cityCode'];

        $this->setLanguage($lang);

        $this->modelUrl = WEATHER_URL . "/" .  $this->lang['name'] . "/weather/today/l/" .  $cityCode;


        $tenDayModel = new TodayModel($this->modelUrl);

        $mainTag = $tenDayModel->getTodayArray($modeType, $this->lang['name'], $cityCode);

        if (!is_array($mainTag)) {
            echo $mainTag;
            return;
        }

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
        if (!$request) {
            $request = $this->getBaseParams();
        }

        $request['modeType'] = $this->modeTypes[1];

        $this->setCookies( $request);

        $modeType = $request['modeType'];
        $lang = $request['lang'];
        $cityCode = $request['cityCode'];

        $this->setLanguage($lang);

        $this->modelUrl = WEATHER_URL . "/" .  $this->lang['name'] . "/weather/tenday/l/" .  $cityCode;


        $tenDayModel = new TenDayModel($this->modelUrl);

        $mainTag = $tenDayModel->getTenDayArray($modeType, $this->lang['name'], $cityCode);

        if (!is_array($mainTag)) {
            echo $mainTag;
            return;
        }

        $data = [
            "lang" => $this->lang,
            "mainTag" => $mainTag,
            "cityCode" => $cityCode,
            "modeType" => $modeType
        ];

        $this->view("tendays", $data);
    }

    public function getBaseParams()
    {
        $baseArray = [
            "lang" => isset($_COOKIE['lang']) ? $_COOKIE['lang'] : "ua",
            "cityCode" => isset($_COOKIE['cityCode']) ? $_COOKIE['cityCode'] : "fde527f4e0d1ea3a8dc3d8aeca0ea8f4a2838337f8f458b7db842ba8c6a68639",
            "modeType" => isset($_COOKIE['modeType']) ? $_COOKIE['modeType'] : $this->modeTypes[0]
        ];

        return $baseArray;
    }

    public function setCookies($array)
    {
        foreach ($array as $key => $value) {
            setcookie($key, $value, time() + 3600, "/");
        }
    }
}