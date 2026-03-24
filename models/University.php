<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "university".
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
 * @property int|null $person
 * @property string|null $region
 * @property string|null $href
 * @property string|null $date_create
 * @property string|null $date_update
 */
class University extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'logotype', 'photo', 'features', 'media', 'types_training', 'additional', 'contacts', 'person', 'region', 'href'], 'default', 'value' => null],
            [['date_update'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title'], 'required'],
            [['description', 'person'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['title', 'logotype', 'photo', 'features', 'media', 'types_training', 'additional', 'contacts', 'href'], 'string', 'max' => 255],
            [['region'], 'string', 'max' => 10],
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
            'person' => 'Person',
            'region' => 'Region',
            'href' => 'Href',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }


    public function getProfile()
    {
        return $this->hasOne(Profiles::class, ['id' => 'person'])->with('location', 'section', 'contacts');
    }


    public function getContact()
    {
        return $this->hasMany(Contacts::class, ['uuid' => 'href'])->select('id, uuid, type, link');
    }

}
