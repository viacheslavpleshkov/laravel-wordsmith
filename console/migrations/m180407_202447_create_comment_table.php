<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180407_202447_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'news_id' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(1)->notNull()
        ]);
        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-article_id',
            'comment',
            'news_id',
            'news',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
