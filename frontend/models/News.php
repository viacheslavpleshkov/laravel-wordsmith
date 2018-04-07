<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $url
 * @property int $status
 * @property int $category_id
 * @property string $tag
 * @property int $user_id
 *
 * @property Category $category
 * @property User $user
 */
class News extends \yii\db\ActiveRecord
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
            [['title', 'description', 'content', 'date', 'url', 'status', 'category_id', 'user_id'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['status', 'category_id', 'user_id'], 'integer'],
            [['title', 'description', 'tag'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 256],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'status' => 'Status',
            'category_id' => 'Category ID',
            'tag' => 'Tag',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
