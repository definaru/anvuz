<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $description
 * @property string|null $link
 * @property int|null $sort_order
 * @property int $is_public
 * @property int|null $target
 * @property string|null $create_date
 * @property string|null $update_date
 */
class Slider extends \yii\db\ActiveRecord
{


    /** {@inheritdoc} */
    public static function tableName()
    {
        return 'slider';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['subtitle', 'description', 'link'], 'default', 'value' => null],
            [['target'], 'default', 'value' => 0],
            [['is_public'], 'default', 'value' => 1],
            [['update_date'], 'default', 'value' => 'CURRENT_TIMESTAMP'],
            [['title', 'image'], 'required'],
            [['title'], 'default', 'value' => '-'],
            [['description'], 'string'],
            [['sort_order', 'is_public', 'target'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['title', 'subtitle'], 'string', 'max' => 255],
            [['image', 'link'], 'string', 'max' => 500],
        ];
    }

    /** {@inheritdoc} */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'subtitle' => 'Подзаголовок',
            'description' => 'Описание',
            'image' => 'Картинка',
            'link' => 'Ссылка',
            'sort_order' => 'Порядок очереди',
            'is_public' => 'Опубликовать',
            'target' => 'Открывать в новом окне',
            'create_date' => 'Дата создания',
            'update_date' => 'Дата обновления',
        ];
    }


    /** @var object $this->image */
    public function upload()
    {
        $dir = '/site/image/slideshow/';
        $file = UploadedFile::getInstance($this, 'image');
        if ($file && $file->tempName) {
            $this->image = $file;
            $fileName = $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs(Yii::getAlias('@frontendWeb').$dir.$fileName);
            $this->image = $dir.$fileName;
        }
    }

}
