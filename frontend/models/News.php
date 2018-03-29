<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $url
 * @property int $category_id
 * @property string $tag
 * @property int $user_id
 */
class News extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'date', 'url', 'user_id'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['category_id', 'user_id'], 'integer'],
            [['title', 'description', 'tag'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'url' => 'Url',
            'category_id' => 'Category ID',
            'tag' => 'Tag',
            'user_id' => 'User ID',
        ];
    }
}
