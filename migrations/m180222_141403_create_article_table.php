<?php
use yii\db\Migration;
/**
 * Handles the creation of table `news`.
 */
class m180222_141403_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(90)->notNull(),
            'description'=>$this->text()->notNull(),
            'content'=>$this->text()->notNull(),
            'date'=>$this->date()->notNull(),
            'image'=>$this->string(256),
            'viewed'=>$this->integer(),
            'user_id'=>$this->integer()->notNull(),
            'status'=>$this->integer()->defaultValue(0),
            'category_id'=>$this->integer(),
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}