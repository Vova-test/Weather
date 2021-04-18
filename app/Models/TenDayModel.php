<?php

namespace App\Models;

class TenDayModel extends Model
{
    public function getTenDayArray()
    {
        $response = $this->getWeatherDom();

        if (!is_object($response)) {
            return $response;
        }

        $card = $response->findOne('section.card');

        $tenDays = [
            'mainTitle' => $card->find('h1')
                                ->find('text', 0)
                                ->plaintext,
            'city' => $card->find('h1')
                           ->find('text', 2)
                           ->plaintext,
            'time' => $card->findOne('div.DailyForecast--timestamp--iI022')
                           ->plaintext,
        ];

        $items = $card->find('div.DailyForecast--DisclosureList--350ZO details');

        foreach ($items as $item) {
            $tenDays['days'][] = [
                'open' => $item->hasAttribute('open'),
                'summary' => [
                    'date' => $item->findOne('summary h2')
                                   ->plaintext,
                    'temp1' => $item->find('div.DetailsSummary--temperature--3FMlw span')
                                    ->find('text', 0)
                                    ->plaintext,
                    'temp2' => $item->find('div.DetailsSummary--temperature--3FMlw span')
                                    ->find('text', 2)
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
                'details' => $this->getDetails($item),
            ];
        }

        return $tenDays;
    }

    public function getDetails($item)
    {
        $timesOfDay = $item->find('div.DaypartDetails--Content--XQooU')
                           ->find(' div.DailyContent--DailyContent--rTQY_');
        $ul = $item->find('div.DaypartDetails--Content--XQooU')
                   ->find('ul');

        foreach ($timesOfDay as $key => $period) {
            $details[] = [
                'timeDay' => $period->find('h3')
                                    ->find('text', 0)
                                    ->plaintext,
                'timeName' => $period->find('h3')
                                     ->find('text', 1)
                                     ->plaintext,
                'temp' => $period->findOne('span.DailyContent--temp--_8DL5')
                                 ->plaintext,
                'skyCode' => $period->findOne('svg')
                                    ->getAttribute('skycode'),
                'skyTitle' => $period->findOne('svg title')
                                     ->plaintext,
                'precipIcon' => $period->findOne('div.DailyContent--dataPoints--3fymE
                            div.DailyContent--rainIconBlock--3JIMK svg')
                                       ->getAttribute('name'),
                'precipTitle' => $period->findOne('div.DailyContent--dataPoints--3fymE
                            div.DailyContent--rainIconBlock--3JIMK svg title')
                                        ->plaintext,
                'percent' => $period->findOne('div.DailyContent--dataPoints--3fymE span.DailyContent--value--3Xvjn')
                                    ->plaintext,
                'windIcon' => $period->findOne('div.DailyContent--dataPoints--3fymE
                            svg.DailyContent--windIcon--35FOj')
                                     ->getAttribute('name'),
                'windTitle' => $period->findOne('div.DailyContent--dataPoints--3fymE
                            svg.DailyContent--windIcon--35FOj title')
                                      ->plaintext,
                'windText' => $period->findOne('div.DailyContent--dataPoints--3fymE
                            span.Wind--windWrapper--1Va1P')
                                     ->plaintext,
                'description' => $period->findOne('p')
                                        ->plaintext,
                'otherInfo' => $this->getOtherInfo($ul[$key]),
            ];
        }

        return $details;
    }

    public function getOtherInfo($ul)
    {
        $liTegs = $ul->find('li');
        $otherInfo = [];

        foreach ($liTegs as $li)
        {
            $otherInfo[] = [
                'name' => $li->findOne('svg')
                             ->getAttribute('name'),
                'title' => $li->findOne('svg title')
                              ->plaintext,
                'text' => $li->findOne('span.DetailsTable--label--2e7uR')
                             ->plaintext,
                'value' => $li->findOne('span.DetailsTable--value--1F3Ze')
                              ->plaintext,
            ];
        }

        return $otherInfo;
    }
}