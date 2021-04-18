<?php

namespace App\Controllers;

use App\Models\TodayModel;
use App\Models\TenDayModel;
//use App\Models\Model;

class HomeController extends Controller
{
    private $modeTypes = ['today', 'tenday'];
    private $modelUrl;

    public function index($request = null)
    {
        if (!$request) {
            $request = $this->getBaseArray();
        }

        $modeType = $request['modeType'] ?? $this->modeTypes[0];
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

        return $this->view("today", $data);
    }

    public function indexToday($request = null)
    {
        if (!$request) {
            $request = $this->getBaseArray();
        }

        $modeType = $request['modeType'] ?? $this->modeTypes[0];
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
        //var_dump($mainTag);die();
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
            $request = $this->getBaseArray();
        }

        $modeType = $request['modeType'] ?? $this->modeTypes[1];
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

    public function getBaseArray()
    {
        $baseArray = [
            "lang" => "ua",
            "cityCode" => "fde527f4e0d1ea3a8dc3d8aeca0ea8f4a2838337f8f458b7db842ba8c6a68639",
        ];

        return $baseArray;
    }
}