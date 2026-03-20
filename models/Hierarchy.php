<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hierarchy".
 *
 * @property int $id
 * @property string $name
 * @property int $sortable
 * @property string $uuid
 */
class Hierarchy extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hierarchy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sortable', 'uuid'], 'required'],
            [['sortable'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['uuid'], 'string', 'max' => 30],
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
            'name' => 'Name',
            'sortable' => 'Sortable',
            'uuid' => 'Uuid',
        ];
    }

}
