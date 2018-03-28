<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\NewsList;

$this->title = 'Правила клубу';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about col-lg-12">

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
</div>
<?=NewsList::widget()?>