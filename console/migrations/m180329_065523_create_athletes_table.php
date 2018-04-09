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
            'date' => $this->date()->notNull(),
            'images' =>$this->string(256)->defaultValue('default-users.png'),
            'discharge' => $this->string(30)->notNull(),
            'judicial' => $this->string(30)->notNull(),
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
