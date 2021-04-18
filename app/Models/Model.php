<?php

namespace App\Models;

use voku\helper\HtmlDomParser;

class Model
{
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        if ($output === FALSE) {
            $error = 'cURL Error: ' . curl_error($ch);

            return ['error' => $error];
        }

        curl_close($ch);

        return ['response' => $output];
    }

    public function getWeatherDom()
    {
        $curlResponse = $this->getContent();

        if (isset($curlResponse['error'])) {
            return $curlResponse['error'];
        }

        $dom = HtmlDomParser::str_get_html($curlResponse['response']);

        $mainDom = $dom->findOne('#MainContent');

        return $mainDom;
    }
}