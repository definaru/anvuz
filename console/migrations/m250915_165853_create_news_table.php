<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m250915_165853_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'id_meta' => $this->integer(),
            'id_user' => $this->integer(),
            'category' => $this->string(),
            'title' => $this->string()->notNull(),
            'subtitle' => $this->string()->notNull(),
            'image' => $this->string(),
            'body' => $this->string()->notNull(),
            'href' => $this->string()->notNull(),
            'create_date' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'update_date' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%news}}');
    }
}
