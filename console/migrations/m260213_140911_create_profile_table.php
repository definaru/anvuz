<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m260213_140911_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255),
            'firstname' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'middlename' => $this->string(),
            'uuid' => $this->string(30)->notNull()->unique(),
            'position' => $this->string(),
            'city' => $this->integer(),
            'create_date' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
    }
}
