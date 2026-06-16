<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string|null $middlename
 * @property string|null $avatar
 * @property string|null $position
 * @property string|null $href
 */
class Profiles extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position'], 'default', 'value' => '-'],
            [['lastname', 'firstname', 'section'], 'required'],
            [['lastname', 'firstname', 'middlename', 'image', 'position', 'uuid', 'city'], 'string', 'max' => 255],
            [['uuid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Фамилия',
            'firstname' => 'Имя',
            'middlename' => 'Отчество',
            'image' => 'Фото',
            'position' => 'Должность',
            'uuid' => 'Ссылка',
            'city' => 'Город',
            'section' => 'Иерархия',
            'create_date' => 'Дата создания',
        ];
    }


    public function getContacts()
    {
        return $this->hasMany(Contacts::class, ['uuid' => 'uuid'])->select('uuid, type, link');
    }


    public function getSection()
    {
        return $this->hasOne(Hierarchy::class, ['sortable' => 'section'])->select('name, sortable');
    }


    public function getLocation()
    {
        return $this->hasOne(City::class, ['id' => 'city'])->select('id, namecity');
    }

}
