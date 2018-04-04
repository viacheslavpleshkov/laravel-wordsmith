<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/blog-home.css',
    ];
    public $js = [
    ];
    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\JqueryAsset',
        'frontend\assets\BootstrapAsset',
        'frontend\assets\FontAwesomeAsset',
    ];
}
