<?php

function getConfig(){
    echo __DIR__;
    $pf = '.' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR;
    $config = [
        'general' => [
            'templatePath' => $pf
        ],
        'pages' => [
            'main' => [
                'title' => 'Herzlich Willkommen auf meinem Blog',
                'template' => ''
            ],
        ],
    ];
    return $config;
}