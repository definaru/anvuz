<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use frontend\modules\auth\models\User;

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
            [['section'], 'default', 'value' => '-'],
            [['lastname', 'firstname'], 'required'],
            [['lastname', 'firstname', 'middlename', 'position', 'uuid', 'city'], 'string', 'max' => 255],
            [['uuid'], 'unique'],
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg', 'skipOnEmpty' => true],
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


    public function upload(string $name)
    {
        $dir = '/data/users/avatar/';
        $file = UploadedFile::getInstance($this, 'image');
        if ($file && $file->tempName) {
            $this->image = $file;
            $fileName = $name . '.' . $this->image->extension;
            $this->image->saveAs(Yii::getAlias('@frontendWeb').$dir.$fileName);
            $this->image = $dir.$fileName;
        }
    }

    public function profile()
    {
        if(Yii::$app->request->get('username')) {
            $this->uuid = Yii::$app->request->get('username');
        } else {
            $this->uuid = Yii::$app->security->generateRandomString(30);
        }
    }


    public function getContacts()
    {
        return $this->hasMany(Contacts::class, ['uuid' => 'uuid'])->select('uuid, type, link');
    }


    public function getSections()
    {
        return $this->hasOne(Hierarchy::class, ['sortable' => 'section'])->select('name, sortable');
    }


    public function getLocation()
    {
        return $this->hasOne(City::class, ['id' => 'city'])->select('id, namecity');
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['username' => 'uuid']);
    }

}
