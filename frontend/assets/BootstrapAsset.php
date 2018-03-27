<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/bootstrap.min.js',

    ];
}