<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rules`.
 */
class m180503_075129_create_rules_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rules', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'status' =>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rules');
    }
}
