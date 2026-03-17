<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%universities}}`.
 */
class m250918_174011_create_universities_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%universities}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'logotype' => $this->string(),
            'photo' => $this->string(),
            'features' => $this->string(),
            'media' => $this->string(),
            'types_training' => $this->string(),
            'additional' => $this->string(),
            'contacts' => $this->string(),
            'href' => $this->string()->unique(),
            'date_create' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'date_update' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%universities}}');
    }
}
