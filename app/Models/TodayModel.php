<?php

namespace App\Models;


class TodayModel extends Model
{
    public function getTodayArray()
    {
        $response = $this->getWeatherDom();

        if (!is_object($response)) {
            return $response;
        }
        //var_dump($response);die();

        $currentInfo = $response->findOne('div#WxuCurrentConditions-main-b3094163-ef75-4558-8d9a-e35e6b9b1034 section');
        $todayInfo = $response->findOne('div#WxuTodayWeatherCard-main-486ce56c-74e0-4152-bd76-7aea8e98520a section');
        $todayDetails = $response->findOne('div#todayDetails');
        $timeList = $todayInfo->find('ul li');
        $timeOfDay = [
            'morning',
            'afternoon',
            'evening',
            'night'
        ];

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
                    'perCentTitle' => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw')
                                           ->find('text', 1)
                                           ->plaintext,
                    'perCentValue' => $list->findOne('div.Column--precip--2H5Iw span.Column--precip--2H5Iw span')
                                           ->plaintext,
                    'active' => strpos($list->class, 'Column--active--FeXwd') ? 1 : 0,
                ]
            ];
        }

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
}