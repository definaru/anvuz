<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%city}}`.
 */
class m260213_140817_create_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(),
            'namecity' => $this->string()->notNull(),
            'region' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%city}}');
    }
}
