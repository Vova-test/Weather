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

        $element = $dom->findOne('#MainContent');

        return $element->outertext;
    }
}