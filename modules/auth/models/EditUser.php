<?php
namespace frontend\modules\auth\models;

use Yii;
use yii\base\Model;
use frontend\modules\auth\models\User;


class EditUser extends Model
{

    /** @var string */
    public $password;

    /** @var string */
    public $status;

    /** @var string */
    public $email;


    /** {@inheritdoc} */
    public function rules()
    {
        $min_lenght = Yii::$app->params['user.passwordMinLength'];
        return [
            ['status', 'required'],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Вы не указали электронную почту'],
            ['email', 'email', 'message' => 'Указанный адрес не является электронной почтой'],
            ['email', 'string', 'max' => 255],
            [
                'email', 
                'unique', 
                'targetClass' => '\frontend\modules\auth\models\User', 
                'message' => 'Этот адрес электронной почты уже занят.'
            ],
            ['password', 'required', 'message' => 'Придумайте пароль, не менее '.$min_lenght.' символов'],
            [
                'password', 
                'string', 
                'min' => $min_lenght,
                'tooShort' => 'Пароль не может быть меньше '.$min_lenght.' символов'
            ]
        ];
    }


    public function attributeLabels()
    {
        return [
            'email' => 'Ваш e-mail',
            'password' => 'Пароль',
            'status' => 'Статус пользователя'
        ];
    }


    public function update(int $id)
    {
        if (!$this->validate()) return null;
        $user = User::findOne(['id' => $id]);
        $user->setPassword($this->password);
        $user->email = $this->email;
        $user->status = $this->status;
        $user->save();
        // if ($user->save()) {
        //     $auth = \Yii::$app->authManager;
        //     $authorRole = $auth->getRole('user');
        //     $auth->assign($authorRole, $user->getId());
        // }
    }

}
