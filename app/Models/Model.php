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

        $mainDom = $dom->findOne('#MainContent');

        if ($period=='today') {
            $pageData = self::getToDayPage($mainDom);
        } else {
            $pageData = self::getTenDayPage($mainDom);
        }

        //return $pageData;

        echo "<pre>";
            print_r($pageData);
        echo "</pre>";
        die();
    }

    public function getToDayPage($mainDom)
    {
        $currentInfo = $mainDom->findOne('div#WxuCurrentConditions-main-b3094163-ef75-4558-8d9a-e35e6b9b1034 
            section');
        $todayInfo = $mainDom->findOne('div#WxuTodayWeatherCard-main-486ce56c-74e0-4152-bd76-7aea8e98520a 
            section');
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
                'skyTitle' => $currentInfo->findOne('div.CurrentConditions--secondary--2XNLR title')
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
                $timeOfDay[$key] => [
                    'title' => $list->findOne('h3')
                        ->plaintext,
                    'temp' => $list->findOne('div.Column--temp--2v_go')
                        ->plaintext,
                    'skyCode' => $list->findOne('div.Column--icon--1fMZT svg')
                        ->getAttribute('skycode'),
                    'skytitle' => $list->findOne('div.Column--icon--1fMZT title')
                        ->plaintext,
                    'fallIconName' => $list->findOne('div.Column--precip--2H5Iw svg')
                        ->getAttribute('name'),
                    'fallIconTitle' => $list->findOne('div.Column--precip--2H5Iw title')
                        ->plaintext,
                    'perCentTitle'  => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw')
                        ->find('text', 1)->plaintext,
                    'perCentValue'  => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw 
                        span')
                        ->plaintext,
                    'active' => strpos($list->class,'Column--active--FeXwd') ? 1 : 0,
                ]
            ];
        }

        $todayDetails = $mainDom->findOne('div#todayDetails');

        $today[2] = [
            'header' => $todayDetails->findOne('header h2')
                ->plaintext,
            'temp' => $todayDetails->findOne('div.TodayDetailsCard--feelsLikeTemp--2GFqN 
                span.TodayDetailsCard--feelsLikeTempValue--2aogo')
                ->plaintext,
            'text' => $todayDetails->findOne('div.TodayDetailsCard--feelsLikeTemp--2GFqN 
                span.TodayDetailsCard--feelsLikeTempLabel--1i4BV')
                ->plaintext,
            'items' => [],
        ];

        $items = $todayDetails->find('div.ListItem--listItem--1r7mf.WeatherDetailsListItem--WeatherDetailsListItem--3w7Gx');

        foreach ($items as $item) {
            $iconTitle2 = $item->findOne('div.WeatherDetailsListItem--wxData--23DP5 svg title')
                ->plaintext;
            $text2 = $item->findOne('div.WeatherDetailsListItem--wxData--23DP5')
                ->plaintext;

            $text2 = str_replace($iconTitle2, '', $text2);

            $today[2]['items'][] = [
                'iconName' => $item->findOne('svg')
                    ->getAttribute('name'),
                'iconTitle' => $item->findOne('svg title')
                    ->plaintext,
                'text1' => $item->findOne('div.WeatherDetailsListItem--label--3JSSI')
                    ->plaintext,
                'iconName2' => $item->findOne('div.WeatherDetailsListItem--wxData--23DP5 svg')
                    ->getAttribute('name'),
                'iconTitle2' => $item->findOne('div.WeatherDetailsListItem--wxData--23DP5 svg title')
                    ->plaintext,
                'text2' => $text2,
            ];
        }

        return $today;
    }

    public function getTenDayPage($mainDom)
    {
        $tenDays = [];

        $card = $mainDom->findOne('section.card');

        $tenDays = [
            'mainTitle' => $card->findOne('h1')
                                ->findOne('text', 0)
                                ->plaintext,
            'city' => $card->findOne('h1')
                            ->findOne('text', 2)
                            ->plaintext,
            'time' => $card->findOne('div.DailyForecast--timestamp--iI022')
                           ->plaintext,
        ];

        $items = $card->find('div.DailyForecast--DisclosureList--350ZO details');

        foreach ($items as $item) {
            $dayItem = $item->find('div.DaypartDetails--Content--XQooU',0);
            $nightItem = $item->find('div.DaypartDetails--Content--XQooU', 1);

            $tenDays[] = [
                'open' => $item->hasAttribute('open'),
                'summary' => [
                    'day' => $item->findOne('summary h2')
                                   ->plaintext,
                    'temp' => $item->findOne('div.DetailsSummary--temperature--3FMlw')
                                      ->plaintext,
                    'skyCode' => $item->findOne('div.DetailsSummary--condition--mqdxh svg')
                        ->getAttribute('skycode'),
                    'skyTitle' => $item->findOne('div.DetailsSummary--condition--mqdxh svg title')
                                       ->plaintext,
                    'text' => $item->findOne('div.DetailsSummary--condition--mqdxh 
                        span.DetailsSummary--extendedData--aaFeV')
                                   ->plaintext,
                    'precipIcon' => $item->findOne('div.DetailsSummary--precip--2ARnx svg')
                                       ->getAttribute('name'),
                    'precipTitle' => $item->findOne('div.DetailsSummary--precip--2ARnx svg title')
                                          ->plaintext,
                    'percent' => $item->findOne('div.DetailsSummary--precip--2ARnx span')
                                      ->plaintext,
                    'windIcon' => $item->findOne('div.DetailsSummary--wind--Cv4BH svg')
                                       ->getAttribute('name'),
                    'windTitle' => $item->findOne('div.DetailsSummary--wind--Cv4BH svg title')
                                        ->plaintext,
                    'windText' => $item->findOne('div.DetailsSummary--wind--Cv4BH span')
                                       ->plaintext,
                ],
                'details' => [
                    'day' => [
                        'timeName' => $dayItem->findOne('h3')
                                              ->plaintext,
                        'temp' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT span')
                                          ->plaintext,
                        'skyCode' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT svg')
                                             ->getAttribute('skycode'),
                        'skyTitle' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT svg title')
                                              ->plaintext,
                        'precipIcon' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE div.DailyContent--rainIconBlock--3JIMK svg')
                                                ->getAttribute('name'),
                        'precipTitle' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE div.DailyContent--rainIconBlock--3JIMK svg title')
                                                 ->plaintext,
                        'percent' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE span.DailyContent--value--3Xvjn')
                                                 ->plaintext,
                        'windIcon' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE svg.DailyContent--windIcon--35FOj')
                                              ->getAttribute('name'),
                        'windTitle' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE svg.DailyContent--windIcon--35FOj title')
                                            ->plaintext,
                        'windText' => $dayItem->findOne('div.DailyContent--ConditionSummary--2vnrT
                            div.DailyContent--dataPoints--3fymE span.Wind--windWrapper--1Va1P')
                                            ->plaintext,
                        'description' => $dayItem->findOne('p')
                                                 ->plaintext,
                        'other' => $dayItem->findOne('ul')
                            ->plaintext,
                    ],
                    'night' => [
                        'timeName' => $nightItem->findOne('h3')
                            ->plaintext,
                        'temp' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT span')
                            ->plaintext,
                        'skyCode' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT svg')
                            ->getAttribute('skycode'),
                        'skyTitle' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT svg title')
                            ->plaintext,
                        'precipIcon' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE div.DailyContent--rainIconBlock--3JIMK svg')
                            ->getAttribute('name'),
                        'precipTitle' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE div.DailyContent--rainIconBlock--3JIMK svg title')
                            ->plaintext,
                        'percent' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE span.DailyContent--value--3Xvjn')
                            ->plaintext,
                        'windIcon' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE svg.DailyContent--windIcon--35FOj')
                            ->getAttribute('name'),
                        'windTitle' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT 
                            div.DailyContent--dataPoints--3fymE svg.DailyContent--windIcon--35FOj title')
                            ->plaintext,
                        'windText' => $nightItem->findOne('div.DailyContent--ConditionSummary--2vnrT
                            div.DailyContent--dataPoints--3fymE span.Wind--windWrapper--1Va1P')
                            ->plaintext,
                        'description' => $nightItem->findOne('p')
                            ->plaintext,
                        'other' => $nightItem->findOne('ul')
                            ->plaintext,
                    ],

                ],
            ];
        }
        //DailyForecast--DisclosureList--350ZO

        return $tenDays;
    }
}