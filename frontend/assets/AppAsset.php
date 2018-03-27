<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
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
        'frontend\assets\JqueryAsset',
        'frontend\assets\BootstrapAsset',
        'frontend\assets\FontAwesomeAsset',
    ];
}
