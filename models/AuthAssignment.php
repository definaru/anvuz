<?php
namespace frontend\models;

class AuthAssignment extends \yii\db\ActiveRecord
{

    /** {@inheritdoc} */
    public static function tableName()
    {
        return 'auth_assignment';
    }

    public function rules()
    {
        return [
            [['item_name', 'user_id'], 'string', 'max' => 64],
            [['created_at'], 'integer'],
            [['item_name', 'user_id', 'created_at'], 'safe'],
        ];
    }

    /** {@inheritdoc} */
    public function attributeLabels()
    {
        return [
            'item_name' => 'Item name',
            'user_id' => 'User id',
            'created_at' => 'Created date'
        ];
    }

}