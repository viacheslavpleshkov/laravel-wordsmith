<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class SearchForm extends Model
{
    public $search;

    public function rules()
    {
        return [
            ['search', 'required'],
        ];
    }
}