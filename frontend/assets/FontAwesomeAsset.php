<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/components/font-awesome';
    public $css = [
        'css/fontawesome-all.min.css',
    ];

}