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
            [['body'], 'default', 'value' => null],
            [['title', 'subtitle', 'href'], 'required'],
            [['id_meta', 'id_user'], 'integer'],
            [['is_public', 'create_date', 'subtitle', 'update_date'], 'safe'], //, 'body'
            [['category', 'title', 'image', 'href'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_meta' => 'Meta ID',
            'id_user' => 'Author ID',
            'category' => 'Категория',
            'title' => 'Заголовок',
            'subtitle' => 'Подзаголовок',
            'image' => 'Обложка',
            'body' => 'Body File',
            'href' => 'Ссылка на новость',
            'is_public' => 'Статус публикации',
            'create_date' => 'Дата создания',
            'update_date' => 'Дата обновления',
        ];
    }


    public static function getContent(News $model)
    {
        $folder = $model->body ?: $model->id;
        if($model->isNewRecord) {
            return '';
        } else {
            $filePath = Yii::getAlias('@frontend/web/data/news/'.$folder.'.md');
            return file_get_contents($filePath);            
        }
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