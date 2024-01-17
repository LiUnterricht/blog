<?php
$pf = '.' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR;
function getConfig(){

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
            'single' => [
                'title' => 'Ein Einzelartikel',
                'template' => ''
            ],
        ],
    ];
    return $config;
}
echo $pf;
