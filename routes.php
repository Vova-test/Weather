<?php
return [
    "/" => [
        "controller" => "HomeController",
        "action" => "index"
    ],
    "/today/index" => [
        "controller" => "HomeController",
        "action" => "indexToday"
    ],
    "/tenday/index" => [
        "controller" => "HomeController",
        "action" => "indexTenDays"
    ],
];