<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property string $title
 * @property string|null $body
 * @property string|null $href
 * @property string|null $date_create
 * @property string|null $date_update
 */
class Documents extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body', 'href'], 'default', 'value' => null],
            [['date_update'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title'], 'required'],
            [['body'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['href'], 'string', 'max' => 2048],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название документы',
            'body' => 'Ссылка на документ',
            'href' => 'URL адрес',
            'date_create' => 'Дата создания',
            'date_update' => 'Дата обновления'
        ];
    }

}
