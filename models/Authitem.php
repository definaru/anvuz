<?php
namespace frontend\models;

class Authitem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auth_item';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['name', 'rule_name'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 255],
            [['name', 'type', 'description', 'rule_name', 'data', 'created_at', 'updated_at'], 'safe'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'rule_name' => 'rule_name',
            'data' => 'data',
            'created_at' => 'Create Date',
            'updated_at' => 'Updated Date'
        ];
    }
}