<?php

namespace App\Models;

use voku\helper\HtmlDomParser;

class Model
{

    public function getContent($html)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $html);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        curl_close($ch);

        if ($output === FALSE) {
            echo 'cURL Error: ' . curl_error($ch);
            
            return;
        }

        return $output;
    }

    public function getWeatherPage($period, $lang, $cityCode)
    {
        $html = "https://weather.com/" . $lang . "/weather/" . $period . "/l/" . $cityCode;

        $content = self::getContent($html);

        $dom = HtmlDomParser::str_get_html($content);

        //$element = $dom->findOne('#MainContent');

       // return $element->outertext;
        //return $dom;
        //#preview div.myclass
        $todayDom = $dom->findOne('#MainContent');
        $currentInfo = $todayDom->findOne('div#WxuCurrentConditions-main-b3094163-ef75-4558-8d9a-e35e6b9b1034 section');
        $todayInfo = $todayDom->findOne('div#WxuTodayWeatherCard-main-486ce56c-74e0-4152-bd76-7aea8e98520a section');
        $timeList = $todayInfo->find('ul li');
        $today = [
            [
                'city' => $currentInfo->findOne('h1.CurrentConditions--location--1Ayv3')
                                      ->plaintext,
                'time' => $currentInfo->findOne('div.CurrentConditions--timestamp--1SWy5')
                                      ->plaintext,
                'temperature' => $currentInfo->findOne('span.CurrentConditions--tempValue--3KcTQ')
                                             ->plaintext,
                'conditions' => $currentInfo->findOne('div.CurrentConditions--phraseValue--2xXSr')
                                            ->plaintext,
                'skyCode' => $currentInfo->findOne('div.CurrentConditions--secondary--2XNLR svg')
                                         ->getAttribute('skycode'),
                'skyName' => $currentInfo->findOne('div.CurrentConditions--secondary--2XNLR title')
                                         ->plaintext,
                'temperatures' => $currentInfo->findOne('div.CurrentConditions--tempHiLoValue--A4RQE')
                                              ->plaintext,
                'precipValue' => $currentInfo->findOne('div.CurrentConditions--precipValue--RBVJT span')
                                             ->plaintext,
            ],
            [
                'header' => $todayInfo->findOne('header h2')->plaintext
            ]
        ];

        $timeOfDay = [
            'moning',
            'afternoon',
            'evening',
            'night'
        ];

        foreach ($timeList as $key => $list) {
            $today[1] += [
                $timeOfDay[$key] =>[
                    'title' => $list->findOne('h3')
                                    ->plaintext,
                    'temp' => $list->findOne('div.Column--temp--2v_go')
                                   ->plaintext,
                    'skyCode' => $list->findOne('div.Column--icon--1fMZT svg')
                                      ->getAttribute('skycode'),
                    'skyName' => $list->findOne('div.Column--icon--1fMZT title')
                                      ->plaintext,
                    'fallIconName' => $list->findOne('div.Column--precip--2H5Iw svg')
                                           ->getAttribute('name'),
                    'fallIconTitle' => $list->findOne('div.Column--precip--2H5Iw title')
                                            ->plaintext,
                    'perCentTitle'  => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw')
                                            ->find('text', 1)->plaintext,
                    'perCentValue'  => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw span')
                                            ->plaintext,
                    'active' => strpos($list->class,'Column--active--FeXwd') ? 1 : 0,
                ]
            ];
        }

        $todayDetails = $todayDom->findOne('div#todayDetails');

        $today[2] = [
            'header' => $todayDetails->findOne('header h2')
                                     ->plaintext,
            'temp' => $todayDetails->findOne('div.TodayDetailsCard--feelsLikeTemp--2GFqN span.TodayDetailsCard--feelsLikeTempValue--2aogo')
                                   ->plaintext,
            'text' => $todayDetails->findOne('div.TodayDetailsCard--feelsLikeTemp--2GFqN span.TodayDetailsCard--feelsLikeTempValue--2aogo')
                                ->plaintext,
        ];

        $items = $todayDetails->find('div.ListItem--listItem--1r7mf WeatherDetailsListItem--WeatherDetailsListItem--3w7Gx');

        foreach ($items as $items) {
            $today[1] += [
                items
            ];
        }

        echo "<pre>";
            print_r($today);
        echo "<pre>";
        die();
        //var_dump($elements);die();
        //echo $elements;die();
    }
}