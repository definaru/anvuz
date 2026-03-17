<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hierarchy}}`.
 */
class m260213_140932_create_hierarchy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hierarchy}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'sortable' => $this->integer()->notNull(),
            'uuid' => $this->string(30)->notNull()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hierarchy}}');
    }
}
