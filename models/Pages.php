<?php

namespace frontend\models;

//use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $content
 * @property string|null $uuid
 * @property int $is_public
 * @property string|null $create_date
 * @property string|null $update_date
 */
class Pages extends \yii\db\ActiveRecord
{


    /** {@inheritdoc} */
    public static function tableName()
    {
        return 'pages';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['content', 'uuid'], 'default', 'value' => null],
            [['is_public'], 'default', 'value' => 1],
            [['update_date'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title', 'slug'], 'required'],
            [['content'], 'string'],
            [['is_public'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['uuid'], 'string', 'max' => 100],
            [['slug'], 'unique'],
        ];
    }

    /** {@inheritdoc} */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'slug' => 'URL ссылка',
            'content' => 'Контент',
            'uuid' => 'Uuid',
            'is_public' => 'Опубликовать',
            'create_date' => 'Дата создания',
            'update_date' => 'Дата обновления',
        ];
    }

}
