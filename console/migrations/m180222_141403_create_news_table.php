<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180222_141403_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey()->notNull(),
            'title' => $this->string(60)->notNull(),
            'description' => $this->string(100)->notNull(),
            'content' => $this->text()->notNull(),
            'images' => $this->string(60),
            'date' => $this->date()->notNull(),
            'url' => $this->string(256)->unique()->notNull(),
            'status' => $this->integer(2)->notNull(),
            'user' => $this->string(256)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
