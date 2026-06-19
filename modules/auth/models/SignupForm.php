<?php

namespace frontend\modules\auth\models;

use Yii;
use yii\base\Model;
use frontend\modules\auth\models\User;


class SignupForm extends Model
{
    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        $min_lenght = Yii::$app->params['user.passwordMinLength'];
        return [
            ['username', 'trim'],
            ['username', 'required'],
            [
                'username', 
                'unique', 
                'targetClass' => '\frontend\modules\auth\models\User', 
                //'message' => 'This username has already been taken.'
            ],
            ['username', 'string', 'min' => 2, 'max' => 255],
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
            'username' => 'Ваше имя'
        ];
    }


    public function signup()
    {
        if (!$this->validate()) return null;
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        if ($user->save()) {
            $auth = \Yii::$app->authManager;
            $authorRole = $auth->getRole('user');
            $auth->assign($authorRole, $user->getId());
        }
        return $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->name])
            ->setTo($this->email)
            ->setSubject('Регистрация на ' . Yii::$app->name)
            ->send();
    }
}
