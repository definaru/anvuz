<?php
namespace frontend\models;

/**
 * @property int $id
 * @property string $namecity
 * @property string $region
 */
class City extends \yii\db\ActiveRecord
{

    /** {@inheritdoc} */
    public static function tableName()
    {
        return 'city';
    }


    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['namecity', 'region'], 'required'],
            [['namecity', 'region'], 'string', 'max' => 255],
        ];
    }


    /** {@inheritdoc} */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namecity' => 'Название города',
            'region' => 'Регион',
        ];
    }

}