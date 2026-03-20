<?php

namespace frontend\modules\auth\models;

use Yii;
use yii\base\Model;
use yii\helpers\Html;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user;

    public function rules()
    {
        return [
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
            [['email'], 'required', 'message' => 'Вы не ввели ваш E-mail'],
            [['password'], 'required', 'message' => 'Вы не ввели ваш пароль']
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Ваш e-mail',
            'password' => 'Пароль',
            'rememberMe' => 'Запомнить меня',
        ];
    }


    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user) {
                $this->addError('email', 'Пользователь не найден.');
                return;
            }

            if ($user->status == 3) {
                $this->addError('email', 'Ваш аккаунт заблокирован. '.Html::a('Подробнее', '/doc/block', ['target' => '_blank']));
                return;
            }

            if ($user->status == 9) {
                $this->addError('password', 'Вы ещё не активировали аккаунт.');
                return;
            }

            if (!$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Не верный пароль');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUserEmail($this->email);
        }

        return $this->_user;
    }
}
