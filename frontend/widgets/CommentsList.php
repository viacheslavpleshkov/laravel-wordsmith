<?php

namespace frontend\widgets;

use frontend\models\Comment;
use yii\base\Widget;

class CommentsList extends Widget
{
    public function run()
    {
        $CommentsWidgetList=Comment::find()->where(['status'=>'1'])->orderBy(['id' => SORT_DESC])->limit(3)->all();

        return $this->render('CommentsList', [
            'CommentsWidgetList' => $CommentsWidgetList,
        ]);
    }
}
