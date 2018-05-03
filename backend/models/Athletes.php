<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "athletes".
 *
 * @property int $id
 * @property string $username
 * @property string $date
 * @property string $images
 * @property string $discharge
 * @property string $judicial
 * @property string $role
 */
class Athletes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'athletes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'date', 'discharge', 'judicial', 'role'], 'required'],
            [['date'], 'safe'],
            [['username'], 'string', 'max' => 100],
            [['images', 'role'], 'string', 'max' => 256],
            [['discharge', 'judicial'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'П.І.Б'),
            'date' => Yii::t('app', 'Дата народження'),
            'images' => Yii::t('app', 'Забраження'),
            'discharge' => Yii::t('app', 'Розряд'),
            'judicial' => Yii::t('app', 'Судівська категорія'),
            'role' => Yii::t('app', 'Роль'),
        ];
    }
}
