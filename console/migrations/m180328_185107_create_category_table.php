<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180328_185107_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(120)->notNull(),
            'url' => $this->string(256)->notNull(),
            'status' => $this->integer(3)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
