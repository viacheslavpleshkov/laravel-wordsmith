<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180328_094830_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'url' => $this->string(256)->notNull(),
            'status' => $this->integer(3)->notNull(),
            'category_id' => $this->integer(),
            'tag' => $this->string(),
            'user_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey(
            'news_user_id_user_id',
            'news',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
