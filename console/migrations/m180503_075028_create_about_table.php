<?php

use yii\db\Migration;

/**
 * Handles the creation of table `about`.
 */
class m180503_075028_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('about');
    }
}
