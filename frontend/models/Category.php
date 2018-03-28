<?php

namespace frontend\models;

use yii\base\Model;
use yii\db\Query;

class Category extends Model
{
    public function getCategoryList()
    {
        $command = (new Query())
            ->select('*')
            ->from('category')
            ->all();
        return $command;
    }
}