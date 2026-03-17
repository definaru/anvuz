<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m260213_140942_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(30)->notNull(),
            'type' => $this->string()->notNull(),
            'is_public' => $this->boolean()->notNull()->defaultValue(false),
            'link' => $this->string()->notNull(),
            'create_date' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
