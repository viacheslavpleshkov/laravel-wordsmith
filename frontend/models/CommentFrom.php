<?php
namespace frontend\models;
use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [3,250]]
        ];
    }
    public function saveComment()
    {
        $comment = new Comment;
        $news= new News;
        $comment->text = $this->comment;
        $comment->user_id = Yii::$app->user->id;
        $comment->news_id = $news->id;
        $comment->status = 1;
        $comment->datetime = date('Y-m-d');
        return $comment->save();
    }
}