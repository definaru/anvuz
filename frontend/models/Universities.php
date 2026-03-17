<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "universities".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $logotype
 * @property string|null $photo
 * @property string|null $features
 * @property string|null $media
 * @property string|null $types_training
 * @property string|null $additional
 * @property string|null $contacts
 * @property string|null $href
 * @property string|null $date_create
 * @property string|null $date_update
 */
class Universities extends \yii\db\ActiveRecord
{

    // UniversitiesSearch.php
    public static function tableName()
    {
        return 'universities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'logotype', 'photo', 'features', 'media', 'types_training', 'additional', 'contacts', 'href'], 'default', 'value' => null],
            [['date_update'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title'], 'required'],
            [['description'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['title', 'logotype', 'photo', 'features', 'media', 'types_training', 'additional', 'contacts', 'href'], 'string', 'max' => 255],
            [['href'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'logotype' => 'Logotype',
            'photo' => 'Photo',
            'features' => 'Features',
            'media' => 'Media',
            'types_training' => 'Types Training',
            'additional' => 'Additional',
            'contacts' => 'Contacts',
            'href' => 'Href',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }

}
