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
    ],
];
