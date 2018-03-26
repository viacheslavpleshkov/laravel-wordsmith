<?php

/* @var $this yii\web\View */
use app\widgets\NewsList;
use yii\helpers\Html;

$this->title = 'Про нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
</div>
<?=NewsList::widget()?>