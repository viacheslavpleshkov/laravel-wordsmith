<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180310_095157_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->defaultValue(null),
            'password' =>$this->string()->notNull(),
            'isAdmin' =>$this->integer()->defaultValue(0),
            'photo' =>$this->string()->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
