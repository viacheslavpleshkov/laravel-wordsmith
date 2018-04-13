<?php
return [
    'name' => 'Пік Анаконди',
    'language'=>'uk-UA',
    'sourceLanguage' => 'uk-UA',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'defaultTimeZone' => 'Europe/Kiev',
            'dateFormat' => 'dd-MM-yyyy',
            'datetimeFormat' => 'dd-MM-yyyy H:i:s',
            'timeFormat' => 'H:i:s',
            'currencyCode' => 'uk-UA',
        ],
    ],
];
