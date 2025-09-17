<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use frontend\modules\auth\models\User;


class News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function rules()
    {
        return [
            [['title', 'subtitle', 'body', 'href'], 'required'],
            [['id_meta', 'id_user'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['category', 'title', 'subtitle', 'image', 'body', 'href'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_meta' => 'Meta ID',
            'id_user' => 'Author ID',
            'category' => 'Category',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'image' => 'Image',
            'body' => 'Body File',
            'href' => 'Link',
            'create_date' => 'Created At',
            'update_date' => 'Updated At',
        ];
    }

    // Связи
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    // public function getMeta()
    // {
    //     return $this->hasOne(Meta::class, ['id' => 'id_meta']);
    // }
}