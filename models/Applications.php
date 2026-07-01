<?php
namespace frontend\models;

/**
 * This is the model class for table "applications".
 *
 * @property int $id
 * @property string $title
 * @property string $person
 * @property string $email
 * @property string $phone
 * @property string|null $href
 * @property string|null $date_create
 */
class Applications extends \yii\db\ActiveRecord
{

    /** {@inheritdoc} */
    public static function tableName()
    {
        return 'applications';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['href'], 'default', 'value' => null],
            [['date_create'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title', 'person', 'email', 'phone'], 'required'],
            [['date_create'], 'safe'],
            [['title', 'person', 'email', 'phone', 'href'], 'string', 'max' => 255],
            [['href'], 'unique'],
        ];
    }

    /** {@inheritdoc} */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название ВУЗа',
            'person' => 'Контактное лицо (ФИО)',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'href' => 'Ссылка на заявку',
            'date_create' => 'Дата создания',
        ];
    }

}
