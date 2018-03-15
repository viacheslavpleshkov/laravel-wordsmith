<?php

namespace app\assets;

use yii\web\AssetBundle;

class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/components/jquery';
    public $js = [
        'jquery.min.js',

    ];
}