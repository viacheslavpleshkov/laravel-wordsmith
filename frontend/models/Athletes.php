<?php

namespace frontend\models;

use yii\base\Model;
use yii\db\Query;

class Athletes extends Model
{
    public function getAthletesList()
    {
        $command = (new Query())
            ->select('*')
            ->from('athletes')
            ->all();
        return $command;
    }
}