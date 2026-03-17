<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $uuid
 * @property string $type
 * @property bool $is_public
 * @property string $link
 * @property int $create_date
 */
class Contacts extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_public'], 'default', 'value' => 0],
            [['uuid', 'type', 'link', 'create_date'], 'required'],
            [['is_public'], 'boolean'],
            [['create_date'], 'integer'],
            [['uuid'], 'string', 'max' => 30],
            [['type', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uuid' => 'Uuid',
            'type' => 'Type',
            'is_public' => 'Is Public',
            'link' => 'Link',
            'create_date' => 'Create Date',
        ];
    }

}
