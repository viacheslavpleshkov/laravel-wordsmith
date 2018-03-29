<?php

namespace frontend\models;

use yii\db\ActiveRecord;

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
class Athletes extends ActiveRecord
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
            'id' => 'ID',
            'username' => 'Username',
            'date' => 'Date',
            'images' => 'Images',
            'discharge' => 'Discharge',
            'judicial' => 'Judicial',
            'role' => 'Role',
        ];
    }
}
