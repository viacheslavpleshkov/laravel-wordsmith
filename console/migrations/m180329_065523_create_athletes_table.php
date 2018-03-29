<?php

use yii\db\Migration;

/**
 * Handles the creation of table `athletes`.
 */
class m180329_065523_create_athletes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('athletes', [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull(),
            'images' =>$this->string(256),
            'discharge' => $this->string(20)->notNull(),
            'role' => $this->string(256)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('athletes');
    }
}
